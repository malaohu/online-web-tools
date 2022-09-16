<?php /*a:5:{s:76:"/data/wwwroot/tool.ruyo.net/application/index/view/index/htmlescapechar.html";i:1633603258;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.htmlescapechar.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.htmlescapechar.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.htmlescapechar.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<div class="container"><div class="row"><div class="col-md-12 col10main"><div class="accordion" id="accordion2"><div class="accordion-group"><!-- <div><a href="https://www.aliyun.com/minisite/goods?userCode=eaborev5" target="_blank" rel="nofollow"><img src="http://zxgj.16400.cn/static/images/ali.jpg"></a></div> -->
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/useragent/">常用User-Agent</a></li><li role="presentation"><a href="/contenttype/">Content-Type对照表</a></li><li role="presentation"><a href="/requestmethod/">Request请求大全</a></li><li role="presentation"><a href="/httpheader/">HTTP请求头大全</a></li><li role="presentation"><a href="/pagecode/"> HTTP状态码</a></li><li role="presentation"><a href="/asciicode/">ASCII对照表</a></li><li role="presentation" class="active"><a href="/htmlescapechar/">HTML特殊字符转义</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/ports/">常见端口大全</a></li><li role="presentation"><a href="/bootstrapicon/">Bootstrap字体图标</a></li><li role="presentation"><a href="/androidmanifest/"> Android Manifest权限大全</a></li><li role="presentation"><a href="/linuxcmd/">Linux常用命令大全</a></li></ul></li></ul>    <div class="alert alert-success alert-dismissible" role="alert">
 HTML转义字符对照表 <code>小贴士：Ctrl+F 快速查找 十进制字符 以及 转义字符 </code>
    </div><div class="panel panel-success"><table class="table table-bordered table-hover"><caption>HTML特殊字符转义对照表一</caption><tbody><tr><th class="titcolor">字符</th><th>十进制</th><th>转义字符</th><th class="titcolor">字符</th><th>十进制</th><th>转义字符</th></tr><tr><td class="titcolor">"</td><td>&amp;#34;</td><td>&amp;quot;</td><td class="titcolor">&amp;</td><td>&amp;#38;</td><td>&amp;amp;</td></tr><tr><td class="titcolor">&lt;</td><td>&amp;#60;</td><td>&amp;lt;</td><td class="titcolor">à</td><td>&amp;#224;</td><td>&amp;agrave;</td></tr><tr><td class="titcolor">&gt;</td><td>&amp;#62;</td><td>&amp;gt;</td><td class="titcolor">不断开空格</td><td>&amp;#160;</td><td>&amp;nbsp;</td></tr><tr><td class="titcolor">?</td><td>&amp;#161;</td><td>&amp;iexcl;</td><td class="titcolor">Á</td><td>&amp;#193;</td><td>&amp;Aacute;</td></tr><tr><td class="titcolor">á</td><td>&amp;#225;</td><td>&amp;aacute;</td><td class="titcolor">â</td><td>&amp;#226</td><td>&amp;acirc;</td></tr><tr><td class="titcolor">￠</td><td>&amp;#162;</td><td>&amp;cent;</td><td class="titcolor">Â</td><td>&amp;#194;</td><td>&amp;circ;</td></tr><tr><td class="titcolor">￡</td><td>&amp;#163;</td><td>&amp;pound;</td><td class="titcolor">Ã</td><td>&amp;#195;</td><td>&amp;Atilde;</td></tr><tr><td class="titcolor">ã</td><td>&amp;#227;</td><td>&amp;atilde;</td><td class="titcolor">ä</td><td>&amp;#228;</td><td>&amp;auml;</td></tr><tr><td class="titcolor">¤</td><td>&amp;#164;</td><td>&amp;curren;</td><td class="titcolor">Ä</td><td>&amp;#196;</td><td>&amp;Auml</td></tr><tr><td class="titcolor">￥</td><td>&amp;#165;</td><td>&amp;yen;</td><td class="titcolor">Å</td><td>&amp;#197;</td><td>&amp;ring;</td></tr><tr><td class="titcolor">å</td><td>&amp;#229;</td><td>&amp;aring;</td><td class="titcolor">æ</td><td>&amp;#230;</td><td>&amp;aelig;</td></tr><tr><td class="titcolor">|</td><td>&amp;#166;</td><td>&amp;brvbar;</td><td class="titcolor">Æ</td><td>&amp;#198;</td><td>&amp;AElig;</td></tr><tr><td class="titcolor">§</td><td>&amp;#167;</td><td>&amp;sect;</td><td class="titcolor">Ç</td><td>&amp;#199;</td><td>&amp;Ccedil;</td></tr><tr><td class="titcolor">ç</td><td>&amp;#231;</td><td>&amp;ccedil;</td><td class="titcolor">è</td><td>&amp;#232;</td><td>&amp;egrave;</td></tr><tr><td class="titcolor">¨</td><td>&amp;#168;</td><td>&amp;uml;</td><td class="titcolor">È</td><td>&amp;#200;</td><td>&amp;Egrave;</td></tr><tr><td class="titcolor">©</td><td>&amp;#169;</td><td>&amp;copy;</td><td class="titcolor">É</td><td>&amp;#201;</td><td>&amp;Eacute;</td></tr><tr><td class="titcolor">é</td><td>&amp;#233;</td><td>&amp;eacute;</td><td class="titcolor">ê</td><td>&amp;#234;</td><td>&amp;ecirc;</td></tr><tr><td class="titcolor">a</td><td>&amp;#170;</td><td>&amp;ordf;</td><td class="titcolor">Ê</td><td>&amp;#202;</td><td>&amp;Ecirc;</td></tr><tr><td class="titcolor">?</td><td>&amp;#171;</td><td>&amp;laquo;</td><td class="titcolor">Ë</td><td>&amp;#203;</td><td>&amp;Euml;</td></tr><tr><td class="titcolor">ë</td><td>&amp;#235;</td><td>&amp;euml;</td><td class="titcolor">ì</td><td>&amp;#236;</td><td>&amp;igrave;</td></tr><tr><td class="titcolor">?</td><td>&amp;#172;</td><td>&amp;not;</td><td class="titcolor">Ì</td><td>&amp;#204;</td><td>&amp;Igrave;</td></tr><tr><td class="titcolor">/x7f</td><td>&amp;#173;</td><td>&amp;shy;</td><td class="titcolor">Í</td><td>&amp;#205;</td><td>&amp;Iacute;</td></tr><tr><td class="titcolor">í</td><td>&amp;#237;</td><td>&amp;iacute;</td><td class="titcolor">î</td><td>&amp;#238;</td><td>&amp;icirc;</td></tr><tr><td class="titcolor">®</td><td>&amp;#174;</td><td>&amp;reg;</td><td class="titcolor">Î</td><td>&amp;#206;</td><td>&amp;Icirc;</td></tr><tr><td class="titcolor">ˉ</td><td>&amp;#175;</td><td>&amp;macr;</td><td class="titcolor">Ï</td><td>&amp;#207;</td><td>&amp;Iuml;</td></tr><tr><td class="titcolor">ï</td><td>&amp;#239;</td><td>&amp;iuml;</td><td class="titcolor">ð</td><td>&amp;#240;</td><td>&amp;ieth;</td></tr><tr><td class="titcolor">°</td><td>&amp;#176;</td><td>&amp;deg;</td><td class="titcolor">Ð</td><td>&amp;#208;</td><td>&amp;ETH;</td></tr><tr><td class="titcolor">±</td><td>&amp;#177;</td><td>&amp;plusmn;</td><td class="titcolor">Ñ</td><td>&amp;#209;</td><td>&amp;Ntilde;</td></tr><tr><td class="titcolor">ñ</td><td>&amp;#241;</td><td>&amp;ntilde;</td><td class="titcolor">ò</td><td>&amp;#242;</td><td>&amp;ograve;</td></tr><tr><td class="titcolor">2</td><td>&amp;#178;</td><td>&amp;sup2;</td><td class="titcolor">Ò</td><td>&amp;#210;</td><td>&amp;Ograve;</td></tr><tr><td class="titcolor">3</td><td>&amp;#179;</td><td>&amp;sup3;</td><td class="titcolor">Ó</td><td>&amp;#211;</td><td>&amp;Oacute;</td></tr><tr><td class="titcolor">ó</td><td>&amp;#243;</td><td>&amp;oacute;</td><td class="titcolor">ô</td><td>&amp;#244;</td><td>&amp;ocirc;</td></tr><tr><td class="titcolor">′</td><td>&amp;#180;</td><td>&amp;acute;</td><td class="titcolor">Ô</td><td>&amp;#212;</td><td>&amp;Ocirc;</td></tr><tr><td class="titcolor">μ</td><td>&amp;#181;</td><td>&amp;micro;</td><td class="titcolor">Õ</td><td>&amp;#213;</td><td>&amp;Otilde;</td></tr><tr><td class="titcolor">õ</td><td>&amp;#245;</td><td>&amp;otilde;</td><td class="titcolor">ö</td><td>&amp;#246;</td><td>&amp;ouml;</td></tr><tr><td class="titcolor">?</td><td>&amp;#182;</td><td>&amp;para;</td><td class="titcolor">Ö</td><td>&amp;#214;</td><td>&amp;Ouml;</td></tr><tr><td class="titcolor">·</td><td>&amp;#183;</td><td>&amp;middot;</td><td class="titcolor">&amp;times;</td><td>&amp;#215;</td><td>&amp;times;</td></tr><tr><td class="titcolor">÷</td><td>&amp;#247;</td><td>&amp;divide;</td><td class="titcolor">ø</td><td>&amp;#248;</td><td>&amp;oslash;</td></tr><tr><td class="titcolor">?</td><td>&amp;#184;</td><td>&amp;cedil;</td><td class="titcolor">Ø</td><td>&amp;#216;</td><td>&amp;Oslash;</td></tr><tr><td class="titcolor">1</td><td>&amp;#185;</td><td>&amp;sup1;</td><td class="titcolor">Ù</td><td>&amp;#217;</td><td>&amp;Ugrave;</td></tr><tr><td class="titcolor">ù</td><td>&amp;#249;</td><td>&amp;ugrave;</td><td class="titcolor">ú</td><td>&amp;#250;</td><td>&amp;uacute;</td></tr><tr><td class="titcolor">o</td><td>&amp;#186;</td><td>&amp;ordm;</td><td class="titcolor">Ú</td><td>&amp;#218;</td><td>&amp;Uacute;</td></tr><tr><td class="titcolor">?</td><td>&amp;#187;</td><td>&amp;raquo;</td><td class="titcolor">Û</td><td>&amp;#219;</td><td>&amp;Ucirc;</td></tr><tr><td class="titcolor">û</td><td>&amp;#251;</td><td>&amp;ucirc;</td><td class="titcolor">ü</td><td>&amp;#252;</td><td>&amp;uuml;</td></tr><tr><td class="titcolor">?</td><td>&amp;#188;</td><td>&amp;frac14;</td><td class="titcolor">Ü</td><td>&amp;#220;</td><td>&amp;Uuml;</td></tr><tr><td class="titcolor">?</td><td>&amp;#189;</td><td>&amp;frac12;</td><td class="titcolor">Ý</td><td>&amp;#221;</td><td>&amp;Yacute;</td></tr><tr><td class="titcolor">?</td><td>&amp;#190;</td><td>&amp;frac34;</td><td class="titcolor">Þ</td><td>&amp;#222;</td><td>&amp;THORN;</td></tr><tr><td class="titcolor">þ</td><td>&amp;#254;</td><td>&amp;thorn;</td><td class="titcolor">ý</td><td>&amp;#253;</td><td>&amp;yacute;</td></tr><tr><td class="titcolor">?</td><td>&amp;#191;</td><td>&amp;iquest;</td><td class="titcolor">ß</td><td>&amp;#223;</td><td>&amp;szlig;</td></tr><tr><td class="titcolor">À</td><td>&amp;#192;</td><td>&amp;Agrave;</td><td class="titcolor">ÿ</td><td>&amp;#255;</td><td>&amp;yuml;</td></tr></tbody></table><br/><br/><table class="table table-bordered table-hover"><caption>HTML特殊字符转义对照表二</caption><tbody><tr><td><div>特殊符号</div></td><td><div>命名实体</div></td><td><div>十进制编码</div></td><td><div>特殊符号</div></td><td><div>命名实体</div></td><td><div>十进制编码</div></td></tr><tr><td><div>Α</div></td><td><div>&amp;Alpha;</div></td><td><div>&amp;#913;</div></td><td><div>Β</div></td><td><div>&amp;Beta;</div></td><td><div>&amp;#914;</div></td></tr><tr><td><div>Γ</div></td><td><div>&amp;Gamma;</div></td><td><div>&amp;#915;</div></td><td><div>Δ</div></td><td><div>&amp;Delta;</div></td><td><div>&amp;#916;</div></td></tr><tr><td><div>Ε</div></td><td><div>&amp;Epsilon;</div></td><td><div>&amp;#917;</div></td><td><div>Ζ</div></td><td><div>&amp;Zeta;</div></td><td><div>&amp;#918;</div></td></tr><tr><td><div>Η</div></td><td><div>&amp;Eta;</div></td><td><div>&amp;#919;</div></td><td><div>Θ</div></td><td><div>&amp;Theta;</div></td><td><div>&amp;#920;</div></td></tr><tr><td><div>Ι</div></td><td><div>&amp;Iota;</div></td><td><div>&amp;#921;</div></td><td><div>Κ</div></td><td><div>&amp;Kappa;</div></td><td><div>&amp;#922;</div></td></tr><tr><td><div>Λ</div></td><td><div>&amp;Lambda;</div></td><td><div>&amp;#923;</div></td><td><div>Μ</div></td><td><div>&amp;Mu;</div></td><td><div>&amp;#924;</div></td></tr><tr><td><div>Ν</div></td><td><div>&amp;Nu;</div></td><td><div>&amp;#925;</div></td><td><div>Ξ</div></td><td><div>&amp;Xi;</div></td><td><div>&amp;#926;</div></td></tr><tr><td><div>Ο</div></td><td><div>&amp;Omicron;</div></td><td><div>&amp;#927;</div></td><td><div>Π</div></td><td><div>&amp;Pi;</div></td><td><div>&amp;#928;</div></td></tr><tr><td><div>Ρ</div></td><td><div>&amp;Rho;</div></td><td><div>&amp;#929;</div></td><td><div>Σ</div></td><td><div>&amp;Sigma;</div></td><td><div>&amp;#931;</div></td></tr><tr><td><div>Τ</div></td><td><div>&amp;Tau;</div></td><td><div>&amp;#932;</div></td><td><div>Υ</div></td><td><div>&amp;Upsilon;</div></td><td><div>&amp;#933;</div></td></tr><tr><td><div>Φ</div></td><td><div>&amp;Phi;</div></td><td><div>&amp;#934;</div></td><td><div>Χ</div></td><td><div>&amp;Chi;</div></td><td><div>&amp;#935;</div></td></tr><tr><td><div>Ψ</div></td><td><div>&amp;Psi;</div></td><td><div>&amp;#936;</div></td><td><div>Ω</div></td><td><div>&amp;Omega;</div></td><td><div>&amp;#937;</div></td></tr><tr><td><div>α</div></td><td><div>&amp;alpha;</div></td><td><div>&amp;#945;</div></td><td><div>β</div></td><td><div>&amp;beta;</div></td><td><div>&amp;#946;</div></td></tr><tr><td><div>γ</div></td><td><div>&amp;gamma;</div></td><td><div>&amp;#947;</div></td><td><div>δ</div></td><td><div>&amp;delta;</div></td><td><div>&amp;#948;</div></td></tr><tr><td><div>ε</div></td><td><div>&amp;epsilon;</div></td><td><div>&amp;#949;</div></td><td><div>ζ</div></td><td><div>&amp;zeta;</div></td><td><div>&amp;#950;</div></td></tr><tr><td><div>η</div></td><td><div>&amp;eta;</div></td><td><div>&amp;#951;</div></td><td><div>θ</div></td><td><div>&amp;theta;</div></td><td><div>&amp;#952;</div></td></tr><tr><td><div>ι</div></td><td><div>&amp;iota;</div></td><td><div>&amp;#953;</div></td><td><div>κ</div></td><td><div>&amp;kappa;</div></td><td><div>&amp;#954;</div></td></tr><tr><td><div>λ</div></td><td><div>&amp;lambda;</div></td><td><div>&amp;#955;</div></td><td><div>μ</div></td><td><div>&amp;mu;</div></td><td><div>&amp;#956;</div></td></tr><tr><td><div>ν</div></td><td><div>&amp;nu;</div></td><td><div>&amp;#957;</div></td><td><div>ξ</div></td><td><div>&amp;xi;</div></td><td><div>&amp;#958;</div></td></tr><tr><td><div>ο</div></td><td><div>&amp;omicron;</div></td><td><div>&amp;#959;</div></td><td><div>π</div></td><td><div>&amp;pi;</div></td><td><div>&amp;#960;</div></td></tr><tr><td><div>ρ</div></td><td><div>&amp;rho;</div></td><td><div>&amp;#961;</div></td><td><div>ς</div></td><td><div>&amp;sigmaf;</div></td><td><div>&amp;#962;</div></td></tr><tr><td><div>σ</div></td><td><div>&amp;sigma;</div></td><td><div>&amp;#963;</div></td><td><div>τ</div></td><td><div>&amp;tau;</div></td><td><div>&amp;#964;</div></td></tr><tr><td><div>υ</div></td><td><div>&amp;upsilon;</div></td><td><div>&amp;#965;</div></td><td><div>φ</div></td><td><div>&amp;phi;</div></td><td><div>&amp;#966;</div></td></tr><tr><td><div>χ</div></td><td><div>&amp;chi;</div></td><td><div>&amp;#967;</div></td><td><div>ψ</div></td><td><div>&amp;psi;</div></td><td><div>&amp;#968;</div></td></tr><tr><td><div>ω</div></td><td><div>&amp;omega;</div></td><td><div>&amp;#969;</div></td><td><div>ϑ</div></td><td><div>&amp;thetasym;</div></td><td><div>&amp;#977;</div></td></tr><tr><td><div>ϒ</div></td><td><div>&amp;upsih;</div></td><td><div>&amp;#978;</div></td><td><div>ϖ</div></td><td><div>&amp;piv;</div></td><td><div>&amp;#982;</div></td></tr><tr><td><div>•</div></td><td><div>&amp;bull;</div></td><td><div>&amp;#8226;</div></td><td><div>…</div></td><td><div>&amp;hellip;</div></td><td><div>&amp;#8230;</div></td></tr><tr><td><div>′</div></td><td><div>&amp;prime;</div></td><td><div>&amp;#8242;</div></td><td><div>″</div></td><td><div>&amp;Prime;</div></td><td><div>&amp;#8243;</div></td></tr><tr><td><div>‾</div></td><td><div>&amp;oline;</div></td><td><div>&amp;#8254;</div></td><td><div>⁄</div></td><td><div>&amp;frasl;</div></td><td><div>&amp;#8260;</div></td></tr><tr><td><div>℘</div></td><td><div>&amp;weierp;</div></td><td><div>&amp;#8472;</div></td><td><div>ℑ</div></td><td><div>&amp;image;</div></td><td><div>&amp;#8465;</div></td></tr><tr><td><div>ℜ</div></td><td><div>&amp;real;</div></td><td><div>&amp;#8476;</div></td><td><div>™</div></td><td><div>&amp;trade;</div></td><td><div>&amp;#8482;</div></td></tr><tr><td><div>ℵ</div></td><td><div>&amp;alefsym;</div></td><td><div>&amp;#8501;</div></td><td><div>←</div></td><td><div>&amp;larr;</div></td><td><div>&amp;#8592;</div></td></tr><tr><td><div>↑</div></td><td><div>&amp;uarr;</div></td><td><div>&amp;#8593;</div></td><td><div>→</div></td><td><div>&amp;rarr;</div></td><td><div>&amp;#8594;</div></td></tr><tr><td><div>↓</div></td><td><div>&amp;darr;</div></td><td><div>&amp;#8595;</div></td><td><div>↔</div></td><td><div>&amp;harr;</div></td><td><div>&amp;#8596;</div></td></tr><tr><td><div>↵</div></td><td><div>&amp;crarr;</div></td><td><div>&amp;#8629;</div></td><td><div>⇐</div></td><td><div>&amp;lArr;</div></td><td><div>&amp;#8656;</div></td></tr><tr><td><div>⇑</div></td><td><div>&amp;uArr;</div></td><td><div>&amp;#8657;</div></td><td><div>⇒</div></td><td><div>&amp;rArr;</div></td><td><div>&amp;#8658;</div></td></tr><tr><td><div>⇓</div></td><td><div>&amp;dArr;</div></td><td><div>&amp;#8659;</div></td><td><div>⇔</div></td><td><div>&amp;hArr;</div></td><td><div>&amp;#8660;</div></td></tr><tr><td><div>∀</div></td><td><div>&amp;forall;</div></td><td><div>&amp;#8704;</div></td><td><div>∂</div></td><td><div>&amp;part;</div></td><td><div>&amp;#8706;</div></td></tr><tr><td><div>∃</div></td><td><div>&amp;exist;</div></td><td><div>&amp;#8707;</div></td><td><div>∅</div></td><td><div>&amp;empty;</div></td><td><div>&amp;#8709;</div></td></tr><tr><td><div>∇</div></td><td><div>&amp;nabla;</div></td><td><div>&amp;#8711;</div></td><td><div>∈</div></td><td><div>&amp;isin;</div></td><td><div>&amp;#8712;</div></td></tr><tr><td><div>∉</div></td><td><div>&amp;notin;</div></td><td><div>&amp;#8713;</div></td><td><div>∋</div></td><td><div>&amp;ni;</div></td><td><div>&amp;#8715;</div></td></tr><tr><td><div>∏</div></td><td><div>&amp;prod;</div></td><td><div>&amp;#8719;</div></td><td><div>∑</div></td><td><div>&amp;sum;</div></td><td><div>&amp;#8722;</div></td></tr><tr><td><div>−</div></td><td><div>&amp;minus;</div></td><td><div>&amp;#8722;</div></td><td><div>∗</div></td><td><div>&amp;lowast;</div></td><td><div>&amp;#8727;</div></td></tr><tr><td><div>√</div></td><td><div>&amp;radic;</div></td><td><div>&amp;#8730;</div></td><td><div>∝</div></td><td><div>&amp;prop;</div></td><td><div>&amp;#8733;</div></td></tr><tr><td><div>∞</div></td><td><div>&amp;infin;</div></td><td><div>&amp;#8734;</div></td><td><div>∠</div></td><td><div>&amp;ang;</div></td><td><div>&amp;#8736;</div></td></tr><tr><td><div>∧</div></td><td><div>&amp;and;</div></td><td><div>&amp;#8869;</div></td><td><div>∨</div></td><td><div>&amp;or;</div></td><td><div>&amp;#8870;</div></td></tr><tr><td><div>∩</div></td><td><div>&amp;cap;</div></td><td><div>&amp;#8745;</div></td><td><div>∪</div></td><td><div>&amp;cup;</div></td><td><div>&amp;#8746;</div></td></tr><tr><td><div>∫</div></td><td><div>&amp;int;</div></td><td><div>&amp;#8747;</div></td><td><div>∴</div></td><td><div>&amp;there4;</div></td><td><div>&amp;#8756;</div></td></tr><tr><td><div>∼</div></td><td><div>&amp;sim;</div></td><td><div>&amp;#8764;</div></td><td><div>≅</div></td><td><div>&amp;cong;</div></td><td><div>&amp;#8773;</div></td></tr><tr><td><div>≈</div></td><td><div>&amp;asymp;</div></td><td><div>&amp;#8773;</div></td><td><div>≠</div></td><td><div>&amp;ne;</div></td><td><div>&amp;#8800;</div></td></tr><tr><td><div>≡</div></td><td><div>&amp;equiv;</div></td><td><div>&amp;#8801;</div></td><td><div>≤</div></td><td><div>&amp;le;</div></td><td><div>&amp;#8804;</div></td></tr><tr><td><div>≥</div></td><td><div>&amp;ge;</div></td><td><div>&amp;#8805;</div></td><td><div>⊂</div></td><td><div>&amp;sub;</div></td><td><div>&amp;#8834;</div></td></tr><tr><td><div>⊃</div></td><td><div>&amp;sup;</div></td><td><div>&amp;#8835;</div></td><td><div>⊄</div></td><td><div>&amp;nsub;</div></td><td><div>&amp;#8836;</div></td></tr><tr><td><div>⊆</div></td><td><div>&amp;sube;</div></td><td><div>&amp;#8838;</div></td><td><div>⊇</div></td><td><div>&amp;supe;</div></td><td><div>&amp;#8839;</div></td></tr><tr><td><div>⊕</div></td><td><div>&amp;oplus;</div></td><td><div>&amp;#8853;</div></td><td><div>⊗</div></td><td><div>&amp;otimes;</div></td><td><div>&amp;#8855;</div></td></tr><tr><td><div>⊥</div></td><td><div>&amp;perp;</div></td><td><div>&amp;#8869;</div></td><td><div>⋅</div></td><td><div>&amp;sdot;</div></td><td><div>&amp;#8901;</div></td></tr><tr><td><div>⌈</div></td><td><div>&amp;lceil;</div></td><td><div>&amp;#8968;</div></td><td><div>⌉</div></td><td><div>&amp;rceil;</div></td><td><div>&amp;#8969;</div></td></tr><tr><td><div>⌊</div></td><td><div>&amp;lfloor;</div></td><td><div>&amp;#8970;</div></td><td><div>⌋</div></td><td><div>&amp;rfloor;</div></td><td><div>&amp;#8971;</div></td></tr><tr><td><div>◊</div></td><td><div>&amp;loz;</div></td><td><div>&amp;#9674;</div></td><td><div>♠</div></td><td><div>&amp;spades;</div></td><td><div>&amp;#9824;</div></td></tr><tr><td><div>♣</div></td><td><div>&amp;clubs;</div></td><td><div>&amp;#9827;</div></td><td><div>♥</div></td><td><div>&amp;hearts;</div></td><td><div>&amp;#9829;</div></td></tr><tr><td><div>♦</div></td><td><div>&amp;diams;</div></td><td><div>&amp;#9830;</div></td><td><div></div></td><td><div>&amp;nbsp;</div></td><td><div>&amp;#160;</div></td></tr><tr><td><div>¡</div></td><td><div>&amp;iexcl;</div></td><td><div>&amp;#161;</div></td><td><div>¢</div></td><td><div>&amp;cent;</div></td><td><div>&amp;#162;</div></td></tr><tr><td><div>£</div></td><td><div>&amp;pound;</div></td><td><div>&amp;#163;</div></td><td><div>¤</div></td><td><div>&amp;curren;</div></td><td><div>&amp;#164;</div></td></tr><tr><td><div>¥</div></td><td><div>&amp;yen;</div></td><td><div>&amp;#165;</div></td><td><div>¦</div></td><td><div>&amp;brvbar;</div></td><td><div>&amp;#166;</div></td></tr><tr><td><div>§</div></td><td><div>&amp;sect;</div></td><td><div>&amp;#167;</div></td><td><div>¨</div></td><td><div>&amp;uml;</div></td><td><div>&amp;#168;</div></td></tr><tr><td><div>©</div></td><td><div>&amp;copy;</div></td><td><div>&amp;#169;</div></td><td><div>ª</div></td><td><div>&amp;ordf;</div></td><td><div>&amp;#170;</div></td></tr><tr><td><div>«</div></td><td><div>&amp;laquo;</div></td><td><div>&amp;#171;</div></td><td><div>¬</div></td><td><div>&amp;not;</div></td><td><div>&amp;#172;</div></td></tr><tr><td><div>&shy;</div></td><td><div>&amp;shy;</div></td><td><div>&amp;#173;</div></td><td><div>®</div></td><td><div>&amp;reg;</div></td><td><div>&amp;#174;</div></td></tr><tr><td><div>¯</div></td><td><div>&amp;macr;</div></td><td><div>&amp;#175;</div></td><td><div>°</div></td><td><div>&amp;deg;</div></td><td><div>d&amp;#176;</div></td></tr><tr><td><div>±</div></td><td><div>&amp;plusmn;</div></td><td><div>&amp;#177;</div></td><td><div>²</div></td><td><div>&amp;sup2;</div></td><td><div>&amp;#178;</div></td></tr><tr><td><div>³</div></td><td><div>&amp;sup3;</div></td><td><div>&amp;#179;</div></td><td><div>´</div></td><td><div>&amp;acute;</div></td><td><div>&amp;#180;</div></td></tr><tr><td><div>µ</div></td><td><div>&amp;micro;</div></td><td><div>&amp;#181;</div></td><td><div></div></td><td></td><td><div></div></td></tr></tbody></table></div></div></div>
</div> <div class="accordion-group"> </div></div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><div class="container" id="foot-history">
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
</body></html>