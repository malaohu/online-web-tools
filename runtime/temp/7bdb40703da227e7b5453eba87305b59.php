<?php /*a:1:{s:67:"/data/wwwroot/tool.ruyo.net/application/admin/view/index/login.html";i:1633512212;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>管理员登陆</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/login.css">
    <script src="/static/js/jquery-3.3.1.min.js"></script>
    <script src="/static/layui/layui.js"></script>
    <style>
        .ewm {
            position: relative;
            text-align: center;
        }

        .ewm .ygq {
            display: none;
            position: absolute;
            width: 100%;
            height: 148px;
            line-height: 148px;
            font-size: 18px;
            color: #000;
            font-weight: 900;
            background: rgba(255, 255, 255, 0.92);
            opacity: .9;
        }
    </style>
</head>

<body id="login">
<div class="login">
    <h2>管理员登录</h2>
    <form class="layui-form" method="post" target="_blank" action="">
        <div class="layui-form-item">
            <div class="ewm">
                <div class="ygq">二维码已过期</div>
                <img src="data:image/png;base64,<?php echo htmlentities($qrcode); ?>" id="qq" uuid="<?php echo htmlentities($qrsig); ?>"/>
            </div>
        </div>
    </form>

    <script>
        layui.use('form', function () {
            const form = layui.form;
            const layer = layui.layer;
            var interval, num = 0;
            interval = setInterval(function () {
                var uuid = $('#qq').attr("uuid");
                var url = "";
                ++num;
                if (num >= 30) {
                    clearInterval(interval);
                    $('.ygq').show();
                }
                $.ajax({
                    type: "POST", url: url, data: {qrsig: uuid}, success: function (data) {
                        if (data.code == 1) {
                            clearInterval(interval);
                            layer.msg(data.msg);
                            location.href = './index.html';
                            $('.ygq').show();
                        } else {
                            if (data.msg == '二维码已失效') {
                                clearInterval(interval);
                                $('.ygq').show();
                            }
                        }
                    }
                });
            }, 1000);
        });
    </script>
</div>
</body>

</html>