function rand(max) {
    return Math.floor(Math.random() * max);
};
$("#generator").click(function(){
    var chars = "";
    if ($("#use_number").is(':checked')) chars += "0123456789";
    if ($("#use_lowercaseletters").is(':checked')) chars += "abcdefghijklmnopqrstuvwxyz";
    if ($("#use_uppercaseletters").is(':checked')) chars += "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    if ($("#use_punctuation").is(':checked')) chars += "`~!@#$%^&*()-_=+[{]}\|;:'\",<.>/?";
    var passwords = [];
    var passwordUnique = $("#password_unique").is(':checked');
	var password_length = $("#password_length").val();
		password_length = password_length>99?99:password_length;
	var password_quantity = $("#password_quantity").val();
		password_quantity = password_quantity>500?500:password_quantity;
    for (var i = 0,l = password_quantity; i < l; i++) {
        var _chars = chars.split(""),
        password = "";
        for (var j = 0,
        k = password_length; j < k; j++) {
            if (_chars.length < 1) break;
            var index = rand(_chars.length);
            password += _chars[index];
            if (passwordUnique) _chars.splice(index, 1);
        };
        passwords.push(password);
    };
    $("#result").html(passwords.join("<br>\n"));
});

