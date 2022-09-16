$(function () {
    $("#btnToRem").click(function () {
        var text = $("#content").val();
        var rem = $("#txtRemIntalize").val();
        if (text == "") {
            pcjson_com_msg($("#content"),"请填写要转换的CSS");
        }
        else if (rem == "") {
             pcjson_com_msg($("#content"),"请填写1rem等于多少px值");
        }else if (rem <= 0) {
            pcjson_com_msg($("#content"),"请填写正确的px值");
        }
        else {
            text = cssChanger['format']($("#content").val());
            var arr = text.split("\n");
            var sb = '';
            for (var i = 0; i < arr.length; i++) {
                var line = arr[i];
                sb += line.replace(/\d+px/g, function (px) {
                    if ($("#chkIgnoreBorder").is(":checked")) {
                        if (!/border:/ig.test(line)) {
                            return (parseInt(px) / parseInt(rem)) + "rem";
                        }else {
                            return px;
                        }
                    }else {
                        return (parseInt(px) / parseInt(rem)) + "rem";
                    }
                }) + "\n";
            }
            var source = $("#content").val();
            var sourceArr = source.split("\n");
            var len = sourceArr.length;
            if (len > 1) {
                sb = cssChanger['format'](sb);
            }else {
               sb = cssChanger['pack'](sb);
            }
            hightout(sb);
        }
    });
});