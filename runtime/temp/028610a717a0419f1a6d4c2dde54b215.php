<?php /*a:5:{s:75:"/data/wwwroot/tool.ruyo.net/application/index/view/index/bootstrapicon.html";i:1634031658;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title><?php echo htmlentities(app('config')->get('web.bootstrapicon.title')); ?></title>
    <meta name="applicable-device" content="pc,mobile"/>
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.bootstrapicon.keywords')); ?>"/>
    <meta name="description" content="<?php echo htmlentities(app('config')->get('web.bootstrapicon.description')); ?>"/>
    <meta name="renderer" content="webkit"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon"/>
    <link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/static/style/tool.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">.bs-glyphicons {
        margin: 0 -10px 20px;
        overflow: hidden
    }

    .bs-glyphicons-list {
        padding-left: 0;
        list-style: none
    }

    .bs-glyphicons li {
        float: left;
        width: 25%;
        height: 115px;
        padding: 10px;
        font-size: 10px;
        line-height: 1.4;
        text-align: center;
        background-color: #f9f9f9;
        border: 1px solid #fff
    }

    .bs-glyphicons .glyphicon {
        margin-top: 5px;
        margin-bottom: 10px;
        font-size: 24px
    }

    .bs-glyphicons .glyphicon-class {
        display: block;
        text-align: center;
        word-wrap: break-word
    }

    .bs-glyphicons li:hover {
        color: #fff;
        background-color: #0b72b8
    }

    @media (min-width: 768px) {
        .bs-glyphicons {
            margin-right: 0;
            margin-left: 0
        }

        .bs-glyphicons li {
            width: 12.5%;
            font-size: 12px
        }
    }
    </style>
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <?php echo app('config')->get('web.header'); ?>
</head>
<body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
    <div class="jz container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar"><span class="sr-only">如有在线工具网</span> <span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="/" title="如有在线工具网"><em class="logo_ico glyphicon glyphicon-wrench"></em>如有在线工具网</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav" id="top_menu">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">JSON工具<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu ul-list">
                        <li><a href="/json/">Json格式化</a></li>
                        <li><a href="/jsonudview/"> Json格式化(上下)</a></li>
                        <li><a href="/jsonlrview/">Json格式化(左右)</a></li>
                        <li><a href="/jsonzip/">Json在线压缩转义</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/json2cs/">Json生成C#实体类</a></li>
                        <li><a href="/json2java/"> Json生成Java实体类</a></li>
                        <li><a href="/json2go/">Json生成Go结构体</a></li>
                        <li><a href="/sql2java/">SQL转Java实体类</a></li>
                        <li><a href="/json2xml/">XML和Json在线互转</a></li>
                        <li><a href="/excel2json/">Excel/CSV转Json格式</a></li>
                        <li><a href="/json2excel/">Json转Excel/CSV格式</a></li>
                        <li><a href="/json2get/">JSON和GET参数互转</a></li>
                        <li><a href="/json2yaml/">JSON转YAML</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">格式化转换<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu ul-list">
                        <li><a href="/formathtml/">HTML格式化/压缩</a></li>
                        <li><a href="/formatcss/" style="color:#f30"> CSS格式化/压缩</a></li>
                        <li><a href="/formatjs/">JS格式化/压缩</a></li>
                        <li><a href="/endecodejs/">JS加密/解密</a></li>
                        <li><a href="/confundirjs/"> JS代码混合加密</a></li>
                        <li><a href="/formatsql/">SQL压缩/格式化</a></li>
                        <li><a href="/formatphp/">PHP代码格式化工具</a></li>
                        <li><a href="/formatxml/">XML压缩/格式化 </a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/htmloutjs/" style="color:#f30">Html/JS互转</a></li>
                        <li><a href="/htmlescape/"> Html转义工具</a></li>
                        <li><a href="/html2cj/"> Html转C#/JSP</a></li>
                        <li><a href="/html2php/">Html转PHP代码</a></li>
                        <li><a href="/html2all/">Html转ASP/Perl</a></li>
                        <li><a href="/htmlfromcsv/">Excel转HTML表格</a></li>
                        <li><a href="/htmltable/">Html表格生成器</a></li>
                        <li><a href="/htmlmarkdown/">HTML/MarkDown互转</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/regex/" style="color:green">正则表达式测试工具</a></li>
                        <li><a href="/regexcode/">正则生成代码</a></li>
                        <li><a href="/formatfilter/">Html过滤工具</a></li>
                        <li><a href="/runjs/">运行Js/html/css</a></li>
                        <li><a href="/xpath/">Xpath工具</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">加解密编码<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu ul-list">
                        <li><a href="/md5/">MD5加密工具</a></li>
                        <li><a href="/urlcode/">URL网址16进制加密</a></li>
                        <li><a href="/urlthunder/">迅雷旋风URL加解密</a></li>
                        <li><a href="/base64/"> Base64加密/解密</a></li>
                        <li><a href="/escape/">Escape加密/解密</a></li>
                        <li><a href="/deencrypt/">对称加密/解密</a></li>
                        <li><a href="/shaencrypt/">SHA/SHA256加密</a></li>
                        <li><a href="/allencrypt/">散列/哈希加密大全</a></li>
                        <li><a href="/morse/">摩尔斯电码加解密</a></li>
                        <li><a href="/password/">密码生成器</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/uuid/">UUID在线生成</a></li>
                        <li><a href="/guid/">GUID在线生成</a></li>
                        <li><a href="/barcode/">条形码生成器</a></li>
                        <li><a href="/ip2long/">IP/数字地址转换</a></li>
                        <li><a href="/img2base64/" style="color:#f00"> 图片转Base64</a></li>
                        <li><a href="/utf8/">UTF-8转GBK</a></li>
                        <li><a href="/unicode/">Unicode/ASCII转换</a></li>
                        <li><a href="/ascii/">ASCII编码/解码</a></li>
                        <li><a href="/urlencode/">URL编码/解码</a></li>
                        <li><a href="/keyboardcode/">KeyCode键盘按键码</a></li>
                        <li><a href="/androidkeycode/">Android按键码</a></li>
                        <li><a href="/keyboardtest/">键盘测试工具</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">文本数字<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu ul-list">
                        <li><a href="/editor/">Html在线编辑器</a></li>
                        <li><a href="/autoformat/" style="color:#f30"> 文章自动排版</a></li>
                        <li><a href="/caiji/" style="color:green"> 文章内容采集</a></li>
                        <li><a href="/jianfan/">简繁字体转换</a></li>
                        <li><a href="/pinyin/">汉字转为拼音</a></li>
                        <li><a href="/huoxingwen/">火星文转换器</a></li>
                        <li><a href="/txtreplace/">文本内容替换</a></li>
                        <li><a href="/textdiff/"> 文本内容对比</a></li>
                        <li><a href="/txtcount/">在线统计字数工具</a></li>
                        <li><a href="/quchong/">内容去重工具</a></li>
                        <li><a href="/wenzitexiao/">文字特效工具</a></li>
                        <li><a href="/zipstringtext/">字符串文本压缩工具</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/camelcase/" style="color:blue">驼峰与下划线互转</a></li>
                        <li><a href="/quanbaojiao/">全角半角转换</a></li>
                        <li><a href="/enlower/">英文字母大小写转换</a></li>
                        <li><a href="/rmbdaxie/">人民币大写转换工具</a></li>
                        <li><a href="/random/">随机数生成器</a></li>
                        <li><a href="/unixtime/"> Unix时间戳在线转换</a></li>
                        <li><a href="/hexconvert/">常用进制转换工具</a></li>
                        <li><a href="/hexrgb/"> RGB颜色在线转换</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">网络<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/ip/">IP地址归属地查询</a></li>
                        <li><a href="/websocket/">Websocket测试</a></li>
                        <li><a href="/browserinfo/">获取浏览器信息</a></li>
                        <li><a href="/dns/">公共DNS</a></li>
                        <li><a href="/alldns/">各地区公共DNS</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">站长<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu ul-list">
                        <li><a href="/checkweixin/" style="color:red">微信域名检测工具</a></li>
                        <li><a href="/htaccess2nginx/" style="color:green">htaccess转nginx</a></li>
                        <li><a href="/shortcut/">生成桌面快捷方式</a></li>
                        <li><a href="/px2rem/">rem与px转换工具</a></li>
                        <li><a href="/favicon/">在线制作ico图标</a></li>
                        <li><a href="/createmeta/">生成网页Meta标签</a></li>
                        <li><a href="/refresh/">在线定时刷新网址</a></li>
                        <li><a href="/tiaoseban/">在线调色板</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/gzip/">网站Gzip压缩检测</a></li>
                        <li><a href="/checkurl/">网站死链检测</a></li>
                        <li><a href="/whois/"> Whois查询工具</a></li>
                        <li><a href="/chaicp/">ICP网站备案查询</a></li>
                        <li><a href="/chameta/">Meta标签优化分析</a></li>
                        <li><a href="/checkkeyword/">网页关键词密度检测</a></li>
                        <li><a href="/webstatus/">HTTP状态码查询</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">计算<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/nianlvli/">利率计算器在线</a></li>
                        <li><a href="/subnetmask/">子网掩码计算器</a></li>
                        <li><a href="/calculator/">在线科学计算器</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">其他<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/tuya/">在线涂鸦画板</a></li>
                        <li><a href="/shizhong/">在线时钟</a></li>
                        <li><a href="/worldtime/">世界各地时间</a></li>
                        <li><a href="/capital/">世界各国首都查询</a></li>
                        <li><a href="/currency/">世界各地货币查询</a></li>
                        <li><a href="/areacode/">世界各国区号时差查询</a></li>
                        <li><a href="/jieri/">世界节日查询</a></li>
                        <li><a href="/shaoshuminzu/">全国少数民族分布查询</a></li>
                        <li><a href="/chaodai/">中国历史朝代时间查询表</a></li>
                        <li><a href="/tesufuhao/">特殊符号大全</a></li>
                        <li><a href="/lishishangdejintian/">历史上的今天</a></li>
                    </ul>
                <li class="dropdown">
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">对照列表<span
                        class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/useragent/">常用User-Agent</a></li>
                        <li><a href="/contenttype/">Content-Type对照表</a></li>
                        <li><a href="/requestmethod/">Request请求大全</a></li>
                        <li><a href="/httpheader/">HTTP请求头大全</a></li>
                        <li><a href="/pagecode/"> HTTP状态码</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/asciicode/">ASCII对照表</a></li>
                        <li><a href="/htmlescapechar/">HTML特殊字符转义</a></li>
                        <li><a href="/ports/">常见端口大全</a></li>
                        <li><a href="/bootstrapicon/">Bootstrap字体图标</a></li>
                        <li><a href="/androidmanifest/"> Android Manifest权限大全</a></li>
                        <li><a href="/linuxcmd/">Linux常用命令大全</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 col10main">
            <div class="accordion" id="accordion2">
                <div class="accordion-group">
                    <ul class="nav nav-tabs hbflag">
                        <li role="presentation"><a href="/useragent/">常用User-Agent</a></li>
                        <li role="presentation"><a href="/contenttype/">Content-Type对照表</a></li>
                        <li role="presentation"><a href="/requestmethod/">Request请求大全</a></li>
                        <li role="presentation"><a href="/httpheader/">HTTP请求头大全</a></li>
                        <li role="presentation"><a href="/pagecode/"> HTTP状态码</a></li>
                        <li role="presentation"><a href="/asciicode/">ASCII对照表</a></li>
                        <li role="presentation" class="active"><a href="/bootstrapicon/">Bootstrap字体图标</a></li>
                        <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                                                    href="javascript:;" role="button"
                                                                    aria-haspopup="true" aria-expanded="false">更多工具<span
                                class="caret"> </span></a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a href="/htmlescapechar/">HTML特殊字符转义</a></li>
                                <li role="presentation"><a href="/ports/">常见端口大全</a></li>
                                <li role="presentation"><a href="/androidmanifest/"> Android Manifest权限大全</a></li>
                                <li role="presentation"><a href="/linuxcmd/">Linux常用命令大全</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <blockquote><p>Bootstrap前端框架Glyphicons字体图标</p>
                                <footer>
                                    Bootstrap前端框架Glyphicons字体图标库对照表:Bootstrap前端UI,Glyphicons字体图标调用,Bootstrap按钮字体图标对照表,包括250多个来自Glyphicon
                                    Halflings的字体图标.项目中引用Bootstrap相关文件后即可直接调用下列图标<code>class="glyphicon
                                    glyphicon-xxxx"</code></footer>
                            </blockquote>
                        </div>
                        <div class="panel-body">
                            <div class="bs-glyphicons">
                                <ul class="bs-glyphicons-list">
                                    <li><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-asterisk</span></li>
                                    <li><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-plus</span></li>
                                    <li><span class="glyphicon glyphicon-euro" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-euro</span></li>
                                    <li><span class="glyphicon glyphicon-eur" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-eur</span></li>
                                    <li><span class="glyphicon glyphicon-minus" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-minus</span></li>
                                    <li><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-cloud</span></li>
                                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-envelope</span></li>
                                    <li><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-pencil</span></li>
                                    <li><span class="glyphicon glyphicon-glass" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-glass</span></li>
                                    <li><span class="glyphicon glyphicon-music" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-music</span></li>
                                    <li><span class="glyphicon glyphicon-search" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-search</span></li>
                                    <li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-heart</span></li>
                                    <li><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-star</span></li>
                                    <li><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-star-empty</span></li>
                                    <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-user</span></li>
                                    <li><span class="glyphicon glyphicon-film" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-film</span></li>
                                    <li><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-th-large</span></li>
                                    <li><span class="glyphicon glyphicon-th" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-th</span></li>
                                    <li><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-th-list</span></li>
                                    <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-ok</span></li>
                                    <li><span class="glyphicon glyphicon-remove" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-remove</span></li>
                                    <li><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-zoom-in</span></li>
                                    <li><span class="glyphicon glyphicon-zoom-out" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-zoom-out</span></li>
                                    <li><span class="glyphicon glyphicon-off" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-off</span></li>
                                    <li><span class="glyphicon glyphicon-signal" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-signal</span></li>
                                    <li><span class="glyphicon glyphicon-cog" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-cog</span></li>
                                    <li><span class="glyphicon glyphicon-trash" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-trash</span></li>
                                    <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-home</span></li>
                                    <li><span class="glyphicon glyphicon-file" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-file</span></li>
                                    <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-time</span></li>
                                    <li><span class="glyphicon glyphicon-road" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-road</span></li>
                                    <li><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-download-alt</span></li>
                                    <li><span class="glyphicon glyphicon-download" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-download</span></li>
                                    <li><span class="glyphicon glyphicon-upload" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-upload</span></li>
                                    <li><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-inbox</span></li>
                                    <li><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-play-circle</span></li>
                                    <li><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-repeat</span></li>
                                    <li><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-refresh</span></li>
                                    <li><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-list-alt</span></li>
                                    <li><span class="glyphicon glyphicon-lock" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-lock</span></li>
                                    <li><span class="glyphicon glyphicon-flag" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-flag</span></li>
                                    <li><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-headphones</span></li>
                                    <li><span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-volume-off</span></li>
                                    <li><span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-volume-down</span></li>
                                    <li><span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-volume-up</span></li>
                                    <li><span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-qrcode</span></li>
                                    <li><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-barcode</span></li>
                                    <li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-tag</span></li>
                                    <li><span class="glyphicon glyphicon-tags" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-tags</span></li>
                                    <li><span class="glyphicon glyphicon-book" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-book</span></li>
                                    <li><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-bookmark</span></li>
                                    <li><span class="glyphicon glyphicon-print" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-print</span></li>
                                    <li><span class="glyphicon glyphicon-camera" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-camera</span></li>
                                    <li><span class="glyphicon glyphicon-font" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-font</span></li>
                                    <li><span class="glyphicon glyphicon-bold" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-bold</span></li>
                                    <li><span class="glyphicon glyphicon-italic" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-italic</span></li>
                                    <li><span class="glyphicon glyphicon-text-height" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-text-height</span></li>
                                    <li><span class="glyphicon glyphicon-text-width" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-text-width</span></li>
                                    <li><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-align-left</span></li>
                                    <li><span class="glyphicon glyphicon-align-center" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-align-center</span></li>
                                    <li><span class="glyphicon glyphicon-align-right" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-align-right</span></li>
                                    <li><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-align-justify</span></li>
                                    <li><span class="glyphicon glyphicon-list" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-list</span></li>
                                    <li><span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-indent-left</span></li>
                                    <li><span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-indent-right</span></li>
                                    <li><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-facetime-video</span></li>
                                    <li><span class="glyphicon glyphicon-picture" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-picture</span></li>
                                    <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-map-marker</span></li>
                                    <li><span class="glyphicon glyphicon-adjust" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-adjust</span></li>
                                    <li><span class="glyphicon glyphicon-tint" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-tint</span></li>
                                    <li><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-edit</span></li>
                                    <li><span class="glyphicon glyphicon-share" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-share</span></li>
                                    <li><span class="glyphicon glyphicon-check" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-check</span></li>
                                    <li><span class="glyphicon glyphicon-move" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-move</span></li>
                                    <li><span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-step-backward</span></li>
                                    <li><span class="glyphicon glyphicon-fast-backward" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-fast-backward</span></li>
                                    <li><span class="glyphicon glyphicon-backward" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-backward</span></li>
                                    <li><span class="glyphicon glyphicon-play" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-play</span></li>
                                    <li><span class="glyphicon glyphicon-pause" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-pause</span></li>
                                    <li><span class="glyphicon glyphicon-stop" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-stop</span></li>
                                    <li><span class="glyphicon glyphicon-forward" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-forward</span></li>
                                    <li><span class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-fast-forward</span></li>
                                    <li><span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-step-forward</span></li>
                                    <li><span class="glyphicon glyphicon-eject" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-eject</span></li>
                                    <li><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-chevron-left</span></li>
                                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-chevron-right</span></li>
                                    <li><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-plus-sign</span></li>
                                    <li><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-minus-sign</span></li>
                                    <li><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-remove-sign</span></li>
                                    <li><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-ok-sign</span></li>
                                    <li><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-question-sign</span></li>
                                    <li><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-info-sign</span></li>
                                    <li><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-screenshot</span></li>
                                    <li><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-remove-circle</span></li>
                                    <li><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-ok-circle</span></li>
                                    <li><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-ban-circle</span></li>
                                    <li><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-arrow-left</span></li>
                                    <li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-arrow-right</span></li>
                                    <li><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-arrow-up</span></li>
                                    <li><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-arrow-down</span></li>
                                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-share-alt</span></li>
                                    <li><span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-resize-full</span></li>
                                    <li><span class="glyphicon glyphicon-resize-small" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-resize-small</span></li>
                                    <li><span class="glyphicon glyphicon-exclamation-sign"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-gift" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-gift</span></li>
                                    <li><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-leaf</span></li>
                                    <li><span class="glyphicon glyphicon-fire" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-fire</span></li>
                                    <li><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-eye-open</span></li>
                                    <li><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-eye-close</span></li>
                                    <li><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-warning-sign</span></li>
                                    <li><span class="glyphicon glyphicon-plane" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-plane</span></li>
                                    <li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-calendar</span></li>
                                    <li><span class="glyphicon glyphicon-random" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-random</span></li>
                                    <li><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-comment</span></li>
                                    <li><span class="glyphicon glyphicon-magnet" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-magnet</span></li>
                                    <li><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-chevron-up</span></li>
                                    <li><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-chevron-down</span></li>
                                    <li><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-retweet</span></li>
                                    <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-shopping-cart</span></li>
                                    <li><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-folder-close</span></li>
                                    <li><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-folder-open</span></li>
                                    <li><span class="glyphicon glyphicon-resize-vertical"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-resize-horizontal"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-hdd</span></li>
                                    <li><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-bullhorn</span></li>
                                    <li><span class="glyphicon glyphicon-bell" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-bell</span></li>
                                    <li><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-certificate</span></li>
                                    <li><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-thumbs-up</span></li>
                                    <li><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-thumbs-down</span></li>
                                    <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-hand-right</span></li>
                                    <li><span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-hand-left</span></li>
                                    <li><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-hand-up</span></li>
                                    <li><span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-hand-down</span></li>
                                    <li><span class="glyphicon glyphicon-circle-arrow-right"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-circle-arrow-left"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-circle-arrow-up"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-circle-arrow-down"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-globe" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-globe</span></li>
                                    <li><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-wrench</span></li>
                                    <li><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-tasks</span></li>
                                    <li><span class="glyphicon glyphicon-filter" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-filter</span></li>
                                    <li><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-briefcase</span></li>
                                    <li><span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-fullscreen</span></li>
                                    <li><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-dashboard</span></li>
                                    <li><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-paperclip</span></li>
                                    <li><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-heart-empty</span></li>
                                    <li><span class="glyphicon glyphicon-link" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-link</span></li>
                                    <li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-phone</span></li>
                                    <li><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-pushpin</span></li>
                                    <li><span class="glyphicon glyphicon-usd" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-usd</span></li>
                                    <li><span class="glyphicon glyphicon-gbp" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-gbp</span></li>
                                    <li><span class="glyphicon glyphicon-sort" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-sort</span></li>
                                    <li><span class="glyphicon glyphicon-sort-by-alphabet"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-sort-by-alphabet-alt"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-sort-by-order" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-sort-by-order</span></li>
                                    <li><span class="glyphicon glyphicon-sort-by-order-alt"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-sort-by-attributes"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-sort-by-attributes-alt"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-unchecked</span></li>
                                    <li><span class="glyphicon glyphicon-expand" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-expand</span></li>
                                    <li><span class="glyphicon glyphicon-collapse-down" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-collapse-down</span></li>
                                    <li><span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-collapse-up</span></li>
                                    <li><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-log-in</span></li>
                                    <li><span class="glyphicon glyphicon-flash" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-flash</span></li>
                                    <li><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-log-out</span></li>
                                    <li><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-new-window</span></li>
                                    <li><span class="glyphicon glyphicon-record" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-record</span></li>
                                    <li><span class="glyphicon glyphicon-save" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-save</span></li>
                                    <li><span class="glyphicon glyphicon-open" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-open</span></li>
                                    <li><span class="glyphicon glyphicon-saved" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-saved</span></li>
                                    <li><span class="glyphicon glyphicon-import" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-import</span></li>
                                    <li><span class="glyphicon glyphicon-export" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-export</span></li>
                                    <li><span class="glyphicon glyphicon-send" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-send</span></li>
                                    <li><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-floppy-disk</span></li>
                                    <li><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-floppy-saved</span></li>
                                    <li><span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-floppy-remove</span></li>
                                    <li><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-floppy-save</span></li>
                                    <li><span class="glyphicon glyphicon-floppy-open" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-floppy-open</span></li>
                                    <li><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-credit-card</span></li>
                                    <li><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-transfer</span></li>
                                    <li><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-cutlery</span></li>
                                    <li><span class="glyphicon glyphicon-header" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-header</span></li>
                                    <li><span class="glyphicon glyphicon-compressed" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-compressed</span></li>
                                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-earphone</span></li>
                                    <li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-phone-alt</span></li>
                                    <li><span class="glyphicon glyphicon-tower" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-tower</span></li>
                                    <li><span class="glyphicon glyphicon-stats" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-stats</span></li>
                                    <li><span class="glyphicon glyphicon-sd-video" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-sd-video</span></li>
                                    <li><span class="glyphicon glyphicon-hd-video" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-hd-video</span></li>
                                    <li><span class="glyphicon glyphicon-subtitles" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-subtitles</span></li>
                                    <li><span class="glyphicon glyphicon-sound-stereo" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-sound-stereo</span></li>
                                    <li><span class="glyphicon glyphicon-sound-dolby" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-sound-dolby</span></li>
                                    <li><span class="glyphicon glyphicon-sound-5-1" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-sound-5-1</span></li>
                                    <li><span class="glyphicon glyphicon-sound-6-1" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-sound-6-1</span></li>
                                    <li><span class="glyphicon glyphicon-sound-7-1" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-sound-7-1</span></li>
                                    <li><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-copyright-mark</span></li>
                                    <li><span class="glyphicon glyphicon-registration-mark"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-registration-mark</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-cloud-download</span></li>
                                    <li><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-cloud-upload</span></li>
                                    <li><span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-tree-conifer</span></li>
                                    <li><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span></li>
                                    <li><span class="glyphicon glyphicon-cd" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-cd</span></li>
                                    <li><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-save-file</span></li>
                                    <li><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-open-file</span></li>
                                    <li><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-level-up</span></li>
                                    <li><span class="glyphicon glyphicon-copy" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-copy</span></li>
                                    <li><span class="glyphicon glyphicon-paste" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-paste</span></li>
                                    <li><span class="glyphicon glyphicon-alert" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-alert</span></li>
                                    <li><span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-equalizer</span></li>
                                    <li><span class="glyphicon glyphicon-king" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-king</span></li>
                                    <li><span class="glyphicon glyphicon-queen" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-queen</span></li>
                                    <li><span class="glyphicon glyphicon-pawn" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-pawn</span></li>
                                    <li><span class="glyphicon glyphicon-bishop" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-bishop</span></li>
                                    <li><span class="glyphicon glyphicon-knight" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-knight</span></li>
                                    <li><span class="glyphicon glyphicon-baby-formula" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-baby-formula</span></li>
                                    <li><span class="glyphicon glyphicon-tent" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-tent</span></li>
                                    <li><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-blackboard</span></li>
                                    <li><span class="glyphicon glyphicon-bed" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-bed</span></li>
                                    <li><span class="glyphicon glyphicon-apple" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-apple</span></li>
                                    <li><span class="glyphicon glyphicon-erase" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-erase</span></li>
                                    <li><span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-hourglass</span></li>
                                    <li><span class="glyphicon glyphicon-lamp" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-lamp</span></li>
                                    <li><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-duplicate</span></li>
                                    <li><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-piggy-bank</span></li>
                                    <li><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-scissors</span></li>
                                    <li><span class="glyphicon glyphicon-bitcoin" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-bitcoin</span></li>
                                    <li><span class="glyphicon glyphicon-btc" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-btc</span></li>
                                    <li><span class="glyphicon glyphicon-xbt" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-xbt</span></li>
                                    <li><span class="glyphicon glyphicon-yen" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-yen</span></li>
                                    <li><span class="glyphicon glyphicon-jpy" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-jpy</span></li>
                                    <li><span class="glyphicon glyphicon-ruble" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-ruble</span></li>
                                    <li><span class="glyphicon glyphicon-rub" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-rub</span></li>
                                    <li><span class="glyphicon glyphicon-scale" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-scale</span></li>
                                    <li><span class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-ice-lolly</span></li>
                                    <li><span class="glyphicon glyphicon-ice-lolly-tasted"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-ice-lolly-tasted</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-education" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-education</span></li>
                                    <li><span class="glyphicon glyphicon-option-horizontal"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-option-horizontal</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-option-vertical"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-option-vertical</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-menu-hamburger</span></li>
                                    <li><span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-modal-window</span></li>
                                    <li><span class="glyphicon glyphicon-oil" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-oil</span></li>
                                    <li><span class="glyphicon glyphicon-grain" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-grain</span></li>
                                    <li><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-sunglasses</span></li>
                                    <li><span class="glyphicon glyphicon-text-size" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-text-size</span></li>
                                    <li><span class="glyphicon glyphicon-text-color" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-text-color</span></li>
                                    <li><span class="glyphicon glyphicon-text-background"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-text-background</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-object-align-top"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-object-align-top</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-object-align-bottom" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-object-align-bottom</span></li>
                                    <li><span class="glyphicon glyphicon-object-align-horizontal"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-object-align-horizontal</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-object-align-left"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-object-align-left</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-object-align-vertical"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-object-align-vertical</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-object-align-right"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-object-align-right</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-triangle-right</span></li>
                                    <li><span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-triangle-left</span></li>
                                    <li><span class="glyphicon glyphicon-triangle-bottom"
                                              aria-hidden="true"></span><span class="glyphicon-class">glyphicon glyphicon-triangle-bottom</span>
                                    </li>
                                    <li><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-triangle-top</span></li>
                                    <li><span class="glyphicon glyphicon-console" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-console</span></li>
                                    <li><span class="glyphicon glyphicon-superscript" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-superscript</span></li>
                                    <li><span class="glyphicon glyphicon-subscript" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-subscript</span></li>
                                    <li><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-menu-left</span></li>
                                    <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-menu-right</span></li>
                                    <li><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-menu-down</span></li>
                                    <li><span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span><span
                                            class="glyphicon-class">glyphicon glyphicon-menu-up</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-group"></div>
    </div>
</div>
<script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="/static/script/bootstrap.min.js" type="text/javascript"></script>
<script src="/static/script/tool.js" type="text/javascript"></script>
<div class="container" id="foot-history">
    <div class="row">
        <div class="col-md-12"><span>您的足迹：</span><span id="visit_history"></span></div>
        <div class="col-md-12" style="margin-top:10px"><!-- 广告区1 --></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 footer-nav">
            <h2>如有在线工具网导航</h2>
            <ul class="list-inline list-inline-bg">
                <h3><span>JSON工具</span></h3>
                <li><span></span><a href="/json/">Json格式化</a></li>
                <li><span></span><a href="/jsonudview/"> Json格式化(上下)</a></li>
                <li><span></span><a href="/jsonlrview/">Json格式化(左右)</a></li>
                <li><span></span><a href="/jsonzip/">Json在线压缩转义</a></li>
                <li><span></span><a href="/json2cs/">Json生成C#实体类</a></li>
                <li><span></span><a href="/json2java/"> Json生成Java实体类</a></li>
                <li><span></span><a href="/json2go/">Json生成Go结构体</a></li>
                <li><span></span><a href="/sql2java/">SQL转Java实体类</a></li>
                <li><span></span><a href="/json2xml/">XML和Json在线互转</a></li>
                <li><span></span><a href="/excel2json/">Excel/CSV转Json格式</a></li>
                <li><span></span><a href="/json2excel/">Json转Excel/CSV格式</a></li>
                <li><span></span><a href="/json2get/">JSON和GET参数互转</a></li>
                <li><span></span><a href="/json2yaml/">JSON转YAML</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>格式化转换</span></h3>
                <li><span></span><a href="/formathtml/">HTML格式化/压缩</a></li>
                <li><span></span><a href="/formatcss/" style="color:#f30"> CSS格式化/压缩</a></li>
                <li><span></span><a href="/formatjs/">JS格式化/压缩</a></li>
                <li><span></span><a href="/endecodejs/">JS加密/解密</a></li>
                <li><span></span><a href="/confundirjs/"> JS代码混合加密</a></li>
                <li><span></span><a href="/formatsql/">SQL压缩/格式化</a></li>
                <li><span></span><a href="/formatphp/">PHP代码格式化工具</a></li>
                <li><span></span><a href="/formatxml/">XML压缩/格式化 </a></li>
                <li><span></span><a href="/formatcs/">C#代码格式化工具</a></li>
                <li><span></span><a href="/formatjava/">JAVA代码格式化工具</a></li>
                <li><span></span><a href="/formatcsql/">SQL代码格式化工具</a></li>
                <li><span></span><a href="/formatpy/">Python代码格式化工具</a></li>
                <li><span></span><a href="/formatruby/">Ruby代码格式化工具</a></li>
                <li><span></span><a href="/formatc/">C语言代码格式化工具</a></li>
                <li><span></span><a href="/formatcpp/">C++代码格式化工具</a></li>
                <li><span></span><a href="/formatperl/">Perl代码格式化工具</a></li>
                <li><span></span><a href="/formatvbs/">VBScript格式化工具</a></li>
                <li><span></span><a href="/html2js/"> Html转JS</a></li>
                <li><span></span><a href="/htmloutjs/" style="color:#f30">Html/JS互转</a></li>
                <li><span></span><a href="/htmlescape/"> Html转义工具</a></li>
                <li><span></span><a href="/html2cj/"> Html转C#/JSP</a></li>
                <li><span></span><a href="/html2php/">Html转PHP代码</a></li>
                <li><span></span><a href="/html2all/">Html转ASP/Perl</a></li>
                <li><span></span><a href="/htmlfromcsv/">Excel转HTML表格</a></li>
                <li><span></span><a href="/htmltable/">Html表格生成器</a></li>
                <li><span></span><a href="/html2ubb/">HTML/UBB互转</a></li>
                <li><span></span><a href="/htmlmarkdown/">HTML/MarkDown互转</a></li>
                <li><span></span><a href="/regex/" style="color:green">正则表达式测试工具</a></li>
                <li><span></span><a href="/regexcode/">正则生成代码</a></li>
                <li><span></span><a href="/formatfilter/">Html过滤工具</a></li>
                <li><span></span><a href="/regexdso/">常用正则表达式</a></li>
                <li><span></span><a href="/regexsucha/">正则表达式语法速查</a></li>
                <li><span></span><a href="/runjs/">运行Js/html/css</a></li>
                <li><span></span><a href="/xpath/">Xpath工具</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>加解密编码</span></h3>
                <li><span></span><a href="/md5/">MD5加密工具</a></li>
                <li><span></span><a href="/urlcode/">URL网址16进制加密</a></li>
                <li><span></span><a href="/urlthunder/">迅雷旋风URL加解密</a></li>
                <li><span></span><a href="/base64/"> Base64加密/解密</a></li>
                <li><span></span><a href="/escape/">Escape加密/解密</a></li>
                <li><span></span><a href="/deencrypt/">对称加密/解密</a></li>
                <li><span></span><a href="/aesencrypt/">AES加密/解密</a></li>
                <li><span></span><a href="/desencrypt/">DES加密/解密</a></li>
                <li><span></span><a href="/rc4encrypt/">RC4加密/解密</a></li>
                <li><span></span><a href="/rabbitencrypt/">Rabbit加密/解密</a></li>
                <li><span></span><a href="/tripledes/">TripleDES加密/解密</a></li>
                <li><span></span><a href="/shaencrypt/">SHA/SHA256加密</a></li>
                <li><span></span><a href="/allencrypt/">散列/哈希加密大全</a></li>
                <li><span></span><a href="/morse/">摩尔斯电码加解密</a></li>
                <li><span></span><a href="/password/">密码生成器</a></li>
                <li><span></span><a href="/uuid/">UUID在线生成</a></li>
                <li><span></span><a href="/guid/">GUID在线生成</a></li>
                <li><span></span><a href="/htpasswd/">htpasswd生成</a></li>
                <li><span></span><a href="/barcode/">条形码生成器</a></li>
                <li><span></span><a href="/ip2long/">IP/数字地址转换</a></li>
                <li><span></span><a href="/img2base64/" style="color:#f00"> 图片转Base64</a></li>
                <li><span></span><a href="/utf8/">UTF-8转GBK</a></li>
                <li><span></span><a href="/unicode/">Unicode/ASCII转换</a></li>
                <li><span></span><a href="/ascii/">ASCII编码/解码</a></li>
                <li><span></span><a href="/urlencode/">URL编码/解码</a></li>
                <li><span></span><a href="/navtiveunicode/">Native/Unicode编码转换</a></li>
                <li><span></span><a href="/keyboardcode/">KeyCode键盘按键码</a></li>
                <li><span></span><a href="/androidkeycode/">Android按键码</a></li>
                <li><span></span><a href="/keyboardtest/">键盘测试工具</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>文本数字</span></h3>
                <li><span></span><a href="/editor/">Html在线编辑器</a></li>
                <li><span></span><a href="/autoformat/" style="color:#f30"> 文章自动排版</a></li>
                <li><span></span><a href="/caiji/" style="color:green"> 文章内容采集</a></li>
                <li><span></span><a href="/jianfan/">简繁字体转换</a></li>
                <li><span></span><a href="/pinyin/">汉字转为拼音</a></li>
                <li><span></span><a href="/huoxingwen/">火星文转换器</a></li>
                <li><span></span><a href="/txtreplace/">文本内容替换</a></li>
                <li><span></span><a href="/textdiff/"> 文本内容对比</a></li>
                <li><span></span><a href="/txtcount/">在线统计字数工具</a></li>
                <li><span></span><a href="/shupai/">文字竖排工具</a></li>
                <li><span></span><a href="/textflip/">文字翻转工具</a></li>
                <li><span></span><a href="/quchong/">内容去重工具</a></li>
                <li><span></span><a href="/wenzitexiao/">文字特效工具</a></li>
                <li><span></span><a href="/zipstringtext/">字符串文本压缩工具</a></li>
                <li><span></span><a href="/camelcase/" style="color:blue">驼峰与下划线互转</a></li>
                <li><span></span><a href="/quanbaojiao/">全角半角转换</a></li>
                <li><span></span><a href="/enlower/">英文字母大小写转换</a></li>
                <li><span></span><a href="/rmbdaxie/">人民币大写转换工具</a></li>
                <li><span></span><a href="/random/">随机数生成器</a></li>
                <li><span></span><a href="/unixtime/"> Unix时间戳在线转换</a></li>
                <li><span></span><a href="/hexconvert/">常用进制转换工具</a></li>
                <li><span></span><a href="/hexrgb/"> RGB颜色在线转换</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>网络</span></h3>
                <li><span></span><a href="/ip/">IP地址归属地查询</a></li>
                <li><span></span><a href="/websocket/">Websocket测试</a></li>
                <li><span></span><a href="/browserinfo/">获取浏览器信息</a></li>
                <li><span></span><a href="/dns/">公共DNS</a></li>
                <li><span></span><a href="/alldns/">各地区公共DNS</a></li>
                <li><span></span><a href="/dnsdx/">各地电信DNS</a></li>
                <li><span></span><a href="/dnslt/">各地联通DNS</a></li>
                <li><span></span><a href="/dnsyd/">各地移动DNS</a></li>
                <li><span></span><a href="/dnstt/">各地铁通DNS</a></li>
                <li><span></span><a href="/dnsedu/">教育网DNS</a></li>
                <li><span></span><a href="/dnsusa/">美国DNS</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>站长</span></h3>
                <li><span></span><a href="/checkweixin/" style="color:red">微信域名检测工具</a></li>
                <li><span></span><a href="/htaccess2nginx/" style="color:green">htaccess转nginx</a></li>
                <li><span></span><a href="/shortcut/">生成桌面快捷方式</a></li>
                <li><span></span><a href="/px2rem/">rem与px转换工具</a></li>
                <li><span></span><a href="/favicon/">在线制作ico图标</a></li>
                <li><span></span><a href="/createmeta/">生成网页Meta标签</a></li>
                <li><span></span><a href="/refresh/">在线定时刷新网址</a></li>
                <li><span></span><a href="/tiaoseban/">在线调色板</a></li>
                <li><span></span><a href="/gzip/">网站Gzip压缩检测</a></li>
                <li><span></span><a href="/checkurl/">网站死链检测</a></li>
                <li><span></span><a href="/whois/"> Whois查询工具</a></li>
                <li><span></span><a href="/chaicp/">ICP网站备案查询</a></li>
                <li><span></span><a href="/chameta/">Meta标签优化分析</a></li>
                <li><span></span><a href="/checkkeyword/">网页关键词密度检测</a></li>
                <li><span></span><a href="/webstatus/">HTTP状态码查询</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>计算</span></h3>
                <li><span></span><a href="/nianlvli/">利率计算器在线</a></li>
                <li><span></span><a href="/subnetmask/">子网掩码计算器</a></li>
                <li><span></span><a href="/calculator/">在线科学计算器</a></li>
                <li><span></span><a href="/calcarea/">面积换算器</a></li>
                <li><span></span><a href="/calcheat/">热量换算器</a></li>
                <li><span></span><a href="/calcvolume/">体积换算器</a></li>
                <li><span></span><a href="/calcpressure/">压力换算器</a></li>
                <li><span></span><a href="/calcpower/">功率换算器</a></li>
                <li><span></span><a href="/calclength/">长度换算器</a></li>
                <li><span></span><a href="/calctemperature/">温度换算器</a></li>
                <li><span></span><a href="/calctime/">时间换算器</a></li>
                <li><span></span><a href="/calcspeed/">速度换算器</a></li>
                <li><span></span><a href="/calcangle/">角度换算器</a></li>
                <li><span></span><a href="/calcdata/">数据大小换算器</a></li>
                <li><span></span><a href="/calcthickness/">密度换算器</a></li>
                <li><span></span><a href="/calcforce/">力换算器</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>其他</span></h3>
                <li><span></span><a href="/tuya/">在线涂鸦画板</a></li>
                <li><span></span><a href="/shizhong/">在线时钟</a></li>
                <li><span></span><a href="/worldtime/">世界各地时间</a></li>
                <li><span></span><a href="/capital/">世界各国首都查询</a></li>
                <li><span></span><a href="/currency/">世界各地货币查询</a></li>
                <li><span></span><a href="/areacode/">世界各国区号时差查询</a></li>
                <li><span></span><a href="/jieri/">世界节日查询</a></li>
                <li><span></span><a href="/shaoshuminzu/">全国少数民族分布查询</a></li>
                <li><span></span><a href="/chaodai/">中国历史朝代时间查询表</a></li>
                <li><span></span><a href="/tesufuhao/">特殊符号大全</a></li>
                <li><span></span><a href="/lishishangdejintian/">历史上的今天</a></li>
            </ul>
            <ul class="list-inline list-inline-bg">
                <h3><span>对照列表</span></h3>
                <li><span></span><a href="/useragent/">常用User-Agent</a></li>
                <li><span></span><a href="/contenttype/">Content-Type对照表</a></li>
                <li><span></span><a href="/requestmethod/">Request请求大全</a></li>
                <li><span></span><a href="/httpheader/">HTTP请求头大全</a></li>
                <li><span></span><a href="/pagecode/"> HTTP状态码</a></li>
                <li><span></span><a href="/asciicode/">ASCII对照表</a></li>
                <li><span></span><a href="/htmlescapechar/">HTML特殊字符转义</a></li>
                <li><span></span><a href="/ports/">常见端口大全</a></li>
                <li><span></span><a href="/bootstrapicon/">Bootstrap字体图标</a></li>
                <li><span></span><a href="/androidmanifest/"> Android Manifest权限大全</a></li>
                <li><span></span><a href="/linuxcmd/">Linux常用命令大全</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container" style="margin-top:20px">
    <div class="row">
        <div class="col-sm-12"><p>友情链接：
            <a href="https://jike.info" target="_blank">JIKE社区</a>
        </div>
    </div>
</div>
<div class="copyright" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><span>Copyright ©2022 <a href="/">如有在线工具网 tool.ruyo.net</a></span> | <span><a
                    href="https://beian.miit.gov.cn/" target="_blank" rel="nofollow">京ICP备14015671号-1</a></span></div>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5b6e66310f322e2b3192063953798da7";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

        </div>
    </div>
</div>
<a class="gotop" href="#top" title="返回顶部" style="display: none;"><span class="arrow"></span><span
        class="arrow lit"></span></a>
<script>tj();</script>
</body>
</html>