var fhtml = false;
var fjs = false;
var fcss = false;
var fself = false;
$("pre").hide();
$("input[name=type]").bind("click", function () {
    var thisv = $(this).val();
    if (thisv == 3) {
        var set = $(this).attr("checked");
        if (set == 'checked') {
            fhtml = false;
            fjs = false;
            fcss = false;
            fself = true;
            $("input[name=type]").eq(0).attr("checked", false);
            $("input[name=type]").eq(1).attr("checked", false);
            $("input[name=type]").eq(2).attr("checked", false);
            $("#place").show();
        }
        else {
            fhtml = false;
            fself = false;
            $("#place").hide();
        }
    }
    else {
        var set = $(this).attr("checked");
        $("#place").hide();
        $("input[name=type]").eq(3).attr("checked", false);
        switch (thisv) {
            case "0": if (set == 'checked') { fhtml = true; fself = false; } else { fhtml = false; } break;
            case "1": if (set == 'checked') { fjs = true; fself = false; } else { fjs = false; } break;
            case "2": if (set == 'checked') { fcss = true; fself = false; } else { fcss = false; } break;
        }
    }

});

function Filter() {
    var s = $("#content").val();
    if (fjs)
        s = s.replace(/<\s*script[^>]*>(.|[\r\n])*?<\s*\/script[^>]*>/gi, '');
    if (fcss)
        s = s.replace(/<\s*style[^>]*>(.|[\r\n])*?<\s*\/style[^>]*>/gi, '');
    if (fhtml) {
        s = s.replace(/<\/?[^>]+>/g, '');
        s = s.replace(/\&[a-z]+;/gi, '');
    }
    if (fself)
        s = s.replace(new RegExp($("#preplace").val(), 'g'), $("#nextplace").val());
    hightout(s);
}
function Empty() { $("#content").val(""); $("#result").html(''); $("#content").select();$("pre").hide(); }
$("pre").hide();
function hightout(v){
	$("pre").show();
	$('#result').html(hljs.highlightAuto(v).value);
}