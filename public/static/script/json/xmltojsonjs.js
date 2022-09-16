function demo_xml() {
    var xml = "<books>\
  <book>\
  <author>Json</author>\
  <title>Json Dev</title>\
  <publisher>O'Reilly</publisher>\
  </book>\
  <book>\
  <author>Json</author>\
  <title>Podcasting Hacks</title>\
  <publisher>O'Reilly</publisher>\
  </book>\
  </books>";
    $('#input').val(xml);
}
function demo_json() {
    var json = '{\
	"tools": [\
	{ "name":"css format" , "site":"http://www.pcjson.com/formatcss/" },\
	{ "name":"json format" , "site":"http://www.pcjson.com/json/" },\
	{ "name":"hash MD5" , "site":"http://www.pcjson.com/md5/" }\
	]\
	}';
    $('#input').val(json);
}

function xml2json() {
    var space = ($("#pretty_json").is(':checked')) ? "  " : "";
    var xotree = new XML.ObjTree();
    var inputdata = $.trim($('#input').val());
    var tree = xotree.parseXML(inputdata);
    if (!tree.html) {
        hightout(JSON.stringify(tree, null, space));
		pcjson_com_msg($("#content"), "XML转JSON成功");return false;
    } else {
		pcjson_com_msg($("#content"), "XML格式错误");return false;
    }
}
function json2xml() {
    try {
        var xotree = new XML.ObjTree();
        var inputdata = $.trim($('#input').val());
        hightout(xotree.writeXML(JSON.parse(inputdata)));
        pcjson_com_msg($("#content"), "JSON转XML成功");return false;
    } catch (e) {
       pcjson_com_msg($("#content"), "JSON格式错误");return false;
    }
}
function Empty() {
    document.getElementById("input").value = "";
    document.getElementById("output").value = "";
    document.getElementById("input").select();
}