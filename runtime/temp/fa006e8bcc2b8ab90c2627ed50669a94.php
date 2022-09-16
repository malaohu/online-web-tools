<?php /*a:5:{s:67:"/data/wwwroot/tool.ruyo.net/application/index/view/index/ports.html";i:1633603258;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.ports.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.ports.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.ports.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/useragent/">常用User-Agent</a></li><li role="presentation"><a href="/contenttype/">Content-Type对照表</a></li><li role="presentation"><a href="/requestmethod/">Request请求大全</a></li><li role="presentation"><a href="/httpheader/">HTTP请求头大全</a></li><li role="presentation"><a href="/pagecode/"> HTTP状态码</a></li><li role="presentation"><a href="/asciicode/">ASCII对照表</a></li><li role="presentation" class="active"><a href="/ports/">常见端口大全</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/htmlescapechar/">HTML特殊字符转义</a></li><li role="presentation"><a href="/bootstrapicon/">Bootstrap字体图标</a></li><li role="presentation"><a href="/androidmanifest/"> Android Manifest权限大全</a></li><li role="presentation"><a href="/linuxcmd/">Linux常用命令大全</a></li></ul></li></ul><div class="alert alert-success alert-dismissible" role="alert">
       HTTP,TCP,UDP常见端口对照表,下面罗列了包括在Linux 中的服务、守护进程、和程序所使用的最常见的通信端口<code>小贴士：Ctrl+F 快速查找 Http端口号（点标题可收缩或展开）</code>
    </div><div class="panel panel-success"><div class="accordion-heading"><a class="list-group-item list-group-item-success" data-toggle="collapse" href="#demo1">No1.最常用端口</a></div>
            <div id="demo1" class="in collapse"><table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered table-hover"><tbody><tr><th class="titcolor">端口号码/层</th><th class="titcolor">名称</th><th class="titcolor">注释</th></tr><tr><td>1</td><td>tcpmux</td><td>TCP端口服务多路复用</td></tr><tr><td>5</td><td>rje</td><td>远程作业入口</td></tr><tr><td>7</td><td>echo</td><td>Echo服务</td></tr><tr><td>9</td><td>discard</td><td>用于连接测试的空服务</td></tr><tr><td>11</td><td>systat</td><td>用于列举连接了的端口的系统状态</td></tr><tr><td>13</td><td>daytime</td><td>给请求主机发送日期和时间</td></tr><tr><td>17</td><td>qotd</td><td>给连接了的主机发送每日格言</td></tr><tr><td>18</td><td>msp</td><td>消息发送协议</td></tr><tr><td>19</td><td>chargen</td><td>字符生成服务；发送无止境的字符流</td></tr><tr><td>20</td><td>ftp-data</td><td>FTP数据端口</td></tr><tr><td>21</td><td>ftp</td><td>文件传输协议（FTP）端口；有时被文件服务协议（FSP）使用</td></tr><tr><td>22</td><td>ssh</td><td>安全Shell（SSH）服务</td></tr><tr><td>23</td><td>telnet</td><td>Telnet服务</td></tr><tr><td>25</td><td>smtp</td><td>简单邮件传输协议（SMTP）</td></tr><tr><td>37</td><td>time</td><td>时间协议</td></tr><tr><td>39</td><td>rlp</td><td>资源定位协议</td></tr><tr><td>42</td><td>nameserver</td><td>互联网名称服务</td></tr><tr><td>43</td><td>nicname</td><td>WHOIS目录服务</td></tr><tr><td>49</td><td>tacacs</td><td>用于基于TCP/IP验证和访问的终端访问控制器访问控制系统</td></tr><tr><td>50</td><td>re-mail-ck</td><td>远程邮件检查协议</td></tr><tr><td>53</td><td>domain</td><td>域名服务（如BIND）</td></tr><tr><td>63</td><td>whois++</td><td>WHOIS++，被扩展了的WHOIS服务</td></tr><tr><td>67</td><td>bootps</td><td>引导协议（BOOTP）服务；还被动态主机配置协议（DHCP）服务使用</td></tr><tr><td>68</td><td>bootpc</td><td>Bootstrap（BOOTP）客户；还被动态主机配置协议（DHCP）客户使用</td></tr><tr><td>69</td><td>tftp</td><td>小文件传输协议（TFTP）</td></tr><tr><td>70</td><td>gopher</td><td>Gopher互联网文档搜寻和检索</td></tr><tr><td>71</td><td>netrjs-1</td><td>远程作业服务</td></tr><tr><td>72</td><td>netrjs-2</td><td>远程作业服务</td></tr><tr><td>73</td><td>netrjs-3</td><td>远程作业服务</td></tr><tr><td>73</td><td>netrjs-4</td><td>远程作业服务</td></tr><tr><td>79</td><td>finger</td><td>用于用户联系信息的Finger服务</td></tr><tr><td>80</td><td>http</td><td>用于万维网（WWW）服务的超文本传输协议（HTTP）</td></tr><tr><td>88</td><td>kerberos</td><td>Kerberos网络验证系统</td></tr><tr><td>95</td><td>supdup</td><td>Telnet协议扩展</td></tr><tr><td>101</td><td>hostname</td><td>SRI-NIC机器上的主机名服务</td></tr><tr><td>102</td><td>iso-tsap</td><td>ISO开发环境（ISODE）网络应用</td></tr><tr><td>105</td><td>csnet-ns</td><td>邮箱名称服务器；也被CSO名称服务器使用</td></tr><tr><td>107</td><td>rtelnet</td><td>远程Telnet</td></tr><tr><td>109</td><td>pop2</td><td>邮局协议版本2</td></tr><tr><td>110</td><td>pop3</td><td>邮局协议版本3</td></tr><tr><td>111</td><td>sunrpc</td><td>用于远程命令执行的远程过程调用（RPC）协议，被网络文件系统（NFS）使用</td></tr><tr><td>113</td><td>auth</td><td>验证和身份识别协议</td></tr><tr><td>115</td><td>sftp</td><td>安全文件传输协议（SFTP）服务</td></tr><tr><td>117</td><td>uucp-path</td><td>Unix到Unix复制协议（UUCP）路径服务</td></tr><tr><td>119</td><td>nntp</td><td>用于USENET讨论系统的网络新闻传输协议（NNTP）</td></tr><tr><td>123</td><td>ntp</td><td>网络时间协议（NTP）</td></tr><tr><td>137</td><td>netbios-ns</td><td>在红帽企业Linux中被Samba使用的NETBIOS名称服务</td></tr><tr><td>138</td><td>netbios-dgm</td><td>在红帽企业Linux中被Samba使用的NETBIOS数据报服务</td></tr><tr><td>139</td><td>netbios-ssn</td><td>在红帽企业Linux中被Samba使用的NET BIOS会话服务</td></tr><tr><td>143</td><td>imap</td><td>互联网消息存取协议（IMAP）</td></tr><tr><td>161</td><td>snmp</td><td>简单网络管理协议（SNMP）</td></tr><tr><td>162</td><td>snmptrap</td><td>SNMP的陷阱</td></tr><tr><td>163</td><td>cmip-man</td><td>通用管理信息协议（CMIP）</td></tr><tr><td>164</td><td>cmip-agent</td><td>通用管理信息协议（CMIP）</td></tr><tr><td>174</td><td>mailq</td><td>MAILQ</td></tr><tr><td>177</td><td>xdmcp</td><td>X显示管理器控制协议</td></tr><tr><td>178</td><td>nextstep</td><td>NeXTStep窗口服务器</td></tr><tr><td>179</td><td>bgp</td><td>边界网络协议</td></tr><tr><td>191</td><td>prospero</td><td>Cliffod Neuman的Prospero服务</td></tr><tr><td>194</td><td>irc</td><td>互联网中继聊天（IRC）</td></tr><tr><td>199</td><td>smux</td><td>SNMP UNIX多路复用</td></tr><tr><td>201</td><td>at-rtmp</td><td>AppleTalk选路</td></tr><tr><td>202</td><td>at-nbp</td><td>AppleTalk名称绑定</td></tr><tr><td>204</td><td>at-echo</td><td>AppleTalk echo服务</td></tr><tr><td>206</td><td>at-zis</td><td>AppleTalk区块信息</td></tr><tr><td>209</td><td>qmtp</td><td>快速邮件传输协议（QMTP）</td></tr><tr><td>210</td><td>z39.50</td><td>NISO Z39.50数据库</td></tr><tr><td>213</td><td>ipx</td><td>互联网络分组交换协议（IPX），被Novell Netware环境常用的数据报协议</td></tr><tr><td>220</td><td>imap3</td><td>互联网消息存取协议版本3</td></tr><tr><td>245</td><td>link</td><td>LINK</td></tr><tr><td>347</td><td>fatserv</td><td>Fatmen服务器</td></tr><tr><td>363</td><td>rsvp_tunnel</td><td>RSVP隧道</td></tr><tr><td>369</td><td>rpc2portmap</td><td>Coda文件系统端口映射器</td></tr><tr><td>370</td><td>codaauth2</td><td>Coda文件系统验证服务</td></tr><tr><td>372</td><td>ulistproc</td><td>UNIX Listserv</td></tr><tr><td>389</td><td>ldap</td><td>轻型目录存取协议（LDAP）</td></tr><tr><td>427</td><td>svrloc</td><td>服务位置协议（SLP）</td></tr><tr><td>434</td><td>mobileip-agent</td><td>可移互联网协议（IP）代理</td></tr><tr><td>435</td><td>mobilip-mn</td><td>可移互联网协议（IP）管理器</td></tr><tr><td>443</td><td>https</td><td>安全超文本传输协议（HTTP）</td></tr><tr><td>444</td><td>snpp</td><td>小型网络分页协议</td></tr><tr><td>445</td><td>microsoft-ds</td><td>通过TCP/IP的服务器消息块（SMB）</td></tr><tr><td>464</td><td>kpasswd</td><td>Kerberos口令和钥匙改换服务</td></tr><tr><td>468</td><td>photuris</td><td>Photuris会话钥匙管理协议</td></tr><tr><td>487</td><td>saft</td><td>简单不对称文件传输（SAFT）协议</td></tr><tr><td>488</td><td>gss-http</td><td>用于HTTP的通用安全服务（GSS）</td></tr><tr><td>496</td><td>pim-rp-disc</td><td>用于协议独立的多址传播（PIM）服务的会合点发现（RP-DISC）</td></tr><tr><td>500</td><td>isakmp</td><td>互联网安全关联和钥匙管理协议（ISAKMP）</td></tr><tr><td>535</td><td>iiop</td><td>互联网内部对象请求代理协议（IIOP）</td></tr><tr><td>538</td><td>gdomap</td><td>GNUstep分布式对象映射器（GDOMAP）</td></tr><tr><td>546</td><td>dhcpv6-client</td><td>动态主机配置协议（DHCP）版本6客户</td></tr><tr><td>547</td><td>dhcpv6-server</td><td>动态主机配置协议（DHCP）版本6服务</td></tr><tr><td>554</td><td>rtsp</td><td>实时流播协议（RTSP）</td></tr><tr><td>563</td><td>nntps</td><td>通过安全套接字层的网络新闻传输协议（NNTPS）</td></tr><tr><td>565</td><td>whoami</td><td>whoami</td></tr><tr><td>587</td><td>submission</td><td>邮件消息提交代理（MSA）</td></tr><tr><td>610</td><td>npmp-local</td><td>网络外设管理协议（NPMP）本地/分布式排队系统（DQS）</td></tr><tr><td>611</td><td>npmp-gui</td><td>网络外设管理协议（NPMP）GUI/分布式排队系统（DQS）</td></tr><tr><td>612</td><td>hmmp-ind</td><td>HMMP指示/DQS</td></tr><tr><td>631</td><td>ipp</td><td>互联网打印协议（IPP）</td></tr><tr><td>636</td><td>ldaps</td><td>通过安全套接字层的轻型目录访问协议（LDAPS）</td></tr><tr><td>674</td><td>acap</td><td>应用程序配置存取协议（ACAP）</td></tr><tr><td>694</td><td>ha-cluster</td><td>用于带有高可用性的群集的心跳服务</td></tr><tr><td>749</td><td>kerberos-adm</td><td>Kerberos版本5（v5）的“kadmin”数据库管理</td></tr><tr><td>750</td><td>kerberos-iv</td><td>Kerberos版本4（v4）服务</td></tr><tr><td>765</td><td>webster</td><td>网络词典</td></tr><tr><td>767</td><td>phonebook</td><td>网络电话簿</td></tr><tr><td>873</td><td>rsync</td><td>rsync文件传输服务</td></tr><tr><td>992</td><td>telnets</td><td>通过安全套接字层的Telnet（TelnetS）</td></tr><tr><td>993</td><td>imaps</td><td>通过安全套接字层的互联网消息存取协议（IMAPS）</td></tr><tr><td>994</td><td>ircs</td><td>通过安全套接字层的互联网中继聊天（IRCS）</td></tr><tr><td>995</td><td>pop3s</td><td>通过安全套接字层的邮局协议版本3（POPS3）</td></tr></tbody></table></div></div><br/><div class="accordion-group"><div class="accordion-heading"><a class="list-group-item list-group-item-warning"data-toggle="collapse"href="#demo2"><span class="glyphicon"aria-hidden="true">No2.</span>UNIX特有的端口（以下端口是UNIX特有的，涉及了从电子邮件到验证不等的服务。在方括号内的名称（如[service]）是服务的守护进程名称或它的常用别名）</a></div><div id="demo2"class="in collapse"><table width="100%"cellspacing="0"cellpadding="0"class="table  table-bordered table-hover"><tbody><tr><th class="titcolor">端口号码/层</th><th class="titcolor">名称</th><th class="titcolor">注释</th></tr><tr><td>512/tcp</td><td>exec</td><td>用于对远程执行的进程进行验证</td></tr><tr><td>512/udp</td><td>biff[comsat]</td><td>异步邮件客户（biff）和服务（comsat）</td></tr><tr><td>513/tcp</td><td>login</td><td>远程登录（rlogin）</td></tr><tr><td>513/udp</td><td>who[whod]</td><td>登录的用户列表</td></tr><tr><td>514/tcp</td><td>shell[cmd]</td><td>不必登录的远程shell（rshell）和远程复制（rcp）</td></tr><tr><td>514/udp</td><td>syslog</td><td>UNIX系统日志服务</td></tr><tr><td>515</td><td>printer[spooler]</td><td>打印机（lpr）假脱机</td></tr><tr><td>517/udp</td><td>talk</td><td>远程对话服务和客户</td></tr><tr><td>518/udp</td><td>ntalk</td><td>网络交谈（ntalk），远程对话服务和客户</td></tr><tr><td>519</td><td>utime[unixtime]</td><td>UNIX时间协议（utime）</td></tr><tr><td>520/tcp</td><td>efs</td><td>扩展文件名服务器（EFS）</td></tr><tr><td>520/udp</td><td>router[route,routed]</td><td>选路信息协议（RIP）</td></tr><tr><td>521</td><td>ripng</td><td>用于互联网协议版本6（IPv6）的选路信息协议</td></tr><tr><td>525</td><td>timed[timeserver]</td><td>时间守护进程（timed）</td></tr><tr><td>526/tcp</td><td>tempo[newdate]</td><td>Tempo</td></tr><tr><td>530/tcp</td><td>courier[rpc]</td><td>Courier远程过程调用（RPC）协议</td></tr><tr><td>531/tcp</td><td>conference[chat]</td><td>互联网中继聊天</td></tr><tr><td>532</td><td>netnews</td><td>Netnews</td></tr><tr><td>533/udp</td><td>netwall</td><td>用于紧急广播的Netwall</td></tr><tr><td>540/tcp</td><td>uucp[uucpd]</td><td>Unix到Unix复制服务</td></tr><tr><td>543/tcp</td><td>klogin</td><td>Kerberos版本5（v5）远程登录</td></tr><tr><td>544/tcp</td><td>kshell</td><td>Kerberos版本5（v5）远程shell</td></tr><tr><td>548</td><td>afpovertcp</td><td>通过传输控制协议（TCP）的Appletalk文件编制协议（AFP）</td></tr><tr><td>556</td><td>remotefs[rfs_server,rfs]</td><td>Brunhoff的远程文件系统（RFS）</td></tr></tbody></table></div></div><br/><div class="accordion-group"><div class="accordion-heading"><a class="list-group-item list-group-item-success"data-toggle="collapse"href="#demo3"><span class="glyphicon"aria-hidden="true">No3.</span>注册的端口（列举了由网络和软件社区向IANA提交的要在端口号码列表中正式注册的端口）</a></div><div id="demo3"class="in collapse"><table width="100%"cellspacing="0"cellpadding="0"class="table table-bordered table-hover"><tbody><tr><th class="titcolor">端口号码/层</th><th class="titcolor">名称</th><th class="titcolor">注释</th></tr><tr><td>1080</td><td>socks</td><td>SOCKS网络应用程序代理服务</td></tr><tr><td>1236</td><td>bvcontrol[rmtcfg]</td><td>Garcilis Packeten远程配置服务器</td></tr><tr><td>1300</td><td>h323hostcallsc</td><td>H.323电话会议主机电话安全</td></tr><tr><td>1433</td><td>ms-sql-s</td><td>Microsoft SQL服务器</td></tr><tr><td>1434</td><td>ms-sql-m</td><td>Microsoft SQL监视器</td></tr><tr><td>1494</td><td>ica</td><td>Citrix ICA客户</td></tr><tr><td>1512</td><td>wins</td><td>Microsoft Windows互联网名称服务器</td></tr><tr><td>1524</td><td>ingreslock</td><td>Ingres数据库管理系统（DBMS）锁定服务</td></tr><tr><td>1525</td><td>prospero-np</td><td>无特权的Prospero</td></tr><tr><td>1645</td><td>datametrics[old-radius]</td><td>Datametrics/从前的radius项目</td></tr><tr><td>1646</td><td>sa-msg-port[oldradacct]</td><td>sa-msg-port/从前的radacct项目</td></tr><tr><td>1649</td><td>kermit</td><td>Kermit文件传输和管理服务</td></tr><tr><td>1701</td><td>l2tp[l2f]</td><td>第2层隧道服务（LT2P）/第2层转发（L2F）</td></tr><tr><td>1718</td><td>h323gatedisc</td><td>H.323电讯守门装置发现机制</td></tr><tr><td>1719</td><td>h323gatestat</td><td>H.323电讯守门装置状态</td></tr><tr><td>1720</td><td>h323hostcall</td><td>H.323电讯主持电话设置</td></tr><tr><td>1758</td><td>tftp-mcast</td><td>小文件FTP组播</td></tr><tr><td>1759</td><td>mtftp</td><td>组播小文件FTP（MTFTP）</td></tr><tr><td>1789</td><td>hello</td><td>Hello路由器通信端口</td></tr><tr><td>1812</td><td>radius</td><td>Radius拨号验证和记帐服务</td></tr><tr><td>1813</td><td>radius-acct</td><td>Radius记帐</td></tr><tr><td>1911</td><td>mtp</td><td>Starlight网络多媒体传输协议（MTP）</td></tr><tr><td>1985</td><td>hsrp</td><td>Cisco热备用路由器协议</td></tr><tr><td>1986</td><td>licensedaemon</td><td>Cisco许可管理守护进程</td></tr><tr><td>1997</td><td>gdp-port</td><td>Cisco网关发现协议（GDP）</td></tr><tr><td>2049</td><td>nfs[nfsd]</td><td>网络文件系统（NFS）</td></tr><tr><td>2102</td><td>zephyr-srv</td><td>Zephyr通知传输和发送服务器</td></tr><tr><td>2103</td><td>zephyr-clt</td><td>Zephyr serv-hm连接</td></tr><tr><td>2104</td><td>zephyr-hm</td><td>Zephyr主机管理器</td></tr><tr><td>2401</td><td>cvspserver</td><td>并行版本系统（CVS）客户/服务器操作</td></tr><tr><td>2430/tcp</td><td>venus</td><td>用于Coda文件系统（codacon端口）的Venus缓存管理器</td></tr><tr><td>2430/udp</td><td>venus</td><td>用于Coda文件系统（callback/wbc interface界面）的Venus缓存管理器</td></tr><tr><td>2431/tcp</td><td>venus-se</td><td>Venus传输控制协议（TCP）的副作用</td></tr><tr><td>2431/udp</td><td>venus-se</td><td>Venus用户数据报协议（UDP）的副作用</td></tr><tr><td>2432/udp</td><td>codasrv</td><td>Coda文件系统服务器端口</td></tr><tr><td>2433/tcp</td><td>codasrv-se</td><td>Coda文件系统TCP副作用</td></tr><tr><td>2433/udp</td><td>codasrv-se</td><td>Coda文件系统UDP SFTP副作用</td></tr><tr><td>2600</td><td>hpstgmgr[zebrasrv]</td><td>HPSTGMGR；Zebra选路</td></tr><tr><td>2601</td><td>discp-client[zebra]</td><td>discp客户；Zebra集成的shell</td></tr><tr><td>2602</td><td>discp-server[ripd]</td><td>discp服务器；选路信息协议守护进程（ripd）</td></tr><tr><td>2603</td><td>servicemeter[ripngd]</td><td>服务计量；用于IPv6的RIP守护进程</td></tr><tr><td>2604</td><td>nsc-ccs[ospfd]</td><td>NSC CCS；开放式短路径优先守护进程（ospfd）</td></tr><tr><td>2605</td><td>nsc-posa</td><td>NSC POSA；边界网络协议守护进程（bgpd）</td></tr><tr><td>2606</td><td>netmon[ospf6d]</td><td>Dell Netmon；用于IPv6的OSPF守护进程（ospf6d）</td></tr><tr><td>2809</td><td>corbaloc</td><td>公共对象请求代理体系（CORBA）命名服务定位器</td></tr><tr><td>3130</td><td>icpv2</td><td>互联网缓存协议版本2（v2）；被Squid代理缓存服务器使用</td></tr><tr><td>3306</td><td>mysql</td><td>MySQL数据库服务</td></tr><tr><td>3346</td><td>trnsprntproxy</td><td>Trnsprnt代理</td></tr><tr><td>4011</td><td>pxe</td><td>执行前环境（PXE）服务</td></tr><tr><td>4321</td><td>rwhois</td><td>远程Whois（rwhois）服务</td></tr><tr><td>4444</td><td>krb524</td><td>Kerberos版本5（v5）到版本4（v4）门票转换器</td></tr><tr><td>5002</td><td>rfe</td><td>无射频以太网（RFE）音频广播系统</td></tr><tr><td>5308</td><td>cfengine</td><td>配置引擎（Cfengine）</td></tr><tr><td>5999</td><td>cvsup[CVSup]</td><td>CVSup文件传输和更新工具</td></tr><tr><td>6000</td><td>x11[X]</td><td>X窗口系统服务</td></tr><tr><td>7000</td><td>afs3-fileserver</td><td>Andrew文件系统（AFS）文件服务器</td></tr><tr><td>7001</td><td>afs3-callback</td><td>用于给缓存管理器回电的AFS端口</td></tr><tr><td>7002</td><td>afs3-prserver</td><td>AFS用户和组群数据库</td></tr><tr><td>7003</td><td>afs3-vlserver</td><td>AFS文件卷位置数据库</td></tr><tr><td>7004</td><td>afs3-kaserver</td><td>AFS Kerberos验证服务</td></tr><tr><td>7005</td><td>afs3-volser</td><td>AFS文件卷管理服务器</td></tr><tr><td>7006</td><td>afs3-errors</td><td>AFS错误解释服务</td></tr><tr><td>7007</td><td>afs3-bos</td><td>AFS基本监查进程</td></tr><tr><td>7008</td><td>afs3-update</td><td>AFS服务器到服务器更新器</td></tr><tr><td>7009</td><td>afs3-rmtsys</td><td>AFS远程缓存管理器服务</td></tr><tr><td>9876</td><td>sd</td><td>会话指引器</td></tr><tr><td>10080</td><td>amanda</td><td>高级Maryland自动网络磁盘归档器（Amanda）备份服务</td></tr><tr><td>11371</td><td>pgpkeyserver</td><td>良好隐私（PGP）/GNU隐私卫士（GPG）公钥服务器</td></tr><tr><td>11720</td><td>h323callsigalt</td><td>H.323调用信号交替</td></tr><tr><td>13720</td><td>bprd</td><td>Veritas NetBackup请求守护进程（bprd）</td></tr><tr><td>13721</td><td>bpdbm</td><td>Veritas NetBackup数据库管理器（bpdbm）</td></tr><tr><td>13722</td><td>bpjava-msvc</td><td>Veritas NetBackup Java/Microsoft Visual C++(MSVC)协议</td></tr><tr><td>13724</td><td>vnetd</td><td>Veritas网络工具</td></tr><tr><td>13782</td><td>bpcd</td><td>Vertias NetBackup</td></tr><tr><td>13783</td><td>vopied</td><td>Veritas VOPIED协议</td></tr><tr><td>22273</td><td>wnn6[wnn4]</td><td>假名/汉字转换系统</td></tr><tr><td>26000</td><td>quake</td><td>Quake（以及相关的）多人游戏服务器</td></tr><tr><td>26208</td><td>wnn6-ds</td><td>&nbsp;</td></tr><tr><td>33434</td><td>traceroute</td><td>Traceroute网络跟踪工具</td></tr><tr><td colspan="3">注:<br>/etc/services中的注释如下：端口1236被注册为“bvcontrol”，但是它也被Gracilis Packeten远程配置服务器使用。正式名称被列为主要名称，未注册的名称被列为别名。<br>在/etc/services中的注释：端口2600到2606被zebra软件包未经注册而使用。主要名称是被注册的名称，被zebra使用的未注册名称被列为别名。<br>/etc/services文件中的注释：该端口被注册为wnn6，但是还在FreeWnn软件包中使用了未注册的“wnn4”。<br></td></tr></tbody></table></div></div><br/><div class="accordion-group"><div class="accordion-heading"><a class="list-group-item list-group-item-success"data-toggle="collapse"href="#demo4"><span class="glyphicon"aria-hidden="true">No4.</span>数据报传递协议端口（显示了一个和数据报传递协议（DDP）有关的端口列表。DDP在AppleTalk网络上被使用）</a></div><div id="demo4"class="in collapse"><table width="100%"cellspacing="0"cellpadding="0"class="table table-bordered table-hover"><tbody><tr><th class="titcolor">端口号码/层</th><th class="titcolor">名称</th><th class="titcolor">注释</th></tr><tr><td>1/ddp</td><td>rtmp</td><td>路由表管理协议</td></tr><tr><td>2/ddp</td><td>nbp</td><td>名称绑定协议</td></tr><tr><td>4/ddp</td><td>echo</td><td>AppleTalk Echo协议</td></tr><tr><td>6/ddp</td><td>zip</td><td>区块信息协议</td></tr></tbody></table></div></div><br/><div class="accordion-group"><div class="accordion-heading"><a class="list-group-item list-group-item-success"data-toggle="collapse"href="#demo5"><span class="glyphicon"aria-hidden="true">No5.</span>Kerberos（工程Athena/MIT）端口（和Kerberos网络验证协议相关的端口列表在标记的地方,v5代表Kerberos版本5协议,这些端口没有在IANA注册）</a></div><div id="demo5"class="in collapse"><table width="100%"cellspacing="0"cellpadding="0"class="table table-bordered table-hover"><tbody><tr><th class="titcolor">端口号码/层</th><th class="titcolor">名称</th><th class="titcolor">注释</th></tr><tr><td>751</td><td>kerberos_master</td><td>Kerberos验证</td></tr><tr><td>752</td><td>passwd_server</td><td>Kerberos口令（kpasswd）服务器</td></tr><tr><td>754</td><td>krb5_prop</td><td>Kerberos v5从属传播</td></tr><tr><td>760</td><td>krbupdate[kreg]</td><td>Kerberos注册</td></tr><tr><td>1109</td><td>kpop</td><td>Kerberos邮局协议（KPOP）</td></tr><tr><td>2053</td><td>knetd</td><td>Kerberos多路分用器</td></tr><tr><td>2105</td><td>eklogin</td><td>Kerberos v5加密的远程登录（rlogin）</td></tr></tbody></table></div></div><br/><div class="accordion-group"><div class="accordion-heading"><a class="list-group-item list-group-item-success"data-toggle="collapse"href="#demo6"><span class="glyphicon"aria-hidden="true">No6.</span>未注册的端口（这些端口可能被安装在你红帽企业Linux系统上的服务或协议使用,或者它们是在红帽企业Linux和运行其它操作系统的机器通信所必需的端口）</a></div><div id="demo6"class="in collapse"><table width="100%"cellspacing="0"cellpadding="0"class="table table-bordered table-hover"><tbody><tr><th class="titcolor">端口号码/层</th><th class="titcolor">名称</th><th class="titcolor">注释</th></tr><tr><td>15/tcp</td><td>netstat</td><td>网络状态（netstat）</td></tr><tr><td>98/tcp</td><td>linuxconf</td><td>Linuxconf Linux管理工具</td></tr><tr><td>106</td><td>poppassd</td><td>邮局协议口令改变守护进程（POPPASSD）</td></tr><tr><td>465/tcp</td><td>smtps</td><td>通过安全套接字层的简单邮件传输协议（SMTPS）</td></tr><tr><td>616/tcp</td><td>gii</td><td>使用网关的（选路守护进程）互动界面</td></tr><tr><td>808</td><td>omirr[omirrd]</td><td>联机镜像（Omirr）文件镜像服务</td></tr><tr><td>871/tcp</td><td>supfileserv</td><td>软件升级协议（SUP）服务器</td></tr><tr><td>901/tcp</td><td>swat</td><td>Samba万维网管理工具（SWAT）</td></tr><tr><td>953</td><td>rndc</td><td>Berkeley互联网名称域版本9（BIND 9）远程名称守护进程配置工具</td></tr><tr><td>1127</td><td>sufiledbg</td><td>软件升级协议（SUP）调试</td></tr><tr><td>1178/tcp</td><td>skkserv</td><td>简单假名到汉字（SKK）日文输入服务器</td></tr><tr><td>1313/tcp</td><td>xtel</td><td>法国Minitel文本信息系统</td></tr><tr><td>1529/tcp</td><td>support[prmsd,gnatsd]</td><td>GNATS错误跟踪系统</td></tr><tr><td>2003/tcp</td><td>cfinger</td><td>GNU Finger服务</td></tr><tr><td>2150</td><td>ninstall</td><td>网络安装服务</td></tr><tr><td>2988</td><td>afbackup</td><td>afbackup客户-服务器备份系统</td></tr><tr><td>3128/tcp</td><td>squid</td><td>Squid万维网代理缓存</td></tr><tr><td>3455</td><td>prsvp</td><td>RSVP端口</td></tr><tr><td>5432</td><td>postgres</td><td>PostgreSQL数据库</td></tr><tr><td>4557/tcp</td><td>fax</td><td>FAX传输服务（旧服务）</td></tr><tr><td>4559/tcp</td><td>hylafax</td><td>HylaFAX客户-服务器协议（新服务）</td></tr><tr><td>5232</td><td>sgi-dgl</td><td>SGI分布式图形库</td></tr><tr><td>5354</td><td>noclog</td><td>NOCOL网络操作中心记录守护进程（noclogd）</td></tr><tr><td>5355</td><td>hostmon</td><td>NOCOL网络操作中心主机监视</td></tr><tr><td>5680/tcp</td><td>canna</td><td>Canna日文字符输入界面</td></tr><tr><td>6010/tcp</td><td>x11-ssh-offset</td><td>安全Shell（SSH）X11转发偏移</td></tr><tr><td>6667</td><td>ircd</td><td>互联网中继聊天守护进程（ircd）</td></tr><tr><td>7100/tcp</td><td>xfs</td><td>X字体服务器（XFS）</td></tr><tr><td>7666/tcp</td><td>tircproxy</td><td>Tircproxy IRC代理服务</td></tr><tr><td>8008</td><td>http-alt</td><td>超文本传输协议（HTTP）的另一选择</td></tr><tr><td>8080</td><td>webcache</td><td>万维网（WWW）缓存服务</td></tr><tr><td>8081</td><td>tproxy</td><td>透明代理</td></tr><tr><td>9100/tcp</td><td>jetdirect[laserjet,hplj]</td><td>Hewlett-Packard(HP)JetDirect网络打印服务</td></tr><tr><td>9359</td><td>mandelspawn[mandelbrot]</td><td>用于X窗口系统的并行Mandelbrot生成程序</td></tr><tr><td>10081</td><td>kamanda</td><td>使用Kerberos的Amanda备份服务</td></tr><tr><td>10082/tcp</td><td>amandaidx</td><td>Amanda备份服务</td></tr><tr><td>10083/tcp</td><td>amidxtape</td><td>Amanda备份服务</td></tr><tr><td>20011</td><td>isdnlog</td><td>综合业务数字网（ISDN）登录系统</td></tr><tr><td>20012</td><td>vboxd</td><td>ISDN音箱守护进程（vboxd）</td></tr><tr><td>22305/tcp</td><td>wnn4_Kr</td><td>kWnn韩文输入系统</td></tr><tr><td>22289/tcp</td><td>wnn4_Cn</td><td>cWnn中文输入系统</td></tr><tr><td>22321/tcp</td><td>wnn4_Tw</td><td>tWnn中文输入系统（台湾）</td></tr><tr><td>24554</td><td>binkp</td><td>Binkley TCP/IP Fidonet邮寄程序守护进程</td></tr><tr><td>27374</td><td>asp</td><td>地址搜索协议</td></tr><tr><td>60177</td><td>tfido</td><td>Ifmail FidoNet兼容邮寄服务</td></tr><tr><td>60179</td><td>fido</td><td>FidoNet电子邮件和新闻网络</td></tr></tbody></table>	</div></div></div></div> <div class="accordion-group"> </div></div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><div class="container" id="foot-history">
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