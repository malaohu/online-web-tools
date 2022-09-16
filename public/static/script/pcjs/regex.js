function setVisible(idElement, visible) {
    var obj = document.getElementById(idElement);
    obj.style.visibility = visible ? "visible" : "hidden";
}
function isValidFields() {
    var textSource = document.getElementById("textSource");
    if (null == textSource.value || textSource.value.length < 1) {
        textSource.focus();
        pcjson_com_msg($("#textSource"), "请输入待匹配文本");
        return false;
    }
    var textPattern = document.getElementById("textPattern");
    if (null == textPattern.value || textPattern.value.length < 1) {
        textPattern.focus();
        pcjson_com_msg($("#textPattern"), "请输入正则表达式");
        return false;
    }
    return true;
}
function buildRegex() {
    var op = "";
    if (document.getElementById("optionGlobal").checked) op = "g";
    if (document.getElementById("optionIgnoreCase").checked) op = op + "i";
    return new RegExp(document.getElementById("textPattern").value, op);
}
function onMatch() {
    if (!isValidFields())
        return false;
    document.getElementById("textMatchResult").value = "";
    var regex = buildRegex();
    var result = document.getElementById("textSource").value.match(regex);
    if (null == result || 0 == result.length) {
        document.getElementById("textMatchResult").value = "（没有匹配）";
        return false;
    }
    if (document.getElementById("optionGlobal").checked) {
        var strResult = "共找到 " + result.length + " 处匹配：\r\n";
        for (var i = 0; i < result.length; ++i) strResult = strResult + result[i] + "\r\n";
        document.getElementById("textMatchResult").value = strResult;
    }
    else {
        document.getElementById("textMatchResult").value = "匹配位置：" + regex.lastIndex + "\r\n匹配结果：" + result[0];
    }
    return true;
}
function onReplace() {
    var str = document.getElementById("textSource").value;
    var regex = buildRegex();
    document.getElementById("textReplaceResult").value = str.replace(regex, document.getElementById("textReplace").value);
}
function reset() {
    $("#textSource").val("");
    $("#textPattern").val("");
    $("#textMatchResult").val("");
    $("#textReplace").val("");
    $("#textReplaceResult").val("");
}
$("#regCommon a").click(function () {
    $("#textPattern").val($(this).attr("t"));
    onMatch();
});
function Empty() {
    $("#textSource").val("");
    $("#textMatchResult").val("");
    $("#textReplace").val("");
    $("#textReplaceResult").val("");
    $("#textSource").select();
}