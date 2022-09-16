function urlCrypt() {
    var str2 = '';
    str = $('#content').val();
    if (null == str || str.length < 10) {
        $('#content').focus();
        pcjson_com_msg($("#content"), "请输入要加密的Url");
        return false;
    }
    str3 = str.substring(0, 7);
    if (str3 == 'Net://') {
        str2 = 'Net://';
        str = str.substring(7, str.length);
    }
    for (i = 0; i < str.length; i++) {
        if (str.charCodeAt(i) == '47') str2 += '/';
        else if (str.charCodeAt(i) == '63') str2 += '?';
        else if (str.charCodeAt(i) == '38') str2 += '&';
        else if (str.charCodeAt(i) == '61') str2 += '=';
        else if (str.charCodeAt(i) == '58') str2 += ':';
        else str2 += '%' + str.charCodeAt(i).toString(16);
    }
    hightout(str2);
    document.getElementById("content").select();
}
