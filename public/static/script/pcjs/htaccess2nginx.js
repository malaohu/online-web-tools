function htaccess2nginx(t) {
    var text = $("#content").val();
    return text.length <= 0 ? (pcjson_com_msg($("#content"), "请输入要转换的htaccess"), $("#content").focus(), !1) : 6e3 < text.length ? (pcjson_com_msg($("#content"), "htaccess内容长度不能超过6000!"), $("#content").focus(), !1) : (void $(function () {
        if(text==''){
            return;//empty error
        }
        var nginx = RewriteConf.convert(text);
        hightout("# nginx configuration by "+window.location.host+"\n\n"+nginx);
    }))
}

