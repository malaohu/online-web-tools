function randomise() {
    var words = $("#content").val();
    words = words.split(mform.randomiseby.options[mform.randomiseby.selectedIndex].value)
    var code = "";
    var colourscheme = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F")
    for (var time = 0; time <= (words.length - 1); time++) {
        if (words[time] == " ") {
            code += " "
        }
        if (words[time] != " ") {
            var c1 = Math.round(Math.random() * (colourscheme.length - 1));
            var c2 = Math.round(Math.random() * (colourscheme.length - 1));
            var c3 = Math.round(Math.random() * (colourscheme.length - 1));
            var c4 = Math.round(Math.random() * (colourscheme.length - 1));
            var c5 = Math.round(Math.random() * (colourscheme.length - 1));
            var c6 = Math.round(Math.random() * (colourscheme.length - 1));
            var size = 1 + Math.round(Math.random() * 6);
            code += "<font color=\"#" + colourscheme[c1] + colourscheme[c2] + colourscheme[c3] + colourscheme[c4] + colourscheme[c5] + colourscheme[c6] + "\" size=\"" + size + "\">" + words[time] + "</font>";
        }
    }
    $("#color_text").html(code);
	hightout(code);
}
function Empty() {
    $("#content").val("");
    $("#result").html("");
    $("#color_text").html("");
    document.getElementById("content").select();
}