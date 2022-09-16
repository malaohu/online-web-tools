$("#regCommon a").click(function () {
    $("#searchText").val($(this).attr("t"));
});
function GetCode() {
    var sllanguagelist = $("#sllanguagelist").val();
    var searchText = $("#searchText").val();
    if (searchText != "") {
        if (sllanguagelist == 'go' || sllanguagelist == 'java') {
            searchText = searchText.replace(/\\/gi, "\\");
        }
        if (sllanguagelist != "") {
            var resultstr = "";
            switch (sllanguagelist) {
                case 'javascript': resultstr = "var pattern = /" + searchText + "/;\nstr = '';\nconsole.log(pattern.test(str));"; break;
                case 'php': resultstr = "$str = '';\n$isMatched = preg_match('/" + searchText + "/', $str, $matches);\nvar_dump($isMatched, $matches);"; break;
                case 'go': resultstr = "package main\n\nimport (\n\t\"fmt\"\n\t\"regexp\"\n)\n\nfunc main() {\n\tstr := \"\"\n\tmatched, err := regexp.MatchString(\"" + searchText + "\", str)\n\tfmt.Println(matched, err)\n}"; break;
                case 'java': resultstr = "import java.util.regex.Matcher;\nimport java.util.regex.Pattern;\n\npublic class RegexMatches {\n\t\n\tpublic static void main(String args[]) {\n\t\tString str = \"\";\n\t\tString pattern = \"" + searchText + "\";\n\n\t\tPattern r = Pattern.compile(pattern);\n\t\tMatcher m = r.matcher(str);\n\t\tSystem.out.println(m.matches());\n\t}\n\n}"; break;
                case 'rb': resultstr = "pattern = /" + searchText + "/\nstr = ''\np pattern.match(str)"; break;
                case 'python': resultstr = "import re\npattern = re.compile(ur'" + searchText + "')\nstr = u''\nprint(pattern.search(str))"; break;
                case 'csharp': resultstr = "str = \"\";\nRegex r = new Regex(\"/" + searchText + "/\");\nif (!r.IsMatch(str))\n{\n\treturn \"此次验证不通过\";\n}\n//需要添加此引用：using System.Text.RegularExpressions;"; break;
            }
            hightout(resultstr);
        }
        else {
            pcjson_com_msg($("#sllanguagelist"), "请选择生成语言");
        }
    }
    else {
        pcjson_com_msg($("#searchText"), "请先输入正则表达式");
    }
}
function Empty() {
    $("#searchText").val("");
    $("#result").html("");
    $("#searchText").select();
	$("pre").hide();
}