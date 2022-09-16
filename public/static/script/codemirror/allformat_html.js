$(function () {
    $('select').change(beautify);
});
var the = {
    use_codemirror: (!window.location.href.match(/without-codemirror/)),
    beautify_in_progress: false,
    editor: null // codemirror editor
};

function run_tests() {
    var st = new SanityTest();
    run_beautifier_tests(st, Urlencoded, js_beautify, html_beautify, css_beautify);
    JavascriptObfuscator.run_tests(st);
    P_A_C_K_E_R.run_tests(st);
    Urlencoded.run_tests(st);
    MyObfuscate.run_tests(st);
    var results = st.results_raw()
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/ /g, '&nbsp;')
                .replace(/\r/g, '·')
                .replace(/\n/g, '<br>');
    $('#testresults').html(results).show();
}


function any(a, b) {
    return a || b;
}
function unpacker_filter(source) {
    var trailing_comments = '',
                comment = '',
                unpacked = '',
                found = false;

    // cut trailing comments
    do {
        found = false;
        if (/^\s*\/\*/.test(source)) {
            found = true;
            comment = source.substr(0, source.indexOf('*/') + 2);
            source = source.substr(comment.length).replace(/^\s+/, '');
            trailing_comments += comment + "\n";
        } else if (/^\s*\/\//.test(source)) {
            found = true;
            comment = source.match(/^\s*\/\/.*/)[0];
            source = source.substr(comment.length).replace(/^\s+/, '');
            trailing_comments += comment + "\n";
        }
    } while (found);

    var unpackers = [P_A_C_K_E_R, Urlencoded, /*JavascriptObfuscator,*/MyObfuscate];
    for (var i = 0; i < unpackers.length; i++) {
        if (unpackers[i].detect(source)) {
            unpacked = unpackers[i].unpack(source);
            if (unpacked != source) {
                source = unpacker_filter(unpacked);
            }
        }
    }

    return trailing_comments + source;
}


function beautify() {
    if (the.beautify_in_progress) return;

    the.beautify_in_progress = true;

    var source = the.editor ? the.editor.getValue() : $('#code').val(),
                output,
                opts = {};

    opts.indent_size = $('#tabsize').val();
    opts.indent_char = opts.indent_size == 1 ? '\t' : ' ';
    opts.max_preserve_newlines = $('#max-preserve-newlines').val();
    opts.preserve_newlines = opts.max_preserve_newlines !== "-1";
    opts.keep_array_indentation = false;
    opts.break_chained_methods = false;
    opts.indent_scripts = "keep";
    opts.brace_style = $('#brace-style').val();
    opts.space_before_conditional = false;
    opts.unescape_strings = false;
    opts.jslint_happy = false;
    opts.end_with_newline = false;
    opts.wrap_line_length = $('#wrap-line-length').val();

    if (looks_like_html(source)) {
        output = html_beautify(source, opts);
    } else if (the.editor.options.mode == 'css') {
        output = css_beautify(source);
    } else {
        if ($('#detect-packers').prop('checked')) {
            source = unpacker_filter(source);
        }
        output = js_beautify(source, opts);
    }
    if (the.editor) {
        the.editor.setValue(output);
    } else {
        $('#code').val(output);
    }

    the.beautify_in_progress = false;
}

function looks_like_html(source) {

    var trimmed = source.replace(/^[ \t\n\r]+/, '');
    var comment_mark = '<' + '!-' + '-';
    return (trimmed && (trimmed.substring(0, 1) === '<' && trimmed.substring(0, 4) !== comment_mark));
}

function Clean() {
    $('#code').val("");
    the.editor.setValue("");
}