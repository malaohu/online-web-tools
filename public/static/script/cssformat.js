var reg = /([\s|\{|;])([a-z\-]+)(\s*):/ig;
var cssChanger = {
    format: function(s) {
		s = s.toString();
        s = s.replace(/\s*([\{\}\:\;\,])\s*/g, "$1");
        s = s.replace(/(\s*)\}/g, "$1;}");
        s = s.replace(/;\s*;/g, ";");
        s = s.replace(/\,[\s\.\#\d]*{/g, "{");
        s = s.replace(/([^\s])\{([^\s])/g, "$1 {\n\t$2");
        s = s.replace(/([^\s])\}([^\n]*)/g, "$1\n}\n$2");
        s = s.replace(/([^\s]);([^\s\}])/g, "$1;\n\t$2");
        if ($("#delnotes").prop("checked")) {
            s = s.replace(/\/\*(.|\n)*?\*\//g, "\n\t")
        }
        s = s.replace(/\n(\n)*( *)*(\n)*\n/g, "");
        if ($("#chk").prop("checked")) {
            s = s.replace(/(\r|\n|\t)/g, "");
            s = s.replace(/(})/g, "$1\r\n")
        }
        if ($("#tolower").prop("checked")) {
            s = s.replace(reg,
            function(word) {
                return word.toLowerCase()
            });
        }
        s = s.replace(/\s+\*\//g, "*/");
        return s
    },
	pack: function (s) {
            s = s.replace(/\s*([\{\}\:\;\,])\s*/g, "$1");
            s = s.replace(/\,[\s\.\#\d]*\{/g, "{"); 
            s = s.replace(/;\s*;/g, ";"); 
			if ($("#tolower").prop("checked")) {
				s = s.replace(reg,
				function(word) {
					return word.toLowerCase()
				});
			}
			if ($("#delnotes").prop("checked")) {
				s = s.replace(/\/\*(.|\n)*?\*\//g, ""); 
			}
            s = s.match(/^\s*(\S+(\s+\S+)*)\s*$/);
            return (s == null) ? "" : s[1];
        }
};
function format_css(s) {
    var content = cssChanger[s]($("#content").val());
    if (content.length == '') {
        pcjson_com_msg($("#content"),'CSS代码不能为空！');
        return false
    }
	$("pre").show();
	$('#result').html(hljs.highlightAuto(content).value);
}
function Empty() { $("#content").val(""); $("#result").html(''); $("#content").select();$("pre").hide(); }