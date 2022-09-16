function hide_pwd() { $("#p_div").hide(); }
function show_pwd() { $("#p_div").show(); }

function hashjsonscn(type) {
    try {
        switch (type) {
            case "SHA1":
                hide_pwd();
                hightout(CryptoJS.SHA1($("#content").val()).toString());
                break;
            case "SHA224":
                hide_pwd();
                hightout(CryptoJS.SHA224($("#content").val()).toString());
                break;
            case "SHA256":
                hide_pwd();
                hightout(CryptoJS.SHA256($("#content").val()).toString());
                break;
            case "SHA384":
                hide_pwd();
                hightout(CryptoJS.SHA384($("#content").val()).toString());
                break;
            case "SHA512":
                hide_pwd();
                hightout(CryptoJS.SHA512($("#content").val()).toString());
                break;
            case "MD5":
                hide_pwd();
                hightout(CryptoJS.MD5($("#content").val()).toString());
                break;
            case "HmacSHA1":
                show_pwd();
                hightout(CryptoJS.HmacSHA1($("#content").val(), $("#pwd").val()).toString());
                break;
            case "HmacSHA224":
                show_pwd();
                hightout(CryptoJS.HmacSHA224($("#content").val(), $("#pwd").val()).toString());
                break;
            case "HmacSHA256":
                show_pwd();
                hightout(CryptoJS.HmacSHA256($("#content").val(), $("#pwd").val()).toString());
                break;
            case "HmacSHA384":
                show_pwd();
                hightout(CryptoJS.HmacSHA384($("#content").val(), $("#pwd").val()).toString());
                break;
            case "HmacSHA512":
                show_pwd();
                hightout(CryptoJS.HmacSHA512($("#content").val(), $("#pwd").val()).toString());
                break;
            case "HmacMD5":
                show_pwd();
                hightout(CryptoJS.HmacMD5($("#content").val(), $("#pwd").val()).toString());
                break;
            case "base64加密":
                hide_pwd();
                var str = CryptoJS.enc.Utf8.parse($("#content").val().toString());
                hightout(CryptoJS.enc.Base64.stringify(str));
                break;
            case "base64解密":
                hide_pwd();
                hightout(CryptoJS.enc.Base64.parse($("#content").val()).toString(CryptoJS.enc.Utf8));
                break;
            case "AES加密":
                show_pwd();
                hightout(CryptoJS.AES.encrypt($("#content").val(), $("#pwd").val()).toString());
                break;
            case "AES解密":
                show_pwd();
                hightout(CryptoJS.AES.decrypt($("#content").val(), $("#pwd").val()).toString(CryptoJS.enc.Utf8));
                break;
            case "DES加密":
                show_pwd();
                hightout(CryptoJS.DES.encrypt($("#content").val(), $("#pwd").val()).toString());
                break;
            case "DES解密":
                show_pwd();
                hightout(CryptoJS.DES.decrypt($("#content").val(), $("#pwd").val()).toString(CryptoJS.enc.Utf8));
                break;
            case "Rabbit加密":
                show_pwd();
                hightout(CryptoJS.Rabbit.encrypt($("#content").val(), $("#pwd").val()).toString());
                break;
            case "Rabbit解密":
                show_pwd();
                hightout(CryptoJS.Rabbit.decrypt($("#content").val(), $("#pwd").val()).toString(CryptoJS.enc.Utf8));
                break;
            case "RC4加密":
                show_pwd();
                hightout(CryptoJS.RC4.encrypt($("#content").val(), $("#pwd").val()).toString());
                break;
            case "RC4解密":
                show_pwd();
                hightout(CryptoJS.RC4.decrypt($("#content").val(), $("#pwd").val()).toString(CryptoJS.enc.Utf8));
                break;
            case "TripleDES加密":
                show_pwd();
                hightout(CryptoJS.TripleDES.encrypt($("#content").val(), $("#pwd").val()).toString());
                break;
            case "TripleDES解密":
                show_pwd();
                hightout(CryptoJS.TripleDES.decrypt($("#content").val(), $("#pwd").val()).toString(CryptoJS.enc.Utf8));
                break;
            case "UrlEncode":
                hide_pwd();
                UrlEncode($("#content").val().toString());
                break;
            case "UrlDecode":
                hide_pwd();
                UrlDecode($("#content").val().toString());
                break;
        }
    }
    catch (err) {
        hightout(err);
    }
}
function UrlEncode(str) {
    $.ajax({
        url: "/tool/urlencode",
        dataType: "json",
        async: true, 
        data: { "str": str },
        type: "GET", 
        success: function (result) {
            hightout(result.msg);
        }

    });
}
function UrlDecode(str) {
    $.ajax({
        url: "/tool/urldecode",
        dataType: "json",
        async: true, 
        data: { "str": str },
        type: "GET", 
        success: function (result) {
            hightout(result.msg);
        }

    });
}