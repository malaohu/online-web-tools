function textDiff() {
    var base = difflib.stringAsLines($("#baseText").val());
    var newtxt = difflib.stringAsLines($("#newText").val());
    if (base == "") {
        pcjson_com_msg($("#baseText"), "请输入基础文本内容");
        return false;
    }
    if (newtxt == "") {
        pcjson_com_msg($("#newText"), "请输入对比文本内容");return false;
    }
    var sm = new difflib.SequenceMatcher(base, newtxt);
    var opcodes = sm.get_opcodes();
    $("#diffoutput").html(diffview.buildView({
        baseTextLines: base,
        newTextLines: newtxt,
        opcodes: opcodes,
        baseTextName: "基础文本",
        newTextName: "对比文本",
        contextSize: "",
        viewType: 0
    }));
}
function Empty() {
    $("#baseText").val("");
    $("#newText").val("");
    $("#diffoutput").html("");
    $("#baseText").select();
}