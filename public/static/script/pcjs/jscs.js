String.prototype.format = function () {
    var args = arguments;
    return this.replace(/\{(\d+)\}/g,
				function (m, i) {
				    return args[i];
				});
}

String.prototype.trim = function () {
    return this.replace(/(^\s*)|(\s*$)/g, "");
}

JSON2CSharp = {
    _allClass: [],
    _genClassCode: function (obj, name) {
        var clas = "public class {0}\r\n{\r\n".format(name || "Root");
        for (var n in obj) {
            var v = obj[n];
            n = n.trim();
            clas += "    {0}    public {1} {2} { get; set; }\r\n\r\n".format(this._genComment(v), this._genTypeByProp(n, v), n);
        }
        clas += "}\r\n\r\n";
        this._allClass.push(clas);
        return this._allClass.join("\r\n\r\n");
    },
    _genTypeByProp: function (name, val) {
        switch (Object.prototype.toString.apply(val)) {
            case "[object Number]":
                {
                    return val.toString().indexOf(".") > -1 ? "double" : "int";
                }
            case "[object Date]":
                {
                    return "DateTime";
                }
            case "[object Object]":
                {
                    name = name.substring(0, 1).toUpperCase() + name.substring(1);
                    this._genClassCode(val, name);
                    return name;
                }
            case "[object Array]":
                {
                    return "List <{0} >".format(this._genTypeByProp(name + "Item", val[0]));
                }
            default:
                {
                    return "string";
                }
        }
    },
    _genComment: function (val) {
        var commm = typeof (val) == "string" && /.*[\u4e00-\u9fa5]+.*$/.test(val) ? val : "";
        return "/// <summary>\r\n    /// " + commm + "\r\n    /// </summary>\r\n";
    },
    convert: function (jsonObj) {
        this._allClass = [];
        return this._genClassCode(jsonObj);
    }
}
function startConvert() {
    try {
        $("#codeall").css("display", "none");
        var v = eval("(" + document.getElementById("jsonStr").value + ")");
       // document.getElementById("result").className = "prettyprint";
        var r = JSON2CSharp.convert(v).toString();
		hightout(r);
        document.getElementById("jsonStr").focus();
    } catch (e) {
        $("#codeall").css("display", "block");
        $("#errdiv").html("输入的JSON数据格式不正确：" + e.message);
    }
}
function Empty() {
    document.getElementById("jsonStr").value = "";
    $("#class").html("<br>");
    document.getElementById("jsonStr").select();
}