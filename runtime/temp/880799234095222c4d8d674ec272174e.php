<?php /*a:5:{s:72:"/data/wwwroot/tool.ruyo.net/application/index/view/index/httpheader.html";i:1633603258;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.httpheader.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.httpheader.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.httpheader.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<div class="container"><div class="row"><div class="col-md-12"><div class="accordion" id="accordion2"><div class="accordion-group"><!-- <div><a href="https://www.aliyun.com/minisite/goods?userCode=eaborev5" target="_blank" rel="nofollow"><img src="http://zxgj.16400.cn/static/images/ali.jpg"></a></div> -->
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/useragent/">常用User-Agent</a></li><li role="presentation"><a href="/contenttype/">Content-Type对照表</a></li><li role="presentation"><a href="/requestmethod/">Request请求大全</a></li><li role="presentation" class="active"><a href="/httpheader/">HTTP请求头大全</a></li><li role="presentation"><a href="/pagecode/"> HTTP状态码</a></li><li role="presentation"><a href="/asciicode/">ASCII对照表</a></li><li role="presentation"><a href="/htmlescapechar/">HTML特殊字符转义</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/ports/">常见端口大全</a></li><li role="presentation"><a href="/bootstrapicon/">Bootstrap字体图标</a></li><li role="presentation"><a href="/androidmanifest/"> Android Manifest权限大全</a></li><li role="presentation"><a href="/linuxcmd/">Linux常用命令大全</a></li></ul></li></ul> <div class="alert alert-success alert-dismissible" role="alert">
        HTTP请求头大全,HTTP头信息包括通用头、请求头、响应头和实体头四个部分 <code>小贴士： Ctrl+F 快速查找</code>
    </div>
    
    <div class="panel panel-success">
        <table width="100%" class="table table-bordered table-striped">
            <caption>
                HTTP Request Header 请求头</caption>
            <tbody>
                <tr>
                    <th width="15%">
                        Header
                    </th>
                    <th width="55%">
                        解释
                    </th>
                    <th>
                        示例
                    </th>
                </tr>
                <tr>
                    <td>
                        Accept
                    </td>
                    <td>
                        指定客户端能够接收的内容类型
                    </td>
                    <td>
                        Accept: text/plain, text/html
                    </td>
                </tr>
                <tr>
                    <td>
                        Accept-Charset
                    </td>
                    <td>
                        浏览器可以接受的字符编码集。
                    </td>
                    <td>
                        Accept-Charset: iso-8859-5
                    </td>
                </tr>
                <tr>
                    <td>
                        Accept-Encoding
                    </td>
                    <td>
                        指定浏览器可以支持的web服务器返回内容压缩编码类型。
                    </td>
                    <td>
                        Accept-Encoding: compress, gzip
                    </td>
                </tr>
                <tr>
                    <td>
                        Accept-Language
                    </td>
                    <td>
                        浏览器可接受的语言
                    </td>
                    <td>
                        Accept-Language: en,zh
                    </td>
                </tr>
                <tr>
                    <td>
                        Accept-Ranges
                    </td>
                    <td>
                        可以请求网页实体的一个或者多个子范围字段
                    </td>
                    <td>
                        Accept-Ranges: bytes
                    </td>
                </tr>
                <tr>
                    <td>
                        Authorization
                    </td>
                    <td>
                        HTTP授权的授权证书
                    </td>
                    <td>
                        Authorization: 授权证书
                    </td>
                </tr>
                <tr>
                    <td>
                        Cache-Control
                    </td>
                    <td>
                        指定请求和响应遵循的缓存机制
                    </td>
                    <td>
                        Cache-Control: no-cache
                    </td>
                </tr>
                <tr>
                    <td>
                        Connection
                    </td>
                    <td>
                        表示是否需要持久连接。（HTTP 1.1默认进行持久连接）
                    </td>
                    <td>
                        Connection: close
                    </td>
                </tr>
                <tr>
                    <td>
                        Cookie
                    </td>
                    <td>
                        HTTP请求发送时，会把保存在该请求域名下的所有cookie值一起发送给web服务器。
                    </td>
                    <td>
                        Cookie: $Version=1; Skin=new;
                    </td>
                </tr>
                <tr>
                    <td>
                        Content-Length
                    </td>
                    <td>
                        请求的内容长度
                    </td>
                    <td>
                        Content-Length: 348
                    </td>
                </tr>
                <tr>
                    <td>
                        Content-Type
                    </td>
                    <td>
                        请求的与实体对应的MIME信息
                    </td>
                    <td>
                        Content-Type: application/x-www-form-urlencoded
                    </td>
                </tr>
                <tr>
                    <td>
                        Date
                    </td>
                    <td>
                        请求发送的日期和时间
                    </td>
                    <td>
                        Date: Tue, 15 Nov&nbsp;2010 08:12:31 GMT
                    </td>
                </tr>
                <tr>
                    <td>
                        Expect
                    </td>
                    <td>
                        请求的特定的服务器行为
                    </td>
                    <td>
                        Expect: 100-continue
                    </td>
                </tr>
                <tr>
                    <td>
                        From
                    </td>
                    <td>
                        发出请求的用户的Email
                    </td>
                    <td>
                        From: user@jsons.cn
                    </td>
                </tr>
                <tr>
                    <td>
                        Host
                    </td>
                    <td>
                        指定请求的服务器的域名和端口号
                    </td>
                    <td>
                        Host: www.jsons.cn
                    </td>
                </tr>
                <tr>
                    <td>
                        If-Match
                    </td>
                    <td>
                        只有请求内容与实体相匹配才有效
                    </td>
                    <td>
                        If-Match: “特定值”
                    </td>
                </tr>
                <tr>
                    <td>
                        If-Modified-Since
                    </td>
                    <td>
                        如果请求的部分在指定时间之后被修改则请求成功，未被修改则返回304代码
                    </td>
                    <td>
                        If-Modified-Since: Sat, 29 Oct 2010 19:43:31 GMT
                    </td>
                </tr>
                <tr>
                    <td>
                        If-None-Match
                    </td>
                    <td>
                        如果内容未改变返回304代码，参数为服务器先前发送的Etag，与服务器回应的Etag比较判断是否改变
                    </td>
                    <td>
                        If-None-Match: “特定值”
                    </td>
                </tr>
                <tr>
                    <td>
                        If-Range
                    </td>
                    <td>
                        如果实体未改变，服务器发送客户端丢失的部分，否则发送整个实体。参数也为Etag
                    </td>
                    <td>
                        If-Range: “特定值”
                    </td>
                </tr>
                <tr>
                    <td>
                        If-Unmodified-Since
                    </td>
                    <td>
                        只在实体在指定时间之后未被修改才请求成功
                    </td>
                    <td>
                        If-Unmodified-Since: Sat, 29 Oct 2010 19:43:31 GMT
                    </td>
                </tr>
                <tr>
                    <td>
                        Max-Forwards
                    </td>
                    <td>
                        限制信息通过代理和网关传送的时间
                    </td>
                    <td>
                        Max-Forwards: 10
                    </td>
                </tr>
                <tr>
                    <td>
                        Pragma
                    </td>
                    <td>
                        用来包含实现特定的指令
                    </td>
                    <td>
                        Pragma: no-cache
                    </td>
                </tr>
                <tr>
                    <td>
                        Proxy-Authorization
                    </td>
                    <td>
                        连接到代理的授权证书
                    </td>
                    <td>
                        Proxy-Authorization: 链接到代理的授权证书
                    </td>
                </tr>
                <tr>
                    <td>
                        Range
                    </td>
                    <td>
                        只请求实体的一部分，指定范围
                    </td>
                    <td>
                        Range: bytes=500-999
                    </td>
                </tr>
                <tr>
                    <td>
                        Referer
                    </td>
                    <td>
                        先前网页的地址，当前请求网页紧随其后,即来路
                    </td>
                    <td>
                        Referer: http://www.jsons.cn
                    </td>
                </tr>
                <tr>
                    <td>
                        TE
                    </td>
                    <td>
                        客户端愿意接受的传输编码，并通知服务器接受接受尾加头信息
                    </td>
                    <td>
                        TE: trailers,deflate;q=0.5
                    </td>
                </tr>
                <tr>
                    <td>
                        Upgrade
                    </td>
                    <td>
                        向服务器指定某种传输协议以便服务器进行转换（如果支持）
                    </td>
                    <td>
                        Upgrade: HTTP/2.0, SHTTP/1.3, IRC/6.9, RTA/x11
                    </td>
                </tr>
                <tr>
                    <td>
                        User-Agent
                    </td>
                    <td>
                        User-Agent的内容包含发出请求的用户信息
                    </td>
                    <td>
                        User-Agent: Mozilla/5.0 (Linux; X11)
                    </td>
                </tr>
                <tr>
                    <td>
                        Via
                    </td>
                    <td>
                        通知中间网关或代理服务器地址，通信协议
                    </td>
                    <td>
                        Via: 1.0 fred, 1.1 nowhere.com (Apache/1.1)
                    </td>
                </tr>
                <tr>
                    <td>
                        Warning
                    </td>
                    <td>
                        关于消息实体的警告信息
                    </td>
                    <td>
                        Warn: 199 Miscellaneous warning
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
  
    <div class="panel panel-success">
        <table width="100%" class="table table-bordered table-striped">
            <caption>
                HTTP Responses Header 响应头</caption>
            <tbody>
                <tr>
                    <th width="15%">
                        Header
                    </th>
                    <th width="55%">
                        解释
                    </th>
                    <th>
                        示例
                    </th>
                </tr>
                <tr>
                    <td>
                        Accept-Ranges
                    </td>
                    <td>
                        表明服务器是否支持指定范围请求及哪种类型的分段请求
                    </td>
                    <td>
                        Accept-Ranges: bytes
                    </td>
                </tr>
                <tr>
                    <td>
                        Age
                    </td>
                    <td>
                        从原始服务器到代理缓存形成的估算时间（以秒计，非负）
                    </td>
                    <td>
                        Age: 12
                    </td>
                </tr>
                <tr>
                    <td>
                        Allow
                    </td>
                    <td>
                        对某网络资源的有效的请求行为，不允许则返回405
                    </td>
                    <td>
                        Allow: GET, HEAD
                    </td>
                </tr>
                <tr>
                    <td>
                        Cache-Control
                    </td>
                    <td>
                        告诉所有的缓存机制是否可以缓存及哪种类型
                    </td>
                    <td>
                        Cache-Control: no-cache
                    </td>
                </tr>
                <tr>
                    <td>
                        Content-Encoding
                    </td>
                    <td>
                        web服务器支持的返回内容压缩编码类型。
                    </td>
                    <td>
                        Content-Encoding: gzip
                    </td>
                </tr>
                <tr>
                    <td>
                        Content-Language
                    </td>
                    <td>
                        响应体的语言
                    </td>
                    <td>
                        Content-Language: en,zh
                    </td>
                </tr>
                <tr>
                    <td>
                        Content-Length
                    </td>
                    <td>
                        响应体的长度
                    </td>
                    <td>
                        Content-Length: 348
                    </td>
                </tr>
                <tr>
                    <td>
                        Content-Location
                    </td>
                    <td>
                        请求资源可替代的备用的另一地址
                    </td>
                    <td>
                        Content-Location: /index.htm
                    </td>
                </tr>
                <tr>
                    <td>
                        Content-MD5
                    </td>
                    <td>
                        返回资源的MD5校验值
                    </td>
                    <td>
                        Content-MD5: MD5校验值
                    </td>
                </tr>
                <tr>
                    <td>
                        Content-Range
                    </td>
                    <td>
                        在整个返回体中本部分的字节位置
                    </td>
                    <td>
                        Content-Range: bytes 21010-47021/47022
                    </td>
                </tr>
                <tr>
                    <td>
                        Content-Type
                    </td>
                    <td>
                        返回内容的MIME类型
                    </td>
                    <td>
                        Content-Type: text/html; charset=utf-8
                    </td>
                </tr>
                <tr>
                    <td>
                        Date
                    </td>
                    <td>
                        原始服务器消息发出的时间
                    </td>
                    <td>
                        Date: Tue, 15 Nov 2010 08:12:31 GMT
                    </td>
                </tr>
                <tr>
                    <td>
                        ETag
                    </td>
                    <td>
                        请求变量的实体标签的当前值
                    </td>
                    <td>
                        ETag: “请求变量实体标签当前值”
                    </td>
                </tr>
                <tr>
                    <td>
                        Expires
                    </td>
                    <td>
                        响应过期的日期和时间
                    </td>
                    <td>
                        Expires: Thu, 01 Dec 2010 16:00:00 GMT
                    </td>
                </tr>
                <tr>
                    <td>
                        Last-Modified
                    </td>
                    <td>
                        请求资源的最后修改时间
                    </td>
                    <td>
                        Last-Modified: Tue, 15 Nov 2010 12:45:26 GMT
                    </td>
                </tr>
                <tr>
                    <td>
                        Location
                    </td>
                    <td>
                        用来重定向接收方到非请求URL的位置来完成请求或标识新的资源
                    </td>
                    <td>
                        Location: http://www.jsons.cn
                    </td>
                </tr>
                <tr>
                    <td>
                        Pragma
                    </td>
                    <td>
                        包括实现特定的指令，它可应用到响应链上的任何接收方
                    </td>
                    <td>
                        Pragma: no-cache
                    </td>
                </tr>
                <tr>
                    <td>
                        Proxy-Authenticate
                    </td>
                    <td>
                        它指出认证方案和可应用到代理的该URL上的参数
                    </td>
                    <td>
                        Proxy-Authenticate: Basic
                    </td>
                </tr>
                <tr>
                    <td>
                        refresh
                    </td>
                    <td>
                        应用于重定向或一个新的资源被创造，在5秒之后重定向（由网景提出，被大部分浏览器支持）
                    </td>
                    <td>
                        <div>
                            Refresh: 5; url= http://www.jsons.cn</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Retry-After
                    </td>
                    <td>
                        如果实体暂时不可取，通知客户端在指定时间之后再次尝试
                    </td>
                    <td>
                        Retry-After: 120
                    </td>
                </tr>
                <tr>
                    <td>
                        Server
                    </td>
                    <td>
                        web服务器软件名称
                    </td>
                    <td>
                        Server: Apache/1.3.27 (Unix) (Red-Hat/Linux)
                    </td>
                </tr>
                <tr>
                    <td>
                        Set-Cookie
                    </td>
                    <td>
                        设置Http Cookie
                    </td>
                    <td>
                        Set-Cookie: UserID=JohnDoe; Max-Age=3600; Version=1
                    </td>
                </tr>
                <tr>
                    <td>
                        Trailer
                    </td>
                    <td>
                        指出头域在分块传输编码的尾部存在
                    </td>
                    <td>
                        Trailer: Max-Forwards
                    </td>
                </tr>
                <tr>
                    <td>
                        Transfer-Encoding
                    </td>
                    <td>
                        文件传输编码
                    </td>
                    <td>
                        Transfer-Encoding:chunked
                    </td>
                </tr>
                <tr>
                    <td>
                        Vary
                    </td>
                    <td>
                        告诉下游代理是使用缓存响应还是从原始服务器请求
                    </td>
                    <td>
                        Vary: *
                    </td>
                </tr>
                <tr>
                    <td>
                        Via
                    </td>
                    <td>
                        告知代理客户端响应是通过哪里发送的
                    </td>
                    <td>
                        Via: 1.0 fred, 1.1 nowhere.com (Apache/1.1)
                    </td>
                </tr>
                <tr>
                    <td>
                        Warning
                    </td>
                    <td>
                        警告实体可能存在的问题
                    </td>
                    <td>
                        Warning: 199 Miscellaneous warning
                    </td>
                </tr>
                <tr>
                    <td>
                        WWW-Authenticate
                    </td>
                    <td>
                        表明客户端请求实体应该使用的授权方案
                    </td>
                    <td>
                        WWW-Authenticate: Basic
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="alert alert alert-success alert-dismissible">
        <h4>在线HTTP响应头,HTTP请求头大全</h4>
            <p>HTTP请求头提供了关于请求，响应或者其他的发送实体的信息，HTTP的头信息包括通用头、请求头、响应头和实体头四个部分</p>
            <p>每个头域由一个域名，冒号（:）和域值三部分组成</p>
            <p>通用头标：即可用于请求，也可用于响应，是作为一个整体而不是特定资源与事务相关联</p>
            <p>请求头标：允许客户端传递关于自身的信息和希望的响应形式</p>
            <p>响应头标：服务器和于传递自身信息的响应</p>
            <p>实体头标：定义被传送资源的信息，即可用于请求，也可用于响应</p>
    </div>

       </div></div></div>
 <div class="accordion-group"> </div></div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><div class="container" id="foot-history">
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