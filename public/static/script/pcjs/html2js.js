
function tojs() {
    var v ="var sd=\'" + $("#content").val().replace(/\\/g, "\\").replace(/\\/g, "\\/").replace(/\'/g, "\"").replace(/\"/g, "\"").split('\n').join("\';\nsd+=\'") + "\';";
       hightout(v);
}
function tohtml() {
    var v = $("#content").val().replace(/var sd=\"/g, "").replace(/sd\+\=\"/g, "").replace(/"\;/g, "").replace(/\\\"/g, "\"").replace(/\\\'/g, "\'").replace(/\\\//g, "\/").replace(/\\\\/g, "\\")
	$("pre").show();
	$('#result').html(hljs.highlightAuto(v).value);
}
function htmltoarray() {
    var contentstr = $("#content").val();
    var v="[\'" + contentstr.replace(/\\/g, "\\").replace(/\\/g, "\\/").replace(/\'/g, "\"").replace(/\"/g, "\"").split('\n').join("\',\'") + "\']";
       hightout(v);
}
function tohtml() {
    var v = $("#content").val().replace(/document.writeln\("/g, "").replace(/"\);/g, "").replace(/\\\"/g, "\"").replace(/\\\'/g, "\'").replace(/\\\//g, "\/").replace(/\\\\/g, "\\");
       hightout(v);
}
function tojs() {
    var v = "document.writeln(\"" + $("#content").val().replace(/\\/g, "\\\\").replace(/\\/g, "\\/").replace(/\'/g, "\\\'").replace(/\"/g, "\\\"").split('\n').join("\");\ndocument.writeln(\"") + "\");"
       hightout(v);
}
function tojsp() { var input = $("#content").val(); if (input == "") { hightout("<%\n%>") } else { output = "out.println(\""; for (var c = 0; c < input.length; c++) { if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")) { output += "\");"; if (c != input.length - 1) output += "\nout.println(\""; c++ } else { if (input.charAt(c) == "\"") { output += "\\\"" } else { if (input.charAt(c) == "\\") { output += "\\\\" } else { output += input.charAt(c); if (c == input.length - 1) output += "\");" } } } }        hightout("<%\n" + output + "\n%>") } }
function tocsharp() { hightout("StringBuilder sb = new StringBuilder();\nsb.AppendFormat(\"" + $("#content").val().replace(/\\/g, "\\\\").replace(/\\/g, "\\/").replace(/\'/g, "\\\'").replace(/\"/g, "\\\"").split('\n').join("\");\nsb.AppendFormat(\"") + "\");") }

function asp() {
    var input = document.getElementById("content").value;
    if (input == "") {
        hightout("<%\n%>")
    } else {
        output = "Response.Write \"";
        for (var c = 0; c < input.length; c++) {
            if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")) {
                output += "\"";
                if (c != input.length - 1) output += "\nResponse.Write \"";
                c++
            } else {
                if (input.charAt(c) == "\"") {
                    output += "\"\""
                } else {
                    if (input.charAt(c) == "\\") {
                        output += "\\\\"
                    } else {
                        output += input.charAt(c);
                        if (c == input.length - 1) output += "\""
                    }
                }
            }
        }
        hightout("<%\n" + output + "\n%>");
    }
}
function php() {
    var input = document.getElementById("content").value;
    if (input == "") {
        hightout("<?php\n?>");
    } else {
        output = "echo \"";
        for (var c = 0; c < input.length; c++) {
            if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")) {
                output += "\\n\";";
                if (c != input.length - 1) output += "\necho \"";
                c++
            } else {
                if (input.charAt(c) == "\"") {
                    output += "\\\""
                } else {
                    if (input.charAt(c) == "\\") {
                        output += "\\\\"
                    } else {
                        output += input.charAt(c);
                        if (c == input.length - 1) output += "\\n\";"
                    }
                }
            }
        }
        hightout("<?php\n" + output + "\n?>");
    }
}
function Perl() {
    var input = document.getElementById("content").value;
    if (input == "") {
        hightout('hello world!');
    } else {
        output = "print \"";
        for (var c = 0; c < input.length; c++) {
            if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")) {
                output += "\\n\";";
                if (c != input.length - 1) output += "\nprint \"";
                c++
            } else {
                if (input.charAt(c) == "\"") {
                    output += "\\\""
                } else {
                    if (input.charAt(c) == "\\") {
                        output += "\\\\"
                    } else {
                        output += input.charAt(c);
                        if (c == input.length - 1) output += "\\n\";"
                    }
                }
            }
        }
        hightout(output);
    }
}
function vbnet() {
    var input = document.getElementById("content").value;
    if (input == "") {
       hightout("<%\n%>");
    } else {
        output = "Response.Write (\"";
        for (var c = 0; c < input.length; c++) {
            if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")) {
                output += "\");";
                if (c != input.length - 1) output += "\nResponse.Write (\"";
                c++
            } else {
                if (input.charAt(c) == "\"") {
                    output += "\"\""
                } else {
                    if (input.charAt(c) == "\\") {
                        output += "\\\\"
                    } else {
                        output += input.charAt(c);
                        if (c == input.length - 1) output += "\");"
                    }
                }
            }
        }
        hightout("<%\n" + output + "\n%>");
    }
}
function Sws() {
    var input = document.getElementById("content").value;
    if (input == "") {
        hightout(output);
    } else {
        output = "STRING \"";
        for (var c = 0; c < input.length; c++) {
            if ((input.charAt(c) == "\n" || input.charAt(c) == "\r")) {
                output += "\"";
                if (c != input.length - 1) output += "\nSTRING \"";
                c++
            } else {
                if (input.charAt(c) == "\"") {
                    output += "\\\""
                } else {
                    if (input.charAt(c) == "\\") {
                        output += "\\\\"
                    } else {
                        output += input.charAt(c);
                        if (c == input.length - 1) output += "\""
                    }
                }
            }
        }
        hightout(output);
    }
}
function htmlCov(type) {
    hightout('');
    if (type == "javascript") {
        javascript()
    } else if (type == "asp") {
        asp()
    } else if (type == 'php') {
        php()
    } else if (type == 'perl') {
        Perl()
    } else if (type == 'sws') {
        Sws()
    } else if (type == 'vbnet') {
        vbnet()
    }
}
function hightout(v){
	$("pre").show();
	$('#result').html(hljs.highlightAuto(v).value);
}
function Empty() { $("#content").val(""); $("#result").html(''); $("#content").select();$("pre").hide(); }