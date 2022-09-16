<?php /*a:1:{s:65:"/data/wwwroot/tool.ruyo.net/application/admin/view/web/index.html";i:1633849362;}*/ ?>
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
            height: 200px;
        }
        .layui-form-item .layui-input-inline, .layui-input-block {
            width: 80%;
        }
        .layui-form-label {
            width: 180px;
        }
        .layui-input-block {
            margin-left: 210px;
        }
    </style>
</head>
<body class="p20">

<fieldset class="layui-elem-field layui-field-title">
    <legend>全局head插件管理</legend>
</fieldset>
<form class="layui-form " action="" method="post">
    <?php foreach($web as $key=>$vo): if(is_array($vo)): ?>
    <div class="layui-form-item">
        <label class="layui-form-label"><?php echo htmlentities(pageapi($key)); ?>页面</label>
        <div class="layui-input-block">
            <div>
                <button class="layui-btn" onclick="window.open('http://zxgj.16400.cn/<?php echo htmlentities($key); ?>/')" type="button">打开页面</button>
            </div>
            <?php foreach($vo as $key2=>$vo2): ?>
            <div><?php echo htmlentities(pageapi($key2)); ?>：<input type="text" name="web[<?php echo htmlentities($key); ?>][<?php echo htmlentities($key2); ?>]" value="<?php echo htmlentities($vo2); ?>" class="layui-input"></div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php else: ?>
    <div class="layui-form-item">
        <label class="layui-form-label"><?php echo htmlentities(pageapi($key)); ?>管理</label>
        <div class="layui-input-block">
            <div style="border: 1px solid #ddd;">
            <textarea class="form-control" id="Xcode" name="web[<?php echo htmlentities($key); ?>]"><?php echo htmlentities($content); ?></textarea>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
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