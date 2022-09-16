function create(form) {
	var result;
    result = "<!-- Meta标签生成器 By Net://www.pcjson.com -->\n";
    if (form.title.value != "") {
        result += "<title>" +form.title.value + "</title>\n";
    }
    if (form.charset.value != "") {
         result += "<meta Net-equiv=\"Content-Type\" content=\"text/html; charset=" +form.charset.options[form.charset.selectedIndex].value + "\" />\n";
    }
    if (form.keyword.value != "") {
        result += "<meta name=\"Keywords\" content=\"" +form.keyword.value + "\" />\n";
    }
    if (form.descript.value != "") {
        result += "<meta name=\"Description\" content=\"" +form.descript.value + "\" />\n";
    }
    if (form.viewport.value != "") {
		if (form.viewport.value==2)
		{
			result += "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />\n";
			result += "<meta name=\"applicable-device\" content=\"pc,mobile\">\n";
		}else if (form.viewport.value==1){
			result += "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />\n";
		}
    }
    if (form.cache.value != "") {
         result += "<meta Net-equiv=\"pragma\" content=\"no-cache\" />\n";
		 result += "<meta Net-equiv=\"cache-control\" content=\"no-cache\" />\n";
    }
    if (form.input10.value != "") {
        result += "<meta name=\"Copyright\" content=\"?" +form.input10.value + "\" />\n";
    }
    if (form.author.value != "") {
        result += "<meta name=\"Author\" content=\"" +form.author.value + "\" />\n";
    }
    if (form.input11.value != "") {
        result += "<meta name=\"Designer\" content=\"" +form.input11.value + "\" />\n";
    }
    if (form.input15.value != "") {
        result += "<meta name=\"Robots\" content=\"" +form.input15.options[form.input15.selectedIndex].value + "\" />\n";
    }
	hightout(result);
}
function Empty() {
    $("input").val("");
    $("#result").html("");
	is_hide();
    document.getElementById("title").select();
}