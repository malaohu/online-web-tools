function jsonzip(ii) {
    var txtA = document.getElementById("content");
    var text = txtA.value;
    if ((ii == 1 || ii == 3)) {
        text = text.split("\n").join(" ");
        var t = [];
        var inString = false;
        for (var i = 0, len = text.length; i < len; i++) {
            var c = text.charAt(i);
            if (inString && c === inString) {
                if (text.charAt(i - 1) !== '\\') {
                    inString = false;
                }
            } else if (!inString && (c === '"' || c === "'")) {
                inString = c;
            } else if (!inString && (c === ' ' || c === "\t")) {
                c = '';
            }
            t.push(c);
        }
        text = t.join('');
    }
    if ((ii == 2 || ii == 3)) {
        text = text.replace(/\\/g, "\\\\").replace(/\"/g, "\\\"");
    }
    if (ii == 4) {
        text = text.replace(/\\\\/g, "\\").replace(/\\\"/g, '\"');
    }
    txtA.value = text;
}
String.prototype.trim = function () {
    return this.replace(/(^\s*)|(\s*$)/g, '');
}
var GB2312UnicodeConverter = {
    ToUnicode: function (str) {
        var txt = escape(str).toLocaleLowerCase().replace(/%u/gi, '\\u');
        return txt.replace(/%7b/gi, '{').replace(/%7d/gi, '}').replace(/%3a/gi, ':').replace(/%2c/gi, ',').replace(/%27/gi, '\'').replace(/%22/gi, '"').replace(/%5b/gi, '[').replace(/%5d/gi, ']');
    }
			  , ToGB2312: function (str) {
			      return unescape(str.replace(/\\u/gi, '%u'));
			  }
};
function u2h() {
    var txtA = document.getElementById("content");
    var text = txtA.value;
    text = text.trim();
    txtA.value = GB2312UnicodeConverter.ToGB2312(text);
}
function h2u() {
    var txtA = document.getElementById("content");
    var text = txtA.value;
    text = text.trim();
    txtA.value = GB2312UnicodeConverter.ToUnicode(text);
}
function JsonToGet(type) {
	var sstr = $("#content").val();
	if (type == 1) {
		sstr = sstr.replace(/\t/g, "");
		sstr = sstr.replace(/\"/g, "").replace("{", "").replace("}", "").replace(",", "&").replace(":", "=");
		sstr = sstr.replace(/\"/g, "").replace(/{/g, "").replace(/}/g, "").replace(/,/g, "&").replace(/:/g, "=");
	} else {
		sstr = sstr.replace(/&/g, '","').replace(/;/g, '","').replace(/=/g, '":"');
		sstr = '{"' + sstr + '"}';
	}
	$("#content").val(sstr);
}