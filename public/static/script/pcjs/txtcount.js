function Empty() {
    document.getElementById("content").value = "";
    $('zhongwen').innerText = "0";
    $('zbiaodian').innerText = "0";
    $('zhongwenbiaodian').innerText = "0";
    $('yingwen').innerText = "0";
    $('shuzi').innerText = "0";
    document.getElementById("numwords").innerHTML = "0";
    document.getElementById("content").select();
}

function $(id) { return document.getElementById(id); }
var EventUtil = function () { };
EventUtil.addEventHandler = function (obj, EventType, Handler) {
    //如果是FF
    if (obj.addEventListener) {
        obj.addEventListener(EventType, Handler, false);
    }
    //如果是IE
    else if (obj.attachEvent) {
        obj.attachEvent('on' + EventType, Handler);
    }
    else {
        obj['on' + EventType] = Handler;
    }
}

if ($("content")) {
    EventUtil.addEventHandler($('content'), 'propertychange', CountChineseCharacters);
    EventUtil.addEventHandler($('content'), 'input', CountChineseCharacters);
}
window.onload = CountChineseCharacters();

function showit(Word) {
    alert(Word);
}
function CountChineseCharacters() {
    Words = $('content').value;
    var W = new Object();
    var Result = new Array();
    var iNumwords = 0;
    var sNumwords = 0;
    var sTotal = 0; //双字节字符;
    var iTotal = 0; //中文字符；
    var eTotal = 0; //Ｅ文字符
    var otherTotal = 0;
    var bTotal = 0;
    var inum = 0;

    for (i = 0; i < Words.length; i++) {
        var c = Words.charAt(i);
        if (c.match(/[\u4e00-\u9fa5]/)) {
            if (isNaN(W[c])) {
                iNumwords++;
                W[c] = 1;
            }
            iTotal++;
        }
    }

    for (i = 0; i < Words.length; i++) {
        var c = Words.charAt(i);
        if (c.match(/[^\x00-\xff]/)) {
            if (isNaN(W[c])) {
                sNumwords++;

            }
            sTotal++;
        }
        else {
            eTotal++;
        }
        if (c.match(/[0-9]/)) {
            inum++;
        }
    }
    $('zhongwen').innerText = iTotal;
    $('zbiaodian').innerText = sTotal - iTotal;
    $('zhongwenbiaodian').innerText = sTotal;
    $('yingwen').innerText = eTotal;
    $('shuzi').innerText = inum;
    document.getElementById("totalwords").innerHTML = iTotal * 2 + (sTotal - iTotal) * 2 + eTotal;
}