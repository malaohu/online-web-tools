<?php /*a:5:{s:72:"/data/wwwroot/tool.ruyo.net/application/index/view/index/regexsucha.html";i:1633603258;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.regexsucha.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.regexsucha.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.regexsucha.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/regex/">正则表达式测试工具</a></li><li role="presentation"><a href="/regexcode/">正则生成代码</a></li><li role="presentation"><a href="/formatfilter/">Html过滤工具</a></li><li role="presentation"><a href="/regexdso/">常用正则表达式</a></li><li role="presentation" class="active"><a href="/regexsucha/">正则表达式语法速查</a></li><li role="presentation"><a href="/runjs/">运行Js/html/css</a></li><li role="presentation"><a href="/xpath/">Xpath工具</a></li></ul><div class="alert alert-info alert-dismissible" role="alert">正则表达式，又称规则表达式，是一种文本模式，通常用来检索、替换和控制文本。主要包括a 到 z 的字母以及一些特殊的元字符。正则表达式的应用范围非常之广泛，最初是由Unix普及开来的，后来在广泛运用于Scala 、PHP、C# 、Java、C++ 、Objective-c、Perl 、Swift、VBScript 、Javascript、Ruby 以及Python等等。学习正则表达式，实际上是在学习一种十分灵活的逻辑思维，联系通过简单快速的方法达到对于字符串的控制。</div><div class="panel panel-default"><table class="table table-hover table-bordered table-striped"><tbody><tr><th>正则字符</th><th>描述</th></tr><tr><th>\</th><td>将下一个字符标记为一个特殊字符、或一个原义字符、或一个向后引用、或一个八进制转义符。例如，&ldquo;<code>n</code>"匹配字符"<code>n</code>"。"<code>\n</code>"匹配一个换行符。串行"<code>\\</code>"匹配"<code>\</code>"而"<code>\(</code>"则匹配"<code>(</code>"。</td></tr><tr><th>^</th><td>匹配输入字符串的开始位置。如果设置了RegExp对象的Multiline属性，^也匹配&ldquo;<code>\n</code>"或"<code>\r</code>"之后的位置。</td></tr><tr><th>$</th><td>匹配输入字符串的结束位置。如果设置了RegExp对象的Multiline属性，$也匹配&ldquo;<code>\n</code>"或"<code>\r</code>"之前的位置。</td></tr><tr><th>*</th><td>匹配前面的子表达式零次或多次。例如，zo*能匹配&ldquo;<code>z</code>"以及"<code>zoo</code>"。*等价于{0,}。</td></tr><tr><th>+</th><td>匹配前面的子表达式一次或多次。例如，&ldquo;<code>zo+</code>"能匹配"<code>zo</code>"以及"<code>zoo</code>"，但不能匹配"<code>z</code>"。+等价于{1,}。</td></tr><tr><th>?</th><td>匹配前面的子表达式零次或一次。例如，&ldquo;<code>do(es)?</code>"可以匹配"<code>does</code>"或"<code>does</code>"中的"<code>do</code>"。?等价于{0,1}。</td></tr><tr><th>{<span style="font-family:Times New Roman; font-style:italic;">n</span>}</th><td><span style="font-family:Times New Roman; font-style:italic;">n</span>是一个非负整数。匹配确定的<span style="font-family:Times New Roman; font-style:italic;">n</span>次。例如，&ldquo;<code>o{2}</code>"不能匹配"<code>Bob</code>"中的"<code>o</code>"，但是能匹配"<code>food</code>"中的两个o。</td></tr><tr><th>{<span style="font-family:Times New Roman; font-style:italic;">n</span>,}</th><td><span style="font-family:Times New Roman; font-style:italic;">n</span>是一个非负整数。至少匹配<span style="font-family:Times New Roman; font-style:italic;">n</span>次。例如，&ldquo;<code>o{2,}</code>"不能匹配"<code>Bob</code>"中的"<code>o</code>"，但能匹配"<code>foooood</code>"中的所有o。"<code>o{1,}</code>"等价于"<code>o+</code>"。"<code>o{0,}</code>"则等价于"<code>o*</code>"。</td></tr><tr><th>{<span style="font-family:Times New Roman; font-style:italic;">n</span>,<span style="font-family:Times New Roman; font-style:italic;">m</span>}</th><td><span style="font-family:Times New Roman; font-style:italic;">m</span>和<span style="font-family:Times New Roman; font-style:italic;">n</span>均为非负整数，其中<span style="font-family:Times New Roman; font-style:italic;">n</span>&lt;=<span style="font-family:Times New Roman; font-style:italic;">m</span>。最少匹配<span style="font-family:Times New Roman; font-style:italic;">n</span>次且最多匹配<span style="font-family:Times New Roman; font-style:italic;">m</span>次。例如，&ldquo;<code>o{1,3}</code>"将匹配"<code>fooooood</code>"中的前三个o。"<code>o{0,1}</code>"等价于"<code>o?</code>"。请注意在逗号和两个数之间不能有空格。</td></tr><tr><th>?</th><td>当该字符紧跟在任何一个其他限制符（*,+,?，{<span style="font-family:Times New Roman; font-style:italic;">n</span>}，{<span style="font-family:Times New Roman; font-style:italic;">n</span>,}，{<span style="font-family:Times New Roman; font-style:italic;">n</span>,<span style="font-family:Times New Roman; font-style:italic;">m</span>}）后面时，匹配模式是非贪婪的。非贪婪模式尽可能少的匹配所搜索的字符串，而默认的贪婪模式则尽可能多的匹配所搜索的字符串。例如，对于字符串&ldquo;<code>oooo</code>"，"<code>o+?</code>"将匹配单个"<code>o</code>"，而"<code>o+</code>"将匹配所有"<code>o</code>"。</td></tr><tr><th>.</th><td>匹配除&ldquo;<code>\</code><span style="font-family:Times New Roman; font-style:italic;"><code>n</code></span>"之外的任何单个字符。要匹配包括"<code>\</code><span style="font-family:Times New Roman; font-style:italic;"><code>n</code></span>"在内的任何字符，请使用像"<code>(.|\n)</code>"的模式。</td></tr><tr><th>(pattern)</th><td>匹配pattern并获取这一匹配。所获取的匹配可以从产生的Matches集合得到，在VBScript中使用SubMatches集合，在JScript中则使用$0&hellip;$9属性。要匹配圆括号字符，请使用&ldquo;<code>\(</code>"或"<code>\)</code>"。</td></tr><tr><th>(?:pattern)</th><td>匹配pattern但不获取匹配结果，也就是说这是一个非获取匹配，不进行存储供以后使用。这在使用或字符&ldquo;<code>(|)</code>"来组合一个模式的各个部分是很有用。例如"<code>industr(?:y|ies)</code>"就是一个比"<code>industry|industries</code>"更简略的表达式。</td></tr><tr><th>(?=pattern)</th><td>正向肯定预查，在任何匹配pattern的字符串开始处匹配查找字符串。这是一个非获取匹配，也就是说，该匹配不需要获取供以后使用。例如，&ldquo;<code>Windows(?=95|98|NT|2000)</code>"能匹配"<code>Windows2000</code>"中的"<code>Windows</code>"，但不能匹配"<code>Windows3.1</code>"中的"<code>Windows</code>"。预查不消耗字符，也就是说，在一个匹配发生后，在最后一次匹配之后立即开始下一次匹配的搜索，而不是从包含预查的字符之后开始。</td></tr><tr><th>(?!pattern)</th><td>正向否定预查，在任何不匹配pattern的字符串开始处匹配查找字符串。这是一个非获取匹配，也就是说，该匹配不需要获取供以后使用。例如&ldquo;<code>Windows(?!95|98|NT|2000)</code>"能匹配"<code>Windows3.1</code>"中的"<code>Windows</code>"，但不能匹配"<code>Windows2000</code>"中的"<code>Windows</code>"。预查不消耗字符，也就是说，在一个匹配发生后，在最后一次匹配之后立即开始下一次匹配的搜索，而不是从包含预查的字符之后开始</td></tr><tr><th>(?&lt;=pattern)</th><td>反向肯定预查，与正向肯定预查类拟，只是方向相反。例如，&ldquo;<code>(?&lt;=95|98|NT|2000)Windows</code>"能匹配"<code>2000Windows</code>"中的"<code>Windows</code>"，但不能匹配"<code>3.1Windows</code>"中的"<code>Windows</code>"。</td></tr><tr><th>(?&lt;!pattern)</th><td>反向否定预查，与正向否定预查类拟，只是方向相反。例如&ldquo;<code>(?&lt;!95|98|NT|2000)Windows</code>"能匹配"<code>3.1Windows</code>"中的"<code>Windows</code>"，但不能匹配"<code>2000Windows</code>"中的"<code>Windows</code>"。</td></tr><tr><th>x|y</th><td>匹配x或y。例如，&ldquo;<code>z|food</code>"能匹配"<code>z</code>"或"<code>food</code>"。"<code>(z|f)ood</code>"则匹配"<code>zood</code>"或"<code>food</code>"。</td></tr><tr><th>[xyz]</th><td>字符集合。匹配所包含的任意一个字符。例如，&ldquo;<code>[abc]</code>"可以匹配"<code>plain</code>"中的"<code>a</code>"。</td></tr><tr><th>[^xyz]</th><td>负值字符集合。匹配未包含的任意字符。例如，&ldquo;<code>[^abc]</code>"可以匹配"<code>plain</code>"中的"<code>p</code>"。</td></tr><tr><th>[a-z]</th><td>字符范围。匹配指定范围内的任意字符。例如，&ldquo;<code>[a-z]</code>"可以匹配"<code>a</code>"到"<code>z</code>"范围内的任意小写字母字符。</td></tr><tr><th>[^a-z]</th><td>负值字符范围。匹配任何不在指定范围内的任意字符。例如，&ldquo;<code>[^a-z]</code>"可以匹配任何不在"<code>a</code>"到"<code>z</code>"范围内的任意字符。</td></tr><tr><th>\b</th><td>匹配一个单词边界，也就是指单词和空格间的位置。例如，&ldquo;<code>er\b</code>"可以匹配"<code>never</code>"中的"<code>er</code>"，但不能匹配"<code>verb</code>"中的"<code>er</code>"。</td></tr><tr><th>\B</th><td>匹配非单词边界。&ldquo;<code>er\B</code>"能匹配"<code>verb</code>"中的"<code>er</code>"，但不能匹配"<code>never</code>"中的"<code>er</code>"。</td></tr><tr><th>\cx</th><td>匹配由x指明的控制字符。例如，\cM匹配一个Control-M或回车符。x的值必须为A-Z或a-z之一。否则，将c视为一个原义的&ldquo;<code>c</code>"字符。</td></tr><tr><th>\d</th><td>匹配一个数字字符。等价于[0-9]。</td></tr><tr><th>\D</th><td>匹配一个非数字字符。等价于[^0-9]。</td></tr><tr><th>\f</th><td>匹配一个换页符。等价于\x0c和\cL。</td></tr><tr><th>\n</th><td>匹配一个换行符。等价于\x0a和\cJ。</td></tr><tr><th>\r</th><td>匹配一个回车符。等价于\x0d和\cM。</td></tr><tr><th>\s</th><td>匹配任何空白字符，包括空格、制表符、换页符等等。等价于[ \f\n\r\t\v]。</td></tr><tr><th>\S</th><td>匹配任何非空白字符。等价于[^ \f\n\r\t\v]。</td></tr><tr><th>\t</th><td>匹配一个制表符。等价于\x09和\cI。</td></tr><tr><th>\v</th><td>匹配一个垂直制表符。等价于\x0b和\cK。</td></tr><tr><th>\w</th><td>匹配包括下划线的任何单词字符。等价于&ldquo;<code>[A-Za-z0-9_]</code>"。</td></tr><tr><th>\W</th><td>匹配任何非单词字符。等价于&ldquo;<code>[^A-Za-z0-9_]</code>"。</td></tr><tr><th>\x<span style="font-family:Times New Roman; font-style:italic;">n</span></th><td>匹配<span style="font-family:Times New Roman; font-style:italic;">n</span>，其中<span style="font-family:Times New Roman; font-style:italic;">n</span>为十六进制转义值。十六进制转义值必须为确定的两个数字长。例如，&ldquo;<code>\x41</code>"匹配"<code>A</code>"。"<code>\x041</code>"则等价于"<code>\x04&amp;1</code>"。正则表达式中可以使用ASCII编码。.</td></tr><tr><th>\<span style="font-family:Times New Roman; font-style:italic;">num</span></th><td>匹配<span style="font-family:Times New Roman; font-style:italic;">num</span>，其中<span style="font-family:Times New Roman; font-style:italic;">num</span>是一个正整数。对所获取的匹配的引用。例如，&ldquo;<code>(.)\1</code>"匹配两个连续的相同字符。</td></tr><tr><th>\<span style="font-family:Times New Roman; font-style:italic;">n</span></th><td>标识一个八进制转义值或一个向后引用。如果\<span style="font-family:Times New Roman; font-style:italic;">n</span>之前至少<span style="font-family:Times New Roman; font-style:italic;">n</span>个获取的子表达式，则<span style="font-family:Times New Roman; font-style:italic;">n</span>为向后引用。否则，如果<span style="font-family:Times New Roman; font-style:italic;">n</span>为八进制数字（0-7），则<span style="font-family:Times New Roman; font-style:italic;">n</span>为一个八进制转义值。</td></tr><tr><th>\<span style="font-family:Times New Roman; font-style:italic;">nm</span></th><td>标识一个八进制转义值或一个向后引用。如果\<span style="font-family:Times New Roman; font-style:italic;">nm</span>之前至少有<span style="font-family:Times New Roman; font-style:italic;">nm</span>个获得子表达式，则<span style="font-family:Times New Roman; font-style:italic;">nm</span>为向后引用。如果\<span style="font-family:Times New Roman; font-style:italic;">nm</span>之前至少有<span style="font-family:Times New Roman; font-style:italic;">n</span>个获取，则<span style="font-family:Times New Roman; font-style:italic;">n</span>为一个后跟文字<span style="font-family:Times New Roman; font-style:italic;">m</span>的向后引用。如果前面的条件都不满足，若<span style="font-family:Times New Roman; font-style:italic;">n</span>和<span style="font-family:Times New Roman; font-style:italic;">m</span>均为八进制数字（0-7），则\<span style="font-family:Times New Roman; font-style:italic;">nm</span>将匹配八进制转义值<span style="font-family:Times New Roman; font-style:italic;">nm</span>。</td></tr><tr><th>\<span style="font-family:Times New Roman; font-style:italic;">nml</span></th><td>如果<span style="font-family:Times New Roman; font-style:italic;">n</span>为八进制数字（0-3），且<span style="font-family:Times New Roman; font-style:italic;">m和l</span>均为八进制数字（0-7），则匹配八进制转义值<span style="font-family:Times New Roman; font-style:italic;">nm</span>l。</td></tr><tr><th>\u<span style="font-family:Times New Roman; font-style:italic;">n</span></th><td>匹配<span style="font-family:Times New Roman; font-style:italic;">n</span>，其中<span style="font-family:Times New Roman; font-style:italic;">n</span>是一个用四个十六进制数字表示的Unicode字符。例如，\u00A9匹配版权符号（&copy;）。</td></tr>  </tbody></table></div><div class="alert alert-info mt10 mb10" role="alert"><strong>常用正则表达式</strong></div><div class="panel panel-default"><table class="table table-hover table-bordered table-striped">  <tr><th>用户名</th><td>/^[a-z0-9_-]{3,16}$/</td>  </tr>  <tr><th scope="row">密码</th><td>/^[a-z0-9_-]{6,18}$/</td>  </tr>  <tr><th scope="row">密码2</th><td><span class="regex">(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?=.*[A-Z])(?=.*[a-z])(?!.*\n).*$</span> (由数字/大写字母/小写字母/标点符号组成，四种都必有，8位以上) </td>  </tr>  <tr><th scope="row">十六进制值</th><td>/^#?([a-f0-9]{6}|[a-f0-9]{3})$/</td>  </tr>  <tr><th scope="row">电子邮箱</th><td>/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/<br />  /^[a-z\d]+(\.[a-z\d]+)*@([\da-z](-[\da-z])?)+(\.{1,2}[a-z]+)+$/或<span class="regex">\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*</span></td>  </tr>  <tr><th scope="row">URL</th><td>/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/ 或 <span class="regex">[a-zA-z]+://[^\s]*</span></td>  </tr>  <tr><th scope="row">IP 地址</th><td>/((2[0-4]\d|25[0-5]|[01]?\d\d?)\.){3}(2[0-4]\d|25[0-5]|[01]?\d\d?)/<br />/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/ 或 <span class="regex">((2[0-4]\d|25[0-5]|[01]?\d\d?)\.){3}(2[0-4]\d|25[0-5]|[01]?\d\d?)</span></td>  </tr>  <tr><th scope="row">HTML 标签</th><td>/^&lt;([a-z]+)([^&lt;]+)*(?:&gt;(.*)&lt;\/\1&gt;|\s+\/&gt;)$/或<span class="regex">&lt;(.*)(.*)&gt;.*&lt;\/\1&gt;|&lt;(.*) \/&gt;</span></td>  </tr>  <tr><th scope="row">删除代码\\注释</th><td>(?&lt;!http:|\S)//.*$</td>  </tr>  <tr><th scope="row">匹配双字节字符(包括汉字在内)</th><td>[^\x00-\xff]</td>  </tr>  <tr><th scope="row">汉字(字符)</th><td>[\u4e00-\u9fa5]</td>  </tr>  <tr><th scope="row">Unicode编码中的汉字范围</th><td>/^[\u2E80-\u9FFF]+$/</td>  </tr>  <tr><th scope="row">中文及全角标点符号(字符)</th><td>[\u3000-\u301e\ufe10-\ufe19\ufe30-\ufe44\ufe50-\ufe6b\uff01-\uffee]</td>  </tr>  <tr><th scope="row">日期(年-月-日)</th><td>(\d{4}|\d{2})-((0?([1-9]))|(1[1|2]))-((0?[1-9])|([12]([1-9]))|(3[0|1]))</td>  </tr>  <tr><th scope="row">日期(月/日/年)</th><td>((0?[1-9]{1})|(1[1|2]))/(0?[1-9]|([12][1-9])|(3[0|1]))/(\d{4}|\d{2})</td>  </tr>  <tr><th scope="row">时间(小时:分钟, 24小时制)</th><td>((1|0?)[0-9]|2[0-3]):([0-5][0-9])</td>  </tr>  <tr><th scope="row">中国大陆固定电话号码</th><td>(\d{4}-|\d{3}-)?(\d{8}|\d{7})</td>  </tr>  <TR><th scope="row">中国大陆手机号码</TD><TD>1\d{10}</TD>  </TR>  <TR><th scope="row">中国大陆邮政编码</th><TD>[1-9]\d{5}</TD>  </TR>  <TR><th scope="row">中国大陆身份证号(15位或18位)</th><TD>\d{15}(\d\d[0-9xX])?</TD>  </TR>  <TR><th scope="row">非负整数(正整数或零)</th><TD>\d+</TD>  </TR>  <TR><th scope="row">正整数</th><TD>[0-9]*[1-9][0-9]*</TD>  </TR>  <TR><th scope="row">负整数</th><TD>-[0-9]*[1-9][0-9]*</TD>  </TR>  <TR><th scope="row">整数</th><TD>-?\d+</TD>  </TR>  <TR><th scope="row">小数</th><TD>(-?\d+)(\.\d+)?</TD>  </TR>    <tr><th scope="row">空白行</th><td>\n\s*\r 或者 \n\n(editplus) 或者 ^[\s\S ]*\n <BR></td>  </tr>  <tr><th scope="row"><span class="regex">QQ号码</span></th><td><span class="regex">[1-9]\d{4,}</span></td>  </tr>  <tr><th scope="row">不包含abc的单词</th><td><span class="regex">\b((?!abc)\w)+\b</span></td>  </tr>  <tr><th scope="row">匹配首尾空白字符</th><td>^\s*|\s*$</td>  </tr>  <tr><th scope="row">编辑常用</th><td><div>以下是针对特殊中文的一些替换(editplus)</div><div>^[0-9].*\n </div><div>^[^第].*\n </div><div>^[习题].*\n</div><div>^[\s\S ]*\n </div><div>^[0-9]*\. </div><div>^[\s\S ]*\n </div><div>&lt;p[^&lt;&gt;*]&gt;</div><div>href="javascript:if\(confirm\('(.*?)'\)\)window\.location='(.*?)'"</div><div>&lt;span style=".[^"]*rgb\(255,255,255\)"&gt;.[^&lt;&gt;]*&lt;/span&gt;<br>&lt;DIV class=xs0&gt;[\s\S]*?&lt;/DIV&gt;</div></td>  </tr></table></div></div></div><div class="alert alert alert-info alert-dismissible"><h4>正则表达式语法</h4><p>正则表达式语法为您常用正则表达式速查表,正则表达式语法查询,常用正则表达式语法,正则表达式基本语法,子表达式语法,正则表达式修饰符,正则表达式贪婪模式,正则表达式非贪婪模式,通过简单快速的方法达到对于字符串的控制。</p></div></div> <div class="accordion-group"> </div></div></div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><script src="/static/script/pcjs/regex.js" type="text/javascript"></script><div class="container" id="foot-history">
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