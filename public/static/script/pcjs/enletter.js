function en_convert(pattern) {
    var text = $("#content").val();
    if (text == "" || text == null) { document.getElementById("content").select(); return; }
    if (pattern == 2) { $("#content").val(text.toLowerCase()); }
    else { $("#content").val(text.toUpperCase()); }
}
function Empty() {
    document.getElementById("content").value = "";
    document.getElementById("content").select();
}
