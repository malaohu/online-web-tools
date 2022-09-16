function textflip() {
    if ($("#content").val() == "") {
        pcjson_com_msg($("#content"), "请输入要翻转的内容");
        return false;
    }
    var result = flipString($("#content").val().toLowerCase());
    hightout(result)
}
function flipString(aString) {
    var last = aString.length - 1;
    var result = new Array(aString.length)
    for (var i = last; i >= 0; --i) {
        var c = aString.charAt(i)
        var r = flipTable[c]
        result[last - i] = r ? r : c
    }
    return result.join('')
}
var flipTable = {
    a: '\u0250',
    b: 'q',
    c: '\u0254', //open o -- from pne
    d: 'p',
    e: '\u01DD',
    f: '\u025F', //from pne
    g: '\u0183',
    h: '\u0265',
    i: '\u0131', //from pne
    j: '\u027E',
    k: '\u029E',
    //l : '\u0283',
    m: '\u026F',
    n: 'u',
    r: '\u0279',
    t: '\u0287',
    v: '\u028C',
    w: '\u028D',
    y: '\u028E',
    '.': '\u02D9',
    '[': ']',
    '(': ')',
    '{': '}',
    '?': '\u00BF', //from pne
    '!': '\u00A1',
    "\'": ',',
    '<': '>',
    '_': '\u203E',
    '\u203F': '\u2040',
    '\u2045': '\u2046',
    '\u2234': '\u2235',
    '\r': '\n'
}
for (i in flipTable) {
    flipTable[flipTable[i]] = i
}
