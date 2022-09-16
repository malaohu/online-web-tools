<?php /*a:4:{s:68:"/data/wwwroot/tool.ruyo.net/application/index/view/index/alldns.html";i:1633860244;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.alldns.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.alldns.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.alldns.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<div class="container"><div class="row"><div class="col-md-12 col10main"><div class="accordion" id="accordion2"><div class="accordion-group">
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/dns/">公共DNS</a></li><li role="presentation" class="active"><a href="/alldns/">各地区公共DNS</a></li><li role="presentation"><a href="/dnsdx/">各地电信DNS</a></li><li role="presentation"><a href="/dnslt/">各地联通DNS</a></li><li role="presentation"><a href="/dnsyd/">各地移动DNS</a></li><li role="presentation"><a href="/dnstt/">各地铁通DNS</a></li><li role="presentation"><a href="/dnsedu/">教育网DNS</a></li><li role="presentation"><a href="/dnsusa/">美国DNS</a></li></ul>    <div class="alert alert-success alert-dismissible" role="alert">各地DNS服务器大全：联通DNS服务器、电信DNS服务器、铁通DNS服务器、教育网DNS服务器、美国DNS服务器。<code>小贴士：Ctrl+F 快速查找地区</code> </div><div class="panel panel-success"><div class="table-responsive"><table class="table table-bordered table-striped table-hover" width="100%"><tbody><tr><th width="30%">开始IP</th><th width="30%">结束IP</th><th width="40%">地理位置</th></tr><tr><td>4.2.2.1</td><td>4.2.2.6</td><td>美国科罗拉多州布隆菲尔德市Level3通信公司DNS服务器</td></tr><tr><td>8.2.208.5</td><td>8.2.208.5</td><td>美国科罗拉多州布隆菲尔德市Level3通信公司DNS服务器</td></tr><tr><td>8.8.4.4</td><td>8.8.4.4</td><td>美国加利福尼亚州山景市谷歌公司DNS服务器</td></tr><tr><td>8.8.8.8</td><td>8.8.8.8</td><td>美国加利福尼亚州山景市谷歌公司DNS服务器</td></tr><tr><td>8.8.192.35</td><td>8.8.192.35</td><td>美国科罗拉多州布隆菲尔德市Level3通信公司DNS服务器</td></tr><tr><td>12.17.136.131</td><td>12.17.136.131</td><td>美国ATT公司DNS服务器</td></tr><tr><td>12.25.232.115</td><td>12.25.232.115</td><td>美国ATT公司DNS服务器</td></tr><tr><td>12.32.34.33</td><td>12.32.34.33</td><td>美国ATT公司DNS服务器</td></tr><tr><td>12.49.240.68</td><td>12.49.240.68</td><td>美国ATT公司DNS服务器</td></tr><tr><td>12.166.30.2</td><td>12.166.30.2</td><td>美国ATT公司DNS服务器</td></tr><tr><td>12.180.165.40</td><td>12.180.165.40</td><td>美国ATT公司DNS服务器</td></tr><tr><td>24.154.1.4</td><td>24.154.1.5</td><td>美国俄亥俄州DNS服务器</td></tr><tr><td>24.197.96.16</td><td>24.197.96.16</td><td>美国密苏里州DNS服务器</td></tr><tr><td>24.237.132.5</td><td>24.237.132.5</td><td>美国阿拉斯加州DNS服务器</td></tr><tr><td>38.98.1.5</td><td>38.98.1.5</td><td>美国华盛顿哥伦比亚特区Cogent通信公司DNS服务器</td></tr><tr><td>38.98.10.132</td><td>38.98.10.132</td><td>美国华盛顿哥伦比亚特区Cogent通信公司DNS服务器</td></tr><tr><td>38.116.192.11</td><td>38.116.192.11</td><td>美国华盛顿哥伦比亚特区Cogent通信公司DNS服务器</td></tr><tr><td>48.6.16.245</td><td>48.6.16.245</td><td>美国Cox通信公司DNS服务器</td></tr><tr><td>59.51.78.211</td><td>59.51.78.211</td><td>湖南省电信DNS服务器</td></tr><tr><td>60.191.244.5</td><td>60.191.244.5</td><td>浙江省金华市电信DNS服务器</td></tr><tr><td>61.10.0.130</td><td>61.10.0.130</td><td>香港CableTVDNS服务器</td></tr><tr><td>61.10.1.130</td><td>61.10.1.130</td><td>香港CableTVDNS服务器</td></tr><tr><td>61.128.114.133</td><td>61.128.114.133</td><td>新疆乌鲁木齐市电信DNS服务器</td></tr><tr><td>61.128.114.166</td><td>61.128.114.166</td><td>新疆乌鲁木齐市电信DNS服务器</td></tr><tr><td>61.128.128.68</td><td>61.128.128.68</td><td>重庆市电信DNS服务器</td></tr><tr><td>61.128.192.68</td><td>61.128.192.68</td><td>重庆市电信DNS服务器</td></tr><tr><td>61.132.163.68</td><td>61.132.163.68</td><td>安徽省电信DNS服务器</td></tr><tr><td>61.139.2.69</td><td>61.139.2.69</td><td>四川省成都市电信DNS服务器</td></tr><tr><td>61.139.39.73</td><td>61.139.39.73</td><td>四川省泸州市电信DNS服务器</td></tr><tr><td>61.139.54.66</td><td>61.139.54.66</td><td>四川省凉山州西昌市电信DNS服务器</td></tr><tr><td>61.166.150.101</td><td>61.166.150.101</td><td>云南省曲靖市电信DNS服务器</td></tr><tr><td>61.166.150.123</td><td>61.166.150.123</td><td>云南省电信DNS服务器</td></tr><tr><td>61.187.98.3</td><td>61.187.98.3</td><td>湖南省株洲市电信DNS服务器</td></tr><tr><td>61.187.98.6</td><td>61.187.98.6</td><td>湖南省株洲市电信DNS服务器</td></tr><tr><td>61.232.202.158</td><td>61.232.202.158</td><td>陕西省西安市铁通DNS</td></tr><tr><td>61.234.254.5</td><td>61.234.254.6</td><td>湖南省铁通DNS服务器</td></tr><tr><td>61.235.70.98</td><td>61.235.70.98</td><td>广东省广州市快灵通宽带DNS服务器</td></tr><tr><td>61.235.164.13</td><td>61.235.164.13</td><td>广西柳州市铁通DNS服务器</td></tr><tr><td>61.235.164.18</td><td>61.235.164.18</td><td>广西柳州市铁通DNS服务器</td></tr><tr><td>63.76.176.252</td><td>63.76.176.252</td><td>美国NIC注册机构DNS服务器</td></tr><tr><td>63.88.42.5</td><td>63.88.42.5</td><td>美国NIC注册机构DNS服务器</td></tr><tr><td>63.135.48.130</td><td>63.135.48.130</td><td>美国NIC注册机构DNS服务器</td></tr><tr><td>63.148.170.11</td><td>63.148.170.11</td><td>美国科罗拉多州丹佛市Qwest通信有线责任公司DNS服务器</td></tr><tr><td>63.150.244.16</td><td>63.150.244.16</td><td>美国科罗拉多州丹佛市Qwest通信有线责任公司DNS服务器</td></tr><tr><td>63.245.14.196</td><td>63.245.14.196</td><td>美国弗罗里达州DNS服务器</td></tr><tr><td>63.251.129.33</td><td>63.251.129.33</td><td>美国Internap网络DNS服务器</td></tr><tr><td>64.4.129.250</td><td>64.4.129.250</td><td>美国加州DNS服务器</td></tr><tr><td>64.13.32.5</td><td>64.13.32.5</td><td>美国加州DNS服务器</td></tr><tr><td>64.13.48.12</td><td>64.13.48.12</td><td>美国加州DNS服务器</td></tr><tr><td>64.13.131.34</td><td>64.13.131.34</td><td>美国加州DNS服务器</td></tr><tr><td>64.30.215.129</td><td>64.30.215.129</td><td>美国加州DNS服务器</td></tr><tr><td>64.57.176.12</td><td>64.57.176.12</td><td>美国加州DNS服务器</td></tr><tr><td>64.58.4.2</td><td>64.58.4.2</td><td>美国加州DNS服务器</td></tr><tr><td>64.58.15.2</td><td>64.58.15.2</td><td>美国加州DNS服务器</td></tr><tr><td>64.58.254.2</td><td>64.58.254.2</td><td>美国加州DNS服务器</td></tr><tr><td>64.79.224.3</td><td>64.79.224.3</td><td>美国加州DNS服务器</td></tr><tr><td>64.79.224.27</td><td>64.79.224.27</td><td>美国加州DNS服务器</td></tr><tr><td>64.85.177.10</td><td>64.85.177.11</td><td>美国加州DNS服务器</td></tr><tr><td>64.89.247.15</td><td>64.89.247.15</td><td>美国加州DNS服务器</td></tr><tr><td>64.90.209.53</td><td>64.90.209.53</td><td>美国加州DNS服务器</td></tr><tr><td>64.91.89.2</td><td>64.91.89.2</td><td>美国加州DNS服务器</td></tr><tr><td>64.105.97.90</td><td>64.105.97.90</td><td>美国加州DNS服务器</td></tr><tr><td>64.105.152.186</td><td>64.105.152.186</td><td>美国加州DNS服务器</td></tr><tr><td>64.118.80.141</td><td>64.118.80.141</td><td>美国加州DNS服务器</td></tr><tr><td>64.119.60.5</td><td>64.119.60.5</td><td>美国加州DNS服务器</td></tr><tr><td>64.119.60.9</td><td>64.119.60.9</td><td>美国加州DNS服务器</td></tr><tr><td>64.129.67.101</td><td>64.129.67.101</td><td>美国加州DNS服务器</td></tr><tr><td>64.135.2.250</td><td>64.135.2.250</td><td>美国加州DNS服务器</td></tr><tr><td>64.140.128.10</td><td>64.140.128.10</td><td>美国加州DNS服务器</td></tr><tr><td>64.146.192.16</td><td>64.146.192.16</td><td>美国加州DNS服务器</td></tr><tr><td>64.149.136.201</td><td>64.149.136.201</td><td>美国加州DNS服务器</td></tr><tr><td>64.192.0.10</td><td>64.192.0.10</td><td>美国威廉姆斯通讯集团公司DNS服务器</td></tr><tr><td>64.207.64.5</td><td>64.207.64.5</td><td>美国加州DNS服务器</td></tr><tr><td>65.39.139.53</td><td>65.39.139.53</td><td>美国Peer1Nerwork公司DNS服务器</td></tr><tr><td>65.54.238.70</td><td>65.54.238.70</td><td>美国Microsoft公司DNS服务器</td></tr><tr><td>65.88.88.2</td><td>65.88.88.2</td><td>美国Broadwing通信公司DNS服务器</td></tr><tr><td>65.125.132.1</td><td>65.125.132.1</td><td>美国科罗拉多州丹佛市Qwest通信有线责任公司DNS服务器</td></tr><tr><td>65.248.165.11</td><td>65.248.165.11</td><td>美国UUNETDNS服务器</td></tr><tr><td>66.75.160.39</td><td>66.75.160.39</td><td>美国RoadRunner控股有限责任公司DNS服务器</td></tr><tr><td>66.79.162.0</td><td>66.79.188.255</td><td>美国加州XIDNS机房</td></tr><tr><td>66.199.228.254</td><td>66.199.228.254</td><td>美国纽约市DNS服务器</td></tr><tr><td>66.207.155.31</td><td>66.207.155.31</td><td>美国宾夕法尼亚州DNS服务器</td></tr><tr><td>66.207.199.44</td><td>66.207.199.44</td><td>美国Beanfield公司DNS服务器</td></tr><tr><td>66.218.224.40</td><td>66.218.224.40</td><td>美国CableAmerica公司DNS服务器</td></tr><tr><td>66.218.245.10</td><td>66.218.245.10</td><td>美国CableAmerica公司DNS服务器</td></tr><tr><td>66.218.245.13</td><td>66.218.245.13</td><td>美国CableAmerica公司DNS服务器</td></tr><tr><td>67.15.193.162</td><td>67.15.193.171</td><td>美国ThePlanet机房DNS服务器</td></tr><tr><td>67.199.112.21</td><td>67.199.112.21</td><td>美国弗吉尼亚州DNS服务器</td></tr><tr><td>67.201.32.11</td><td>67.201.32.12</td><td>美国弗吉尼亚州DNS服务器</td></tr><tr><td>67.214.64.6</td><td>67.214.64.7</td><td>美国弗吉尼亚州DNS服务器</td></tr><tr><td>67.214.64.28</td><td>67.214.64.28</td><td>美国弗吉尼亚州DNS服务器</td></tr><tr><td>67.215.64.0</td><td>67.215.95.255</td><td>美国加利福尼亚州旧金山市OpenDNS有限责任公司</td></tr><tr><td>68.28.154.11</td><td>68.28.154.11</td><td>美国加利福尼亚州DNS服务器</td></tr><tr><td>68.87.64.154</td><td>68.87.64.154</td><td>美国新泽西州月桂山镇Comcast有线通信公司DNS服务器</td></tr><tr><td>68.87.64.199</td><td>68.87.64.199</td><td>美国新泽西州月桂山镇Comcast有线通信公司DNS服务器</td></tr><tr><td>68.87.66.199</td><td>68.87.66.199</td><td>美国新泽西州月桂山镇Comcast有线通信公司DNS服务器</td></tr><tr><td>68.208.149.226</td><td>68.208.149.226</td><td>美国南方贝尔公司DNS服务器</td></tr><tr><td>68.234.128.70</td><td>68.234.128.70</td><td>美国宾夕法尼亚州考德斯波特DNS服务器</td></tr><tr><td>69.59.32.9</td><td>69.59.32.9</td><td>美国CafeNetwork公司DNS服务器</td></tr><tr><td>69.155.200.6</td><td>69.155.200.6</td><td>美国密苏里州圣路易斯市DNS服务器</td></tr><tr><td>70.254.229.2</td><td>70.254.229.2</td><td>美国东北部七州电讯网DNS服务器</td></tr><tr><td>71.15.32.9</td><td>71.15.32.9</td><td>美国密苏里州圣路易斯市DNS服务器</td></tr><tr><td>72.14.202.80</td><td>72.14.202.87</td><td>美国加利福尼亚州山景市谷歌公司DNS服务器</td></tr><tr><td>72.22.224.3</td><td>72.22.224.3</td><td>美国缅因州/新罕布什尔州DNS服务器</td></tr><tr><td>72.29.162.17</td><td>72.29.162.17</td><td>美国缅因州/新罕布什尔州DNS服务器</td></tr><tr><td>72.37.141.91</td><td>72.37.141.91</td><td>美国缅因州/新罕布什尔州DNS服务器</td></tr><tr><td>72.51.175.10</td><td>72.51.175.11</td><td>美国弗罗里达州DNS服务器</td></tr><tr><td>72.233.151.51</td><td>72.233.151.51</td><td>美国加利福尼亚州圣弗朗西斯科市DNS服务器</td></tr><tr><td>74.84.119.150</td><td>74.84.119.150</td><td>美国纽约州奥兰治县米德尔敦市Mediacom通信公司DNS服务器</td></tr><tr><td>74.84.119.153</td><td>74.84.119.153</td><td>美国纽约州奥兰治县米德尔敦市Mediacom通信公司DNS服务器</td></tr><tr><td>74.125.152.80</td><td>74.125.152.82</td><td>美国加利福尼亚州山景市谷歌公司DNS服务器</td></tr><tr><td>74.222.30.2</td><td>74.222.30.2</td><td>美国加利福尼亚州洛杉矶市Vrtservers公司DNS服务器</td></tr><tr><td>75.126.98.108</td><td>75.126.98.108</td><td>美国德克萨斯州达拉斯市SoftLayer科技公司DNS服务器</td></tr><tr><td>76.10.67.2</td><td>76.10.67.2</td><td>美国北达科他州卡斯县法戈市IdeaOne电信公司DNS服务器</td></tr><tr><td>76.14.0.8</td><td>76.14.0.9</td><td>美国北达科他州卡斯县法戈市IdeaOne电信公司DNS服务器</td></tr><tr><td>76.14.96.13</td><td>76.14.96.14</td><td>美国北达科他州卡斯县法戈市IdeaOne电信公司DNS服务器</td></tr><tr><td>76.14.192.8</td><td>76.14.192.9</td><td>美国北达科他州卡斯县法戈市IdeaOne电信公司DNS服务器</td></tr><tr><td>76.77.208.23</td><td>76.77.208.24</td><td>美国堪萨斯州布朗县艾维斯特市Carson通信有限责任公司DNS服务器</td></tr><tr><td>113.111.211.22</td><td>113.111.211.22</td><td>广东省广州市电信DNS服务器</td></tr><tr><td>116.228.111.118</td><td>116.228.111.118</td><td>上海市电信DNS服务器</td></tr><tr><td>124.161.97.234</td><td>124.161.97.234</td><td>四川省联通DNS服务器</td></tr><tr><td>124.161.97.238</td><td>124.161.97.238</td><td>四川省联通DNS服务器</td></tr><tr><td>124.161.97.242</td><td>124.161.97.242</td><td>四川省联通DNS服务器</td></tr><tr><td>128.2.200.100</td><td>128.2.200.100</td><td>美国卡耐基·梅隆大学DNS服务器</td></tr><tr><td>128.8.10.90</td><td>128.8.10.90</td><td>美国马里兰大学DNS服务器</td></tr><tr><td>128.63.2.53</td><td>128.63.2.53</td><td>美国马里兰州DNS服务器</td></tr><tr><td>128.114.129.105</td><td>128.114.129.105</td><td>美国加利福尼亚大学DNS服务器</td></tr><tr><td>128.143.2.126</td><td>128.143.2.126</td><td>美国弗吉尼亚大学DNS服务器</td></tr><tr><td>128.143.3.7</td><td>128.143.3.7</td><td>美国弗吉尼亚大学DNS服务器</td></tr><tr><td>128.143.22.119</td><td>128.143.22.119</td><td>美国弗吉尼亚大学DNS服务器</td></tr><tr><td>129.66.20.6</td><td>129.66.20.6</td><td>美国阿拉巴马州超级计算机中心DNS服务器</td></tr><tr><td>129.66.95.3</td><td>129.66.95.3</td><td>美国阿拉巴马州超级计算机中心DNS服务器</td></tr><tr><td>129.66.172.9</td><td>129.66.172.9</td><td>美国阿拉巴马州超级计算机中心DNS服务器</td></tr><tr><td>129.71.1.1</td><td>129.71.1.1</td><td>美国西维吉尼亚网络教育DNS服务器</td></tr><tr><td>129.108.202.20</td><td>129.108.202.20</td><td>美国得克萨斯大学DNS服务器</td></tr><tr><td>129.113.38.36</td><td>129.113.38.36</td><td>美国得克萨斯大学DNS服务器</td></tr><tr><td>129.137.254.4</td><td>129.137.254.4</td><td>美国辛辛那提大学DNS服务器</td></tr><tr><td>129.137.255.4</td><td>129.137.255.4</td><td>美国辛辛那提大学DNS服务器</td></tr><tr><td>131.94.134.129</td><td>131.94.134.129</td><td>美国弗罗丽达国际大学DNS服务器</td></tr><tr><td>131.247.100.1</td><td>131.247.100.1</td><td>美国南佛罗里达大学DNS服务器</td></tr><tr><td>132.170.249.15</td><td>132.170.249.15</td><td>美国中佛罗里达大学DNS服务器</td></tr><tr><td>155.135.55.2</td><td>155.135.55.2</td><td>美国加州州立大学DNS服务器</td></tr><tr><td>161.45.25.37</td><td>161.45.25.37</td><td>美国田纳西州DNS服务器</td></tr><tr><td>161.45.193.4</td><td>161.45.193.4</td><td>美国田纳西州DNS服务器</td></tr><tr><td>164.214.4.52</td><td>164.214.4.52</td><td>美国马里兰州DNS服务器</td></tr><tr><td>165.95.31.17</td><td>165.95.31.17</td><td>美国得克萨斯A&M大学DNS服务器</td></tr><tr><td>168.95.1.1</td><td>168.95.1.1</td><td>台湾省中华电信DNS服务器</td></tr><tr><td>168.95.192.1</td><td>168.95.192.1</td><td>台湾省台北市中华电信DNS服务器</td></tr><tr><td>168.95.192.174</td><td>168.95.192.174</td><td>台湾省台北市中华电信DNS服务器</td></tr><tr><td>168.143.113.201</td><td>168.143.113.202</td><td>美国恩格尔伍德市DNS服务器</td></tr><tr><td>173.71.0.35</td><td>173.71.0.35</td><td>美国佛吉尼亚州Reston市VerizonInternetServicesDNS服务器</td></tr><tr><td>174.34.129.34</td><td>174.34.129.34</td><td>美国theplanetDNS服务器</td></tr><tr><td>174.37.59.9</td><td>174.37.59.9</td><td>美国德克萨斯州达拉斯市SoftLayer科技公司DNS服务器</td></tr><tr><td>174.120.16.34</td><td>174.120.16.34</td><td>美国德克萨斯州休斯顿ThePlanet互联网服务公司DNS服务器</td></tr><tr><td>180.168.255.18</td><td>180.168.255.18</td><td>上海市电信DNS服务器</td></tr><tr><td>192.5.5.241</td><td>192.5.5.241</td><td>美国加利福尼亚州DNS服务器</td></tr><tr><td>192.58.128.30</td><td>192.58.128.30</td><td>美国弗吉尼亚州DNS服务器</td></tr><tr><td>192.112.36.4</td><td>192.112.36.4</td><td>美国弗吉尼亚州DNS服务器</td></tr><tr><td>192.203.230.10</td><td>192.203.230.10</td><td>美国加利福尼亚州DNS服务器</td></tr><tr><td>198.41.0.4</td><td>198.41.0.4</td><td>美国弗吉尼亚州DNS服务器</td></tr><tr><td>198.153.192.1</td><td>198.153.192.1</td><td>美国加利福尼亚州圣克拉拉县库比提诺市赛门铁克公司诺顿DNS服务器</td></tr><tr><td>198.153.194.1</td><td>198.153.194.1</td><td>美国加利福尼亚州圣克拉拉县库比提诺市赛门铁克公司诺顿DNS服务器</td></tr><tr><td>202.14.67.4</td><td>202.14.67.4</td><td>香港PACNET机房DNS服务器</td></tr><tr><td>202.14.67.14</td><td>202.14.67.14</td><td>香港PACNET机房DNS服务器</td></tr><tr><td>202.38.64.1</td><td>202.38.64.1</td><td>安徽省合肥市中国科学技术大学DNS服务器</td></tr><tr><td>202.45.84.58</td><td>202.45.84.59</td><td>香港和记黄埔有限公司DNS服务器</td></tr><tr><td>202.45.84.67</td><td>202.45.84.68</td><td>香港和记黄埔有限公司DNS服务器</td></tr><tr><td>202.60.252.8</td><td>202.60.252.8</td><td>香港九龙先达电脑网络有限公司DNS服务器</td></tr><tr><td>202.85.128.32</td><td>202.85.128.33</td><td>香港柴湾互联优势有限公司DNS服务器</td></tr><tr><td>202.96.64.68</td><td>202.96.64.68</td><td>辽宁省沈阳市联通DNS服务器</td></tr><tr><td>202.96.69.38</td><td>202.96.69.38</td><td>辽宁省大连市联通DNS服务器</td></tr><tr><td>202.96.86.18</td><td>202.96.86.18</td><td>辽宁省抚顺市联通DNS服务器</td></tr><tr><td>202.96.96.68</td><td>202.96.96.68</td><td>浙江省杭州市电信DNS服务器</td></tr><tr><td>202.96.103.36</td><td>202.96.103.36</td><td>浙江省电信DNS服务器</td></tr><tr><td>202.96.128.86</td><td>202.96.128.86</td><td>广东省广州市电信DNS服务器</td></tr><tr><td>202.96.134.33</td><td>202.96.134.33</td><td>广东省电信DNS服务器</td></tr><tr><td>202.96.134.133</td><td>202.96.134.133</td><td>广东省电信DNS服务器</td></tr><tr><td>202.96.144.47</td><td>202.96.144.47</td><td>广东省汕头市电信DNS服务器</td></tr><tr><td>202.96.154.15</td><td>202.96.154.15</td><td>广东省深圳市电信DNS服务器</td></tr><tr><td>202.96.209.5</td><td>202.96.209.6</td><td>上海市电信DNS服务器</td></tr><tr><td>202.96.209.133</td><td>202.96.209.133</td><td>上海市电信DNS服务器</td></tr><tr><td>202.97.7.6</td><td>202.97.7.6</td><td>北京市电信DNS服务器</td></tr><tr><td>202.97.7.17</td><td>202.97.7.17</td><td>北京市电信DNS服务器</td></tr><tr><td>202.97.224.68</td><td>202.97.224.69</td><td>黑龙江省联通DNS服务器</td></tr><tr><td>202.98.0.68</td><td>202.98.0.68</td><td>吉林省联通DNS服务器(全省通用)</td></tr><tr><td>202.98.5.68</td><td>202.98.5.68</td><td>吉林省长春市联通DNS服务器</td></tr><tr><td>202.98.96.68</td><td>202.98.96.68</td><td>四川省成都市电信DNS服务器</td></tr><tr><td>202.98.192.67</td><td>202.98.192.67</td><td>贵州省电信DNS服务器</td></tr><tr><td>202.98.198.167</td><td>202.98.198.167</td><td>贵州省电信DNS服务器</td></tr><tr><td>202.98.224.68</td><td>202.98.224.68</td><td>西藏拉萨市电信DNS服务器</td></tr><tr><td>202.99.96.68</td><td>202.99.96.68</td><td>天津市联通DNS</td></tr><tr><td>202.99.104.68</td><td>202.99.104.68</td><td>天津市联通DNS</td></tr><tr><td>202.99.160.68</td><td>202.99.160.68</td><td>河北省联通DNS服务器</td></tr><tr><td>202.99.166.4</td><td>202.99.166.4</td><td>河北省联通DNS服务器</td></tr><tr><td>202.99.168.8</td><td>202.99.168.8</td><td>河北省保定市联通DNS服务器</td></tr><tr><td>202.99.192.66</td><td>202.99.192.66</td><td>山西省联通DNS服务器</td></tr><tr><td>202.99.224.67</td><td>202.99.224.68</td><td>内蒙古呼和浩特市联通DNS服务器</td></tr><tr><td>202.100.192.68</td><td>202.100.192.68</td><td>海南省电信DNS服务器</td></tr><tr><td>202.101.6.2</td><td>202.101.6.2</td><td>上海市电信DNS服务器</td></tr><tr><td>202.101.98.55</td><td>202.101.98.55</td><td>福建省福州市电信DNS服务器</td></tr><tr><td>202.101.107.85</td><td>202.101.107.85</td><td>福建省泉州市电信DNS服务器</td></tr><tr><td>202.101.226.68</td><td>202.101.226.69</td><td>江西省九江市电信DNS服务器</td></tr><tr><td>202.102.3.141</td><td>202.102.3.141</td><td>江苏省常州市电信DNS服务器</td></tr><tr><td>202.102.3.144</td><td>202.102.3.144</td><td>江苏省常州市电信DNS服务器</td></tr><tr><td>202.102.7.90</td><td>202.102.7.90</td><td>江苏省扬州市电信DNS服务器</td></tr><tr><td>202.102.8.141</td><td>202.102.8.141</td><td>江苏省南通市电信DNS服务器</td></tr><tr><td>202.102.9.141</td><td>202.102.9.141</td><td>江苏省盐城市电信DNS服务器</td></tr><tr><td>202.102.24.34</td><td>202.102.24.35</td><td>江苏省南京市电信DNS服务器</td></tr><tr><td>202.102.128.68</td><td>202.102.128.68</td><td>山东省联通DNS</td></tr><tr><td>202.102.134.68</td><td>202.102.134.69</td><td>山东省青岛市联通DNS服务器</td></tr><tr><td>202.102.152.3</td><td>202.102.152.3</td><td>山东省济南市联通DNS服务器</td></tr><tr><td>202.102.154.3</td><td>202.102.154.3</td><td>山东省联通DNS服务器</td></tr><tr><td>202.102.192.68</td><td>202.102.192.68</td><td>安徽省电信DNS服务器</td></tr><tr><td>202.102.199.68</td><td>202.102.199.68</td><td>安徽省芜湖市电信DNS服务器</td></tr><tr><td>202.102.200.101</td><td>202.102.200.101</td><td>安徽省蚌埠市电信DNS服务器</td></tr><tr><td>202.102.213.68</td><td>202.102.213.68</td><td>安徽省电信DNS服务器</td></tr><tr><td>202.102.224.68</td><td>202.102.224.68</td><td>河南省联通DNS服务器</td></tr><tr><td>202.102.227.68</td><td>202.102.227.68</td><td>河南省联通DNS服务器</td></tr><tr><td>202.103.96.112</td><td>202.103.96.112</td><td>湖南省电信DNS服务器</td></tr><tr><td>202.103.176.22</td><td>202.103.176.22</td><td>广东省茂名市电信DNS服务器</td></tr><tr><td>202.103.225.68</td><td>202.103.225.68</td><td>广西柳州市电信DNS服务器</td></tr><tr><td>202.103.243.112</td><td>202.103.243.112</td><td>广西桂林市桂林电子科技大学DNS服务器</td></tr><tr><td>202.106.0.20</td><td>202.106.0.20</td><td>北京市联通DNS服务器</td></tr><tr><td>202.106.46.151</td><td>202.106.46.151</td><td>北京市联通DNS服务器</td></tr><tr><td>202.106.196.115</td><td>202.106.196.115</td><td>北京市联通DNS服务器</td></tr><tr><td>202.106.196.212</td><td>202.106.196.217</td><td>北京市联通DNS服务器</td></tr><tr><td>202.106.196.228</td><td>202.106.196.228</td><td>北京市联通DNS服务器</td></tr><tr><td>202.106.196.230</td><td>202.106.196.230</td><td>北京市联通DNS服务器</td></tr><tr><td>202.106.196.232</td><td>202.106.196.232</td><td>北京市联通DNS服务器</td></tr><tr><td>202.106.196.237</td><td>202.106.196.237</td><td>北京市联通DNS服务器</td></tr><tr><td>202.112.112.10</td><td>202.112.112.10</td><td>北京市中国人民大学DNS服务器</td></tr><tr><td>202.112.144.30</td><td>202.112.144.30</td><td>北京交通大学DNS服务器</td></tr><tr><td>202.113.16.10</td><td>202.113.16.10</td><td>南开大学网络中心首选DNS服务器</td></tr><tr><td>202.113.16.11</td><td>202.113.16.11</td><td>南开大学学生邮件系统、网络中心备用DNS服务器</td></tr><tr><td>202.114.0.242</td><td>202.114.0.242</td><td>湖北省武汉市华中科技大学DNS服务器</td></tr><tr><td>202.114.240.6</td><td>202.114.240.6</td><td>湖北省武汉市武汉科技大学DNS服务器</td></tr><tr><td>202.115.32.39</td><td>202.115.32.39</td><td>四川省成都市四川联合大学DNS服务器</td></tr><tr><td>202.175.3.3</td><td>202.175.3.3</td><td>澳门澳门大学DNS服务器</td></tr><tr><td>202.175.3.8</td><td>202.175.3.8</td><td>澳门澳门大学DNS服务器</td></tr><tr><td>202.193.64.33</td><td>202.193.64.33</td><td>广西桂林市桂林电子科技大学DNS服务器</td></tr><tr><td>202.196.64.1</td><td>202.196.64.1</td><td>河南省郑州市郑州大学DNS服务器</td></tr><tr><td>202.203.128.33</td><td>202.203.128.33</td><td>云南省教育网DNS服务器</td></tr><tr><td>202.203.144.33</td><td>202.203.144.34</td><td>云南省昆明市云南民族大学DNS服务器</td></tr><tr><td>202.203.160.33</td><td>202.203.160.34</td><td>云南省昆明市昆明理工大学DNS服务器</td></tr><tr><td>202.203.192.33</td><td>202.203.192.33</td><td>云南省昆明市云南财经大学DNS服务器</td></tr><tr><td>202.203.208.33</td><td>202.203.208.34</td><td>云南省昆明市云南大学DNS服务器</td></tr><tr><td>202.203.224.33</td><td>202.203.224.34</td><td>云南省昆明市云南师范大学DNS服务器</td></tr><tr><td>203.80.96.9</td><td>203.80.96.10</td><td>香港城市电讯有限公司DNS服务器</td></tr><tr><td>203.142.100.18</td><td>203.142.100.18</td><td>香港中国移动香港有限公司DNS服务器</td></tr><tr><td>203.142.100.21</td><td>203.142.100.21</td><td>香港中国移动香港有限公司DNS服务器</td></tr><tr><td>203.186.94.20</td><td>203.186.94.21</td><td>香港城市电讯有限公司DNS服务器</td></tr><tr><td>203.186.94.241</td><td>203.186.94.242</td><td>香港城市电讯有限公司DNS服务器</td></tr><tr><td>205.160.52.53</td><td>205.160.52.53</td><td>美国奥克拉荷马州止水市ChickasawTelecommunicationsServices(CTS)公司DNS服务器</td></tr><tr><td>205.171.2.65</td><td>205.171.2.65</td><td>美国科罗拉多州丹佛市Qwest通信有线责任公司DNS服务器</td></tr><tr><td>205.171.3.25</td><td>205.171.3.25</td><td>美国科罗拉多州丹佛市Qwest通信有线责任公司DNS服务器</td></tr><tr><td>205.171.3.65</td><td>205.171.3.65</td><td>美国科罗拉多州丹佛市Qwest通信有线责任公司DNS服务器</td></tr><tr><td>208.67.216.0</td><td>208.67.223.255</td><td>美国加利福尼亚州旧金山市OpenDNS有限责任公司</td></tr><tr><td>208.69.32.0</td><td>208.69.39.255</td><td>美国加利福尼亚州旧金山市OpenDNS有限责任公司</td></tr><tr><td>208.196.63.2</td><td>208.196.63.2</td><td>美国弗吉尼亚州劳登县阿什本地区MCI通信服务公司DNS服务器</td></tr><tr><td>208.218.130.5</td><td>208.218.130.5</td><td>美国弗吉尼亚州劳登县阿什本地区MCI通信服务公司DNS服务器</td></tr><tr><td>208.246.8.14</td><td>208.246.8.14</td><td>美国弗吉尼亚州劳登县阿什本地区MCI通信服务公司DNS服务器</td></tr><tr><td>209.44.0.3</td><td>209.44.0.4</td><td>美国broomfield公司DNS服务器</td></tr><tr><td>210.2.1.1</td><td>210.2.1.1</td><td>北京市中国互联网络信息中心BraDNS服务器</td></tr><tr><td>210.2.2.2</td><td>210.2.2.2</td><td>北京市中国互联网络信息中心BraDNS服务器</td></tr><tr><td>210.21.4.130</td><td>210.21.4.130</td><td>广东省广州市联通DNS服务器</td></tr><tr><td>210.21.196.6</td><td>210.21.196.6</td><td>广东省深圳市联通DNS服务器</td></tr><tr><td>210.38.192.33</td><td>210.38.192.33</td><td>广东省韶关市韶关学院DNS服务器</td></tr><tr><td>211.90.72.65</td><td>211.90.72.65</td><td>内蒙古呼和浩特市联通DNS服务器</td></tr><tr><td>211.90.80.65</td><td>211.90.80.65</td><td>山西省太原市联通DNS服务器</td></tr><tr><td>211.91.88.129</td><td>211.91.88.129</td><td>安徽省合肥市联通DNS服务器</td></tr><tr><td>211.92.136.81</td><td>211.92.136.81</td><td>贵州省贵阳市联通DNS服务器</td></tr><tr><td>211.92.144.161</td><td>211.92.144.161</td><td>云南省昆明市联通DNS服务器</td></tr><tr><td>211.93.0.81</td><td>211.93.0.81</td><td>宁夏银川市联通DNS服务器</td></tr><tr><td>211.93.24.129</td><td>211.93.24.129</td><td>黑龙江省哈尔滨市联通DNS服务器</td></tr><tr><td>211.93.64.129</td><td>211.93.64.129</td><td>吉林省联通DNS服务器(全省通用)</td></tr><tr><td>211.95.1.97</td><td>211.95.1.97</td><td>上海市联通DNS服务器</td></tr><tr><td>211.95.72.1</td><td>211.95.72.1</td><td>上海市联通DNS服务器</td></tr><tr><td>211.95.193.97</td><td>211.95.193.97</td><td>广东省广州市联通DNS服务器</td></tr><tr><td>211.97.96.65</td><td>211.97.96.65</td><td>海南省海口市联通DNS服务器</td></tr><tr><td>211.98.2.4</td><td>211.98.2.4</td><td>广东省广州市铁通DNS服务器</td></tr><tr><td>211.98.4.1</td><td>211.98.4.1</td><td>广东省广州市铁通DNS服务器</td></tr><tr><td>211.98.72.7</td><td>211.98.72.8</td><td>云南省铁通DNS服务器</td></tr><tr><td>211.103.13.101</td><td>211.103.13.101</td><td>江苏省无锡市移动DNS服务器</td></tr><tr><td>211.136.28.231</td><td>211.136.28.231</td><td>北京市移动DNS服务器</td></tr><tr><td>211.136.28.234</td><td>211.136.28.234</td><td>北京市移动DNS服务器</td></tr><tr><td>211.136.28.237</td><td>211.136.28.237</td><td>北京市移动DNS服务器</td></tr><tr><td>211.136.112.50</td><td>211.136.112.50</td><td>上海市移动DNS服务器</td></tr><tr><td>211.136.150.66</td><td>211.136.150.66</td><td>上海市移动DNS服务器</td></tr><tr><td>211.136.192.6</td><td>211.136.192.6</td><td>广东省移动DNS服务器</td></tr><tr><td>211.137.160.5</td><td>211.137.160.5</td><td>天津市移动DNS服务器</td></tr><tr><td>211.137.160.185</td><td>211.137.160.185</td><td>天津市移动DNS服务器</td></tr><tr><td>211.137.241.34</td><td>211.137.241.35</td><td>黑龙江省哈尔滨市移动DNS服务器</td></tr><tr><td>211.138.75.123</td><td>211.138.75.123</td><td>青海省西宁市移动DNS服务器</td></tr><tr><td>211.138.91.1</td><td>211.138.91.2</td><td>内蒙古呼和浩特市移动DNS服务器</td></tr><tr><td>211.138.106.19</td><td>211.138.106.19</td><td>山西省移动DNS服务器</td></tr><tr><td>211.138.145.194</td><td>211.138.145.194</td><td>福建省福州市移动DNS服务器</td></tr><tr><td>211.138.164.6</td><td>211.138.164.7</td><td>海南省海口市移动DNS服务器</td></tr><tr><td>211.138.180.2</td><td>211.138.180.3</td><td>安徽省合肥市移动DNS服务器</td></tr><tr><td>211.138.200.69</td><td>211.138.200.69</td><td>江苏省移动DNS服务器</td></tr><tr><td>211.138.242.18</td><td>211.138.242.18</td><td>广西南宁市移动DNS服务器</td></tr><tr><td>211.138.245.180</td><td>211.138.245.180</td><td>广西南宁市移动DNS服务器</td></tr><tr><td>211.138.252.32</td><td>211.138.252.32</td><td>广西南宁市移动DNS服务器</td></tr><tr><td>211.139.1.3</td><td>211.139.1.3</td><td>贵州省贵阳市移动DNS服务器</td></tr><tr><td>211.139.2.18</td><td>211.139.2.18</td><td>贵州省贵阳市移动DNS服务器</td></tr><tr><td>211.139.29.68</td><td>211.139.29.69</td><td>云南省移动DNS服务器</td></tr><tr><td>211.139.29.150</td><td>211.139.29.150</td><td>云南省移动DNS服务器</td></tr><tr><td>211.139.29.170</td><td>211.139.29.170</td><td>云南省移动DNS服务器</td></tr><tr><td>211.139.73.34</td><td>211.139.73.34</td><td>西藏拉萨市移动DNS服务器</td></tr><tr><td>211.139.136.68</td><td>211.139.136.68</td><td>广东省移动DNS服务器</td></tr><tr><td>211.139.163.6</td><td>211.139.163.6</td><td>广东省移动DNS服务器</td></tr><tr><td>211.141.16.99</td><td>211.141.16.99</td><td>吉林省移动DNS服务器</td></tr><tr><td>211.141.90.68</td><td>211.141.90.68</td><td>江西省南昌市移动DNS服务器</td></tr><tr><td>211.142.210.98</td><td>211.142.210.98</td><td>湖南省长沙市移动DNS服务器</td></tr><tr><td>211.142.210.100</td><td>211.142.210.100</td><td>湖南省长沙市移动DNS服务器</td></tr><tr><td>216.87.84.211</td><td>216.87.84.211</td><td>美国科罗拉多州丹佛市ViaWest公司DNS服务器</td></tr><tr><td>216.211.190.3</td><td>216.211.190.3</td><td>美国纽约市DNS服务器</td></tr><tr><td>216.211.191.3</td><td>216.211.191.3</td><td>美国纽约市DNS服务器</td></tr><tr><td>218.2.135.1</td><td>218.2.135.1</td><td>江苏省南京市电信DNS服务器</td></tr><tr><td>218.30.19.40</td><td>218.30.19.40</td><td>陕西省西安市电信DNS</td></tr><tr><td>218.76.192.100</td><td>218.76.192.101</td><td>湖南省邵阳市电信DNS服务器</td></tr><tr><td>218.85.152.99</td><td>218.85.152.99</td><td>福建省福州市电信DNS服务器</td></tr><tr><td>218.85.157.99</td><td>218.85.157.99</td><td>福建省福州市电信DNS服务器</td></tr><tr><td>218.89.0.124</td><td>218.89.0.124</td><td>四川省乐山市电信DNS服务器</td></tr><tr><td>218.104.32.106</td><td>218.104.32.106</td><td>江苏省苏州市联通DNS服务器</td></tr><tr><td>218.108.248.219</td><td>218.108.248.219</td><td>浙江省杭州市华数宽带DNS服务器</td></tr><tr><td>218.108.248.245</td><td>218.108.248.245</td><td>浙江省杭州市华数宽带DNS服务器</td></tr><tr><td>218.201.17.2</td><td>218.201.17.2</td><td>重庆市移动DNS服务器</td></tr><tr><td>218.202.152.130</td><td>218.202.152.130</td><td>新疆乌鲁木齐市移动DNS服务器</td></tr><tr><td>218.203.101.3</td><td>218.203.101.4</td><td>宁夏移动DNS服务器</td></tr><tr><td>218.203.160.194</td><td>218.203.160.195</td><td>甘肃省兰州市移动DNS服务器</td></tr><tr><td>219.72.225.253</td><td>219.72.225.254</td><td>湖南省中信网络有限公司DNS服务器</td></tr><tr><td>219.147.198.230</td><td>219.147.198.230</td><td>黑龙江省齐齐哈尔市电信DNS服务器</td></tr><tr><td>219.149.194.55</td><td>219.149.194.55</td><td>吉林省长春市电信DNS服务器</td></tr><tr><td>219.235.127.1</td><td>219.235.127.2</td><td>黑龙江省大庆市油田宽带DNS服务器</td></tr><tr><td>220.168.208.3</td><td>220.168.208.3</td><td>湖南省常德市电信DNS服务器</td></tr><tr><td>220.168.208.6</td><td>220.168.208.6</td><td>湖南省常德市电信DNS服务器</td></tr><tr><td>220.170.64.68</td><td>220.170.64.68</td><td>湖南省衡阳市电信DNS服务器</td></tr><tr><td>221.3.131.11</td><td>221.3.131.12</td><td>云南省联通DNS服务器</td></tr><tr><td>221.3.136.36</td><td>221.3.136.39</td><td>云南省昆明市联通DNS服务器</td></tr><tr><td>221.3.136.52</td><td>221.3.136.55</td><td>云南省昆明市联通DNS服务器</td></tr><tr><td>221.5.88.88</td><td>221.5.88.88</td><td>广东省肇庆市联通DNS服务器</td></tr><tr><td>221.5.203.86</td><td>221.5.203.86</td><td>重庆市联通DNS服务器</td></tr><tr><td>221.5.203.90</td><td>221.5.203.90</td><td>重庆市联通DNS服务器</td></tr><tr><td>221.5.203.99</td><td>221.5.203.99</td><td>重庆市联通DNS服务器</td></tr><tr><td>221.6.4.66</td><td>221.6.4.66</td><td>江苏省南京市联通DNS服务器</td></tr><tr><td>221.7.34.10</td><td>221.7.34.10</td><td>甘肃省兰州市联通DNS服务器</td></tr><tr><td>221.7.92.86</td><td>221.7.92.86</td><td>重庆市联通DNS服务器</td></tr><tr><td>221.7.92.98</td><td>221.7.92.98</td><td>重庆市联通DNS服务器</td></tr><tr><td>221.7.128.68</td><td>221.7.128.68</td><td>广西南宁市联通DNS服务器</td></tr><tr><td>221.7.136.68</td><td>221.7.136.68</td><td>广西柳州市联通DNS服务器</td></tr><tr><td>221.11.132.2</td><td>221.11.132.2</td><td>海南省海口市联通DNS服务器</td></tr><tr><td>221.12.1.227</td><td>221.12.1.227</td><td>浙江省联通DNS服务器(全省通用)</td></tr><tr><td>221.12.33.227</td><td>221.12.33.227</td><td>浙江省宁波市联通DNS服务器(全省通用)</td></tr><tr><td>221.130.32.100</td><td>221.130.32.100</td><td>北京市移动DNS服务器</td></tr><tr><td>221.130.32.103</td><td>221.130.32.103</td><td>北京市移动DNS服务器</td></tr><tr><td>221.130.32.106</td><td>221.130.32.106</td><td>北京市移动DNS服务器</td></tr><tr><td>221.130.32.109</td><td>221.130.32.109</td><td>北京市移动DNS服务器</td></tr><tr><td>221.130.33.52</td><td>221.130.33.52</td><td>北京市移动DNS服务器</td></tr><tr><td>221.130.33.60</td><td>221.130.33.60</td><td>北京市移动DNS服务器</td></tr><tr><td>221.130.252.200</td><td>221.130.252.200</td><td>浙江省移动DNS服务器</td></tr><tr><td>221.176.3.70</td><td>221.176.3.70</td><td>北京市移动DNS服务器</td></tr><tr><td>221.176.3.73</td><td>221.176.3.73</td><td>北京市移动DNS服务器</td></tr><tr><td>221.176.3.76</td><td>221.176.3.76</td><td>北京市移动DNS服务器</td></tr><tr><td>221.176.3.79</td><td>221.176.3.79</td><td>北京市移动DNS服务器</td></tr><tr><td>221.176.3.83</td><td>221.176.3.83</td><td>北京市移动DNS服务器</td></tr><tr><td>221.176.3.85</td><td>221.176.3.85</td><td>北京市移动DNS服务器</td></tr><tr><td>221.176.4.6</td><td>221.176.4.6</td><td>北京市移动DNS服务器</td></tr><tr><td>221.176.4.9</td><td>221.176.4.9</td><td>北京市移动DNS服务器</td></tr><tr><td>221.176.4.12</td><td>221.176.4.12</td><td>北京市移动DNS服务器</td></tr><tr><td>221.176.4.15</td><td>221.176.4.15</td><td>北京市移动DNS服务器</td></tr><tr><td>221.176.4.18</td><td>221.176.4.18</td><td>北京市移动DNS服务器</td></tr><tr><td>221.176.4.21</td><td>221.176.4.21</td><td>北京市移动DNS服务器</td></tr><tr><td>221.228.255.1</td><td>221.228.255.1</td><td>江苏省无锡市电信DNS服务器</td></tr><tr><td>222.45.0.110</td><td>222.45.0.110</td><td>江苏省南通市铁通DNS服务器</td></tr><tr><td>222.45.1.40</td><td>222.45.1.40</td><td>江苏省徐州市铁通DNS服务器</td></tr><tr><td>222.46.120.5</td><td>222.46.120.6</td><td>浙江省铁通DNS服务器</td></tr><tr><td>222.52.118.162</td><td>222.52.118.163</td><td>广西南宁市铁通DNS服务器</td></tr><tr><td>222.85.85.85</td><td>222.85.85.85</td><td>河南省电信DNS服务器</td></tr><tr><td>222.88.88.88</td><td>222.88.88.88</td><td>河南省洛阳市电信DNS服务器</td></tr><tr><td>222.172.200.68</td><td>222.172.200.68</td><td>云南省电信DNS服务器</td></tr><tr><td>222.243.129.81</td><td>222.243.129.81</td><td>湖南省电信DNS服务器</td></tr></tbody></table></div></div></div></div>
 <div class="accordion-group"> </div></div></div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><div class="container" id="foot-history">
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