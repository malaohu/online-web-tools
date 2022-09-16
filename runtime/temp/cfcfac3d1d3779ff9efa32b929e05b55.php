<?php /*a:5:{s:77:"/data/wwwroot/tool.ruyo.net/application/index/view/index/androidmanifest.html";i:1633603258;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.androidmanifest.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.androidmanifest.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.androidmanifest.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/useragent/">常用User-Agent</a></li><li role="presentation"><a href="/contenttype/">Content-Type对照表</a></li><li role="presentation"><a href="/requestmethod/">Request请求大全</a></li><li role="presentation"><a href="/httpheader/">HTTP请求头大全</a></li><li role="presentation"><a href="/pagecode/"> HTTP状态码</a></li><li role="presentation"><a href="/asciicode/">ASCII对照表</a></li><li role="presentation" class="active"><a href="/androidmanifest/"> Android Manifest权限大全</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/htmlescapechar/">HTML特殊字符转义</a></li><li role="presentation"><a href="/ports/">常见端口大全</a></li><li role="presentation"><a href="/bootstrapicon/">Bootstrap字体图标</a></li><li role="presentation"><a href="/linuxcmd/">Linux常用命令大全</a></li></ul></li></ul>    <div class="alert alert-success alert-dismissible" role="alert">Android Manifest 权限描述大全对照表，可以方便andriod开发者查看安卓权限描述功能 <code>小技巧： Ctrl+F 快速查找</code></div>
<div class="form-group">
<div class="table-responsive"><table class="table table-striped table-bordered"><tbody>
<tr><th style="width:25%;" class="titcolor">权限</th><th style="width:15%;" class="titcolor">名称</th><th style="width:60%;" class="titcolor">描述</th></tr>
<tr><td>android.permission.ACCESS_CHECKIN_PROPERTIES</td><td>访问登记属性</td><td>读取或写入登记check-in数据库属性表的权限</td></tr>
<tr><td>android.permission.ACCESS_COARSE_LOCATION</td><td>获取错略位置</td><td>通过WiFi或移动基站的方式获取用户错略的经纬度信息,定位精度大概误差在30~1500米</td></tr>
<tr><td>android.permission.ACCESS_FINE_LOCATION</td><td>获取精确位置</td><td>通过GPS芯片接收卫星的定位信息,定位精度达10米以内</td></tr>
<tr><td>android.permission.ACCESS_LOCATION_EXTRA_COMMANDS</td><td>访问定位额外命令</td><td>允许程序访问额外的定位提供者指令</td></tr>
<tr><td>android.permission.ACCESS_MOCK_LOCATION</td><td>获取模拟定位信息</td><td>获取模拟定位信息,一般用于帮助开发者调试应用</td></tr>
<tr><td>android.permission.ACCESS_NETWORK_STATE</td><td>获取网络状态</td><td>获取网络信息状态,如当前的网络连接是否有效</td></tr>
<tr><td>android.permission.ACCESS_SURFACE_FLINGER</td><td>访问Surface Flinger</td><td>Android平台上底层的图形显示支持,一般用于游戏或照相机预览界面和底层模式的屏幕截图</td></tr>
<tr><td>android.permission.ACCESS_WIFI_STATE</td><td>获取WiFi状态</td><td>获取当前WiFi接入的状态以及WLAN热点的信息</td></tr>
<tr><td>android.permission.ACCOUNT_MANAGER</td><td>账户管理</td><td>获取账户验证信息,主要为GMail账户信息,只有系统级进程才能访问的权限</td></tr>
<tr><td>android.permission.AUTHENTICATE_ACCOUNTS</td><td>验证账户</td><td>允许一个程序通过账户验证方式访问账户管理ACCOUNT_MANAGER相关信息</td></tr>
<tr><td>android.permission.BATTERY_STATS</td><td>电量统计</td><td>获取电池电量统计信息</td></tr>
<tr><td>android.permission.BIND_APPWIDGET</td><td>绑定小插件</td><td>允许一个程序告诉appWidget服务需要访问小插件的数据库,只有非常少的应用才用到此权限</td></tr>
<tr><td>android.permission.BIND_DEVICE_ADMIN</td><td>绑定设备管理</td><td>请求系统管理员接收者receiver,只有系统才能使用</td></tr>
<tr><td>android.permission.BIND_INPUT_METHOD</td><td>绑定输入法</td><td>请求InputMethodService服务,只有系统才能使用</td></tr>
<tr><td>android.permission.BIND_REMOTEVIEWS</td><td>绑定RemoteView</td><td>必须通过RemoteViewsService服务来请求,只有系统才能用</td></tr>
<tr><td>android.permission.BIND_WALLPAPER</td><td>绑定壁纸</td><td>必须通过WallpaperService服务来请求,只有系统才能用</td></tr>
<tr><td>android.permission.BLUETOOTH</td><td>使用蓝牙</td><td>允许程序连接配对过的蓝牙设备</td></tr>
<tr><td>android.permission.BLUETOOTH_ADMIN</td><td>蓝牙管理</td><td>允许程序进行发现和配对新的蓝牙设备</td></tr>
<tr><td>android.permission.BRICK</td><td>变成砖头</td><td>能够禁用手机,非常危险,顾名思义就是让手机变成砖头</td></tr>
<tr><td>android.permission.BROADCAST_PACKAGE_REMOVED</td><td>应用删除时广播</td><td>当一个应用在删除时触发一个广播</td></tr>
<tr><td>android.permission.BROADCAST_SMS</td><td>收到短信时广播</td><td>当收到短信时触发一个广播</td></tr>
<tr><td>android.permission.BROADCAST_STICKY</td><td>连续广播</td><td>允许一个程序收到广播后快速收到下一个广播</td></tr>
<tr><td>android.permission.BROADCAST_WAP_PUSH</td><td>WAP PUSH广播</td><td>WAP PUSH服务收到后触发一个广播</td></tr>
<tr><td>android.permission.CALL_PHONE</td><td>拨打电话</td><td>允许程序从非系统拨号器里输入电话号码</td></tr>
<tr><td>android.permission.CALL_PRIVILEGED</td><td>通话权限</td><td>允许程序拨打电话,替换系统的拨号器界面</td></tr>
<tr><td>android.permission.CAMERA</td><td>拍照权限</td><td>允许访问摄像头进行拍照</td></tr>
<tr><td>android.permission.CHANGE_COMPONENT_ENABLED_STATE</td><td>改变组件状态</td><td>改变组件是否启用状态</td></tr>
<tr><td>android.permission.CHANGE_CONFIGURATION</td><td>改变配置</td><td>允许当前应用改变配置,如定位</td></tr>
<tr><td>android.permission.CHANGE_NETWORK_STATE</td><td>改变网络状态</td><td>改变网络状态如是否能联网</td></tr>
<tr><td>android.permission.CHANGE_WIFI_MULTICAST_STATE</td><td>改变WiFi多播状态</td><td>改变WiFi多播状态</td></tr>
<tr><td>android.permission.CHANGE_WIFI_STATE</td><td>改变WiFi状态</td><td>改变WiFi状态</td></tr>
<tr><td>android.permission.CLEAR_APP_CACHE</td><td>清除应用缓存</td><td>清除应用缓存</td></tr>
<tr><td>android.permission.CLEAR_APP_USER_DATA</td><td>清除用户数据</td><td>清除应用的用户数据</td></tr>
<tr><td>android.permission.CWJ_GROUP</td><td>底层访问权限</td><td>允许CWJ账户组访问底层信息</td></tr>
<tr><td>android.permission.CELL_PHONE_MASTER_EX</td><td>手机优化大师扩展权限</td><td>手机优化大师扩展权限</td></tr>
<tr><td>android.permission.CONTROL_LOCATION_UPDATES</td><td>控制定位更新</td><td>允许获得移动网络定位信息改变</td></tr>
<tr><td>android.permission.DELETE_CACHE_FILES</td><td>删除缓存文件</td><td>允许应用删除缓存文件</td></tr>
<tr><td>android.permission.DELETE_PACKAGES</td><td>删除应用</td><td>允许程序删除应用</td></tr>
<tr><td>android.permission.DEVICE_POWER</td><td>电源管理</td><td>允许访问底层电源管理</td></tr>
<tr><td>android.permission.DIAGNOSTIC</td><td>应用诊断</td><td>允许程序到RW到诊断资源</td></tr>
<tr><td>android.permission.DISABLE_KEYGUARD</td><td>禁用键盘锁</td><td>允许程序禁用键盘锁</td></tr>
<tr><td>android.permission.DUMP</td><td>转存系统信息</td><td>允许程序获取系统dump信息从系统服务</td></tr>
<tr><td>android.permission.EXPAND_STATUS_BAR</td><td>状态栏控制</td><td>允许程序扩展或收缩状态栏</td></tr>
<tr><td>android.permission.FACTORY_TEST</td><td>工厂测试模式</td><td>允许程序运行工厂测试模式</td></tr>
<tr><td>android.permission.FLASHLIGHT</td><td>使用闪光灯</td><td>允许访问闪光灯</td></tr>
<tr><td>android.permission.FORCE_BACK</td><td>强制后退</td><td>允许程序强制使用back后退按键,无论Activity是否在顶层</td></tr>
<tr><td>android.permission.GET_ACCOUNTS</td><td>访问账户Gmail列表</td><td>访问GMail账户列表</td></tr>
<tr><td>android.permission.GET_PACKAGE_SIZE</td><td>获取应用大小</td><td>获取应用的文件大小</td></tr>
<tr><td>android.permission.GET_TASKS</td><td>获取任务信息</td><td>允许程序获取当前或最近运行的应用</td></tr>
<tr><td>android.permission.GLOBAL_SEARCH</td><td>允许全局搜索</td><td>允许程序使用全局搜索功能</td></tr>
<tr><td>android.permission.HARDWARE_TEST</td><td>硬件测试</td><td>访问硬件辅助设备,用于硬件测试</td></tr>
<tr><td>android.permission.INJECT_EVENTS</td><td>注射事件</td><td>允许访问本程序的底层事件,获取按键、轨迹球的事件流</td></tr>
<tr><td>android.permission.INSTALL_LOCATION_PROVIDER</td><td>安装定位提供</td><td>安装定位提供</td></tr>
<tr><td>android.permission.INSTALL_PACKAGES</td><td>安装应用程序</td><td>允许程序安装应用</td></tr>
<tr><td>android.permission.INTERNAL_SYSTEM_WINDOW</td><td>内部系统窗口</td><td>允许程序打开内部窗口,不对第三方应用程序开放此权限</td></tr>
<tr><td>android.permission.INTERNET</td><td>访问网络</td><td>访问网络连接,可能产生GPRS流量</td></tr>
<tr><td>android.permission.KILL_BACKGROUND_PROCESSES</td><td>结束后台进程</td><td>允许程序调用killBackgroundProcesses(String).方法结束后台进程</td></tr>
<tr><td>android.permission.MANAGE_ACCOUNTS</td><td>管理账户</td><td>允许程序管理AccountManager中的账户列表</td></tr>
<tr><td>android.permission.MANAGE_APP_TOKENS</td><td>管理程序引用</td><td>管理创建、摧毁、Z轴顺序,仅用于系统</td></tr>
<tr><td>android.permission.MTWEAK_USER</td><td>高级权限</td><td>允许mTweak用户访问高级系统权限</td></tr>
<tr><td>android.permission.MTWEAK_FORUM</td><td>社区权限</td><td>允许使用mTweak社区权限</td></tr>
<tr><td>android.permission.MASTER_CLEAR</td><td>软格式化</td><td>允许程序执行软格式化,删除系统配置信息</td></tr>
<tr><td>android.permission.MODIFY_AUDIO_SETTINGS</td><td>修改声音设置</td><td>修改声音设置信息</td></tr>
<tr><td>android.permission.MODIFY_PHONE_STATE</td><td>修改电话状态</td><td>修改电话状态,如飞行模式,但不包含替换系统拨号器界面</td></tr>
<tr><td>android.permission.MOUNT_FORMAT_FILESYSTEMS</td><td>格式化文件系统</td><td>格式化可移动文件系统,比如格式化清空SD卡</td></tr>
<tr><td>android.permission.MOUNT_UNMOUNT_FILESYSTEMS</td><td>挂载文件系统</td><td>挂载、反挂载外部文件系统</td></tr>
<tr><td>android.permission.NFC</td><td>允许NFC通讯</td><td>允许程序执行NFC近距离通讯操作,用于移动支持</td></tr>
<tr><td>android.permission.PERSISTENT_ACTIVITY</td><td>永久Activity</td><td>创建一个永久的Activity,该功能标记为将来将被移除</td></tr>
<tr><td>android.permission.PROCESS_OUTGOING_CALLS</td><td>处理拨出电话</td><td>允许程序监视,修改或放弃播出电话</td></tr>
<tr><td>android.permission.READ_CALENDAR</td><td>读取日程提醒</td><td>允许程序读取用户的日程信息</td></tr>
<tr><td>android.permission.READ_CONTACTS</td><td>读取联系人</td><td>允许应用访问联系人通讯录信息</td></tr>
<tr><td>android.permission.READ_FRAME_BUFFER</td><td>屏幕截图</td><td>读取帧缓存用于屏幕截图</td></tr>
<tr><td>com.android.browser.permission.READ_HISTORY_BOOKMARKS</td><td>读取收藏夹和历史记录</td><td>读取浏览器收藏夹和历史记录</td></tr>
<tr><td>android.permission.READ_INPUT_STATE</td><td>读取输入状态</td><td>读取当前键的输入状态,仅用于系统</td></tr>
<tr><td>android.permission.READ_LOGS</td><td>读取系统日志</td><td>读取系统底层日志</td></tr>
<tr><td>android.permission.READ_PHONE_STATE</td><td>读取电话状态</td><td>访问电话状态</td></tr>
<tr><td>android.permission.READ_SMS</td><td>读取短信内容</td><td>读取短信内容</td></tr>
<tr><td>android.permission.READ_SYNC_SETTINGS</td><td>读取同步设置</td><td>读取同步设置,读取Google在线同步设置</td></tr>
<tr><td>android.permission.READ_SYNC_STATS</td><td>读取同步状态</td><td>读取同步状态,获得Google在线同步状态</td></tr>
<tr><td>android.permission.REBOOT</td><td>重启设备</td><td>允许程序重新启动设备</td></tr>
<tr><td>android.permission.RECEIVE_BOOT_COMPLETED</td><td>开机自动允许</td><td>允许程序开机自动运行</td></tr>
<tr><td>android.permission.RECEIVE_MMS</td><td>接收彩信</td><td>接收彩信</td></tr>
<tr><td>android.permission.RECEIVE_SMS</td><td>接收短信</td><td>接收短信</td></tr>
<tr><td>android.permission.RECEIVE_WAP_PUSH</td><td>接收Wap Push</td><td>接收WAP PUSH信息</td></tr>
<tr><td>android.permission.RECORD_AUDIO</td><td>录音</td><td>录制声音通过手机或耳机的麦克</td></tr>
<tr><td>android.permission.REORDER_TASKS</td><td>排序系统任务</td><td>重新排序系统Z轴运行中的任务</td></tr>
<tr><td>android.permission.RESTART_PACKAGES</td><td>结束系统任务</td><td>结束任务通过restartPackage(String)方法,该方式将在外来放弃</td></tr>
<tr><td>android.permission.SEND_SMS</td><td>发送短信</td><td>发送短信</td></tr>
<tr><td>android.permission.SET_ACTIVITY_WATCHER</td><td>设置Activity观察其</td><td>设置Activity观察器一般用于monkey测试</td></tr>
<tr><td>com.android.alarm.permission.SET_ALARM</td><td>设置闹铃提醒</td><td>设置闹铃提醒</td></tr>
<tr><td>android.permission.SET_ALWAYS_FINISH</td><td>设置总是退出</td><td>设置程序在后台是否总是退出</td></tr>
<tr><td>android.permission.SET_ANIMATION_SCALE</td><td>设置动画缩放</td><td>设置全局动画缩放</td></tr>
<tr><td>android.permission.SET_DEBUG_APP</td><td>设置调试程序</td><td>设置调试程序,一般用于开发</td></tr>
<tr><td>android.permission.SET_ORIENTATION</td><td>设置屏幕方向</td><td>设置屏幕方向为横屏或标准方式显示,不用于普通应用</td></tr>
<tr><td>android.permission.SET_PREFERRED_APPLICATIONS</td><td>设置应用参数</td><td>设置应用的参数,已不再工作具体查看addPackageToPreferred(String)介绍</td></tr>
<tr><td>android.permission.SET_PROCESS_LIMIT</td><td>设置进程限制</td><td>允许程序设置最大的进程数量的限制</td></tr>
<tr><td>android.permission.SET_TIME</td><td>设置系统时间</td><td>设置系统时间</td></tr>
<tr><td>android.permission.SET_TIME_ZONE</td><td>设置系统时区</td><td>设置系统时区</td></tr>
<tr><td>android.permission.SET_WALLPAPER</td><td>设置桌面壁纸</td><td>设置桌面壁纸</td></tr>
<tr><td>android.permission.SET_WALLPAPER_HINTS</td><td>设置壁纸建议</td><td>设置壁纸建议</td></tr>
<tr><td>android.permission.SIGNAL_PERSISTENT_PROCESSES</td><td>发送永久进程信号</td><td>发送一个永久的进程信号</td></tr>
<tr><td>android.permission.STATUS_BAR</td><td>状态栏控制</td><td>允许程序打开、关闭、禁用状态栏</td></tr>
<tr><td>android.permission.SUBSCRIBED_FEEDS_READ</td><td>访问订阅内容</td><td>访问订阅信息的数据库</td></tr>
<tr><td>android.permission.SUBSCRIBED_FEEDS_WRITE</td><td>写入订阅内容</td><td>写入或修改订阅内容的数据库</td></tr>
<tr><td>android.permission.SYSTEM_ALERT_WINDOW</td><td>显示系统窗口</td><td>显示系统窗口</td></tr>
<tr><td>android.permission.UPDATE_DEVICE_STATS</td><td>更新设备状态</td><td>更新设备状态</td></tr>
<tr><td>android.permission.USE_CREDENTIALS</td><td>使用证书</td><td>允许程序请求验证从AccountManager</td></tr>
<tr><td>android.permission.USE_SIP</td><td>使用SIP视频</td><td>允许程序使用SIP视频服务</td></tr>
<tr><td>android.permission.VIBRATE</td><td>使用振动</td><td>允许振动</td></tr>
<tr><td>android.permission.WAKE_LOCK</td><td>唤醒锁定</td><td>允许程序在手机屏幕关闭后后台进程仍然运行</td></tr>
<tr><td>android.permission.WRITE_APN_SETTINGS</td><td>写入GPRS接入点设置</td><td>写入网络GPRS接入点设置</td></tr>
<tr><td>android.permission.WRITE_CALENDAR</td><td>写入日程提醒</td><td>写入日程,但不可读取</td></tr>
<tr><td>android.permission.WRITE_CONTACTS</td><td>写入联系人</td><td>写入联系人,但不可读取</td></tr>
<tr><td>android.permission.WRITE_EXTERNAL_STORAGE</td><td>写入外部存储</td><td>允许程序写入外部存储,如SD卡上写文件</td></tr>
<tr><td>android.permission.WRITE_GSERVICES</td><td>写入Google地图数据</td><td>允许程序写入Google Map服务数据</td></tr>
<tr><td>com.android.browser.permission.WRITE_HISTORY_BOOKMARKS</td><td>写入收藏夹和历史记录</td><td>写入浏览器历史记录或收藏夹,但不可读取</td></tr>
<tr><td>android.permission.WRITE_SECURE_SETTINGS</td><td>读写系统敏感设置</td><td>允许程序读写系统安全敏感的设置项</td></tr>
<tr><td>android.permission.WRITE_SETTINGS</td><td>读写系统设置</td><td>允许读写系统设置项</td></tr>
<tr><td>android.permission.WRITE_SMS</td><td>编写短信</td><td>允许编写短信</td></tr>
</tbody></table></div></div></div></div>
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