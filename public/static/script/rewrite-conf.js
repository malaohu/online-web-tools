// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
var RewriteConf = {
    convert: function (content) {
        var Fn = function(){};
        Fn.prototype = RewriteConf;
        var converter = new Fn;
        var configs = converter._parseContent(content);

        return converter._writeConfig(configs);
    },

    _parseLine: function (line) {
        var lineArray = line.split(" ");
        var regex = lineArray.length > 1 ? this._trimLine(lineArray[1]) : '',
            rew = lineArray.length > 2 ? this._trimLine(lineArray[2]) : '',
            flags = lineArray.length > 3 ? this._trimLine(lineArray[3]) : '';

        var flagsArray = [];
        if (flags) {
            flagsArray = flags.substr(flags.indexOf('[') + 1).substr(0, flags.indexOf(']') - 1).split(",")
            for (var i = 0; i < flagsArray.length; i++) {
                flagsArray[i] = this._trimLine(flagsArray[i]);
            }
        }

        return [regex, rew, flagsArray];
    },

    _readRules: function (content) {
        var lines = content.split("\n");
        var conds = [], rules = [];

        for (var i = 0; i < lines.length; i++) {
            var line = this._trimLine(lines[i]);
            if (!line || line.charAt(0) == '#') {
                continue;
            }
            var parsedLine = this._parseLine(line);

            if (line.indexOf("RewriteCond") > -1) {
                conds.push({
                    'match': parsedLine[0],
                    'rule': parsedLine[1],
                    'flags': parsedLine[2]
                });
            }

            if (line.indexOf("RewriteRule") > -1) {
                var condBit = (conds.length > 0
                    && conds[0]["flags"] instanceof Array
                    && conds[0]["flags"].indexOf('OR') > -1
                    ) ? 'OR' : 'AND';
                rules.push({
                    'rule': {
                        'regex': parsedLine[0],
                        'rew': parsedLine[1],
                        'flags': parsedLine[2]
                    },
                    'condBit': condBit,
                    'conditions': conds
                });
                conds = [];
            }
        }

        return rules;
    },

    _parseFlags: function (flagArray, type, r, c) {
        //type: 0 -> rule 1-> condition
        var returnArray = {
            'return': 0, // 0|return code
            'break': 0, //  0|1
            'appendEnd': '', // last|permanent|redirect|break
            'env': [], // var=value
            'matchOperator': '~', // ~*|~
            'unknown': 0, // 0|1
            'set': [] // key:var
        };

        for (var i = 0; i < flagArray.length; i++) {
            var flag = flagArray[i];
            switch (flag.charAt(0)) {
                case 'N':
                case 'n':
                    returnArray["matchOperator"] = '~*';
                    if ('undefined' == typeof returnArray["unknown"]) {
                        returnArray["unknown"] = 0;
                    }
                    break;
                case 'F':
                case 'f':
                    returnArray["return"] = 403;
                    returnArray["break"] = 1;
                    if ('undefined' == typeof returnArray["unknown"]) {
                        returnArray["unknown"] = 0;
                    }
                    break;
                case 'G':
                case 'g':
                    returnArray["return"] = 410;
                    returnArray["break"] = 1;
                    if ('undefined' == typeof returnArray["unknown"]) {
                        returnArray["unknown"] = 0;
                    }
                    break;
                case 'R':
                case 'r':
                    var flagOptions = flag.split("=");
                    var rcode = flagOptions[1];
                    if (rcode == '301' || rcode == 'permanent') {
                        returnArray["appendEnd"] = 'permanent';
                    } else {
                        returnArray["appendEnd"] = 'redirect';
                    }
                    returnArray["break"] = 1;
                    if ('undefined' == typeof returnArray["unknown"]) {
                        returnArray["unknown"] = 0;
                    }
                    break;
                case 'L':
                case 'l':
                    if (!returnArray["appendEnd"]) {
                        returnArray["appendEnd"] = 'last';
                    }
                    if ('undefined' == typeof returnArray["unknown"]) {
                        returnArray["unknown"] = 0;
                    }
                    break;
                case 'E':
                case 'e':
                    var flagOptions = flag.split("=");
                    var envVar = flagOptions[1];
                    returnArray["env"].push(envVar);
                    break;
                case 'O':
                case 'o':
                    returnArray["set"].push('$rule_' + r + ' 1');
                    break;
                case 'A':
                    returnArray["set"].push('$rule_' + r + ' ' + (c + 1) + '$rule_' + r);
                    break;
            }
        }

        if (flagArray.length > 1) {
            if ('undefined' == typeof returnArray["unknown"]) {
                returnArray["unknown"] = 1;
            }
        } else {
            returnArray["unknown"] = 0;
        }

        return returnArray;
    },

    _parseCondMatch: function (condition, r, c, condBit) {
        var matchOperator = '~';
        var noMatch = '';

        if (condition["rule"].charAt(0) == '!') {
            noMatch = '!';
            condition["rule"] = condition["rule"].substr(1);
        }

        condition["flags"].push(condBit);
        condition["flags"] = this._arrayUnique(condition["flags"]);

        var fromFlags = this._parseFlags(condition["flags"], 1, r, c);

        if (fromFlags["matchOperator"]) {
            matchOperator = fromFlags["matchOperator"];
        }

        var left, right, operand;
        switch (condition["rule"]) {
            case "-f":
            case "-F":
                left = noMatch + '-f';
                right = condition["match"];
                operand = '';
                break;
            case "-d":
                left = noMatch + '-d';
                right = condition["match"];
                operand = '';
                break;
            case "-s":
                left = noMatch + '-e';
                right = condition["match"];
                operand = '';
                break;
            default:
                left = condition["match"];
                right = condition["rule"];
                operand = noMatch + matchOperator;
        }

        return {
            'left': left,
            'right': right,
            'operand': operand,
            'flags': fromFlags
        };
    },

    _parseRewriteCond: function (rule, r) {
        var condResult = [];
        for (var i = 0; i < rule["conditions"].length; i++) {
            var condition = rule["conditions"][i];
            condResult.push(this._parseCondMatch(condition, r, i, rule["condBit"]));
        }

        return condResult;
    },

    _mustSkipForCond: function (conditions) {
        if (conditions.length == 0) {
            return 0;
        } else if (conditions.length == 1) {
            if (conditions[0]["flags"]["unknown"] == 1) {
                return "skipped because all flags in condition are unknown";
            }
            return 0;
        } else {
            var unknown = 0;
            for (var i = 0; i < conditions.length; i++) {
                if (conditions[i]["flags"]["unknown"] == 1) {
                    unknown++;
                }
            }

            if (conditions.length == unknown) {
                return "skipped because all flags for all conditions are unknown";
            }
            return 0;
        }
    },

    _setBackRef: function (rule, condsParsed) {
        var totalMatches = [];
        for (var i = 0; i < 10; i++) {
            var regExp = new RegExp('\%' + i);

            if (regExp.test(rule["rule"]["regex"])) {
                rule["rule"]["regex"] = rule["rule"]["regex"].replace(regExp, '$bref_' + i);
                totalMatches.push(i);
            }

            if (regExp.test(rule["rule"]["rew"])) {
                rule["rule"]["rew"] = rule["rule"]["rew"].replace(regExp, '$bref_' + i);
                totalMatches.push(i);
            }

            for (var j = 0; j < rule["rule"]["flags"].length; j++) {
                if (regExp.test(rule["rule"]["flags"][j])) {
                    rule["rule"]["flags"][j] = rule["rule"]["flags"][j].replace(regExp, '$bref_' + i);
                    totalMatches.push(i);
                }
            }
        }

        totalMatches = this._arrayUnique(totalMatches);

        for (var m = 0; m < totalMatches; m++) {
            var match = totalMatches[m];

            if (rule["condBit"] == 'OR') {
                for (var k = 0; k < condsParsed.length; k++) {
                    condsParsed[k]["flags"]["set"].push('$bref_' + match + ' $' + match);
                }
            } else {
                condsParsed[condsParsed.length - 1]["flags"]["set"].push('$bref_' + match + ' $' + match);
            }
        }

        return {'rule': rule, 'condsParsed': condsParsed};
    },

    _parseRule: function (rule, c) {
        if (rule["rule"]["regex"].charAt(0) == '^') {
            if (rule["rule"]["regex"].charAt(1) != '/') {
                rule["rule"]["regex"] = '^/' + rule["rule"]["regex"].substr(1);
            }
        } else {
            if (rule["rule"]["regex"].charAt(0) != '/') {
                rule["rule"]["regex"] = '/' + rule["rule"]["regex"];
            }
        }

        if (rule["rule"]["rew"].charAt(0) == '^' && rule["rule"]["rew"].substr(0, 4) != 'http') {
            if (rule["rule"]["rew"].charAt(1) != '/') {
                rule["rule"]["rew"] = '^/' + rule["rule"]["rew"].substr(1);
            }
        } else {
            if (rule["rule"]["rew"].charAt(0) != '/' && rule["rule"]["rew"].substr(0, 4) != 'http') {
                rule["rule"]["rew"] = '/' + rule["rule"]["rew"];
            }
        }

        if (rule["rule"]["rew"] == '/-') {
            delete rule["rule"]["rew"];
            delete rule["rule"]["regex"];
        }

        if (c != 0) {
            if (rule["condBit"] == 'OR') {
                rule["rule"]["trueExp"] = '1';
            } else {
                var i = 0, backme = '';
                while (i < c) {
                    backme = (i + 1) + backme;
                    i++;
                }
                rule["rule"]["trueExp"] = backme;
            }
        }

        return rule;
    },

    _replaceVariables: function (val, key) {
        var oldVal = val;

        var httpPat = /%\{HTTP:(.*)\}/g;
        if (httpPat.test(val)) {
            val = val.replace(httpPat, function(match, param) {
                return '$http_' + param.toLowerCase().replace('-', '_');
            });
        }

        var pat = [
            '%{HTTP_USER_AGENT}',
            '%{HTTP_REFERER}',
            '%{HTTP_COOKIE}',
            '%{HTTP_FORWARDED}',
            '%{HTTP_HOST}',
            '%{HTTP_PROXY_CONNECTION}',
            '%{HTTP_ACCEPT}',
            '%{REMOTE_ADDR}',
            '%{REMOTE_PORT}',
            '%{REMOTE_USER}',
            '%{REQUEST_METHOD}',
            '%{SCRIPT_FILENAME}',
            '%{PATH_INFO}',
            '%{QUERY_STRING}',
            '%{DOCUMENT_ROOT}',
            '%{SERVER_NAME}',
            '%{SERVER_ADDR}',
            '%{SERVER_PORT}',
            '%{SERVER_PROTOCOL}',
            '%{REQUEST_URI}',
            '%{REQUEST_FILENAME}'
        ];

        var rep = [
            '$http_user_agent',
            '$http_referer',
            '$http_cookie',
            '$http_forwarded',
            '$http_host',
            '$http_proxy_connection',
            '$http_accept',
            '$remote_addr',
            '$remote_port',
            '$remote_user',
            '$request_method',
            '$uri',
            '$uri',
            '$args',
            '$document_root',
            '$server_name',
            '$server_addr',
            '$server_port',
            '$server_protocol',
            '$uri',
            '$request_filename'
        ];

        for (var i = 0; i < pat.length; i++) {
            if ('string' == typeof val) {
                val = val.replace(pat[i], rep[i]);
            }
        }

        if (oldVal == val && /%\{(.*)\}/i.test(val)) {
            val = "IGNORE";
        }

        return val;
    },

    _writeConfig: function (configs) {
        var result = "";

        for (var i = 0; i < configs.length; i++) {
            var conf = configs[i];

            if (conf instanceof Object) {
                conf = this._walkRecursive(conf, this._replaceVariables);

                var isReturned = null;
                if (conf["conds"] instanceof Object) {
                    for (var j = 0; j < conf["conds"].length; j++) {
                        var cond = conf["conds"][j];

                        if (cond["flags"]["unknown"] != 1 && cond["left"] && cond["right"]) {
                            if (cond["operand"] == '') {
                                result += 'if (' + cond["left"] + ' ' + cond["right"] + '){' + "\n";
                            } else {
                                result += 'if (' + cond["left"] + ' ' + cond["operand"] + ' "' + cond["right"] + '"){' + "\n";
                            }

                            for (var s = 0; s < cond["flags"]["set"].length; s++) {
                                result += '    set ' + cond["flags"]["set"][s] + ';' + "\n";
                            }

                            for (var e = 0; e < cond["flags"]["env"].length; e++) {
                                result += '    setenv ' + cond["flags"]["env"][e] + ';' + "\n";
                            }

                            if (conf["condBit"] == 'OR') {
                                if (conf["rule"]["flags"]["return"] > 0) {
                                    result += '    return ' + conf["rule"]["flags"]["return"] + ';' + "\n";
                                    isReturned = 1;
                                }
                                if (conf["rule"]["flags"]["break"] == 1) {
                                    result += '    break;' + "\n";
                                }
                            }
                            result += '}' + "\n";

                        } else {
                            conf["rule"]["trueExp"] = conf["rule"]["trueExp"].replace(new RegExp(j, 'g'), '');
                            result += '#ignored: condition ' + j + "\n";
                        }
                    }
                }

                if (null == isReturned) {
                    if (conf["rule"]["flags"]["unknown"] != 1) {

                        if (conf["rule"]["trueExp"]) {
                            result += 'if ($rule_' + i + ' = "' + conf["rule"]["trueExp"] + '"){' + "\n";
                        }

                        if (conf["rule"]["flags"]["return"] < 1) {
                            for (var s = 0; s < conf["rule"]["flags"]["set"].length; s++) {
                                result += '    set ' + conf["rule"]["flags"]["set"][s] + ';' + "\n";
                            }

                            for (var e = 0; e < conf["rule"]["flags"]["env"].length; e++) {
                                result += '    setenv ' + conf["rule"]["flags"]["env"][e] + ';' + "\n";
                            }

                            if (conf["rule"]["regex"] && conf["rule"]["rew"]) {
                                if (conf["rule"]["flags"]["appendEnd"]) {
                                    conf["rule"]["flags"]["appendEnd"] = ' ' + conf["rule"]["flags"]["appendEnd"];
                                }
                                result += ' rewrite ' + conf["rule"]["regex"] + ' ' + conf["rule"]["rew"] + '' + conf["rule"]["flags"]["appendEnd"] + ';' + "\n";
                            } else {
                                result += '#ignored: "-" thing used or unknown variable in regex/rew' + "\n";
                            }
                        } else {
                            result += '    return ' + conf["rule"]["flags"]["return"] + ';' + "\n";
                            if (conf["rule"]["flags"]["break"] == 1) {
                                result += '    break;' + "\n";
                            }
                        }

                        if (conf["rule"]["trueExp"]) {
                            result += '}' + "\n";
                        }
                    } else {
                        result += '#ignored: unknown variable in rule flag' + "\n";
                    }
                }
            } else {
                result += conf + "\n";
            }
        }

        return result;
    },

    _parseContent: function (content) {
        var rules = this._readRules(content);
        var configs = [];
        var beforeMscr, mscr;

        for (var i = 0; i < rules.length; i++) {
            var rule = rules[i];
            var condsParsed = this._parseRewriteCond(rule, i);
            var curConf = {};
            beforeMscr = mscr;
            if ((mscr = this._mustSkipForCond(condsParsed)) != 0) {
                curConf["conds"] = mscr;
                curConf["rule"] = mscr;
            } else {
                if (beforeMscr != 0) {
                    //set last|break to before rule if any
                }
                var backRef = this._setBackRef(rule, condsParsed);
                rule = backRef.rule;
                condsParsed = backRef.condsParsed;

                rule["rule"]["flags"] = this._parseFlags(rule["rule"]["flags"], 0, i, 0);
                rule = this._parseRule(rule, condsParsed.length);
                curConf["conds"] = condsParsed;
                curConf["rule"] = rule["rule"];
            }
            curConf["condBit"] = rule["condBit"];
            configs.push(curConf);
        }

        return configs;
    },

    _walkRecursive: function (input, callback, userData) {
        userData = userData || "";

        var result;
        if (input instanceof Array) {
            result = [];
            for (var i = 0; i < input.length; i++) {
                var value = input[i];
                if (value instanceof Object) {
                    value = this._walkRecursive(value, callback, userData);
                } else {
                    value = callback.apply(this, [value, i, userData]);
                }

                if ('IGNORE' == value) {
                    continue;
                }
                result.push(value);
            }
        } else if (input instanceof Object) {
            result = {};
            for (var i in input) {
                var value = input[i];
                if (value instanceof Object) {
                    value = this._walkRecursive(value, callback, userData);
                } else {
                    value = callback.apply(this, [value, i, userData]);
                }

                if ('IGNORE' == value) {
                    continue;
                }
                result[i] = value;
            }
        }

        return result;
    },

    _arrayUnique: function (source) {
        var result = [];
        for (var i = 0; i < source.length; i++) {
            if (result.indexOf(source[i]) == -1) {
                result.push(source[i]);
            }
        }

        return result;
    },

    _trimLine: function (str) {
        return str.replace(/^\s+|\s+$/g, '');
    }
};
