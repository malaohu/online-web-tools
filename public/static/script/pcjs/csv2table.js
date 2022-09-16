function dataToTable() {
    //Make variables
    var lineSep1 = document.getElementById("lineSep1").checked;
    var lineSep2 = document.getElementById("lineSep2").checked;
    var lineSep3 = document.getElementById("lineSep3").checked;
    var lineSep4 = document.getElementById("lineSep4").checked;
    var lineSep5 = document.getElementById("lineSep5").checked;
    var lineSep6 = document.getElementById("lineSep6").checked;
    var lineSep7 = document.getElementById("lineSep7").value;
    //Get old text
    var oldText = document.getElementById("content").value;
    //Split into lines
    var oldTextArr = oldText.split("\n");
    var newText = "";
    //Get rid of quotes at beginning and end
    for (i = 0; i < oldTextArr.length; i++) {
        oldTextArr[i] = oldTextArr[i].replace(/\r/, "");
        oldTextArr[i] = oldTextArr[i].replace(/^\'/, "");
        oldTextArr[i] = oldTextArr[i].replace(/^\"/, "");
        oldTextArr[i] = oldTextArr[i].replace(/"$/, "");
        oldTextArr[i] = oldTextArr[i].replace(/'$/, "");
        oldTextArr[i] = "<tr><td>" + oldTextArr[i] + "</td></tr>";
    }
    //Separators
    if (lineSep1 == true) {
        var linesep = ",";
    } else if (lineSep2 == true) {
        var linesep = "	";
    } else if (lineSep3 == true) {
        var linesep = '"	"';
    } else if (lineSep4 == true) {
        var linesep = '","';
    } else if (lineSep5 == true) {
        var linesep = "\\|";
    } else if (lineSep6 == true) {
        var linesep = ' ';
    } else {
        var linesep = '	';
    }
    if (lineSep7 && lineSep7.length > 0) {
        var linesep = lineSep7;
    }
    //make table
    for (i = 0; i < oldTextArr.length; i++) {
        oldTextArr[i] = oldTextArr[i].replace(new RegExp(linesep, "gi"), "</td><td>");
        newText = newText + oldTextArr[i] + "\n";
    }
    newText = "<table>\n" + newText + "</table>\n";
	$("pre").show();
	$('#result').html(hljs.highlightAuto(newText).value);
}
$("pre").hide();
function Empty() { $("#content").val(""); $("#result").html(""); $("#content").select();$("pre").hide(); }