<?php /*a:1:{s:66:"/data/wwwroot/tool.ruyo.net/application/admin/view/web/footer.html";i:1633614022;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>网站配置</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/style.css">
    <script src="/static/layui/layui.js"></script>
    <script src="/static/js/jquery-3.3.1.min.js"></script>
    <script src="/static/js/vue.min.js"></script>
    <script src="/static/admin/js/config.js"></script>
    <script src="//cdn.staticfile.org/codemirror/5.55.0/codemirror.min.js"></script>
    <script src="//cdn.staticfile.org/codemirror/5.55.0/addon/mode/simple.min.js"></script>
    <link rel="stylesheet" href="//cdn.staticfile.org/codemirror/5.55.0/codemirror.min.css">
    <script src="//cdn.staticfile.org/codemirror/5.55.0/mode/htmlmixed/htmlmixed.js"></script>
    <script src="//cdn.staticfile.org/codemirror/5.55.0/mode/xml/xml.js"></script>
    <script src="//cdn.staticfile.org/codemirror/5.55.0/mode/javascript/javascript.js"></script>
    <script src="//cdn.staticfile.org/codemirror/5.55.0/mode/css/css.js"></script>
    <script src="//cdn.staticfile.org/codemirror/5.55.0/mode/clike/clike.js"></script>
    <script src="https://cdn.staticfile.org/codemirror/5.55.0/mode/php/php.min.js"></script>
    <style>
        .CodeMirror {
            height: 500px;
        }
    </style>
</head>
<body class="p20">
<fieldset class="layui-elem-field layui-field-title">
    <legend>全局底部</legend>
</fieldset>
<form class="layui-form " action="" method="post">
    <div class="layui-form-item" style="border: 1px solid #ddd;">
        <textarea class="form-control" id="Xcode" name="Xcode"><?php echo htmlentities($content); ?></textarea>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit="" lay-filter="submit">保存</button>
        </div>
    </div>
</form>
<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("Xcode"), {
        matchBrackets: true,
        mode: "application/x-httpd-php",
        selectionPointer: true,
        lineNumbers: true,
        matchBrackets: true,
        indentUnit: 4,
        indentWithTabs: true,
        lineWrapping: true,
    });
</script>
<script src="/static/admin/js/script.js"></script>
</body>
</html>