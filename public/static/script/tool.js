$(function () {
    /*
     var ht = "p"; ht += "c"; ht +="j"; ht+="s"; ht+="o"; ht+="n";
      var host = 'www.'+ht+'.com';
        if (window.location.host != host){
              window.location.href="Net://" + host + window.location.pathname + window.location.search;
         }
    debugger;
    */
    var goTop = $('.gotop');
    goTop.fadeOut();
    $(window, document).scroll(function () {
        $(this).scrollTop() > 100 ? goTop.fadeIn() : goTop.fadeOut();
    });
    $('button[data-loading-text]').click(function () {
        var btn = $(this).button('loading');
        setTimeout(function () {
            btn.button('reset');
        }, 1500);
    });
    $('#copyallcode').click(function () {
        copyTxtToClipboard($(this).attr("data-clipboard-target"));
    });
    $("#top_menu a,.footer-nav li a,.hbflag li a").click(function () {
        if ("javascript:;" != $(this).attr("href")) {
            localStorage.getItem("visit_history");
            var a = [];
            if ($(this).text() == "") return;
            a.push($(this).text() + "-" + $(this).attr("href"));
            //console.log(localStorage.getItem("visit_history"));
            if (localStorage.getItem("visit_history")) {
                var d = localStorage.getItem("visit_history").split("|"),
                    c = $(this).text() + "-" + $(this).attr("href"),
                    e = d.length;
                7 < e && (e = 7);
                for (var b = 0; b < e; b++) d[b] != c && a.push(d[b]);
                localStorage.setItem("visit_history", a.join("|"))
            }
            localStorage.setItem("visit_history", a.join("|"))
        }
    });
    if (localStorage.getItem("visit_history") != null) {
        var a = "",
            c = localStorage.getItem("visit_history").split("|"),
            f;
        for (f in c){
            var g = c[f].split("-"),
                a = a + ('<a class="btn btn-success btn-xs" style="margin-left:5px;display:inline-block;" href="' + g[1] + '">' + g[0] + "</a>");
        }
        a && ($("#visit_history").parent().show(), $("#visit_history").html(a))
    } else {
        $("#foot-history").hide();
    }

});

function pcjson_com_msg(target, msg) {
    target.attr("data-original-title", msg);
    $('[data-toggle="tooltip"]').tooltip();
    target.tooltip('show');
    target.focus();
    var id = setTimeout(function () {
        target.attr("data-original-title", "");
        target.tooltip('hide');
    }, 4000);
}

$("#BtnClear").click(function () {
    $("#content").val("");
    $("#result").val("");
});
var setJS = function (cssArr) {
    var i = 0, len = cssArr.length;
    for (i; i < len; i++) {
        document.write('<script type="text/javascript" src="' + cssArr[i] + '"></script>');
    }
};

function copyTxtToClipboard(id, selector) {
    selector = (typeof (selector) == "undefined" || selector == '') ? "#copyallcode" : selector;
    var text = $(id).text();
    if (text == '' && $(id).length > 0) {
        text = $(id).val();
    }
    if (text == '') {
        pcjson_com_msg($(selector), "复制失败，请手动复制");
        return false;
    }
    var textArea = document.createElement("textarea");
    textArea.style.position = 'fixed';
    textArea.style.top = 0;
    textArea.style.left = 0;
    textArea.style.width = '2em';
    textArea.style.height = '2em';
    textArea.style.padding = 0;
    textArea.style.border = 'none';
    textArea.style.outline = 'none';
    textArea.style.boxShadow = 'none';
    textArea.style.background = 'transparent';
    textArea.value = text;
    document.body.appendChild(textArea);
    textArea.select();
    try {
        var msg = document.execCommand('copy') ? '成功' : '失败';
        pcjson_com_msg($(selector), "复制" + msg);
    } catch (err) {
        pcjson_com_msg($(selector), "复制失败,请手动复制");
    }
    document.body.removeChild(textArea);
}

function tj() {
    //document.write("<div style=\'display:none\'><script type=\'text/javascript\' src=\'\'></script></div>");
}

function pcjson_convert(type, t) {
    var text = $("#content").val();
    t = (typeof (t) == "undefined" || t == '') ? 0 : t;
    return text.length <= 0 ? (pcjson_com_msg($("#content"), "请输入要处理的内容"), $("#content").focus(), !1) : 6e3 < text.length ? (pcjson_com_msg($("#content"), "需处理的内容长度不能超过6000!"), $("#content").focus(), !1) : (void $.ajax({
        type: "POST",
        dataType: "json",
        url: "/api/",
        data: {
            text: text,
            id: t,
            type: type
        },
        beforeSend: function () {

        },
        success: function (t) {
            if (1 != t.status) return pcjson_com_msg($("#content"), t.msg),
                !1;
            hightout(t.msg);
        },
        complete: function () {

        },
        error: function () {
            pcjson_com_msg($("#content"), "处理失败");
        }
    }))
}