$("#testcase").click(function () {
    $("#content").val("sitename	web	url	shorturl\nJson在线解析工具	pcjson.com	http://www.pcjson.com	pcjson.com\nJson在线解析工具	pcjson.com	http://www.pcjson.com	pcjson.com\nJson在线解析工具	pcjson.com	http://www.pcjson.com	pcjson.com\nJson在线解析工具	pcjson.com	http://www.pcjson.com	pcjson.com\nJson在线解析工具	pcjson.com	http://www.pcjson.com	pcjson.com");
});
function c(t, o) {
    $("#ctype").val(t);
    $("#sels").text($(o).text());
}
var fgf = /\t/;
function ctyperow() {
    if ($("#fgfstr").val() == "") {
        fgf = /\t/;
    }
    fgf = $("#fgfstr").val() || fgf;
    var ctype = $("#ctype").val();
    var txt = $("#content").val();
    var datas = txt.split("\n");
    var html = "[\n";
    var keys = [];
    for (var i = 0; i < datas.length; i++) {
        var ds = datas[i].split(fgf);
        if (i == 0) {

            if (ctype == "0") {
                keys = ds;
            } else {
                html += "[";
                for (var j = 0; j < ds.length; j++) {
                    html += '"' + ds[j] + '"';
                    if (j < ds.length - 1) {
                        html += ",";
                    }
                }
                html += "],\n";
            }
        } else {
            if (ds.length == 0) continue;
            if (ds.length == 1) {
                ds[0] == "";
                continue;
            }
            html += ctype == "0" ? "{" : "[";
            for (var j = 0; j < ds.length; j++) {
                var d = ds[j];
                if (d == "") continue;
                if (ctype == "0") {
                    html += '"' + keys[j] + '":"' + d + '"';
                } else {
                    html += '"' + d + '"';
                }
                if (j < ds.length - 1) {
                    html += ',';
                }
            }
            html += ctype == "0" ? "}" : "]";
            if (i < datas.length - 1)
                html += ",\n";
        }
    }
    html += "\n]";
    hightout(html);
}
$("#content").bind("change1", function () {
    var ctype = $("#ctype").val();
    var txt = "";
    if (ctype == "0") {
        txt = ctype0();
    }
})
$("#changebtn").click(function () {
    ctyperow(true);
});
function Empty() {
    $("#content").val("");
    $("#result").html("");
    $("#content").select();
}