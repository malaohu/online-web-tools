var current_json = '';
var current_json_str = '';
var xml_flag = false;
var zip_flag = false;
$('.tip').tooltip();
function init() {
    xml_flag = false;
    zip_flag = false;
}
$('#json-src').keyup(function () {
    init();
    var content = $.trim($(this).val());
    var result = '';
    if (content != '') {
        //如果是xml,那么转换为json
        if (content.substr(0, 1) === '<' && content.substr(-1, 1) === '>') {
            try {
                var json_obj = $.xml2json(content);
                content = JSON.stringify(json_obj);
            } catch (e) {
                result = '解析错误：<span style="color: #f1592a;font-weight:bold;">' + e.message + '</span>';
                current_json_str = result;
                $('#json-target').html(result);
                return false;
            }

        }
        try {
            current_json = jsonlint.parse(content);
            current_json_str = JSON.stringify(current_json);
            result = new Fjson(content, 4).toString();
        } catch (e) {
            result = '<span style="color: #f1592a;font-weight:bold;">' + e + '</span>';
            current_json_str = result;
        }

        $('#json-target').html(result);
    } else {
        $('#json-target').html('');
    }

});
$('#xml').click(function () {
    if (xml_flag) {
        $('#json-src').keyup();
    } else {
        var result = $.json2xml(current_json);
        $('#json-target').html('<textarea style="width:100%;height:100%;border:0;resize:none;">' + result + '</textarea>');
        xml_flag = true;
    }
});
$('#zip').click(function () {
    if (zip_flag) {
        $('#json-src').keyup();
    } else {
        $('#json-target').html(current_json_str);
        zip_flag = true;
    
    }

});
$('#clear').click(function () {
    $('#json-src').val('');
    $('#json-target').html('');
});
$('.save').click(function () {
    var content = JSON.stringify(current_json);
    $('#txt-content').val(content);
    $("#form-save").submit();
});
$('#json-src').keyup();