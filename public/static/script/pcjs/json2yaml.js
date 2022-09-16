function yamlFormat(id) {
    let $code = $('#' + id);

    try {
        let yaml = YAML.parse($code.val());

        let fyaml = YAML.stringify(yaml);
        hightout(JSON.stringify(yaml, null, "  "));
        $('#format-message').removeClass('alert-danger').addClass('alert-success').html('Valid YAML').removeClass('d-none').addClass('d-block');
    } catch (e) {
        let message = htmlspecialchars(e.message);
        message = message.replace(/[\r\n]+/g, '<br>');
        $('#format-message').removeClass('alert-success').addClass('alert-danger').html(message).removeClass('d-none').addClass('d-block');
    }
}
function htmlspecialchars(str) {
    str = str.replace(/&/g, '&amp;');
    str = str.replace(/</g, '&lt;');
    str = str.replace(/>/g, '&gt;');
    str = str.replace(/"/g, '&quot;');
    str = str.replace(/'/g, '&#039;');

    return str;
}

function json2yaml(id) {
    let $code = $('#' + id);

    try {
        let json = JSON.parse($code.val());

        let fjson = YAML.stringify(json);
        hightout(YAML.stringify(json));
        $('#format-message').removeClass('alert-danger').addClass('alert-success').html('Valid JSON').removeClass('d-none').addClass('d-block');
    } catch (e) {

        let message = htmlspecialchars(e.message);
        message = message.replace(/[\r\n]+/g, '<br>');
        $('#format-message').removeClass('alert-success').addClass('alert-danger').html(message).removeClass('d-none').addClass('d-block');
    }
}