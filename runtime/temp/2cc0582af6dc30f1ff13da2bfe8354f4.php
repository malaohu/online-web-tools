<?php /*a:5:{s:70:"/data/wwwroot/tool.ruyo.net/application/index/view/index/linuxcmd.html";i:1633603258;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.linuxcmd.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.linuxcmd.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.linuxcmd.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/useragent/">常用User-Agent</a></li><li role="presentation"><a href="/contenttype/">Content-Type对照表</a></li><li role="presentation"><a href="/requestmethod/">Request请求大全</a></li><li role="presentation"><a href="/httpheader/">HTTP请求头大全</a></li><li role="presentation"><a href="/pagecode/"> HTTP状态码</a></li><li role="presentation"><a href="/asciicode/">ASCII对照表</a></li><li role="presentation" class="active"><a href="/linuxcmd/">Linux常用命令大全</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/htmlescapechar/">HTML特殊字符转义</a></li><li role="presentation"><a href="/ports/">常见端口大全</a></li><li role="presentation"><a href="/bootstrapicon/">Bootstrap字体图标</a></li><li role="presentation"><a href="/androidmanifest/"> Android Manifest权限大全</a></li></ul></li></ul>    <div class="alert alert-success alert-dismissible" role="alert">
        <p>Linux常用命令大全,<code>小贴士：Ctrl+F 快速查找Linux命令（点标题可收缩、展开）</code></p>
    </div><div class="panel panel-success">   <div class="accordion">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo1">
                    Linux命令 — 系统信息 </a>
            </div>
            <div id="demo1" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                                arch
                            </td>
                            <td>
                                显示机器的处理器架构（1）
                            </td>
                        </tr>
                        <tr>
                            <td>
                                uname -m
                            </td>
                            <td>
                                显示机器的处理器架构（2）
                            </td>
                        </tr>
                        <tr>
                            <td>
                                uname -r
                            </td>
                            <td>
                                显示正在使用的内核版本
                            </td>
                        </tr>
                        <tr>
                            <td>
                                dmidecode -q
                            </td>
                            <td>
                                显示硬件系统部件 - (SMBIOS / DMI)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                hdparm -i /dev/hda
                            </td>
                            <td>
                                罗列一个磁盘的架构特性
                            </td>
                        </tr>
                        <tr>
                            <td>
                                hdparm -tT /dev/sda
                            </td>
                            <td>
                                在磁盘上执行测试性读取操作
                            </td>
                        </tr>
                        <tr>
                            <td>
                                cat /proc/cpuinfo
                            </td>
                            <td>
                                显示CPU info的信息
                            </td>
                        </tr>
                        <tr>
                            <td>
                                cat /proc/interrupts
                            </td>
                            <td>
                                显示中断
                            </td>
                        </tr>
                        <tr>
                            <td>
                                cat /proc/meminfo
                            </td>
                            <td>
                                校验内存使用
                            </td>
                        </tr>
                        <tr>
                            <td>
                                cat /proc/swaps
                            </td>
                            <td>
                                显示哪些swap被使用
                            </td>
                        </tr>
                        <tr>
                            <td>
                                cat /proc/version
                            </td>
                            <td>
                                显示内核的版本
                            </td>
                        </tr>
                        <tr>
                            <td>
                                cat /proc/net/dev
                            </td>
                            <td>
                                显示网络适配器及统计
                            </td>
                        </tr>
                        <tr>
                            <td>
                                cat /proc/mounts
                            </td>
                            <td>
                                显示已加载的文件系统
                            </td>
                        </tr>
                        <tr>
                            <td>
                                lspci -tv
                            </td>
                            <td>
                                罗列 PCI 设备
                            </td>
                        </tr>
                        <tr>
                            <td>
                                lsusb -tv
                            </td>
                            <td>
                                显示 USB 设备
                            </td>
                        </tr>
                        <tr>
                            <td>
                                date
                            </td>
                            <td>
                                显示系统日期
                            </td>
                        </tr>
                        <tr>
                            <td>
                                cal 2007
                            </td>
                            <td>
                                显示2007年的日历表
                            </td>
                        </tr>
                        <tr>
                            <td>
                                date 041217002007.00
                            </td>
                            <td>
                                设置日期和时间 - 月日时分年.秒
                            </td>
                        </tr>
                        <tr>
                            <td>
                                clock -w
                            </td>
                            <td>
                                将时间修改保存到 BIOS
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo2">
                    Linux命令 — 系统关机 (关机、重启以及登出 ) </a>
            </div>
            <div id="demo2" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                          <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            shutdown -h now
                            </td>
                            <td>
                            关闭系统
                            </td>
                        </tr>
                        <tr>
                            <td>
                            init 0
                            </td>
                            <td>
                            关闭系统
                            </td>
                        </tr>
                        <tr>
                            <td>
                            telinit 0
                            </td>
                            <td>
                             关闭系统
                            </td>
                        </tr>
                        <tr>
                            <td>
                            shutdown -h hours:minutes &
                            </td>
                            <td>
                            按预定时间关闭系统 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            shutdown -c
                            </td>
                            <td>
                            取消按预定时间关闭系统 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            shutdown -r now 
                            </td>
                            <td>
                            重启
                            </td>
                        </tr>
                        <tr>
                            <td>reboot 
                            </td>
                            <td>重启
                            </td>
                        </tr>
                        <tr>
                            <td>logout 
                            </td>
                            <td>注销 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
         <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo3">
                    Linux命令 — 文件和目录 </a>
            </div>
            <div id="demo3" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                             <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            cd /home
                            </td>
                            <td>
                            进入 '/ home' 目录' 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cd ..
                            </td>
                            <td>
                            返回上一级目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cd ../..
                            </td>
                            <td>
                            返回上两级目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cd
                            </td>
                            <td>
                            进入个人的主目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cd ~user1
                            </td>
                            <td>
                            进入个人的主目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cd - 
                            </td>
                            <td>
                            返回上次所在的目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            pwd 
                            </td>
                            <td>
                            显示工作路径 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ls 
                            </td>
                            <td>
                            查看目录中的文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ls -F
                            </td>
                            <td>
                            查看目录中的文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ls -l 
                            </td>
                            <td>
                            显示文件和目录的详细资料 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ls -a
                            </td>
                            <td>
                            显示隐藏文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ls *[0-9]*
                            </td>
                            <td>
                            显示包含数字的文件名和目录名 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tree 
                            </td>
                            <td>
                            显示文件和目录由根目录开始的树形结构
                            </td>
                        </tr>
                        <tr>
                            <td>
                            lstree 
                            </td>
                            <td>
                            显示文件和目录由根目录开始的树形结构
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mkdir dir1 
                            </td>
                            <td>
                            创建一个叫做 'dir1' 的目录' 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mkdir dir1 dir2
                            </td>
                            <td>
                            同时创建两个目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mkdir -p /tmp/dir1/dir2 
                            </td>
                            <td>
                            创建一个目录树 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rm -f file1
                            </td>
                            <td>
                             删除一个叫做 'file1' 的文件' 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rmdir dir1
                            </td>
                            <td>
                            删除一个叫做 'dir1' 的目录' 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rm -rf dir1
                            </td>
                            <td>
                            删除一个叫做 'dir1' 的目录并同时删除其内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rm -rf dir1 dir2
                            </td>
                            <td>
                            同时删除两个目录及它们的内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mv dir1 new_dir 
                            </td>
                            <td>
                            重命名/移动 一个目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cp file1 file2
                            </td>
                            <td>
                            复制一个文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cp dir/* .
                            </td>
                            <td>
                            复制一个目录下的所有文件到当前工作目录
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cp -a /tmp/dir1 .
                            </td>
                            <td>
                             复制一个目录到当前工作目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cp -a dir1 dir2
                            </td>
                            <td>
                            复制一个目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ln -s file1 lnk1 
                            </td>
                            <td>
                            创建一个指向文件或目录的软链接
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ln file1 lnk1
                            </td>
                            <td>
                            创建一个指向文件或目录的物理链接 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            touch -t 0712250000 file1 
                            </td>
                            <td>
                            修改一个文件或目录的时间戳 - (YYMMDDhhmm) 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            iconv -l 
                            </td>
                            <td>
                            列出已知的编码 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            iconv -f fromEncoding -t toEncoding inputFile > outputFile 
                            </td>
                            <td>
                            改变字符的编码
                            </td>
                        </tr>
                        <tr>
                            <td>
                            find . -maxdepth 1 -name *.jpg -print -exec convert
                            </td>
                            <td>
                            批量调整当前目录中的文件大小并将其发送到缩略图目录（需要从ImageMagick转换）
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
         <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo4">
                    Linux命令 — 文件搜索 </a>
            </div>
            <div id="demo4" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            find / -name file1
                            </td>
                            <td>
                            从 '/' 开始进入根文件系统搜索文件和目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            find / -user user1
                            </td>
                            <td>
                            搜索属于用户 'user1' 的文件和目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            find /home/user1 -name \*.bin
                            </td>
                            <td>
                            在目录 '/ home/user1' 中搜索带有'.bin' 结尾的文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            find /usr/bin -type f -atime +100
                            </td>
                            <td>
                            搜索在过去100天内未被使用过的执行文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            find /usr/bin -type f -mtime -10
                            </td>
                            <td>
                            搜索在10天内被创建或者修改过的文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            find / -name \*.rpm -exec chmod 755 '{}' \;
                            </td>
                            <td>
                            搜索以 '.rpm' 结尾的文件并定义其权限 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            find / -xdev -name \*.rpm
                            </td>
                            <td>
                            搜索以 '.rpm' 结尾的文件，忽略光驱、捷盘等可移动设备 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            locate \*.ps 
                            </td>
                            <td>
                            寻找以 '.ps' 结尾的文件 - 先运行 'updatedb' 命令 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            whereis halt 
                            </td>
                            <td>
                            显示一个二进制文件、源码或man的位置 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            which halt
                            </td>
                            <td>
                            显示一个二进制文件或可执行文件的完整路径 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
         <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo5">
                    Linux命令 — 挂载一个文件系统 </a>
            </div>
            <div id="demo5" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            mount /dev/hda2 /mnt/hda2
                            </td>
                            <td>
                            挂载一个叫做hda2的盘 - 确定目录 '/ mnt/hda2' 已经存在 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            umount /dev/hda2
                            </td>
                            <td>
                            卸载一个叫做hda2的盘 - 先从挂载点 '/ mnt/hda2' 退出 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            fuser -km /mnt/hda2
                            </td>
                            <td>
                            当设备繁忙时强制卸载 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            umount -n /mnt/hda2 
                            </td>
                            <td>
                            运行卸载操作而不写入 /etc/mtab 文件- 当文件为只读或当磁盘写满时非常有用 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mount /dev/fd0 /mnt/floppy
                            </td>
                            <td>
                            挂载一个软盘 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mount /dev/cdrom /mnt/cdrom
                            </td>
                            <td>
                            挂载一个cdrom或dvdrom 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mount /dev/hdc /mnt/cdrecorder 
                            </td>
                            <td>
                            挂载一个cdrw或dvdrom 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mount /dev/hdb /mnt/cdrecorder 
                            </td>
                            <td>
                            挂载一个cdrw或dvdrom 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mount -o loop file.iso /mnt/cdrom
                            </td>
                            <td>
                            挂载一个文件或ISO镜像文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mount -t vfat /dev/hda5 /mnt/hda5
                            </td>
                            <td>
                            挂载一个Windows FAT32文件系统 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mount /dev/sda1 /mnt/usbdisk
                            </td>
                            <td>
                            挂载一个usb 捷盘或闪存设备 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mount -t smbfs -o username=user,password=pass //WinClient/share /mnt/share
                            </td>
                            <td>
                            挂载一个windows网络共享 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo6">
                    Linux命令 — 磁盘空间 </a>
            </div>
            <div id="demo6" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                             <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            df -h
                            </td>
                            <td>
                            显示已经挂载的分区列表 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ls -lSr |more
                            </td>
                            <td>
                            以尺寸大小排列文件和目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            du -sh dir1 
                            </td>
                            <td>
                            估算目录 'dir1' 已经使用的磁盘空间' 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            du -sk * | sort -rn 
                            </td>
                            <td>
                            以容量大小为依据依次显示文件和目录的大小 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -q -a --qf '%10{SIZE}t%{NAME}n' | sort -k1,1n 
                            </td>
                            <td>
                            以大小为依据依次显示已安装的rpm包所使用的空间 (fedora, redhat类系统) 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dpkg-query -W -f='${Installed-Size;10}t${Package}n' | sort -k1,1n 
                            </td>
                            <td>
                            以大小为依据显示已安装的deb包所使用的空间 (ubuntu, debian类系统) 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo7">
                    Linux命令 — 用户和群组 </a>
            </div>
            <div id="demo7" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                             <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            groupadd group_name
                            </td>
                            <td>
                            创建一个新用户组 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            groupdel group_name
                            </td>
                            <td>
                            删除一个用户组 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            groupmod -n new_group_name old_group_name
                            </td>
                            <td>
                            重命名一个用户组 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            useradd -c "Name Surname " -g admin -d /home/user1 -s /bin/bash user1
                            </td>
                            <td>
                            创建一个属于 "admin" 用户组的用户 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            useradd user1 
                            </td>
                            <td>
                            创建一个新用户 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            userdel -r user1 
                            </td>
                            <td>
                             删除一个用户 ( '-r' 排除主目录) 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            usermod -c "User FTP" -g system -d /ftp/user1 -s /bin/nologin user1 
                            </td>
                            <td>
                            修改用户属性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            passwd 
                            </td>
                            <td>
                            修改口令 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            passwd user1 
                            </td>
                            <td>
                            修改一个用户的口令 (只允许root执行) 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chage -E 2020-12-31 user1
                            </td>
                            <td>
                            设置用户口令的失效期限 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            pwck 
                            </td>
                            <td>
                            检查 '/etc/passwd' 的文件格式和语法修正以及存在的用户 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            grpck 
                            </td>
                            <td>
                            检查 '/etc/passwd' 的文件格式和语法修正以及存在的群组 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            newgrp group_name 
                            </td>
                            <td>
                            登陆进一个新的群组以改变新创建文件的预设群组 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo8">
                    Linux命令 — 文件的权限 - 使用 "+" 设置权限，使用 "-" 用于取消 </a>
            </div>
            <div id="demo8" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                             <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            ls -lh 
                            </td>
                            <td>
                            显示权限 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ls /tmp | pr -T5 -W$COLUMNS
                            </td>
                            <td>
                            将终端划分成5栏显示 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chmod ugo+rwx directory1
                            </td>
                            <td>
                            设置目录的所有人(u)、群组(g)以及其他人(o)以读（r ）、写(w)和执行(x)的权限 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chmod go-rwx directory1 
                            </td>
                            <td>
                            删除群组(g)与其他人(o)对目录的读写执行权限 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chown user1 file1
                            </td>
                            <td>
                            改变一个文件的所有人属性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chown -R user1 directory1 
                            </td>
                            <td>
                            改变一个目录的所有人属性并同时改变改目录下所有文件的属性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chgrp group1 file1
                            </td>
                            <td>
                             改变文件的群组 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chown user1:group1 file1
                            </td>
                            <td>
                            改变一个文件的所有人和群组属性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            find / -perm -u+s 
                            </td>
                            <td>
                            罗列一个系统中所有使用了SUID控制的文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chmod u+s /bin/file1 
                            </td>
                            <td>
                            设置一个二进制文件的 SUID 位 - 运行该文件的用户也被赋予和所有者同样的权限 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chmod u-s /bin/file1
                            </td>
                            <td>
                            禁用一个二进制文件的 SUID位 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chmod g+s /home/public
                            </td>
                            <td>
                            设置一个目录的SGID 位 - 类似SUID ，不过这是针对目录的 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chmod g-s /home/public
                            </td>
                            <td>
                            禁用一个目录的 SGID 位 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chmod o+t /home/public
                            </td>
                            <td>
                            设置一个文件的 STIKY 位 - 只允许合法所有人删除文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chmod o-t /home/public 
                            </td>
                            <td>
                             禁用一个目录的 STIKY 位
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo9">
                    Linux命令 — 文件的特殊属性 - 使用 "+" 设置权限，使用 "-" 用于取消 </a>
            </div>
            <div id="demo9" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            chattr +a file1
                            </td>
                            <td>
                            只允许以追加方式读写文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chattr +c file1
                            </td>
                            <td>
                             允许这个文件能被内核自动压缩/解压 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chattr +d file1
                            </td>
                            <td>
                            在进行文件系统备份时，dump程序将忽略这个文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chattr +i file1
                            </td>
                            <td>
                            设置成不可变的文件，不能被删除、修改、重命名或者链接 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chattr +s file1
                            </td>
                            <td>
                             允许一个文件被安全地删除 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chattr +S file1 
                            </td>
                            <td>
                            一旦应用程序对这个文件执行了写操作，使系统立刻把修改的结果写到磁盘 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chattr +u file1
                            </td>
                            <td>
                             若文件被删除，系统会允许你在以后恢复这个被删除的文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            lsattr 
                            </td>
                            <td>
                            显示特殊的属性 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo10">
                    Linux命令 — 打包和压缩文件 </a>
            </div>
            <div id="demo10" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            bunzip2 file1.bz2
                            </td>
                            <td>
                            解压一个叫做 'file1.bz2'的文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            bzip2 file1 
                            </td>
                            <td>
                            压缩一个叫做 'file1' 的文件
                            </td>
                        </tr>
                        <tr>
                            <td>
                            gunzip file1.gz
                            </td>
                            <td>
                            解压一个叫做 'file1.gz'的文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            gzip file1 
                            </td>
                            <td>
                            压缩一个叫做 'file1'的文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            gzip -9 file1
                            </td>
                            <td>
                            最大程度压缩 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rar a file1.rar test_file
                            </td>
                            <td>
                            创建一个叫做 'file1.rar' 的包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rar a file1.rar file1 file2 dir1 
                            </td>
                            <td>
                            同时压缩 'file1', 'file2' 以及目录 'dir1' 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rar x file1.rar
                            </td>
                            <td>
                            解压rar包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            unrar x file1.rar
                            </td>
                            <td>
                             解压rar包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tar -cvf archive.tar file1 
                            </td>
                            <td>
                            创建一个非压缩的 tarball 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tar -cvf archive.tar file1 file2 dir1
                            </td>
                            <td>
                            创建一个包含了 'file1', 'file2' 以及 'dir1'的档案文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tar -tf archive.tar 
                            </td>
                            <td>
                            显示一个包中的内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tar -xvf archive.tar
                            </td>
                            <td>
                            释放一个包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tar -xvf archive.tar -C /tmp 
                            </td>
                            <td>
                            将压缩包释放到 /tmp目录下 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tar -cvfj archive.tar.bz2 dir1 
                            </td>
                            <td>
                            创建一个bzip2格式的压缩包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tar -jxvf archive.tar.bz2 
                            </td>
                            <td>
                            解压一个bzip2格式的压缩包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tar -cvfz archive.tar.gz dir1 
                            </td>
                            <td>
                            创建一个gzip格式的压缩包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tar -zxvf archive.tar.gz
                            </td>
                            <td>
                            解压一个gzip格式的压缩包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            zip file1.zip file1 
                            </td>
                            <td>
                            创建一个zip格式的压缩包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            zip -r file1.zip file1 file2 dir1
                            </td>
                            <td>
                            将几个文件和目录同时压缩成一个zip格式的压缩包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            unzip file1.zip
                            </td>
                            <td>
                            解压一个zip格式压缩包 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo11">
                    Linux命令 — RPM 包 - （Fedora, Redhat及类似系统） </a>
            </div>
            <div id="demo11" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            rpm -ivh package.rpm
                            </td>
                            <td>
                             安装一个rpm包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -ivh --nodeeps package.rpm 
                            </td>
                            <td>
                            安装一个rpm包而忽略依赖关系警告 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -U package.rpm
                            </td>
                            <td>
                            更新一个rpm包但不改变其配置文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -F package.rpm
                            </td>
                            <td>
                            更新一个确定已经安装的rpm包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -e package_name.rpm
                            </td>
                            <td>
                            删除一个rpm包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -qa
                            </td>
                            <td>
                            显示系统中所有已经安装的rpm包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -qa | grep httpd
                            </td>
                            <td>
                            显示所有名称中包含 "httpd" 字样的rpm包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -qi package_name
                            </td>
                            <td>
                            获取一个已安装包的特殊信息 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -qg "System Environment/Daemons" 
                            </td>
                            <td>
                            显示一个组件的rpm包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -ql package_name
                            </td>
                            <td>
                            显示一个已经安装的rpm包提供的文件列表 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -qc package_name
                            </td>
                            <td>
                            显示一个已经安装的rpm包提供的配置文件列表 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -q package_name --whatrequires
                            </td>
                            <td>
                            显示与一个rpm包存在依赖关系的列表 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -q package_name --whatprovides
                            </td>
                            <td>
                            显示一个rpm包所占的体积 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -q package_name --scripts
                            </td>
                            <td>
                            显示在安装/删除期间所执行的脚本l 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -q package_name --changelog 
                            </td>
                            <td>
                            显示一个rpm包的修改历史 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -qf /etc/httpd/conf/httpd.conf
                            </td>
                            <td>
                            确认所给的文件由哪个rpm包所提供 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -qp package.rpm -l
                            </td>
                            <td>
                             显示由一个尚未安装的rpm包提供的文件列表 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm --import /media/cdrom/RPM-GPG-KEY
                            </td>
                            <td>
                            导入公钥数字证书 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm --checksig package.rpm
                            </td>
                            <td>
                             确认一个rpm包的完整性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -qa gpg-pubkey 
                            </td>
                            <td>
                            确认已安装的所有rpm包的完整性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -V package_name 
                            </td>
                            <td>
                            检查文件尺寸、 许可、类型、所有者、群组、MD5检查以及最后修改时间 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -Va 
                            </td>
                            <td>
                            检查系统中所有已安装的rpm包- 小心使用 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -Vp package.rpm 
                            </td>
                            <td>
                            确认一个rpm包还未安装 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm2cpio package.rpm | cpio --extract --make-directories *bin*
                            </td>
                            <td>
                            从一个rpm包运行可执行文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpm -ivh /usr/src/redhat/RPMS/`arch`/package.rpm
                            </td>
                            <td>
                            从一个rpm源码安装一个构建好的包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rpmbuild --rebuild package_name.src.rpm
                            </td>
                            <td>
                            从一个rpm源码构建一个 rpm 包 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo12">
                    Linux命令 — YUM 软件包升级器 - （Fedora, RedHat及类似系统） </a>
            </div>
            <div id="demo12" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            yum install package_name
                            </td>
                            <td>
                            下载并安装一个rpm包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            yum localinstall package_name.rpm 
                            </td>
                            <td>
                            将安装一个rpm包，使用你自己的软件仓库为你解决所有依赖关系 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            yum update package_name.rpm 
                            </td>
                            <td>
                            更新当前系统中所有安装的rpm包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            yum update package_name
                            </td>
                            <td>
                            更新一个rpm包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            yum remove package_name
                            </td>
                            <td>
                            删除一个rpm包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            yum list 
                            </td>
                            <td>
                             列出当前系统中安装的所有包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            yum search package_name
                            </td>
                            <td>
                             在rpm仓库中搜寻软件包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            yum clean packages 
                            </td>
                            <td>
                            清理rpm缓存删除下载的包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            yum clean headers
                            </td>
                            <td>
                            删除所有头文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            yum clean all
                            </td>
                            <td>
                            删除所有缓存的包和头文件 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo13">
                    Linux命令 — DEB 包 (Debian, Ubuntu 以及类似系统) </a>
            </div>
            <div id="demo13" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                             <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            dpkg -i package.deb
                            </td>
                            <td>
                            安装/更新一个 deb 包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dpkg -r package_name 
                            </td>
                            <td>
                            从系统删除一个 deb 包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dpkg -l 
                            </td>
                            <td>
                            显示系统中所有已经安装的 deb 包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dpkg -l | grep httpd 
                            </td>
                            <td>
                            显示所有名称中包含 "httpd" 字样的deb包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dpkg -s package_name
                            </td>
                            <td>
                            获得已经安装在系统中一个特殊包的信息 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dpkg -L package_name
                            </td>
                            <td>
                            显示系统中已经安装的一个deb包所提供的文件列表 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dpkg --contents package.deb 
                            </td>
                            <td>
                            显示尚未安装的一个包所提供的文件列表 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dpkg -S /bin/ping
                            </td>
                            <td>
                            确认所给的文件由哪个deb包提供 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo14">
                    Linux命令 — APT 软件工具 (Debian, Ubuntu 以及类似系统) </a>
            </div>
            <div id="demo14" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                              <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            apt-get install package_name
                            </td>
                            <td>
                            安装/更新一个 deb 包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            apt-cdrom install package_name
                            </td>
                            <td>
                            从光盘安装/更新一个 deb 包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            apt-get update 
                            </td>
                            <td>
                            升级列表中的软件包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            apt-get upgrade
                            </td>
                            <td>
                            升级所有已安装的软件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            apt-get remove package_name
                            </td>
                            <td>
                            从系统删除一个deb包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            apt-get check 
                            </td>
                            <td>
                             确认依赖的软件仓库正确 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            apt-get clean 
                            </td>
                            <td>
                            从下载的软件包中清理缓存 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            apt-cache search searched-package
                            </td>
                            <td>
                            返回包含所要搜索字符串的软件包名称 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo15">
                    Linux命令 — 查看文件内容 </a>
            </div>
            <div id="demo15" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            cat file1 
                            </td>
                            <td>
                            从第一个字节开始正向查看文件的内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tac file1
                            </td>
                            <td>
                            从最后一行开始反向查看一个文件的内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            more file1
                            </td>
                            <td>
                            查看一个长文件的内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            less file1 
                            </td>
                            <td>
                            类似于 'more' 命令，但是它允许在文件中和正向操作一样的反向操作 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            head -2 file1 
                            </td>
                            <td>
                             查看一个文件的前两行 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tail -2 file1
                            </td>
                            <td>
                            查看一个文件的最后两行 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tail -f /var/log/messages 
                            </td>
                            <td>
                            实时查看被添加到一个文件中的内容 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo16">
                    Linux命令 — 文本处理 </a>
            </div>
            <div id="demo16" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                             <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            cat file1 | command( sed, grep, awk, grep, etc...) > result.txt
                            </td>
                            <td>
                             合并一个文件的详细说明文本，并将简介写入一个新文件中 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cat file1 | command( sed, grep, awk, grep, etc...) >> result.txt
                            </td>
                            <td>
                            合并一个文件的详细说明文本，并将简介写入一个已有的文件中 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            grep Aug /var/log/messages
                            </td>
                            <td>
                            在文件 '/var/log/messages'中查找关键词"Aug" 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            grep ^Aug /var/log/messages
                            </td>
                            <td>
                            在文件 '/var/log/messages'中查找以"Aug"开始的词汇
                            </td>
                        </tr>
                        <tr>
                            <td>
                            grep [0-9] /var/log/messages
                            </td>
                            <td>
                            选择 '/var/log/messages' 文件中所有包含数字的行 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            grep Aug -R /var/log/* 
                            </td>
                            <td>
                            在目录 '/var/log' 及随后的目录中搜索字符串"Aug" 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sed 's/stringa1/stringa2/g' example.txt
                            </td>
                            <td>
                            将example.txt文件中的 "string1" 替换成 "string2" 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sed '/^$/d' example.txt 
                            </td>
                            <td>
                             从example.txt文件中删除所有空白行 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sed '/ *#/d; /^$/d' example.txt 从example.txt
                            </td>
                            <td>
                            文件中删除所有注释和空白行 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            echo 'esempio' | tr '[:lower:]' '[:upper:]' 
                            </td>
                            <td>
                            合并上下单元格内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sed -e '1d' result.txt 
                            </td>
                            <td>
                            从文件example.txt 中排除第一行 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sed -n '/stringa1/p' 
                            </td>
                            <td>
                            查看只包含词汇 "string1"的行 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sed -e 's/ *$//' example.txt
                            </td>
                            <td>
                            删除每一行最后的空白字符 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sed -e 's/stringa1//g' example.txt 
                            </td>
                            <td>
                            从文档中只删除词汇 "string1" 并保留剩余全部 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sed -n '1,5p;5q' example.txt
                            </td>
                            <td>
                            查看从第一行到第5行内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sed -n '5p;5q' example.txt
                            </td>
                            <td>
                             查看第5行 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sed -e 's/00*/0/g' example.txt 
                            </td>
                            <td>
                            用单个零替换多个零 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cat -n file1 
                            </td>
                            <td>
                            标示文件的行数 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cat example.txt | awk 'NR%2==1' 
                            </td>
                            <td>
                            删除example.txt文件中的所有偶数行 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            echo a b c | awk '{print $1}' 
                            </td>
                            <td>
                            查看一行第一栏 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            echo a b c | awk '{print $1,$3}' 
                            </td>
                            <td>
                            查看一行的第一和第三栏 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            paste file1 file2 
                            </td>
                            <td>
                            合并两个文件或两栏的内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            paste -d '+' file1 file2 
                            </td>
                            <td>
                            合并两个文件或两栏的内容，中间用"+"区分 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sort file1 file2 
                            </td>
                            <td>
                             排序两个文件的内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sort file1 file2 | uniq 
                            </td>
                            <td>
                            取出两个文件的并集(重复的行只保留一份) 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sort file1 file2 | uniq -u
                            </td>
                            <td>
                            删除交集，留下其他的行 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            sort file1 file2 | uniq -d 
                            </td>
                            <td>
                            取出两个文件的交集(只留下同时存在于两个文件中的文件) 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            comm -1 file1 file2 
                            </td>
                            <td>
                            比较两个文件的内容只删除 'file1' 所包含的内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            comm -2 file1 file2
                            </td>
                            <td>
                            比较两个文件的内容只删除 'file2' 所包含的内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            comm -3 file1 file2
                            </td>
                            <td>
                            比较两个文件的内容只删除两个文件共有的部分 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo17">
                    Linux命令 — 字符设置和文件格式转换 </a>
            </div>
            <div id="demo17" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                             <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            dos2unix filedos.txt fileunix.txt
                            </td>
                            <td>
                            将一个文本文件的格式从MSDOS转换成UNIX 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            unix2dos fileunix.txt filedos.txt
                            </td>
                            <td>
                            将一个文本文件的格式从UNIX转换成MSDOS 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            recode ..HTML < page.txt > page.html
                            </td>
                            <td>
                            将一个文本文件转换成html 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            recode -l | more
                            </td>
                            <td>
                            显示所有允许的转换格式 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo18">
                    Linux命令 — 文件系统分析 </a>
            </div>
            <div id="demo18" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            badblocks -v /dev/hda1 
                            </td>
                            <td>
                            检查磁盘hda1上的坏磁块 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            fsck /dev/hda1
                            </td>
                            <td>
                            修复/检查hda1磁盘上linux文件系统的完整性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            fsck.ext2 /dev/hda1
                            </td>
                            <td>
                            修复/检查hda1磁盘上ext2文件系统的完整性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            e2fsck /dev/hda1
                            </td>
                            <td>
                            修复/检查hda1磁盘上ext2文件系统的完整性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            e2fsck -j /dev/hda1
                            </td>
                            <td>
                            修复/检查hda1磁盘上ext3文件系统的完整性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            fsck.ext3 /dev/hda1
                            </td>
                            <td>
                            修复/检查hda1磁盘上ext3文件系统的完整性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            fsck.vfat /dev/hda1 
                            </td>
                            <td>
                            修复/检查hda1磁盘上fat文件系统的完整性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            fsck.msdos /dev/hda1
                            </td>
                            <td>
                            修复/检查hda1磁盘上dos文件系统的完整性 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dosfsck /dev/hda1
                            </td>
                            <td>
                            修复/检查hda1磁盘上dos文件系统的完整性 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo19">
                    Linux命令 — 初始化一个文件系统 </a>
            </div>
            <div id="demo19" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                             <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            mkfs /dev/hda1
                            </td>
                            <td>
                            在hda1分区创建一个文件系统 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mke2fs /dev/hda1
                            </td>
                            <td>
                            在hda1分区创建一个linux ext2的文件系统 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mke2fs -j /dev/hda1
                            </td>
                            <td>
                            在hda1分区创建一个linux ext3(日志型)的文件系统 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mkfs -t vfat 32 -F /dev/hda1
                            </td>
                            <td>
                            创建一个 FAT32 文件系统 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            fdformat -n /dev/fd0
                            </td>
                            <td>
                            格式化一个软盘 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mkswap /dev/hda3
                            </td>
                            <td>
                            创建一个swap文件系统 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo20">
                    Linux命令 — SWAP文件系统 </a>
            </div>
            <div id="demo20" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                              <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            mkswap /dev/hda3
                            </td>
                            <td>
                            创建一个swap文件系统 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            swapon /dev/hda3
                            </td>
                            <td>
                            启用一个新的swap文件系统 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            swapon /dev/hda2 /dev/hdb3 
                            </td>
                            <td>
                            启用两个swap分区 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo21">
                    Linux命令 — 备份 </a>
            </div>
            <div id="demo21" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                             <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            dump -0aj -f /tmp/home0.bak /home
                            </td>
                            <td>
                            制作一个 '/home' 目录的完整备份 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dump -1aj -f /tmp/home0.bak /home
                            </td>
                            <td>
                            制作一个 '/home' 目录的交互式备份 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            restore -if /tmp/home0.bak
                            </td>
                            <td>
                            还原一个交互式备份 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rsync -rogpav --delete /home /tmp
                            </td>
                            <td>
                             同步两边的目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rsync -rogpav -e ssh --delete /home ip_address:/tmp
                            </td>
                            <td>
                            通过SSH通道rsync 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rsync -az -e ssh --delete ip_addr:/home/public /home/local 
                            </td>
                            <td>
                            通过ssh和压缩将一个远程目录同步到本地目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            rsync -az -e ssh --delete /home/local ip_addr:/home/public
                            </td>
                            <td>
                            通过ssh和压缩将本地目录同步到远程目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dd bs=1M if=/dev/hda | gzip | ssh user@ip_addr 'dd of=hda.gz'
                            </td>
                            <td>
                            通过ssh在远程主机上执行一次备份本地磁盘的操作 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dd if=/dev/sda of=/tmp/file1 
                            </td>
                            <td>
                            备份磁盘内容到一个文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tar -Puf backup.tar /home/user
                            </td>
                            <td>
                            执行一次对 '/home/user' 目录的交互式备份操作 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ( cd /tmp/local/ && tar c . ) | ssh -C user@ip_addr 'cd /home/share/ && tar x -p'
                            </td>
                            <td>
                             通过ssh在远程目录中复制一个目录内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ( tar c /home ) | ssh -C user@ip_addr 'cd /home/backup-home && tar x -p'
                            </td>
                            <td>
                            通过ssh在远程目录中复制一个本地目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tar cf - . | (cd /tmp/backup ; tar xf - ) 
                            </td>
                            <td>
                            本地将一个目录复制到另一个地方，保留原有权限及链接 
                            </td>
                        </tr>
                        <tr>
                            <td>
                          find /home/user1 -name '*.txt' | xargs cp -av --target-directory=/home/backup/ --parents
                            </td>
                            <td>
                         从一个目录查找并复制所有以 '.txt' 结尾的文件到另一个目录 
                            </td>
                        </tr>
                        <tr>
                            <td>
                          find /var/log -name '*.log' | tar cv --files-from=- | bzip2 > log.tar.bz2 
                            </td>
                            <td>
                         查找所有以 '.log' 结尾的文件并做成一个bzip包 
                            </td>
                        </tr>
                        <tr>
                            <td>
                          dd if=/dev/hda of=/dev/fd0 bs=512 count=1 
                            </td>
                            <td>
                         做一个将 MBR (Master Boot Record)内容复制到软盘的动作 
                            </td>
                        </tr>
                        <tr>
                            <td>
                          dd if=/dev/fd0 of=/dev/hda bs=512 count=1 
                            </td>
                            <td>
                         从已经保存到软盘的备份中恢复MBR内容 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo22">
                    Linux命令 — 光盘 </a>
            </div>
            <div id="demo22" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                              <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            cdrecord -v gracetime=2 dev=/dev/cdrom -eject blank=fast -force
                            </td>
                            <td>
                            清空一个可复写的光盘内容 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mkisofs /dev/cdrom > cd.iso
                            </td>
                            <td>
                             在磁盘上创建一个光盘的iso镜像文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mkisofs /dev/cdrom | gzip > cd_iso.gz 
                            </td>
                            <td>
                            在磁盘上创建一个压缩了的光盘iso镜像文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mkisofs -J -allow-leading-dots -R -V "Label CD" -iso-level 4 -o ./cd.iso data_cd
                            </td>
                            <td>
                            创建一个目录的iso镜像文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cdrecord -v dev=/dev/cdrom cd.iso 
                            </td>
                            <td>
                             刻录一个ISO镜像文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            gzip -dc cd_iso.gz | cdrecord dev=/dev/cdrom -
                            </td>
                            <td>
                            刻录一个压缩了的ISO镜像文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mount -o loop cd.iso /mnt/iso
                            </td>
                            <td>
                            挂载一个ISO镜像文件 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cd-paranoia -B
                            </td>
                            <td>
                            从一个CD光盘转录音轨到 wav 文件中 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cd-paranoia -- "-3" 
                            </td>
                            <td>
                            从一个CD光盘转录音轨到 wav 文件中（参数-3） 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            cdrecord --scanbus
                            </td>
                            <td>
                            扫描总线以识别scsi通道 
                            </td>
                        </tr>
                        <tr>
                            <td>
                            dd if=/dev/hdc | md5sum
                            </td>
                            <td>
                            校验一个设备的md5sum编码，例如一张 CD 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo23">
                    Linux命令 — 网络 - （以太网和WIFI无线） </a>
            </div>
            <div id="demo23" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                              <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            dhclient eth0
                            </td>
                            <td>
                            以dhcp模式启用‘eth0’网络设备
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ethtool eth0
                            </td>
                            <td>
                            显示网卡‘eth0’的流量统计
                            </td>
                        </tr>
                        <tr>
                            <td>
                            host www.example.com
                            </td>
                            <td>
                            查找主机名以解析名称与IP地址及镜像
                            </td>
                        </tr>
                        <tr>
                            <td>
                            hostname
                            </td>
                            <td>
                            显示主机名
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ifconfig eth0
                            </td>
                            <td>
                            显示一个以太网卡的配置
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ifconfig eth0 192.168.1.1 netmask 255.255.255.0
                            </td>
                            <td>
                            控制IP地址
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ifconfig eth0 promisc
                            </td>
                            <td>
                            设置‘eth0’成混杂模式以嗅探数据包（sniffing）
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ifdown eth0
                            </td>
                            <td>
                            禁用一个‘eth0’网络设备
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ifup eth0
                            </td>
                            <td>
                             启用一个‘eth0’网络设备
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ip link show
                            </td>
                            <td>
                            显示所有网络设备的连接状态
                            </td>
                        </tr>
                        <tr>
                            <td>
                            iwconfig eth1
                            </td>
                            <td>
                            显示一个无线网卡的配置
                            </td>
                        </tr>
                        <tr>
                            <td>
                            iwlist scan
                            </td>
                            <td>
                            显示无线网络
                            </td>
                        </tr>
                        <tr>
                            <td>
                            mii-tool eth0
                            </td>
                            <td>
                            显示‘eth0’的连接状态
                            </td>
                        </tr>
                        <tr>
                            <td>
                            netstat -tup
                            </td>
                            <td>
                            显示所有启用的网络连接和他们的PID
                            </td>
                        </tr>
                        <tr>
                            <td>
                            netstat -tup1
                            </td>
                            <td>
                            显示系统中所有监听的网络服务和他们的PID
                            </td>
                        </tr>
                        <tr>
                            <td>
                            netstat -rn
                            </td>
                            <td>
                            显示路由表，类似于“route -n”命令
                            </td>
                        </tr>
                        <tr>
                            <td>
                            nslookup www.example.com
                            </td>
                            <td>
                            查找主机名以解析名称与IP地址及镜像
                            </td>
                        </tr>
                        <tr>
                            <td>
                            route -n
                            </td>
                            <td>
                            显示路由表
                            </td>
                        </tr>
                        <tr>
                            <td>
                            route add -net 0/0 gw IP Gateway
                            </td>
                            <td>
                            控制预设网关
                            </td>
                        </tr>
                        <tr>
                            <td>route add -net 192.168.0.0 netmask 255.255.0.0 gw 192.168.1.1

                            </td>
                            <td>
                            控制通向网络‘192.168.0.0/16’的静态路由
                            </td>
                        </tr>
                        <tr>
                            <td>
                            route del 0/0 gw IP gateway
                            </td>
                            <td>
                            删除静态路由
                            </td>
                        </tr>
                        <tr>
                            <td>
                            echo “1”> 
                            /proc/sys/net/ipv4/ip_foward
                            </td>
                            <td>
                            激活IP转发
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tcpdump tcp port 80
                            </td>
                            <td>
                            显示所有HTTP回环
                            </td>
                        </tr>
                        <tr>
                            <td>
                            whois www.example.com
                            </td>
                            <td>
                            在Whois数据库中查找
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo24">
                        Linux命令 — Microsoft Windows 网络 </a>
                </div>
                <div id="demo24" class="in collapse">
                    <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                 <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                            </tr>
                            <tr>
                                <td>
                                mount -t smbfs -o
                                username=user,password=pass
                                //WinClient/share/mnt/share
                                </td>
                                <td>
                                挂载一个windows网络共享
                                </td>
                            </tr>
                            <tr>
                                <td>
                                nbtscan ip addr
                                </td>
                                <td>
                                netbios名解析
                                </td>
                            </tr>
                            <tr>
                                <td>
                                nmblookup -A ip addr
                                </td>
                                <td>
                                   netbios名解析
                                </td>
                            </tr>
                            <tr>
                                <td>
                                smbclient -L ip addr/hostname
                                </td>
                                <td>
                                显示一台windows主机的远程共享
                                </td>
                            </tr>
                            <tr>
                                <td>
                                smbget -Rr smb://ip addr/share
                                </td>
                                <td>
                                像wget一样能够通过smb从一台windows主机上下载文件
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo25">
                    Linux命令 — IPTABLES(firewall) </a>
            </div>
            <div id="demo25" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            iptables -t filter -L
                            </td>
                            <td>
                            显示过滤表的所有链路
                            </td>
                        </tr>
                        <tr>
                            <td>
                            iptables -t nae -L
                            </td>
                            <td>
                            显示nat表的所有链路
                            </td>
                        </tr>
                        <tr>
                            <td>
                            iptables -t filter -F
                            </td>
                            <td>
                            以过滤表为依据清理所有规则
                            </td>
                        </tr>
                        <tr>
                            <td>
                            iptables -t nat -F
                            </td>
                            <td>
                            以nat表为依据清理所有规则
                            </td>
                        </tr>
                        <tr>
                            <td>
                            iptables -t filter -X
                            </td>
                            <td>
                            删除所有由用户创建的链路
                            </td>
                        </tr>
                        <tr>
                            <td>
                            iptables -t filter -A INPUT -p tcp --dport telnet -j ACCEPT
                            </td>
                            <td>
                           允许telnet接入
                            </td>
                        </tr>
                        <tr>
                            <td>
                             iptables -t filter -A OUTPUT -p tcp --dport telnet -j DROP
                            </td>
                            <td>
                             阻止telnet接入
                            </td>
                        </tr>
                        <tr>
                            <td>
                            iptables -t filter -A FORWARD -p tcp --dport pop3 -j ACCEPT
                            </td>
                            <td>
                            允许转发链路上的POP3连接
                            </td>
                        </tr>
                        <tr>
                            <td>
                              iptables -t filter -A INPUT -j LOG --log-prefix
                            </td>
                            <td>
                            记录所有链路中被查封的包
                            </td>
                        </tr>
                        <tr>
                            <td>
                            iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE
                            </td>
                            <td>
                            设置一个PAT（端口地址转换）在eth0掩盖发出包
                            </td>
                        </tr>
                        <tr>
                            <td>
                            iptables -t nat -A POSTROUTING -d 192.168.0.1 -p tcp -m tcp --dport 22-j DNAT --to-destination 10.0.0.2:22
                            </td>
                            <td>
                            将发往一个主机地址的包转向到其他主机
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-warning" data-toggle="collapse" href="#demo26">
                    Linux命令 — 监视和调试 </a>
            </div>
            <div id="demo26" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                              <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            free -m 
                            </td>
                            <td>
                            以兆为单位罗列RAM状态
                            </td>
                        </tr>
                        <tr>
                            <td>
                            kill -9 process id
                            </td>
                            <td>
                            强行关闭进程并结束它
                            </td>
                        </tr>
                        <tr>
                            <td>
                            kill -1 process id
                            </td>
                            <td>
                            强制一个进程重载其配置
                            </td>
                        </tr>
                        <tr>
                            <td>
                            last reboot
                            </td>
                            <td>
                            显示重启历史
                            </td>
                        </tr>
                        <tr>
                            <td>
                            lsmod
                            </td>
                            <td>
                            罗列状态的内核模块
                            </td>
                        </tr>
                        <tr>
                            <td>
                            lsof -p process id
                            </td>
                            <td>
                            罗列一个由进程打开的文件列表
                            </td>
                        </tr>
                        <tr>
                            <td>
                            lsof /home/user1
                            </td>
                            <td>
                            罗列所给系统路径中的所打开的文件的列表
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ps -eafw
                            </td>
                            <td>
                            罗列linux任务
                            </td>
                        </tr>
                        <tr>
                            <td>
                            ps -e -o pid,args --forest
                            </td>
                            <td>
                            以分级的方式罗列linux任务
                            </td>
                        </tr>
                        <tr>
                            <td>
                            pstress
                            </td>
                            <td>
                            以树状图显示程序
                            </td>
                        </tr>
                        <tr>
                            <td>
                            smartctl -A /dev/hda
                            </td>
                            <td>
                            通过启用SMART监控硬盘设备的可靠性
                            </td>
                        </tr>
                        <tr>
                            <td>
                            smartctl -i /dev/hda
                            </td>
                            <td>
                            检查一个硬盘设备的SMART是否启用
                            </td>
                        </tr>
                        <tr>
                            <td>
                            strace -c ls >/dev/null
                            </td>
                            <td>
                            罗列系统calls made并用一个进程接收
                            </td>
                        </tr>
                        <tr>
                            <td>
                            strace -f -e open ls >/dev/null
                            </td>
                            <td>
                            罗列库调用
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tail /var/log/dmesg
                            </td>
                            <td>
                            显示内核引导过程中的内部事件
                            </td>
                        </tr>
                        <tr>
                            <td>
                            tail /val/log/messages
                            </td>
                            <td>
                          显示系统事件
                            </td>
                        </tr>
                        <tr>
                            <td>
                            top
                            </td>
                            <td>
                            罗列使用CPU资源最多的linux任务
                            </td>
                        </tr>
                        <tr>
                            <td>
                            watch -nl ‘cat /proc/interrupts’
                            </td>
                            <td>
                            罗列实时中断
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
          <hr />
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="list-group-item list-group-item-info" data-toggle="collapse" href="#demo27">
                    Linux命令 — 其他常用命令 </a>
            </div>
            <div id="demo27" class="in collapse">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                             <th class="titcolor" width="50%">
                                命令代码
                            </th>
                            <th class="titcolor" width="50%">
                                注释说明
                            </th>
                        </tr>
                        <tr>
                            <td>
                            alias hh='history'
                            </td>
                            <td>
                            为命令history（历史）设置一个别名
                            </td>
                        </tr>
                        <tr>
                            <td>
                            apropos ...keyword
                            </td>
                            <td>
                            罗列一个包括程序关键词的命令列表，当你仅知晓程序是干什么，而又不记得命令时特别有用
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chsh
                            </td>
                            <td>
                            改变shell命令
                            </td>
                        </tr>
                        <tr>
                            <td>
                            chsh --list-shells
                            </td>
                            <td>
                            用于了解你是否必须远程连接到别的机器的不错的命令
                            </td>
                        </tr>
                        <tr>
                            <td>
                            gpg -c filel
                            </td>
                            <td>
                            用GNU Privacy Guard加密一个文件
                            </td>
                        </tr>
                        <tr>
                            <td>
                            gpg filel.gpg
                            </td>
                            <td>
                            用GNU Privacy Guard解密一个文件
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

 
    

            </div>
 </div></div></div>
</div> <div class="accordion-group"> </div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><div class="container" id="foot-history">
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