function ToFull(txtstring) {
    var txtstring = $("#content").val();
    if (txtstring == '') {
        alert('请输入要转换的字符');
        return;
    }
    var tmp = "";
    for (var i = 0; i < txtstring.length; i++) {
        if (txtstring.charCodeAt(i) == 32) {
            tmp = tmp + String.fromCharCode(12288);
        }
        else if (txtstring.charCodeAt(i) < 127) {
            tmp = tmp + String.fromCharCode(txtstring.charCodeAt(i) + 65248);
        }
        else
            tmp = tmp + String.fromCharCode(txtstring.charCodeAt(i));
    }
   hightout("" + tmp + "");
}
function ToHalf(str) {
    var str = $("#content").val();
    if (str == '') {
        alert('请输入要转换的字符');
        return;
    }
    var tmp = "";
    for (var i = 0; i < str.length; i++) {
        if (str.charCodeAt(i) > 65280 && str.charCodeAt(i) < 65375) {
            tmp += String.fromCharCode(str.charCodeAt(i) - 65248);
        }
        else if (str.charCodeAt(i) == 12288) {
            tmp += String.fromCharCode(32);
        }
        else {
            tmp += String.fromCharCode(str.charCodeAt(i));
        }
    }
   hightout("" + tmp + "");

}