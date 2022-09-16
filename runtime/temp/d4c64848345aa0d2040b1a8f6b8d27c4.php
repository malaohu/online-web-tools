<?php /*a:5:{s:70:"/data/wwwroot/tool.ruyo.net/application/index/view/index/pagecode.html";i:1633603258;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.pagecode.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.pagecode.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.pagecode.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/useragent/">常用User-Agent</a></li><li role="presentation"><a href="/contenttype/">Content-Type对照表</a></li><li role="presentation"><a href="/requestmethod/">Request请求大全</a></li><li role="presentation"><a href="/httpheader/">HTTP请求头大全</a></li><li role="presentation" class="active"><a href="/pagecode/"> HTTP状态码</a></li><li role="presentation"><a href="/asciicode/">ASCII对照表</a></li><li role="presentation"><a href="/htmlescapechar/">HTML特殊字符转义</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/ports/">常见端口大全</a></li><li role="presentation"><a href="/bootstrapicon/">Bootstrap字体图标</a></li><li role="presentation"><a href="/androidmanifest/"> Android Manifest权限大全</a></li><li role="presentation"><a href="/linuxcmd/">Linux常用命令大全</a></li></ul></li></ul>    <div class="alert alert-success alert-dismissible" role="alert">HTTP状态码详解：HTTP状态码,是用以表示WEB服务器 HTTP响应状态的3位数字代码 <code>小技巧： Ctrl+F 快速查找</code></div><table width="100%"class="table table-bordered table-hover"><tbody><tr><th width="10%"class="titcolor">Http状态码</th><th class="titcolor">状态码含义</th></tr><tr><td>100</td><td>客户端应当继续发送请求。这个临时响应是用来通知客户端它的部分请求已经被服务器接收，且仍未被拒绝。客户端应当继续发送请求的剩余部分，或者如果请求已经完成，忽略这个响应。服务器必须在请求完成后向客户端发送一个最终响应。</td></tr><tr><td>101</td><td>服务器已经理解了客户端的请求，并将通过Upgrade消息头通知客户端采用不同的协议来完成这个请求。在发送完这个响应最后的空行后，服务器将会切换到在Upgrade消息头中定义的那些协议。只有在切换新的协议更有好处的时候才应该采取类似措施。例如，切换到新的HTTP版本比旧版本更有优势，或者切换到一个实时且同步的协议以传送利用此类特性的资源。</td></tr><tr><td>102</td><td>由WebDAV（RFC 2518）扩展的状态码，代表处理将被继续执行。</td></tr><tr><td>200</td><td>请求已成功，请求所希望的响应头或数据体将随此响应返回。</td></tr><tr><td>201</td><td>请求已经被实现，而且有一个新的资源已经依据请求的需要而建立，且其URI已经随Location头信息返回。假如需要的资源无法及时建立的话，应当返回'202 Accepted'。</td></tr><tr><td>202</td><td>服务器已接受请求，但尚未处理。正如它可能被拒绝一样，最终该请求可能会也可能不会被执行。在异步操作的场合下，没有比发送这个状态码更方便的做法了。返回202状态码的响应的目的是允许服务器接受其他过程的请求（例如某个每天只执行一次的基于批处理的操作），而不必让客户端一直保持与服务器的连接直到批处理操作全部完成。在接受请求处理并返回202状态码的响应应当在返回的实体中包含一些指示处理当前状态的信息，以及指向处理状态监视器或状态预测的指针，以便用户能够估计操作是否已经完成。</td></tr><tr><td>203</td><td>服务器已成功处理了请求，但返回的实体头部元信息不是在原始服务器上有效的确定集合，而是来自本地或者第三方的拷贝。当前的信息可能是原始版本的子集或者超集。例如，包含资源的元数据可能导致原始服务器知道元信息的超级。使用此状态码不是必须的，而且只有在响应不使用此状态码便会返回200 OK的情况下才是合适的。</td></tr><tr><td>204</td><td>服务器成功处理了请求，但不需要返回任何实体内容，并且希望返回更新了的元信息。响应可能通过实体头部的形式，返回新的或更新后的元信息。如果存在这些头部信息，则应当与所请求的变量相呼应。如果客户端是浏览器的话，那么用户浏览器应保留发送了该请求的页面，而不产生任何文档视图上的变化，即使按照规范新的或更新后的元信息应当被应用到用户浏览器活动视图中的文档。由于204响应被禁止包含任何消息体，因此它始终以消息头后的第一个空行结尾。</td></tr><tr><td>205</td><td>服务器成功处理了请求，且没有返回任何内容。但是与204响应不同，返回此状态码的响应要求请求者重置文档视图。该响应主要是被用于接受用户输入后，立即重置表单，以便用户能够轻松地开始另一次输入。与204响应一样，该响应也被禁止包含任何消息体，且以消息头后的第一个空行结束。</td></tr><tr><td>206</td><td>服务器已经成功处理了部分GET请求。类似于FlashGet或者迅雷这类的HTTP下载工具都是使用此类响应实现断点续传或者将一个大文档分解为多个下载段同时下载。该请求必须包含Range头信息来指示客户端希望得到的内容范围，并且可能包含If-Range来作为请求条件。响应必须包含如下的头部域：Content-Range用以指示本次响应中返回的内容的范围；如果是Content-Type为multipart/byteranges的多段下载，则每一multipart段中都应包含Content-Range域用以指示本段的内容范围。假如响应中包含Content-Length，那么它的数值必须匹配它返回的内容范围的真实字节数。Date ETag和/或Content-Location，假如同样的请求本应该返回200响应。Expires,Cache-Control，和/或Vary，假如其值可能与之前相同变量的其他响应对应的值不同的话。假如本响应请求使用了If-Range强缓存验证，那么本次响应不应该包含其他实体头；假如本响应的请求使用了If-Range弱缓存验证，那么本次响应禁止包含其他实体头；这避免了缓存的实体内容和更新了的实体头信息之间的不一致。否则，本响应就应当包含所有本应该返回200响应中应当返回的所有实体头部域。假如ETag或Last-Modified头部不能精确匹配的话，则客户端缓存应禁止将206响应返回的内容与之前任何缓存过的内容组合在一起。任何不支持Range以及Content-Range头的缓存都禁止缓存206响应返回的内容。</td></tr><tr><td>207</td><td>由WebDAV(RFC 2518)扩展的状态码，代表之后的消息体将是一个XML消息，并且可能依照之前子请求数量的不同，包含一系列独立的响应代码。</td></tr><tr><td>300</td><td>被请求的资源有一系列可供选择的回馈信息，每个都有自己特定的地址和浏览器驱动的商议信息。用户或浏览器能够自行选择一个首选的地址进行重定向。除非这是一个HEAD请求，否则该响应应当包括一个资源特性及地址的列表的实体，以便用户或浏览器从中选择最合适的重定向地址。这个实体的格式由Content-Type定义的格式所决定。浏览器可能根据响应的格式以及浏览器自身能力，自动作出最合适的选择。当然，RFC 2616规范并没有规定这样的自动选择该如何进行。如果服务器本身已经有了首选的回馈选择，那么在Location中应当指明这个回馈的URI；浏览器可能会将这个Location值作为自动重定向的地址。此外，除非额外指定，否则这个响应也是可缓存的。</td></tr><tr><td>301</td><td>被请求的资源已永久移动到新位置，并且将来任何对此资源的引用都应该使用本响应返回的若干个URI之一。如果可能，拥有链接编辑功能的客户端应当自动把请求的地址修改为从服务器反馈回来的地址。除非额外指定，否则这个响应也是可缓存的。新的永久性的URI应当在响应的Location域中返回。除非这是一个HEAD请求，否则响应的实体中应当包含指向新的URI的超链接及简短说明。如果这不是一个GET或者HEAD请求，因此浏览器禁止自动进行重定向，除非得到用户的确认，因为请求的条件可能因此发生变化。注意：对于某些使用HTTP/1.0协议的浏览器，当它们发送的POST请求得到了一个301响应的话，接下来的重定向请求将会变成GET方式。</td></tr><tr><td>302</td><td>请求的资源现在临时从不同的URI响应请求。由于这样的重定向是临时的，客户端应当继续向原有地址发送以后的请求。只有在Cache-Control或Expires中进行了指定的情况下，这个响应才是可缓存的。新的临时性的URI应当在响应的Location域中返回。除非这是一个HEAD请求，否则响应的实体中应当包含指向新的URI的超链接及简短说明。如果这不是一个GET或者HEAD请求，那么浏览器禁止自动进行重定向，除非得到用户的确认，因为请求的条件可能因此发生变化。注意：虽然RFC 1945和RFC 2068规范不允许客户端在重定向时改变请求的方法，但是很多现存的浏览器将302响应视作为303响应，并且使用GET方式访问在Location中规定的URI，而无视原先请求的方法。状态码303和307被添加了进来，用以明确服务器期待客户端进行何种反应。</td></tr><tr><td>303</td><td>对应当前请求的响应可以在另一个URI上被找到，而且客户端应当采用GET的方式访问那个资源。这个方法的存在主要是为了允许由脚本激活的POST请求输出重定向到一个新的资源。这个新的URI不是原始资源的替代引用。同时，303响应禁止被缓存。当然，第二个请求（重定向）可能被缓存。新的URI应当在响应的Location域中返回。除非这是一个HEAD请求，否则响应的实体中应当包含指向新的URI的超链接及简短说明。注意：许多HTTP/1.1版以前的浏览器不能正确理解303状态。如果需要考虑与这些浏览器之间的互动，302状态码应该可以胜任，因为大多数的浏览器处理302响应时的方式恰恰就是上述规范要求客户端处理303响应时应当做的。</td></tr><tr><td>304</td><td>如果客户端发送了一个带条件的GET请求且该请求已被允许，而文档的内容（自上次访问以来或者根据请求的条件）并没有改变，则服务器应当返回这个状态码。304响应禁止包含消息体，因此始终以消息头后的第一个空行结尾。该响应必须包含以下的头信息：Date，除非这个服务器没有时钟。假如没有时钟的服务器也遵守这些规则，那么代理服务器以及客户端可以自行将Date字段添加到接收到的响应头中去（正如RFC 2068中规定的一样），缓存机制将会正常工作。ETag和/或Content-Location，假如同样的请求本应返回200响应。Expires,Cache-Control，和/或Vary，假如其值可能与之前相同变量的其他响应对应的值不同的话。假如本响应请求使用了强缓存验证，那么本次响应不应该包含其他实体头；否则（例如，某个带条件的GET请求使用了弱缓存验证），本次响应禁止包含其他实体头；这避免了缓存了的实体内容和更新了的实体头信息之间的不一致。假如某个304响应指明了当前某个实体没有缓存，那么缓存系统必须忽视这个响应，并且重复发送不包含限制条件的请求。假如接收到一个要求更新某个缓存条目的304响应，那么缓存系统必须更新整个条目以反映所有在响应中被更新的字段的值。</td></tr><tr><td>305</td><td>被请求的资源必须通过指定的代理才能被访问。Location域中将给出指定的代理所在的URI信息，接收者需要重复发送一个单独的请求，通过这个代理才能访问相应资源。只有原始服务器才能建立305响应。注意：RFC 2068中没有明确305响应是为了重定向一个单独的请求，而且只能被原始服务器建立。忽视这些限制可能导致严重的安全后果。</td></tr><tr><td>306</td><td>在最新版的规范中，306状态码已经不再被使用。</td></tr><tr><td>307</td><td>请求的资源现在临时从不同的URI响应请求。由于这样的重定向是临时的，客户端应当继续向原有地址发送以后的请求。只有在Cache-Control或Expires中进行了指定的情况下，这个响应才是可缓存的。新的临时性的URI应当在响应的Location域中返回。除非这是一个HEAD请求，否则响应的实体中应当包含指向新的URI的超链接及简短说明。因为部分浏览器不能识别307响应，因此需要添加上述必要信息以便用户能够理解并向新的URI发出访问请求。如果这不是一个GET或者HEAD请求，那么浏览器禁止自动进行重定向，除非得到用户的确认，因为请求的条件可能因此发生变化。</td></tr><tr><td>400</td><td>1、语义有误，当前请求无法被服务器理解。除非进行修改，否则客户端不应该重复提交这个请求。2、请求参数有误。</td></tr><tr><td>401</td><td>当前请求需要用户验证。该响应必须包含一个适用于被请求资源的WWW-Authenticate信息头用以询问用户信息。客户端可以重复提交一个包含恰当的Authorization头信息的请求。如果当前请求已经包含了Authorization证书，那么401响应代表着服务器验证已经拒绝了那些证书。如果401响应包含了与前一个响应相同的身份验证询问，且浏览器已经至少尝试了一次验证，那么浏览器应当向用户展示响应中包含的实体信息，因为这个实体信息中可能包含了相关诊断信息。参见RFC 2617。</td></tr><tr><td>402</td><td>该状态码是为了将来可能的需求而预留的。</td></tr><tr><td>403</td><td>服务器已经理解请求，但是拒绝执行它。与401响应不同的是，身份验证并不能提供任何帮助，而且这个请求也不应该被重复提交。如果这不是一个HEAD请求，而且服务器希望能够讲清楚为何请求不能被执行，那么就应该在实体内描述拒绝的原因。当然服务器也可以返回一个404响应，假如它不希望让客户端获得任何信息。</td></tr><tr><td>404</td><td>请求失败，请求所希望得到的资源未被在服务器上发现。没有信息能够告诉用户这个状况到底是暂时的还是永久的。假如服务器知道情况的话，应当使用410状态码来告知旧资源因为某些内部的配置机制问题，已经永久的不可用，而且没有任何可以跳转的地址。404这个状态码被广泛应用于当服务器不想揭示到底为何请求被拒绝或者没有其他适合的响应可用的情况下。</td></tr><tr><td>405</td><td>请求行中指定的请求方法不能被用于请求相应的资源。该响应必须返回一个Allow头信息用以表示出当前资源能够接受的请求方法的列表。鉴于PUT，DELETE方法会对服务器上的资源进行写操作，因而绝大部分的网页服务器都不支持或者在默认配置下不允许上述请求方法，对于此类请求均会返回405错误。</td></tr><tr><td>406</td><td>请求的资源的内容特性无法满足请求头中的条件，因而无法生成响应实体。除非这是一个HEAD请求，否则该响应就应当返回一个包含可以让用户或者浏览器从中选择最合适的实体特性以及地址列表的实体。实体的格式由Content-Type头中定义的媒体类型决定。浏览器可以根据格式及自身能力自行作出最佳选择。但是，规范中并没有定义任何作出此类自动选择的标准。</td></tr><tr><td>407</td><td>与401响应类似，只不过客户端必须在代理服务器上进行身份验证。代理服务器必须返回一个Proxy-Authenticate用以进行身份询问。客户端可以返回一个Proxy-Authorization信息头用以验证。参见RFC 2617。</td></tr><tr><td>408</td><td>请求超时。客户端没有在服务器预备等待的时间内完成一个请求的发送。客户端可以随时再次提交这一请求而无需进行任何更改。</td></tr><tr><td>409</td><td>由于和被请求的资源的当前状态之间存在冲突，请求无法完成。这个代码只允许用在这样的情况下才能被使用：用户被认为能够解决冲突，并且会重新提交新的请求。该响应应当包含足够的信息以便用户发现冲突的源头。冲突通常发生于对PUT请求的处理中。例如，在采用版本检查的环境下，某次PUT提交的对特定资源的修改请求所附带的版本信息与之前的某个（第三方）请求向冲突，那么此时服务器就应该返回一个409错误，告知用户请求无法完成。此时，响应实体中很可能会包含两个冲突版本之间的差异比较，以便用户重新提交归并以后的新版本。</td></tr><tr><td>410</td><td>被请求的资源在服务器上已经不再可用，而且没有任何已知的转发地址。这样的状况应当被认为是永久性的。如果可能，拥有链接编辑功能的客户端应当在获得用户许可后删除所有指向这个地址的引用。如果服务器不知道或者无法确定这个状况是否是永久的，那么就应该使用404状态码。除非额外说明，否则这个响应是可缓存的。410响应的目的主要是帮助网站管理员维护网站，通知用户该资源已经不再可用，并且服务器拥有者希望所有指向这个资源的远端连接也被删除。这类事件在限时、增值服务中很普遍。同样，410响应也被用于通知客户端在当前服务器站点上，原本属于某个个人的资源已经不再可用。当然，是否需要把所有永久不可用的资源标记为'410 Gone'，以及是否需要保持此标记多长时间，完全取决于服务器拥有者。</td></tr><tr><td>411</td><td>服务器拒绝在没有定义Content-Length头的情况下接受请求。在添加了表明请求消息体长度的有效Content-Length头之后，客户端可以再次提交该请求。</td></tr><tr><td>412</td><td>服务器在验证在请求的头字段中给出先决条件时，没能满足其中的一个或多个。这个状态码允许客户端在获取资源时在请求的元信息（请求头字段数据）中设置先决条件，以此避免该请求方法被应用到其希望的内容以外的资源上。</td></tr><tr><td>413</td><td>服务器拒绝处理当前请求，因为该请求提交的实体数据大小超过了服务器愿意或者能够处理的范围。此种情况下，服务器可以关闭连接以免客户端继续发送此请求。如果这个状况是临时的，服务器应当返回一个Retry-After的响应头，以告知客户端可以在多少时间以后重新尝试。</td></tr><tr><td>414</td><td>请求的URI长度超过了服务器能够解释的长度，因此服务器拒绝对该请求提供服务。这比较少见，通常的情况包括：本应使用POST方法的表单提交变成了GET方法，导致查询字符串（Query String）过长。重定向URI“黑洞”，例如每次重定向把旧的URI作为新的URI的一部分，导致在若干次重定向后URI超长。客户端正在尝试利用某些服务器中存在的安全漏洞攻击服务器。这类服务器使用固定长度的缓冲读取或操作请求的URI，当GET后的参数超过某个数值后，可能会产生缓冲区溢出，导致任意代码被执行[1]。没有此类漏洞的服务器，应当返回414状态码。</td></tr><tr><td>415</td><td>对于当前请求的方法和所请求的资源，请求中提交的实体并不是服务器中所支持的格式，因此请求被拒绝。</td></tr><tr><td>416</td><td>如果请求中包含了Range请求头，并且Range中指定的任何数据范围都与当前资源的可用范围不重合，同时请求中又没有定义If-Range请求头，那么服务器就应当返回416状态码。假如Range使用的是字节范围，那么这种情况就是指请求指定的所有数据范围的首字节位置都超过了当前资源的长度。服务器也应当在返回416状态码的同时，包含一个Content-Range实体头，用以指明当前资源的长度。这个响应也被禁止使用multipart/byteranges作为其Content-Type。</td></tr><tr><td>417</td><td>在请求头Expect中指定的预期内容无法被服务器满足，或者这个服务器是一个代理服务器，它有明显的证据证明在当前路由的下一个节点上，Expect的内容无法被满足。</td></tr><tr><td>421</td><td>从当前客户端所在的IP地址到服务器的连接数超过了服务器许可的最大范围。通常，这里的IP地址指的是从服务器上看到的客户端地址（比如用户的网关或者代理服务器地址）。在这种情况下，连接数的计算可能涉及到不止一个终端用户。</td></tr><tr><td>422</td><td>从当前客户端所在的IP地址到服务器的连接数超过了服务器许可的最大范围。通常，这里的IP地址指的是从服务器上看到的客户端地址（比如用户的网关或者代理服务器地址）。在这种情况下，连接数的计算可能涉及到不止一个终端用户。</td></tr><tr><td>422</td><td>请求格式正确，但是由于含有语义错误，无法响应。（RFC 4918 WebDAV）423 Locked当前资源被锁定。（RFC 4918 WebDAV）</td></tr><tr><td>424</td><td>由于之前的某个请求发生的错误，导致当前请求失败，例如PROPPATCH。（RFC 4918 WebDAV）</td></tr><tr><td>425</td><td>在WebDav Advanced Collections草案中定义，但是未出现在《WebDAV顺序集协议》（RFC 3658）中。</td></tr><tr><td>426</td><td>客户端应当切换到TLS/1.0。（RFC 2817）</td></tr><tr><td>449</td><td>由微软扩展，代表请求应当在执行完适当的操作后进行重试。</td></tr><tr><td>500</td><td>服务器遇到了一个未曾预料的状况，导致了它无法完成对请求的处理。一般来说，这个问题都会在服务器的程序码出错时出现。</td></tr><tr><td>501</td><td>服务器不支持当前请求所需要的某个功能。当服务器无法识别请求的方法，并且无法支持其对任何资源的请求。</td></tr><tr><td>502</td><td>作为网关或者代理工作的服务器尝试执行请求时，从上游服务器接收到无效的响应。</td></tr><tr><td>503</td><td>由于临时的服务器维护或者过载，服务器当前无法处理请求。这个状况是临时的，并且将在一段时间以后恢复。如果能够预计延迟时间，那么响应中可以包含一个Retry-After头用以标明这个延迟时间。如果没有给出这个Retry-After信息，那么客户端应当以处理500响应的方式处理它。注意：503状态码的存在并不意味着服务器在过载的时候必须使用它。某些服务器只不过是希望拒绝客户端的连接。</td></tr><tr><td>504</td><td>作为网关或者代理工作的服务器尝试执行请求时，未能及时从上游服务器（URI标识出的服务器，例如HTTP、FTP、LDAP）或者辅助服务器（例如DNS）收到响应。注意：某些代理服务器在DNS查询超时时会返回400或者500错误</td></tr><tr><td>505</td><td>服务器不支持，或者拒绝支持在请求中使用的HTTP版本。这暗示着服务器不能或不愿使用与客户端相同的版本。响应中应当包含一个描述了为何版本不被支持以及服务器支持哪些协议的实体。</td></tr><tr><td>506</td><td>由《透明内容协商协议》（RFC 2295）扩展，代表服务器存在内部配置错误：被请求的协商变元资源被配置为在透明内容协商中使用自己，因此在一个协商处理中不是一个合适的重点。</td></tr><tr><td>507</td><td>服务器无法存储完成请求所必须的内容。这个状况被认为是临时的。WebDAV(RFC 4918)</td></tr><tr><td>509</td><td>服务器达到带宽限制。这不是一个官方的状态码，但是仍被广泛使用。</td></tr><tr><td>510</td><td>获取资源所需要的策略并没有没满足。（RFC 2774）</td></tr></tbody></table></div></div>
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