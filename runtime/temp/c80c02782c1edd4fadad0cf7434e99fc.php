<?php /*a:1:{s:71:"/data/wwwroot/tool.ruyo.net/application/admin/view/index/web_cache.html";i:1633614694;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>清除缓存</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/style.css">
    <script src="/static/layui/layui.js"></script>
    <script src="/static/js/jquery-3.3.1.min.js"></script>
    <script src="/static/js/vue.min.js"></script>
    <script src="/static/admin/js/config.js"></script>
</head>
<body class="p20">





<button id="del" target="_blank" class="layui-btn">清除缓存
</button>
    <script type="text/javascript">
        $(function() {
            $('#del').click(function() {
                layui.use('layer', function() {
                    $.post('',{type:'ok'},function () {
                        layer.msg('<h2>清除成功</h2> <p id="">页面自动  <a id="href" href="web_cache.html">跳转</a> 等待时间： <b id="wait">3</b></p> ', {
                            icon: 1,
                            shade: 0.5,
                        });
                        !(function run(wait) {
                            if (wait <= 0) {
                                location.href = 'web_cache.html';
                            } else {
                                wait--;
                                setTimeout(function() {
                                    document.getElementById('wait').innerHTML = wait;
                                    run(wait);
                                }, 1000);
                            }
                        })(3);
                    });
                });
            });
        });
    </script>
<script src="/static/admin/js/script.js"></script>
</body>
</html>