$("#testcase").click(function () {
    $("#content").val('[\n\t{"id":"1","title":"pcjson","url":"www.pcjson.com"},\n\t{"id":"2","title":"pcjson","url":"www.pcjson.com"}\n]');
});
function c(t, o) {
    $("#ctype").val(t);
    $("#sels").text($(o).text());
}
var fgf = ",";
function ctyperow() {
    if ($("#fgfstr").val() == "") {
        fgf = ",";
    }
    fgf = $("#fgfstr").val() || fgf;
    var instr = $("#content").val();
    var pcjson = JSON.parse(instr);
    if (pcjson.length < 1) {
        pcjson_com_msg($("#changebtn"), "数组小于一行数据");
        return;
    }
    var titles = new Array();
    for (var key in pcjson[0]) {
        titles.push(key);
    }
    var values = new Array();
    for (var i = 0, l = pcjson.length; i < l; i++) {
        var value = new Array();
        for (var key in pcjson[i]) {

            value.push(pcjson[i][key]);
        }
        values.push(value);
    }

    var html = '';
    html += titles.join(fgf) + "\n"
    for (var i = 0; i < values.length; i++) {
        html += values[i].join(fgf) + "\n";
    }
    hightout(html);
}

$("#download").click(function () {
    var content = $('#result').text();
    if (content != "") {
		//content=decodeURIComponent(encodeURIComponent(content));
        var blob = new Blob([content], { type: "text/plain;charset=utf-8" });
        saveAs(blob, "result_pcjson.com.csv");
    }
    else {
        pcjson_com_msg($("#download"), "检测不到数据，请先输入数据");
    }
});
$("#changebtn").click(function () {
    ctyperow(true);
});
function Empty() {
    $("#content").val("");
    $("#result").html("");
    $("#content").select();
}