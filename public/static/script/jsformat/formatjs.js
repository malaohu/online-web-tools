function do_js_beautify() {

    document.getElementById("beautify").disabled = true;
    js_source = document.getElementById("content").value.replace(/^\s+/, "");
    tabsize = document.getElementById("tabsize").value;
    tabchar = " ";
    if (tabsize == 1) {
        tabchar = "\t";
    }
    if (js_source && js_source.charAt(0) === "<") {
        var output = style_html(js_source, tabsize, tabchar, 80);
		hightout(output);
    } else {
        var output = js_beautify(js_source, tabsize, tabchar);
		hightout(output);
    }
    document.getElementById("beautify").disabled = false;
    return false;
}
function pack_js(base64) {
    var input = document.getElementById("content").value;
    var packer = new Packer;
    if (base64) {
        var output = packer.pack(input, 1, 0);
    } else {
        var output = packer.pack(input, 0, 0);
    }
    hightout(output);
}
function Empty() {
    document.getElementById("content").value = "";
    document.getElementById("content").select();
	$("#result").html('');
}
function GetFocus() {
    document.getElementById("content").focus();
}
