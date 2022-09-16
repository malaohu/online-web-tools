function encrypt() {
	var ret='';
    switch (jQuery('input[name="encrypt_type"]:checked').val()||$('input[name="encrypt_type"]').val()) {
        case "aes":
			ret = CryptoJS.AES.encrypt(jQuery("#content").val(), jQuery("#pwd").val());
            break;
        case "des":
            ret = CryptoJS.DES.encrypt(jQuery("#content").val(), jQuery("#pwd").val());
            break;
        case "rabbit":
           ret = CryptoJS.Rabbit.encrypt(jQuery("#content").val(), jQuery("#pwd").val());
            break;
        case "rc4":
          ret = CryptoJS.RC4.encrypt(jQuery("#content").val(), jQuery("#pwd").val());
            break;
        case "tripledes":
          ret = CryptoJS.TripleDES.encrypt(jQuery("#content").val(), jQuery("#pwd").val());
            break;
    }
	hightout(ret.toString());
}

function decrypt() {
    switch (jQuery('input[name="encrypt_type"]:checked').val()||$('input[name="encrypt_type"]').val()) {
        case "aes":
            hightout(CryptoJS.AES.decrypt(jQuery("#content").val(), jQuery("#pwd").val()).toString(CryptoJS.enc.Utf8));
            break;
        case "des":
            hightout(CryptoJS.DES.decrypt(jQuery("#content").val(), jQuery("#pwd").val()).toString(CryptoJS.enc.Utf8));
            break;
        case "rabbit":
            hightout(CryptoJS.Rabbit.decrypt(jQuery("#content").val(), jQuery("#pwd").val()).toString(CryptoJS.enc.Utf8));
            break;
        case "rc4":
            hightout(CryptoJS.RC4.decrypt(jQuery("#content").val(), jQuery("#pwd").val()).toString(CryptoJS.enc.Utf8));
            break;
        case "tripledes":
            hightout(CryptoJS.TripleDES.decrypt(jQuery("#content").val(), jQuery("#pwd").val()).toString(CryptoJS.enc.Utf8));
            break;
    }
}
  function sha_encrypt(type, flag) {
	if (!flag) $(".buttonSelected").removeClass("buttonSelected");
	switch (type) {
		case "sha1":
			hightout(CryptoJS.SHA1($("#content").val()).toString());
			break;
		case "sha256":
			hightout(CryptoJS.SHA256($("#content").val()).toString());
			break;
		case "sha512":
			hightout(CryptoJS.SHA512($("#content").val()).toString());
			break;
	}
}
function resetAll() {
    $("#pwd").val("");
    $("#content").val("");
    $("#result").html("");
    document.getElementById("content").select();
	$("pre").hide();
}