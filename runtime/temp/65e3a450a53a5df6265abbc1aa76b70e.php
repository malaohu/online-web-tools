<?php /*a:5:{s:73:"/data/wwwroot/tool.ruyo.net/application/index/view/index/contenttype.html";i:1633603258;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.contenttype.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.contenttype.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.contenttype.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/useragent/">常用User-Agent</a></li><li role="presentation" class="active"><a href="/contenttype/">Content-Type对照表</a></li><li role="presentation"><a href="/requestmethod/">Request请求大全</a></li><li role="presentation"><a href="/httpheader/">HTTP请求头大全</a></li><li role="presentation"><a href="/pagecode/"> HTTP状态码</a></li><li role="presentation"><a href="/asciicode/">ASCII对照表</a></li><li role="presentation"><a href="/htmlescapechar/">HTML特殊字符转义</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/ports/">常见端口大全</a></li><li role="presentation"><a href="/bootstrapicon/">Bootstrap字体图标</a></li><li role="presentation"><a href="/androidmanifest/"> Android Manifest权限大全</a></li><li role="presentation"><a href="/linuxcmd/">Linux常用命令大全</a></li></ul></li></ul><div class="alert alert-success alert-dismissible" role="alert">HTTP Mime-Type对照表 : Content-Type（Mime-Type） 文件扩展名 <code>小贴士：Ctrl+F 快速查找 Mime-Type类型</code> </div><div class="panel panel-success"><table width="100%" class="table table-bordered table-hover"><tbody><tr><th class="titcolor">文件扩展名</th><th class="titcolor">Content-Type(Mime-Type)</th><th class="titcolor">文件扩展名</th><th class="titcolor">Content-Type(Mime-Type)</th></tr></tbody><tbody><tr><td class="titcolor">.*（二进制流，不知道下载文件类型）</td><td>application/octet-stream</td><td class="titcolor">.tif</td><td>image/tiff</td></tr><tr><td class="titcolor">.001</td><td>application/x-001</td><td class="titcolor">.301</td><td>application/x-301</td></tr><tr><td class="titcolor">.323</td><td>text/h323</td><td class="titcolor">.906</td><td>application/x-906</td></tr><tr><td class="titcolor">.907</td><td>drawing/907</td><td class="titcolor">.a11</td><td>application/x-a11</td></tr><tr><td class="titcolor">.acp</td><td>audio/x-mei-aac</td><td class="titcolor">.ai</td><td>application/postscript</td></tr><tr><td class="titcolor">.aif</td><td>audio/aiff</td><td class="titcolor">.aifc</td><td>audio/aiff</td></tr><tr><td class="titcolor">.aiff</td><td>audio/aiff</td><td class="titcolor">.anv</td><td>application/x-anv</td></tr><tr><td class="titcolor">.asa</td><td>text/asa</td><td class="titcolor">.asf</td><td>video/x-ms-asf</td></tr><tr><td class="titcolor">.asp</td><td>text/asp</td><td class="titcolor">.asx</td><td>video/x-ms-asf</td></tr><tr><td class="titcolor">.au</td><td>audio/basic</td><td class="titcolor">.avi</td><td>video/avi</td></tr><tr><td class="titcolor">.awf</td><td>application/vnd.adobe.workflow</td><td class="titcolor">.biz</td><td>text/xml</td></tr><tr><td class="titcolor">.bmp</td><td>application/x-bmp</td><td class="titcolor">.bot</td><td>application/x-bot</td></tr><tr><td class="titcolor">.c4t</td><td>application/x-c4t</td><td class="titcolor">.c90</td><td>application/x-c90</td></tr><tr><td class="titcolor">.cal</td><td>application/x-cals</td><td class="titcolor">.cat</td><td>application/vnd.ms-pki.seccat</td></tr><tr><td class="titcolor">.cdf</td><td>application/x-netcdf</td><td class="titcolor">.cdr</td><td>application/x-cdr</td></tr><tr><td class="titcolor">.cel</td><td>application/x-cel</td><td class="titcolor">.cer</td><td>application/x-x509-ca-cert</td></tr><tr><td class="titcolor">.cg4</td><td>application/x-g4</td><td class="titcolor">.cgm</td><td>application/x-cgm</td></tr><tr><td class="titcolor">.cit</td><td>application/x-cit</td><td class="titcolor">.class</td><td>java/*</td></tr><tr><td class="titcolor">.cml</td><td>text/xml</td><td class="titcolor">.cmp</td><td>application/x-cmp</td></tr><tr><td class="titcolor">.cmx</td><td>application/x-cmx</td><td class="titcolor">.cot</td><td>application/x-cot</td></tr><tr><td class="titcolor">.crl</td><td>application/pkix-crl</td><td class="titcolor">.crt</td><td>application/x-x509-ca-cert</td></tr><tr><td class="titcolor">.csi</td><td>application/x-csi</td><td class="titcolor">.css</td><td>text/css</td></tr><tr><td class="titcolor">.cut</td><td>application/x-cut</td><td class="titcolor">.dbf</td><td>application/x-dbf</td></tr><tr><td class="titcolor">.dbm</td><td>application/x-dbm</td><td class="titcolor">.dbx</td><td>application/x-dbx</td></tr><tr><td class="titcolor">.dcd</td><td>text/xml</td><td class="titcolor">.dcx</td><td>application/x-dcx</td></tr><tr><td class="titcolor">.der</td><td>application/x-x509-ca-cert</td><td class="titcolor">.dgn</td><td>application/x-dgn</td></tr><tr><td class="titcolor">.dib</td><td>application/x-dib</td><td class="titcolor">.dll</td><td>application/x-msdownload</td></tr><tr><td class="titcolor">.doc</td><td>application/msword</td><td class="titcolor">.dot</td><td>application/msword</td></tr><tr><td class="titcolor">.drw</td><td>application/x-drw</td><td class="titcolor">.dtd</td><td>text/xml</td></tr><tr><td class="titcolor">.dwf</td><td>Model/vnd.dwf</td><td class="titcolor">.dwf</td><td>application/x-dwf</td></tr><tr><td class="titcolor">.dwg</td><td>application/x-dwg</td><td class="titcolor">.dxb</td><td>application/x-dxb</td></tr><tr><td class="titcolor">.dxf</td><td>application/x-dxf</td><td class="titcolor">.edn</td><td>application/vnd.adobe.edn</td></tr><tr><td class="titcolor">.emf</td><td>application/x-emf</td><td class="titcolor">.eml</td><td>message/rfc822</td></tr><tr><td class="titcolor">.ent</td><td>text/xml</td><td class="titcolor">.epi</td><td>application/x-epi</td></tr><tr><td class="titcolor">.eps</td><td>application/x-ps</td><td class="titcolor">.eps</td><td>application/postscript</td></tr><tr><td class="titcolor">.etd</td><td>application/x-ebx</td><td class="titcolor">.exe</td><td>application/x-msdownload</td></tr><tr><td class="titcolor">.fax</td><td>image/fax</td><td class="titcolor">.fdf</td><td>application/vnd.fdf</td></tr><tr><td class="titcolor">.fif</td><td>application/fractals</td><td class="titcolor">.fo</td><td>text/xml</td></tr><tr><td class="titcolor">.frm</td><td>application/x-frm</td><td class="titcolor">.g4</td><td>application/x-g4</td></tr><tr><td class="titcolor">.gbr</td><td>application/x-gbr</td><td class="titcolor">.</td><td>application/x-</td></tr><tr><td class="titcolor">.gif</td><td>image/gif</td><td class="titcolor">.gl2</td><td>application/x-gl2</td></tr><tr><td class="titcolor">.gp4</td><td>application/x-gp4</td><td class="titcolor">.hgl</td><td>application/x-hgl</td></tr><tr><td class="titcolor">.hmr</td><td>application/x-hmr</td><td class="titcolor">.hpg</td><td>application/x-hpgl</td></tr><tr><td class="titcolor">.hpl</td><td>application/x-hpl</td><td class="titcolor">.hqx</td><td>application/mac-binhex40</td></tr><tr><td class="titcolor">.hrf</td><td>application/x-hrf</td><td class="titcolor">.hta</td><td>application/hta</td></tr><tr><td class="titcolor">.htc</td><td>text/x-component</td><td class="titcolor">.htm</td><td>text/html</td></tr><tr><td class="titcolor">.html</td><td>text/html</td><td class="titcolor">.htt</td><td>text/webviewhtml</td></tr><tr><td class="titcolor">.htx</td><td>text/html</td><td class="titcolor">.icb</td><td>application/x-icb</td></tr><tr><td class="titcolor">.ico</td><td>image/x-icon</td><td class="titcolor">.ico</td><td>application/x-ico</td></tr><tr><td class="titcolor">.iff</td><td>application/x-iff</td><td class="titcolor">.ig4</td><td>application/x-g4</td></tr><tr><td class="titcolor">.igs</td><td>application/x-igs</td><td class="titcolor">.iii</td><td>application/x-iphone</td></tr><tr><td class="titcolor">.img</td><td>application/x-img</td><td class="titcolor">.ins</td><td>application/x-internet-signup</td></tr><tr><td class="titcolor">.isp</td><td>application/x-internet-signup</td><td class="titcolor">.IVF</td><td>video/x-ivf</td></tr><tr><td class="titcolor">.java</td><td>java/*</td><td class="titcolor">.jfif</td><td>image/jpeg</td></tr><tr><td class="titcolor">.jpe</td><td>image/jpeg</td><td class="titcolor">.jpe</td><td>application/x-jpe</td></tr><tr><td class="titcolor">.jpeg</td><td>image/jpeg</td><td class="titcolor">.jpg</td><td>image/jpeg</td></tr><tr><td class="titcolor">.jpg</td><td>application/x-jpg</td><td class="titcolor">.js</td><td>application/x-javascript</td></tr><tr><td class="titcolor">.jsp</td><td>text/html</td><td class="titcolor">.la1</td><td>audio/x-liquid-file</td></tr><tr><td class="titcolor">.lar</td><td>application/x-laplayer-reg</td><td class="titcolor">.latex</td><td>application/x-latex</td></tr><tr><td class="titcolor">.lavs</td><td>audio/x-liquid-secure</td><td class="titcolor">.lbm</td><td>application/x-lbm</td></tr><tr><td class="titcolor">.lmsff</td><td>audio/x-la-lms</td><td class="titcolor">.ls</td><td>application/x-javascript</td></tr><tr><td class="titcolor">.ltr</td><td>application/x-ltr</td><td class="titcolor">.m1v</td><td>video/x-mpeg</td></tr><tr><td class="titcolor">.m2v</td><td>video/x-mpeg</td><td class="titcolor">.m3u</td><td>audio/mpegurl</td></tr><tr><td class="titcolor">.m4e</td><td>video/mpeg4</td><td class="titcolor">.mac</td><td>application/x-mac</td></tr><tr><td class="titcolor">.man</td><td>application/x-troff-man</td><td class="titcolor">.math</td><td>text/xml</td></tr><tr><td class="titcolor">.mdb</td><td>application/msaccess</td><td class="titcolor">.mdb</td><td>application/x-mdb</td></tr><tr><td class="titcolor">.mfp</td><td>application/x-shockwave-flash</td><td class="titcolor">.mht</td><td>message/rfc822</td></tr><tr><td class="titcolor">.mhtml</td><td>message/rfc822</td><td class="titcolor">.mi</td><td>application/x-mi</td></tr><tr><td class="titcolor">.mid</td><td>audio/mid</td><td class="titcolor">.midi</td><td>audio/mid</td></tr><tr><td class="titcolor">.mil</td><td>application/x-mil</td><td class="titcolor">.mml</td><td>text/xml</td></tr><tr><td class="titcolor">.mnd</td><td>audio/x-musicnet-download</td><td class="titcolor">.mns</td><td>audio/x-musicnet-stream</td></tr><tr><td class="titcolor">.mocha</td><td>application/x-javascript</td><td class="titcolor">.movie</td><td>video/x-sgi-movie</td></tr><tr><td class="titcolor">.mp1</td><td>audio/mp1</td><td class="titcolor">.mp2</td><td>audio/mp2</td></tr><tr><td class="titcolor">.mp2v</td><td>video/mpeg</td><td class="titcolor">.mp3</td><td>audio/mp3</td></tr><tr><td class="titcolor">.mp4</td><td>video/mpeg4</td><td class="titcolor">.mpa</td><td>video/x-mpg</td></tr><tr><td class="titcolor">.mpd</td><td>application/vnd.ms-project</td><td class="titcolor">.mpe</td><td>video/x-mpeg</td></tr><tr><td class="titcolor">.mpeg</td><td>video/mpg</td><td class="titcolor">.mpg</td><td>video/mpg</td></tr><tr><td class="titcolor">.mpga</td><td>audio/rn-mpeg</td><td class="titcolor">.mpp</td><td>application/vnd.ms-project</td></tr><tr><td class="titcolor">.mps</td><td>video/x-mpeg</td><td class="titcolor">.mpt</td><td>application/vnd.ms-project</td></tr><tr><td class="titcolor">.mpv</td><td>video/mpg</td><td class="titcolor">.mpv2</td><td>video/mpeg</td></tr><tr><td class="titcolor">.mpw</td><td>application/vnd.ms-project</td><td class="titcolor">.mpx</td><td>application/vnd.ms-project</td></tr><tr><td class="titcolor">.mtx</td><td>text/xml</td><td class="titcolor">.mxp</td><td>application/x-mmxp</td></tr><tr><td class="titcolor">.net</td><td>image/pnetvue</td><td class="titcolor">.nrf</td><td>application/x-nrf</td></tr><tr><td class="titcolor">.nws</td><td>message/rfc822</td><td class="titcolor">.odc</td><td>text/x-ms-odc</td></tr><tr><td class="titcolor">.out</td><td>application/x-out</td><td class="titcolor">.p10</td><td>application/pkcs10</td></tr><tr><td class="titcolor">.p12</td><td>application/x-pkcs12</td><td class="titcolor">.p7b</td><td>application/x-pkcs7-certificates</td></tr><tr><td class="titcolor">.p7c</td><td>application/pkcs7-mime</td><td class="titcolor">.p7m</td><td>application/pkcs7-mime</td></tr><tr><td class="titcolor">.p7r</td><td>application/x-pkcs7-certreqresp</td><td class="titcolor">.p7s</td><td>application/pkcs7-signature</td></tr><tr><td class="titcolor">.pc5</td><td>application/x-pc5</td><td class="titcolor">.pci</td><td>application/x-pci</td></tr><tr><td class="titcolor">.pcl</td><td>application/x-pcl</td><td class="titcolor">.pcx</td><td>application/x-pcx</td></tr><tr><td class="titcolor">.pdf</td><td>application/pdf</td><td class="titcolor">.pdf</td><td>application/pdf</td></tr><tr><td class="titcolor">.pdx</td><td>application/vnd.adobe.pdx</td><td class="titcolor">.pfx</td><td>application/x-pkcs12</td></tr><tr><td class="titcolor">.pgl</td><td>application/x-pgl</td><td class="titcolor">.pic</td><td>application/x-pic</td></tr><tr><td class="titcolor">.pko</td><td>application/vnd.ms-pki.pko</td><td class="titcolor">.pl</td><td>application/x-perl</td></tr><tr><td class="titcolor">.plg</td><td>text/html</td><td class="titcolor">.pls</td><td>audio/scpls</td></tr><tr><td class="titcolor">.plt</td><td>application/x-plt</td><td class="titcolor">.png</td><td>image/png</td></tr><tr><td class="titcolor">.png</td><td>application/x-png</td><td class="titcolor">.pot</td><td>application/vnd.ms-powerpoint</td></tr><tr><td class="titcolor">.ppa</td><td>application/vnd.ms-powerpoint</td><td class="titcolor">.ppm</td><td>application/x-ppm</td></tr><tr><td class="titcolor">.pps</td><td>application/vnd.ms-powerpoint</td><td class="titcolor">.ppt</td><td>application/vnd.ms-powerpoint</td></tr><tr><td class="titcolor">.ppt</td><td>application/x-ppt</td><td class="titcolor">.pr</td><td>application/x-pr</td></tr><tr><td class="titcolor">.prf</td><td>application/pics-rules</td><td class="titcolor">.prn</td><td>application/x-prn</td></tr><tr><td class="titcolor">.prt</td><td>application/x-prt</td><td class="titcolor">.ps</td><td>application/x-ps</td></tr><tr><td class="titcolor">.ps</td><td>application/postscript</td><td class="titcolor">.ptn</td><td>application/x-ptn</td></tr><tr><td class="titcolor">.pwz</td><td>application/vnd.ms-powerpoint</td><td class="titcolor">.r3t</td><td>text/vnd.rn-realtext3d</td></tr><tr><td class="titcolor">.ra</td><td>audio/vnd.rn-realaudio</td><td class="titcolor">.ram</td><td>audio/x-pn-realaudio</td></tr><tr><td class="titcolor">.ras</td><td>application/x-ras</td><td class="titcolor">.rat</td><td>application/rat-file</td></tr><tr><td class="titcolor">.rdf</td><td>text/xml</td><td class="titcolor">.rec</td><td>application/vnd.rn-recording</td></tr><tr><td class="titcolor">.red</td><td>application/x-red</td><td class="titcolor">.rgb</td><td>application/x-rgb</td></tr><tr><td class="titcolor">.rjs</td><td>application/vnd.rn-realsystem-rjs</td><td class="titcolor">.rjt</td><td>application/vnd.rn-realsystem-rjt</td></tr><tr><td class="titcolor">.rlc</td><td>application/x-rlc</td><td class="titcolor">.rle</td><td>application/x-rle</td></tr><tr><td class="titcolor">.rm</td><td>application/vnd.rn-realmedia</td><td class="titcolor">.rmf</td><td>application/vnd.adobe.rmf</td></tr><tr><td class="titcolor">.rmi</td><td>audio/mid</td><td class="titcolor">.rmj</td><td>application/vnd.rn-realsystem-rmj</td></tr><tr><td class="titcolor">.rmm</td><td>audio/x-pn-realaudio</td><td class="titcolor">.rmp</td><td>application/vnd.rn-rn_music_package</td></tr><tr><td class="titcolor">.rms</td><td>application/vnd.rn-realmedia-secure</td><td class="titcolor">.rmvb</td><td>application/vnd.rn-realmedia-vbr</td></tr><tr><td class="titcolor">.rmx</td><td>application/vnd.rn-realsystem-rmx</td><td class="titcolor">.rnx</td><td>application/vnd.rn-realplayer</td></tr><tr><td class="titcolor">.rp</td><td>image/vnd.rn-realpix</td><td class="titcolor">.rpm</td><td>audio/x-pn-realaudio-plugin</td></tr><tr><td class="titcolor">.rsml</td><td>application/vnd.rn-rsml</td><td class="titcolor">.rt</td><td>text/vnd.rn-realtext</td></tr><tr><td class="titcolor">.rtf</td><td>application/msword</td><td class="titcolor">.rtf</td><td>application/x-rtf</td></tr><tr><td class="titcolor">.rv</td><td>video/vnd.rn-realvideo</td><td class="titcolor">.sam</td><td>application/x-sam</td></tr><tr><td class="titcolor">.sat</td><td>application/x-sat</td><td class="titcolor">.sdp</td><td>application/sdp</td></tr><tr><td class="titcolor">.sdw</td><td>application/x-sdw</td><td class="titcolor">.sit</td><td>application/x-stuffit</td></tr><tr><td class="titcolor">.slb</td><td>application/x-slb</td><td class="titcolor">.sld</td><td>application/x-sld</td></tr><tr><td class="titcolor">.slk</td><td>drawing/x-slk</td><td class="titcolor">.smi</td><td>application/smil</td></tr><tr><td class="titcolor">.smil</td><td>application/smil</td><td class="titcolor">.smk</td><td>application/x-smk</td></tr><tr><td class="titcolor">.snd</td><td>audio/basic</td><td class="titcolor">.sol</td><td>text/plain</td></tr><tr><td class="titcolor">.sor</td><td>text/plain</td><td class="titcolor">.spc</td><td>application/x-pkcs7-certificates</td></tr><tr><td class="titcolor">.spl</td><td>application/futuresplash</td><td class="titcolor">.spp</td><td>text/xml</td></tr><tr><td class="titcolor">.ssm</td><td>application/streamingmedia</td><td class="titcolor">.sst</td><td>application/vnd.ms-pki.certstore</td></tr><tr><td class="titcolor">.stl</td><td>application/vnd.ms-pki.stl</td><td class="titcolor">.stm</td><td>text/html</td></tr><tr><td class="titcolor">.sty</td><td>application/x-sty</td><td class="titcolor">.svg</td><td>text/xml</td></tr><tr><td class="titcolor">.swf</td><td>application/x-shockwave-flash</td><td class="titcolor">.tdf</td><td>application/x-tdf</td></tr><tr><td class="titcolor">.tg4</td><td>application/x-tg4</td><td class="titcolor">.tga</td><td>application/x-tga</td></tr><tr><td class="titcolor">.tif</td><td>image/tiff</td><td class="titcolor">.tif</td><td>application/x-tif</td></tr><tr><td class="titcolor">.tiff</td><td>image/tiff</td><td class="titcolor">.tld</td><td>text/xml</td></tr><tr><td class="titcolor">.top</td><td>drawing/x-top</td><td class="titcolor">.torrent</td><td>application/x-bittorrent</td></tr><tr><td class="titcolor">.tsd</td><td>text/xml</td><td class="titcolor">.txt</td><td>text/plain</td></tr><tr><td class="titcolor">.uin</td><td>application/x-icq</td><td class="titcolor">.uls</td><td>text/iuls</td></tr><tr><td class="titcolor">.vcf</td><td>text/x-vcard</td><td class="titcolor">.vda</td><td>application/x-vda</td></tr><tr><td class="titcolor">.vdx</td><td>application/vnd.visio</td><td class="titcolor">.vml</td><td>text/xml</td></tr><tr><td class="titcolor">.vpg</td><td>application/x-vpeg005</td><td class="titcolor">.vsd</td><td>application/vnd.visio</td></tr><tr><td class="titcolor">.vsd</td><td>application/x-vsd</td><td class="titcolor">.vss</td><td>application/vnd.visio</td></tr><tr><td class="titcolor">.vst</td><td>application/vnd.visio</td><td class="titcolor">.vst</td><td>application/x-vst</td></tr><tr><td class="titcolor">.vsw</td><td>application/vnd.visio</td><td class="titcolor">.vsx</td><td>application/vnd.visio</td></tr><tr><td class="titcolor">.vtx</td><td>application/vnd.visio</td><td class="titcolor">.vxml</td><td>text/xml</td></tr><tr><td class="titcolor">.wav</td><td>audio/wav</td><td class="titcolor">.wax</td><td>audio/x-ms-wax</td></tr><tr><td class="titcolor">.wb1</td><td>application/x-wb1</td><td class="titcolor">.wb2</td><td>application/x-wb2</td></tr><tr><td class="titcolor">.wb3</td><td>application/x-wb3</td><td class="titcolor">.wbmp</td><td>image/vnd.wap.wbmp</td></tr><tr><td class="titcolor">.wiz</td><td>application/msword</td><td class="titcolor">.wk3</td><td>application/x-wk3</td></tr><tr><td class="titcolor">.wk4</td><td>application/x-wk4</td><td class="titcolor">.wkq</td><td>application/x-wkq</td></tr><tr><td class="titcolor">.wks</td><td>application/x-wks</td><td class="titcolor">.wm</td><td>video/x-ms-wm</td></tr><tr><td class="titcolor">.wma</td><td>audio/x-ms-wma</td><td class="titcolor">.wmd</td><td>application/x-ms-wmd</td></tr><tr><td class="titcolor">.wmf</td><td>application/x-wmf</td><td class="titcolor">.wml</td><td>text/vnd.wap.wml</td></tr><tr><td class="titcolor">.wmv</td><td>video/x-ms-wmv</td><td class="titcolor">.wmx</td><td>video/x-ms-wmx</td></tr><tr><td class="titcolor">.wmz</td><td>application/x-ms-wmz</td><td class="titcolor">.wp6</td><td>application/x-wp6</td></tr><tr><td class="titcolor">.wpd</td><td>application/x-wpd</td><td class="titcolor">.wpg</td><td>application/x-wpg</td></tr><tr><td class="titcolor">.wpl</td><td>application/vnd.ms-wpl</td><td class="titcolor">.wq1</td><td>application/x-wq1</td></tr><tr><td class="titcolor">.wr1</td><td>application/x-wr1</td><td class="titcolor">.wri</td><td>application/x-wri</td></tr><tr><td class="titcolor">.wrk</td><td>application/x-wrk</td><td class="titcolor">.ws</td><td>application/x-ws</td></tr><tr><td class="titcolor">.ws2</td><td>application/x-ws</td><td class="titcolor">.wsc</td><td>text/scriptlet</td></tr><tr><td class="titcolor">.wsdl</td><td>text/xml</td><td class="titcolor">.wvx</td><td>video/x-ms-wvx</td></tr><tr><td class="titcolor">.xdp</td><td>application/vnd.adobe.xdp</td><td class="titcolor">.xdr</td><td>text/xml</td></tr><tr><td class="titcolor">.xfd</td><td>application/vnd.adobe.xfd</td><td class="titcolor">.xfdf</td><td>application/vnd.adobe.xfdf</td></tr><tr><td class="titcolor">.xhtml</td><td>text/html</td><td class="titcolor">.xls</td><td>application/vnd.ms-excel</td></tr><tr><td class="titcolor">.xls</td><td>application/x-xls</td><td class="titcolor">.xlw</td><td>application/x-xlw</td></tr><tr><td class="titcolor">.xml</td><td>text/xml</td><td class="titcolor">.xpl</td><td>audio/scpls</td></tr><tr><td class="titcolor">.xq</td><td>text/xml</td><td class="titcolor">.xql</td><td>text/xml</td></tr><tr><td class="titcolor">.xquery</td><td>text/xml</td><td class="titcolor">.xsd</td><td>text/xml</td></tr><tr><td class="titcolor">.xsl</td><td>text/xml</td><td class="titcolor">.xslt</td><td>text/xml</td></tr><tr><td class="titcolor">.xwd</td><td>application/x-xwd</td><td class="titcolor">.x_b</td><td>application/x-x_b</td></tr><tr><td class="titcolor">.sis</td><td>application/vnd.symbian.install</td><td class="titcolor">.sisx</td><td>application/vnd.symbian.install</td></tr><tr><td class="titcolor">.x_t</td><td>application/x-x_t</td><td class="titcolor">.ipa</td><td>application/vnd.iphone</td></tr><tr><td class="titcolor">.apk</td><td>application/vnd.android.package-archive</td><td class="titcolor">.xap</td><td>application/x-silverlight-app</td></tr></tbody></table></div></div></div>
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