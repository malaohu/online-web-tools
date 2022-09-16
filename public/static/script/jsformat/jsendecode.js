        var a = 62;
        $("#BtnAddEval").click(function () {
            var code = $("#content").val();
            if (code != "") {
                encode();
            }
            else {
                pcjson_com_msg($("#content"), "请输入加密内容");
            }
        });
        $("#BtnClearEval").click(function () {
            var code = $("#content").val();
            if (code != "") {
                decode();
            }
            else {
                pcjson_com_msg($("#content"), "请输入解密内容");
            }
        });
        $("#BtnClear").click(function () {
            $("#content").val("");
           $("#result").html('');
        });
        function encode() {
            var code = $("#content").val();
            code = code.replace(/[\r\n]+/g, '');
            code = code.replace(/'/g, "\\'");
            var tmp = code.match(/\b(\w+)\b/g);
            tmp.sort();
            var dict = [];
            var i, t = '';
            for (var i = 0; i < tmp.length; i++) {
                if (tmp[i] != t) dict.push(t = tmp[i]);
            }
            var len = dict.length;
            var ch;
            for (i = 0; i < len; i++) {
                ch = num(i);
                code = code.replace(new RegExp('\\b' + dict[i] + '\\b', 'g'), ch);
                if (ch == dict[i]) dict[i] = '';
            }
            var rt = "eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\\\b'+e(c)+'\\\\b','g'),k[c]);return p}("
   + "'" + code + "'," + a + "," + len + ",'" + dict.join('|') + "'.split('|'),0,{}))";
			hightout(rt);
        }
        function num(c) {
            return (c < a ? '' : num(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36));
        }
        function decode() {
            var code = $("#content").val();
            if (code != "" && code.indexOf('eval') > -1) {
                code = code.replace(/^eval/, '');
                hightout(js_beautify(eval(code), 4, " "));
				
            }
            else {
                pcjson_com_msg($("#content"), "找不到符合条件的加密内容，无法解密");
            }
        } 


function CLASS_CONFUSION(code) {
    //哈希表类
    function Hashtable() {
        this._hash = new Object();
        this.add = function (key, value) {
            if (typeof (key) != "undefined") {
                if (this.contains(key) == false) {
                    this._hash[key] = typeof (value) == "undefined" ? null : value;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        this.remove = function (key) { delete this._hash[key]; }
        this.count = function () { var i = 0; for (var k in this._hash) { i++; } return i; }
        this.items = function (key) { return this._hash[key]; }
        this.contains = function (key) { return typeof (this._hash[key]) != "undefined"; }
        this.clear = function () { for (var k in this._hash) { delete this._hash[k]; } }

    }

    function VariableMap(parent) {
        this.table = new Hashtable();
        this.level = parent ? parent.level + 1 : 0;
        this.parent = parent;
        this.add = function (key, value) { this.table.add(key, value) };
        this.items = function (key) { return this.table.items(key) };
        this.count = function () { return this.table.count() };
        this.contains = function (key) { return this.table.contains(key); }
        this.isParameter = false;
    }

    this._caseSensitive = true;

    //字符串转换为哈希表
    this.str2hashtable = function (key, cs) {

        var _key = key.split(/,/g);
        var _hash = new Hashtable();
        var _cs = true;


        if (typeof (cs) == "undefined" || cs == null) {
            _cs = this._caseSensitive;
        } else {
            _cs = cs;
        }

        for (var i in _key) {
            if (_cs) {
                _hash.add(_key[i]);
            } else {
                _hash.add((_key[i] + "").toLowerCase());
            }

        }
        return _hash;
    }

    //获得需要转换的代码
    this._codetxt = code;

    if (typeof (syntax) == "undefined") {
        syntax = "";
    }

    this._deleteComment = false;
    //是否大小写敏感
    this._caseSensitive = true;
    //得到关键字哈希表
    this._keywords = this.str2hashtable("switch,case,delete,default,typeof,for,in,function,void,this,boolean,while,if,return,new,true,false,try,catch,throw,null,else,do,var");
    this._function = this.str2hashtable("function");
    this._var = "var";
    this._beginBlock = "{";
    this._endBlock = "}";

    this._window = this.str2hashtable("alert,escape,unescape,document,parseInt,parseFloat");
    //得到内建对象哈希表
    this._commonObjects = this.str2hashtable("String,Number,Boolean,RegExp,Error,Math,Date,Object,Array,Global");
    //得到分割字符
    this._wordDelimiters = "　 ,.?!;:\\/<>(){}[]\"'\r\n\t=+-|*%@#$^&";
    //引用字符
    this._quotation = this.str2hashtable("\",'");
    //行注释字符
    this._lineComment = "//";
    //转义字符
    this._escape = "\\";
    //多行引用开始
    this._commentOn = "/*";
    //多行引用结束
    this._commentOff = "*/";
    this._execute = "eval";
    //引用调用字符
    this._call = ".";
    this._varPause = "=";
    this._varContinue = ",";
    //变量个数
    this._varNum = 0;

    this.confusion = function () {
        var codeArr = new Array();
        var word_index = 0;
        var htmlTxt = new Array();


        //得到分割字符数组(分词)
        for (var i = 0; i < this._codetxt.length; i++) {

            if (this._wordDelimiters.indexOf(this._codetxt.charAt(i)) == -1) {        //找不到关键字
                if (codeArr[word_index] == null || typeof (codeArr[word_index]) == 'undefined') {
                    codeArr[word_index] = "";
                }
                codeArr[word_index] += this._codetxt.charAt(i);
            } else {
                if (typeof (codeArr[word_index]) != 'undefined' && codeArr[word_index].length > 0)
                    word_index++;
                codeArr[word_index++] = this._codetxt.charAt(i);
            }
        }


        var quote_opened = false;    //引用标记
        var slash_star_comment_opened = false;    //多行注释标记
        var slash_slash_comment_opened = false;    //单行注释标记
        var line_num = 1;        //行号
        var quote_char = "";        //引用标记类型
        var call_opened = false;
        var call_string = "";
        var var_opened = false;
        var var_pause = false;
        var function_opened = false;
        var parameter_opened = false;

        var var_map = new VariableMap();
        var cur_var_map = var_map;
        var execute_opened = false;

        //按分割字，分块显示
        for (var i = 0; i <= word_index; i++) {

            //单独处理指针引用
            if (call_opened && typeof (codeArr[i]) != "undefined") {
                if (call_string.length == 0) {
                    if (this.isVar(codeArr[i])) {
                        call_string += codeArr[i];
                    } else {
                        htmlTxt[htmlTxt.length] = "[\"" + this.toHex(call_string) + "\"]";
                        if (codeArr[i] != this._call) {
                            htmlTxt[htmlTxt.length] = codeArr[i];
                            call_opened = false;
                        }
                        call_string = "";
                    }
                } else {
                    if (!this.isVar(codeArr[i])) {
                        htmlTxt[htmlTxt.length] = "[\"" + this.toHex(call_string) + "\"]";
                        if (codeArr[i] != this._call) {
                            htmlTxt[htmlTxt.length] = codeArr[i];
                            call_opened = false;
                        }
                        call_string = "";
                    } else {
                        htmlTxt[htmlTxt.length] = "[\"" + this.toHex(call_string) + "\"]";
                    }
                }
                continue;
            }

            //处理空行（由于转义带来）
            if (typeof (codeArr[i]) == "undefined" || codeArr[i].length == 0) {
                continue;
            } else if (codeArr[i] == " ") {
                htmlTxt[htmlTxt.length] = " ";
            } else if (codeArr[i] == "\n") {
                //处理换行
            } else if (codeArr[i] == "\r") {
                slash_slash_comment_opened = false;
                quote_opened = false;
                var_opened = false;
                htmlTxt[htmlTxt.length] = "\r\n";
                line_num++;
                //处理function里的参数标记
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && this.isFunction(codeArr[i])) {
                htmlTxt[htmlTxt.length] = codeArr[i];
                function_opened = true;
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && codeArr[i] == "(") {
                htmlTxt[htmlTxt.length] = codeArr[i];
                if (function_opened == true) {
                    function_opened = false;
                    var_opened = true;
                    cur_var_map = new VariableMap(cur_var_map);
                    cur_var_map.isParameter = true;
                }
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && codeArr[i] == ")") {
                htmlTxt[htmlTxt.length] = codeArr[i];
                //处理var a = new Class(),b=new Date();类似的问题
                if (cur_var_map.isParameter) {
                    var_opened = false;
                    var_pause = false;
                }
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && codeArr[i] == ";") {
                htmlTxt[htmlTxt.length] = codeArr[i];
                var_opened = false;
                var_pause = false;
                if (execute_opened) {
                    execute_opened = false;
                }
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && codeArr[i] == this._var) {
                htmlTxt[htmlTxt.length] = codeArr[i];
                var_opened = true;
                var_pause = false;
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && codeArr[i] == this._varPause) {
                htmlTxt[htmlTxt.length] = codeArr[i];
                var_pause = true;
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && codeArr[i] == this._varContinue) {
                htmlTxt[htmlTxt.length] = codeArr[i];
                var_pause = false;
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && codeArr[i] == this._beginBlock) {
                cur_var_map = new VariableMap(cur_var_map);
                var_opened = false;
                htmlTxt[htmlTxt.length] = codeArr[i];
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && codeArr[i] == this._endBlock) {
                cur_var_map = cur_var_map.parent;
                if (cur_var_map.isParameter) {
                    cur_var_map = cur_var_map.parent;
                }
                htmlTxt[htmlTxt.length] = codeArr[i];
                //处理引用调用
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && codeArr[i] == this._call) {
                //判断引用(.)后面第一个是否为字母货_$
                if (i < word_index - 1) {
                    if (this.isVar(codeArr[i + 1])) {
                        if (call_opened) {
                            htmlTxt[htmlTxt.length] = this.toHex(call_string);
                        }
                        call_opened = true;
                    } else {
                        htmlTxt[htmlTxt.length] = this._call;
                    }
                } else {
                    htmlTxt[htmlTxt.length] = this._call;
                }
                //处理关键字
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && this.isKeyword(codeArr[i])) {
                htmlTxt[htmlTxt.length] = codeArr[i];
                //处理eval后的字符串
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && codeArr[i] == this._execute) {
                htmlTxt[htmlTxt.length] = "window[\"" + this.toHex(codeArr[i]) + "\"]";
                execute_opened = true;
                //window内置对象
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && this.isWindow(codeArr[i])) {
                htmlTxt[htmlTxt.length] = "window[\"" + this.toHex(codeArr[i]) + "\"]";
                //处理普通对象
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && this.isCommonObject(codeArr[i])) {
                htmlTxt[htmlTxt.length] = "window[\"" + this.toHex(codeArr[i]) + "\"]";
                //处理双引号（引号前不能为转义字符）    
            } else if (!slash_star_comment_opened && !slash_slash_comment_opened && this._quotation.contains(codeArr[i])) {
                if (quote_opened) {
                    //是相应的引号
                    if (quote_char == codeArr[i]) {
                        htmlTxt[htmlTxt.length] = codeArr[i];
                        quote_opened = false;
                        quote_char = "";
                    } else {
                        htmlTxt[htmlTxt.length] = this.toHex(codeArr[i]);
                    }
                } else {
                    htmlTxt[htmlTxt.length] = codeArr[i];
                    quote_opened = true;
                    quote_char = codeArr[i];
                }
                //处理转义字符
            } else if (codeArr[i] == this._escape) {
                htmlTxt[htmlTxt.length] = codeArr[i];
                if (i < word_index - 1) {
                    if (codeArr[i + 1].charCodeAt(0) >= 32 && codeArr[i + 1].charCodeAt(0) <= 127) {
                        htmlTxt[htmlTxt.length] = codeArr[i + 1].substr(0, 1);
                        htmlTxt[htmlTxt.length] = this.toHex(codeArr[i + 1].substr(1));
                        i = i + 1;
                    }
                }
                //处理多行注释的开始
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && this.isStartWith(this._commentOn, codeArr, i)) {
                slash_star_comment_opened = true;
                htmlTxt[htmlTxt.length] = this._commentOn;
                i = i + this.getSkipLength(this._commentOn);
                //处理单行注释
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && this.isStartWith(this._lineComment, codeArr, i)) {
                slash_slash_comment_opened = true;
                if (!this._deleteComment) {
                    htmlTxt[htmlTxt.length] = this._lineComment;
                }
                i = i + this.getSkipLength(this._lineComment);
                //处理忽略词
            } else if (!slash_slash_comment_opened && !slash_star_comment_opened && !quote_opened && this.isStartWith(this._ignore, codeArr, i)) {
                slash_slash_comment_opened = true;
                htmlTxt[htmlTxt.length] = this._ignore;
                i = i + this.getSkipLength(this._ignore);
                //处理多行注释结束    
            } else if (!quote_opened && !slash_slash_comment_opened && this.isStartWith(this._commentOff, codeArr, i)) {
                if (slash_star_comment_opened) {
                    slash_star_comment_opened = false;
                    if (!this._deleteComment) {
                        htmlTxt[htmlTxt.length] = this._commentOff;
                    }
                    i = i + this.getSkipLength(this._commentOff);
                }
            } else {
                //不是在字符串中
                if (!quote_opened) {
                    //如果不是在注释重
                    if (!slash_slash_comment_opened && !slash_star_comment_opened) {
                        //不是在定义变量时
                        if (!var_opened) {
                            if (this.translateVar(cur_var_map, codeArr[i]) == "") {
                                htmlTxt[htmlTxt.length] = codeArr[i];
                            } else {
                                htmlTxt[htmlTxt.length] = this.translateVar(cur_var_map, codeArr[i]);
                            }
                        } else {
                            //不是在暂停变量定义时
                            if (var_pause) {
                                if (this.translateVar(cur_var_map, codeArr[i]) == "") {
                                    htmlTxt[htmlTxt.length] = codeArr[i];
                                } else {
                                    htmlTxt[htmlTxt.length] = this.translateVar(cur_var_map, codeArr[i]);
                                }
                            } else {
                                //变量符合命名规则，并且（变量前为空格或制表符或逗号如：var a;var    a;var a,b;，还有如果是函数参数,如：function(a,b,c)
                                if (this.isVar(codeArr[i]) && (i > 0 && codeArr[i - 1] == " " || codeArr[i - 1] == "\t" || codeArr[i - 1] == this._varContinue || cur_var_map.isParameter)) {
                                    var name = this.getRandName();
                                    cur_var_map.add(codeArr[i], name);
                                    htmlTxt[htmlTxt.length] = this.translateVar(cur_var_map, codeArr[i]);
                                } else {
                                    htmlTxt[htmlTxt.length] = codeArr[i];
                                }
                            }
                        }
                        //注释中                            
                    } else {
                        if (!this._deleteComment) {
                            htmlTxt[htmlTxt.length] = codeArr[i];
                        }
                    }
                } else {
                    if (execute_opened) {
                        if (this.translateVar(cur_var_map, codeArr[i]) == "") {
                            htmlTxt[htmlTxt.length] = codeArr[i];
                        } else {
                            htmlTxt[htmlTxt.length] = this.translateVar(cur_var_map, codeArr[i]);
                        }
                    } else {
                        htmlTxt[htmlTxt.length] = this.toHex(codeArr[i]);
                    }
                }
            }

        }

        return htmlTxt.join("");
    }

    this.isStartWith = function (str, code, index) {

        if (typeof (str) != "undefined" && str.length > 0) {
            var cc = new Array();
            for (var i = index; i < index + str.length; i++) {
                cc[cc.length] = code[i];
            }
            var c = cc.join("");
            if (this._caseSensitive) {
                if (str.length >= code[index].length && c.indexOf(str) == 0) {
                    return true;
                }
            } else {
                if (str.length >= code[index].length && c.toLowerCase().indexOf(str.toLowerCase()) == 0) {
                    return true;
                }
            }
            return false;

        } else {
            return false;
        }
    }

    this.isFunction = function (val) {
        return this._function.contains(this._caseSensitive ? val : val.toLowerCase());
    }

    this.isKeyword = function (val) {
        return this._keywords.contains(this._caseSensitive ? val : val.toLowerCase());
    }

    this.isWindow = function (val) {
        return this._window.contains(this._caseSensitive ? val : val.toLowerCase());
    }

    this.isCommonObject = function (val) {
        return this._commonObjects.contains(this._caseSensitive ? val : val.toLowerCase());
    }

    this.getSkipLength = function (val) {
        var count = 0;
        for (var i = 0; i < val.length; i++) {
            if (this._wordDelimiters.indexOf(val.charAt(i)) >= 0) {
                count++;
            }
        }
        if (count > 0) {
            count = count - 1;
        }
        return count;
    }

    //字符串转换为16进制形式
    this.toHex = function (val) {
        var str = new Array();
        for (var i = 0; i < val.length; i++) {
            var c = val.charCodeAt(i);
            if (c >= 0 && c < 256) {
                str[str.length] = "\\x" + val.charCodeAt(i).toString(16);
            } else {
                str[str.length] = "\\u" + val.charCodeAt(i).toString(16);
            }
        }
        return str.join("");
    }

    //获得变量随机名
    this.getRandName = function () {
        var style = parseInt(Math.random() * 4);
        var len = parseInt(Math.random() * 9) + 1;
        var n = [];

        this._varNum++;
        var c = "abcdefghijklmnopqrstuvwsyzABCDEFGHIJKLMNOPQRSTUVWXYZ_$";

        for (var i = 0; i < len; i++) {
            n[n.length] = c.charAt(parseInt(Math.random() * 54));
        }

        return n.join("") + this._varNum;

    }

    //是否符合变量命名字首规则
    this.isVar = function (val) {
        return /^[a-zA-Z_\$].*$/.test(val);
    }

    //翻译变量，如果返回为空则不存在此变量
    this.translateVar = function (node, key) {
        if (node.contains(key)) {
            return node.items(key);
        }

        var cn = node.parent;
        while (cn != null) {
            if (cn.contains(key)) {
                return cn.items(key);
            }
            cn = cn.parent;
        }
        return "";
    }


}

function doConfusion(o) {
    var htmltxt = "";

    if (o == null) {
        alert("domNode is null!");
        return;
    }

    var _codetxt = "";

    if (typeof (o) == "object") {
        switch (o.tagName) {
            case "TEXTAREA":
            case "INPUT":
                _codetxt = o.value;
                break;
            case "DIV":
            case "SPAN":
                _codetxt = o.innerText;
                break;
            default:
                _codetxt = o.innerHTML;
                break;
        }
    } else {
        _codetxt = o;
    }

    var _syn = new CLASS_CONFUSION(_codetxt);
    htmltxt = _syn.confusion();
    return htmltxt;
}
 $("#BtnCon").click(function () {
		var code = $("#content").val();
		if (code != "") {
			var xx = new CLASS_CONFUSION(code);
			var a = new Date();
			hightout(xx.confusion());
		}
		else {
			pcjson_com_msg($("#content"), "请输入混淆加密内容");
		}
	});
	$("#BtnClear").click(function () {
		$("#content").val("");
		hightout("");
	});
	