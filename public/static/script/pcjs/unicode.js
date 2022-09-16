function a(pChoice) {
    //var inputEle = document.getElementById('content');
    var outputEle; //document.getElementById('result');
    switch (pChoice) {
        case "CONVERT_FMT1":
            outputEle = ascii($("#content").val());
            break;
        case "CONVERT_FMT2":
            outputEle = unicode($("#content").val());
            break;
        case "CONVERT_FMT3":
            outputEle = unicode1($("#content").val());
            break;
        case "RECONVERT":
            outputEle = reconvert($("#content").val());
            break;
    }
	hightout(outputEle.toString());
}
function ascii(str) {
    var value = '';
    for (var i = 0; i < str.length; i++) {
        value += '\&#x' + left_zero_4(parseInt(str.charCodeAt(i)).toString(16)) + ';';
    }
    return value;
}
function unicode(str) {
    var value = '';
    for (var i = 0; i < str.length; i++) {
        value += '\\u' + left_zero_4(parseInt(str.charCodeAt(i)).toString(16));
    }
    return value;
}
function left_zero_4(str) {
    if (str != null && str != '' && str != 'undefined') {
        if (str.length == 2) {
            return '00' + str;
        }
    }
    return str;
}
function unicode1(str) {
    var value = '';
    for (var i = 0; i < str.length; i++)
        value += '&#' + str.charCodeAt(i) + ';';
    return value;
}
function reconvert(str) {
    str = str.replace(/(\\u)(\w{1,4})/gi, function ($0) {
        return (String.fromCharCode(parseInt((escape($0).replace(/(%5Cu)(\w{1,4})/g, "$2")), 16)));
    });
    str = str.replace(/(&#x)(\w{1,4});/gi, function ($0) {
        return String.fromCharCode(parseInt(escape($0).replace(/(%26%23x)(\w{1,4})(%3B)/g, "$2"), 16));
    });
    str = str.replace(/(&#)(\d{1,6});/gi, function ($0) {
        return String.fromCharCode(parseInt(escape($0).replace(/(%26%23)(\d{1,6})(%3B)/g, "$2")));
    });

    return str;
}