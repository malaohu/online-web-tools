<?php /*a:5:{s:68:"/data/wwwroot/tool.ruyo.net/application/index/view/index/hexrgb.html";i:1633603258;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.hexrgb.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.hexrgb.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.hexrgb.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/editor/">Html在线编辑器</a></li><li role="presentation"><a href="/autoformat/"> 文章自动排版</a></li><li role="presentation"><a href="/caiji/"> 文章内容采集</a></li><li role="presentation"><a href="/jianfan/">简繁字体转换</a></li><li role="presentation"><a href="/pinyin/">汉字转为拼音</a></li><li role="presentation"><a href="/huoxingwen/">火星文转换器</a></li><li role="presentation" class="active"><a href="/hexrgb/"> RGB颜色在线转换</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/txtreplace/">文本内容替换</a></li><li role="presentation"><a href="/textdiff/"> 文本内容对比</a></li><li role="presentation"><a href="/txtcount/">在线统计字数工具</a></li><li role="presentation"><a href="/shupai/">文字竖排工具</a></li><li role="presentation"><a href="/textflip/">文字翻转工具</a></li><li role="presentation"><a href="/quchong/">内容去重工具</a></li><li role="presentation"><a href="/wenzitexiao/">文字特效工具</a></li><li role="presentation"><a href="/zipstringtext/">字符串文本压缩工具</a></li><li role="presentation"><a href="/camelcase/">驼峰与下划线互转</a></li><li role="presentation"><a href="/quanbaojiao/">全角半角转换</a></li></ul></li></ul><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>HEX16色转换为RGB格式,在线RGB三原色对照表（实现：HEX16色与RGB格式互转）<span class="red f12">（小贴士： Ctrl+F 快速查找）</span></div><div class="panel"><div class="row"><div class="col-md-4"><div class="input-group input1"><span class="input-group-addon">HEX</span><input type="text" class="form-control " id="hexInp" placeholder="请输入HEX值 如:#FFFFFF" aria-describedby="basic-addon1"></div></div><div class="col-md-1"><div style="float: center; line-height: 34px; width: 50px; padding-left: 5px;">转为</div></div><div class="col-md-4"><div class="input-group input1"><span class="input-group-addon">RGB</span><input type="text" class="form-control" id="outRgb" placeholder="" readonly="readonly" style="background: transparent;" aria-describedby="basic-addon1"></div></div><div class="col-md-2"><div style="float: left; margin-left: 10px;"><label class="checkbox-inline"><input type="checkbox" id="appendRgb"> 添加RGB前缀</label></div></div></div><br /><div class="row"><div class="col-md-4"><div class="input-group input1"><span class="input-group-addon">RGB</span><input type="text" class="form-control " id="rgbInp" placeholder="请输入RGB值 如:255,255,255" aria-describedby="basic-addon1"></div></div><div class="col-md-1"><div style="float: center; line-height: 34px; width: 50px; padding-left: 5px;">转为</div></div><div class="col-md-4"><div class="input-group input1"><span class="input-group-addon">HEX</span><input type="text" class="form-control" id="outHex" placeholder="" readonly="readonly" style="background: transparent;" aria-describedby="basic-addon1"></div></div><div class="col-md-2"></div></div></div><div class="panel panel-default"><table class="table table-hover table-bordered table-striped"><tbody><tr><th>实色效果</th><th>英文名称</th><th>R.G.B</th><th>16色</th><th>实色效果</th><th>英文名称</th><th>R.G.B</th><th>16色</th></tr><tr><td style="background-color: rgb(255, 250, 250);"></td><td>Snow</td><td>255 250 250</td><td>#FFFAFA</td><td style="background-color: rgb(187, 255, 255);"></td><td>PaleTurquoise1</td><td>187 255 255</td><td>#BBFFFF</td></tr><tr><td style="background-color: rgb(248, 248, 255);"></td><td>GhostWhite</td><td>248 248 255</td><td>#F8F8FF</td><td style="background-color: rgb(174, 238, 238);"></td><td>PaleTurquoise2</td><td>174 238 238</td><td>#AEEEEE</td></tr><tr><td style="background-color: rgb(245, 245, 245);"></td><td>WhiteSmoke</td><td>245 245 245</td><td>#F5F5F5</td><td style="background-color: rgb(150, 205, 205);"></td><td>PaleTurquoise3</td><td>150 205 205</td><td>#96CDCD</td></tr><tr><td style="background-color: rgb(220, 220, 220);"></td><td>Gainsboro</td><td>220 220 220</td><td>#DCDCDC</td><td style="background-color: rgb(102, 139, 139);"></td><td>PaleTurquoise4</td><td>102 139 139</td><td>#668B8B</td></tr><tr><td style="background-color: rgb(255, 250, 240);"></td><td>FloralWhite</td><td>255 250 240</td><td>#FFFAF0</td><td style="background-color: rgb(152, 245, 255);"></td><td>CadetBlue1</td><td>152 245 255</td><td>#98F5FF</td></tr><tr><td style="background-color: rgb(253, 245, 230);"></td><td>OldLace</td><td>253 245 230</td><td>#FDF5E6</td><td style="background-color: rgb(142, 229, 238);"></td><td>CadetBlue2</td><td>142 229 238</td><td>#8EE5EE</td></tr><tr><td style="background-color: rgb(250, 240, 230);"></td><td>Linen</td><td>250 240 230</td><td>#FAF0E6</td><td style="background-color: rgb(122, 197, 205);"></td><td>CadetBlue3</td><td>122 197 205</td><td>#7AC5CD</td></tr><tr><td style="background-color: rgb(250, 235, 215);"></td><td>AntiqueWhite</td><td>250 235 215</td><td>#FAEBD7</td><td style="background-color: rgb(83, 134, 139);"></td><td>CadetBlue4</td><td>83 134 139</td><td>#53868B</td></tr><tr><td style="background-color: rgb(255, 239, 213);"></td><td>PapayaWhip</td><td>255 239 213</td><td>#FFEFD5</td><td style="background-color: rgb(0, 245, 255);"></td><td>Turquoise1</td><td>0 245 255</td><td>#00F5FF</td></tr><tr><td style="background-color: rgb(255, 235, 205);"></td><td>BlanchedAlmond</td><td>255 235 205</td><td>#FFEBCD</td><td style="background-color: rgb(0, 229, 238);"></td><td>Turquoise2</td><td>0 229 238</td><td>#00E5EE</td></tr><tr><td style="background-color: rgb(255, 228, 196);"></td><td>Bisque</td><td>255 228 196</td><td>#FFE4C4</td><td style="background-color: rgb(0, 197, 205);"></td><td>Turquoise3</td><td>0 197 205</td><td>#00C5CD</td></tr><tr><td style="background-color: rgb(255, 218, 185);"></td><td>PeachPuff</td><td>255 218 185</td><td>#FFDAB9</td><td style="background-color: rgb(0, 134, 139);"></td><td>Turquoise4</td><td>0 134 139</td><td>#00868B</td></tr><tr><td style="background-color: rgb(255, 222, 173);"></td><td>NavajoWhite</td><td>255 222 173</td><td>#FFDEAD</td><td style="background-color: rgb(0, 255, 255);"></td><td>Cyan1</td><td>0 255 255</td><td>#00FFFF</td></tr><tr><td style="background-color: rgb(255, 228, 181);"></td><td>Moccasin</td><td>255 228 181</td><td>#FFE4B5</td><td style="background-color: rgb(0, 238, 238);"></td><td>Cyan2</td><td>0 238 238</td><td>#00EEEE</td></tr><tr><td style="background-color: rgb(255, 248, 220);"></td><td>Cornsilk</td><td>255 248 220</td><td>#FFF8DC</td><td style="background-color: rgb(0, 205, 205);"></td><td>Cyan3</td><td>0 205 205</td><td>#00CDCD</td></tr><tr><td style="background-color: rgb(255, 255, 240);"></td><td>Ivory</td><td>255 255 240</td><td>#FFFFF0</td><td style="background-color: rgb(0, 139, 139);"></td><td>Cyan4</td><td>0 139 139</td><td>#008B8B</td></tr><tr><td style="background-color: rgb(255, 250, 205);"></td><td>LemonChiffon</td><td>255 250 205</td><td>#FFFACD</td><td style="background-color: rgb(151, 255, 255);"></td><td>DarkSlateGray1</td><td>151 255 255</td><td>#97FFFF</td></tr><tr><td style="background-color: rgb(255, 245, 238);"></td><td>Seashell</td><td>255 245 238</td><td>#FFF5EE</td><td style="background-color: rgb(141, 238, 238);"></td><td>DarkSlateGray2</td><td>141 238 238</td><td>#8DEEEE</td></tr><tr><td style="background-color: rgb(240, 255, 240);"></td><td>Honeydew</td><td>240 255 240</td><td>#F0FFF0</td><td style="background-color: rgb(121, 205, 205);"></td><td>DarkSlateGray3</td><td>121 205 205</td><td>#79CDCD</td></tr><tr><td style="background-color: rgb(245, 255, 250);"></td><td>MintCream</td><td>245 255 250</td><td>#F5FFFA</td><td style="background-color: rgb(82, 139, 139);"></td><td>DarkSlateGray4</td><td>82 139 139</td><td>#528B8B</td></tr><tr><td style="background-color: rgb(240, 255, 255);"></td><td>Azure</td><td>240 255 255</td><td>#F0FFFF</td><td style="background-color: rgb(127, 255, 212);"></td><td>Aquamarine1</td><td>127 255 212</td><td>#7FFFD4</td></tr><tr><td style="background-color: rgb(240, 248, 255);"></td><td>AliceBlue</td><td>240 248 255</td><td>#F0F8FF</td><td style="background-color: rgb(118, 238, 198);"></td><td>Aquamarine2</td><td>118 238 198</td><td>#76EEC6</td></tr><tr><td style="background-color: rgb(230, 230, 250);"></td><td>lavender</td><td>230 230 250</td><td>#E6E6FA</td><td style="background-color: rgb(102, 205, 170);"></td><td>Aquamarine3</td><td>102 205 170</td><td>#66CDAA</td></tr><tr><td style="background-color: rgb(255, 240, 245);"></td><td>LavenderBlush</td><td>255 240 245</td><td>#FFF0F5</td><td style="background-color: rgb(69, 139, 116);"></td><td>Aquamarine4</td><td>69 139 116</td><td>#458B74</td></tr><tr><td style="background-color: rgb(255, 228, 225);"></td><td>MistyRose</td><td>255 228 225</td><td>#FFE4E1</td><td style="background-color: rgb(193, 255, 193);"></td><td>DarkSeaGreen1</td><td>193 255 193</td><td>#C1FFC1</td></tr><tr><td style="background-color: rgb(255, 255, 255);"></td><td>White</td><td>255 255 255</td><td>#FFFFFF</td><td style="background-color: rgb(180, 238, 180);"></td><td>DarkSeaGreen2</td><td>180 238 180</td><td>#B4EEB4</td></tr><tr><td style="background-color: rgb(0, 0, 0);"></td><td>Black</td><td>0 0 0</td><td>#000000</td><td style="background-color: rgb(155, 205, 155);"></td><td>DarkSeaGreen3</td><td>155 205 155</td><td>#9BCD9B</td></tr><tr><td style="background-color: rgb(47, 79, 79);"></td><td>DarkSlateGray</td><td>47 79 79</td><td>#2F4F4F</td><td style="background-color: rgb(105, 139, 105);"></td><td>DarkSeaGreen4</td><td>105 139 105</td><td>#698B69</td></tr><tr><td style="background-color: rgb(105, 105, 105);"></td><td>DimGrey</td><td>105 105 105</td><td>#696969</td><td style="background-color: rgb(84, 255, 159);"></td><td>SeaGreen1</td><td>84 255 159</td><td>#54FF9F</td></tr><tr><td style="background-color: rgb(112, 128, 144);"></td><td>SlateGrey</td><td>112 128 144</td><td>#708090</td><td style="background-color: rgb(78, 238, 148);"></td><td>SeaGreen2</td><td>78 238 148</td><td>#4EEE94</td></tr><tr><td style="background-color: rgb(119, 136, 153);"></td><td>LightSlateGray</td><td>119 136 153</td><td>#778899</td><td style="background-color: rgb(67, 205, 128);"></td><td>SeaGreen3</td><td>67 205 128</td><td>#43CD80</td></tr><tr><td style="background-color: rgb(190, 190, 190);"></td><td>Grey</td><td>190 190 190</td><td>#BEBEBE</td><td style="background-color: rgb(46, 139, 87);"></td><td>SeaGreen4</td><td>46 139 87</td><td>#2E8B57</td></tr><tr><td style="background-color: rgb(211, 211, 211);"></td><td>LightGray</td><td>211 211 211</td><td>#D3D3D3</td><td style="background-color: rgb(154, 255, 154);"></td><td>PaleGreen1</td><td>154 255 154</td><td>#9AFF9A</td></tr><tr><td style="background-color: rgb(25, 25, 112);"></td><td>MidnightBlue</td><td>25 25 112</td><td>#191970</td><td style="background-color: rgb(144, 238, 144);"></td><td>PaleGreen2</td><td>144 238 144</td><td>#90EE90</td></tr><tr><td style="background-color: rgb(0, 0, 128);"></td><td>NavyBlue</td><td>0 0 128</td><td>#000080</td><td style="background-color: rgb(124, 205, 124);"></td><td>PaleGreen3</td><td>124 205 124</td><td>#7CCD7C</td></tr><tr><td style="background-color: rgb(100, 149, 237);"></td><td>CornflowerBlue</td><td>100 149 237</td><td>#6495ED</td><td style="background-color: rgb(84, 139, 84);"></td><td>PaleGreen4</td><td>84 139 84</td><td>#548B54</td></tr><tr><td style="background-color: rgb(72, 61, 139);"></td><td>DarkSlateBlue</td><td>72 61 139</td><td>#483D8B</td><td style="background-color: rgb(0, 255, 127);"></td><td>SpringGreen1</td><td>0 255 127</td><td>#00FF7F</td></tr><tr><td style="background-color: rgb(106, 90, 205);"></td><td>SlateBlue</td><td>106 90 205</td><td>#6A5ACD</td><td style="background-color: rgb(0, 238, 118);"></td><td>SpringGreen2</td><td>0 238 118</td><td>#00EE76</td></tr><tr><td style="background-color: rgb(123, 104, 238);"></td><td>MediumSlateBlue</td><td>123 104 238</td><td>#7B68EE</td><td style="background-color: rgb(0, 205, 102);"></td><td>SpringGreen3</td><td>0 205 102</td><td>#00CD66</td></tr><tr><td style="background-color: rgb(132, 112, 255);"></td><td>LightSlateBlue</td><td>132 112 255</td><td>#8470FF</td><td style="background-color: rgb(0, 139, 69);"></td><td>SpringGreen4</td><td>0 139 69</td><td>#008B45</td></tr><tr><td style="background-color: rgb(0, 0, 205);"></td><td>MediumBlue</td><td>0 0 205</td><td>#0000CD</td><td style="background-color: rgb(0, 255, 0);"></td><td>Green1</td><td>0 255 0</td><td>#00FF00</td></tr><tr><td style="background-color: rgb(65, 105, 225);"></td><td>RoyalBlue</td><td>65 105 225</td><td>#4169E1</td><td style="background-color: rgb(0, 238, 0);"></td><td>Green2</td><td>0 238 0</td><td>#00EE00</td></tr><tr><td style="background-color: rgb(0, 0, 255);"></td><td>Blue</td><td>0 0 255</td><td>#0000FF</td><td style="background-color: rgb(0, 205, 0);"></td><td>Green3</td><td>0 205 0</td><td>#00CD00</td></tr><tr><td style="background-color: rgb(30, 144, 255);"></td><td>DodgerBlue</td><td>30 144 255</td><td>#1E90FF</td><td style="background-color: rgb(0, 139, 0);"></td><td>Green4</td><td>0 139 0</td><td>#008B00</td></tr><tr><td style="background-color: rgb(0, 191, 255);"></td><td>DeepSkyBlue</td><td>0 191 255</td><td>#00BFFF</td><td style="background-color: rgb(127, 255, 0);"></td><td>Chartreuse1</td><td>127 255 0</td><td>#7FFF00</td></tr><tr><td style="background-color: rgb(135, 206, 235);"></td><td>SkyBlue</td><td>135 206 235</td><td>#87CEEB</td><td style="background-color: rgb(118, 238, 0);"></td><td>Chartreuse2</td><td>118 238 0</td><td>#76EE00</td></tr><tr><td style="background-color: rgb(135, 206, 250);"></td><td>LightSkyBlue</td><td>135 206 250</td><td>#87CEFA</td><td style="background-color: rgb(102, 205, 0);"></td><td>Chartreuse3</td><td>102 205 0</td><td>#66CD00</td></tr><tr><td style="background-color: rgb(70, 130, 180);"></td><td>SteelBlue</td><td>70 130 180</td><td>#4682B4</td><td style="background-color: rgb(69, 139, 0);"></td><td>Chartreuse4</td><td>69 139 0</td><td>#458B00</td></tr><tr><td style="background-color: rgb(176, 196, 222);"></td><td>LightSteelBlue</td><td>176 196 222</td><td>#B0C4DE</td><td style="background-color: rgb(192, 255, 62);"></td><td>OliveDrab1</td><td>192 255 62</td><td>#C0FF3E</td></tr><tr><td style="background-color: rgb(173, 216, 230);"></td><td>LightBlue</td><td>173 216 230</td><td>#ADD8E6</td><td style="background-color: rgb(179, 238, 58);"></td><td>OliveDrab2</td><td>179 238 58</td><td>#B3EE3A</td></tr><tr><td style="background-color: rgb(176, 224, 230);"></td><td>PowderBlue</td><td>176 224 230</td><td>#B0E0E6</td><td style="background-color: rgb(154, 205, 50);"></td><td>OliveDrab3</td><td>154 205 50</td><td>#9ACD32</td></tr><tr><td style="background-color: rgb(175, 238, 238);"></td><td>PaleTurquoise</td><td>175 238 238</td><td>#AFEEEE</td><td style="background-color: rgb(105, 139, 34);"></td><td>OliveDrab4</td><td>105 139 34</td><td>#698B22</td></tr><tr><td style="background-color: rgb(0, 206, 209);"></td><td>DarkTurquoise</td><td>0 206 209</td><td>#00CED1</td><td style="background-color: rgb(202, 255, 112);"></td><td>DarkOliveGreen1</td><td>202 255 112</td><td>#CAFF70</td></tr><tr><td style="background-color: rgb(72, 209, 204);"></td><td>MediumTurquoise</td><td>72 209 204</td><td>#48D1CC</td><td style="background-color: rgb(188, 238, 104);"></td><td>DarkOliveGreen2</td><td>188 238 104</td><td>#BCEE68</td></tr><tr><td style="background-color: rgb(64, 224, 208);"></td><td>Turquoise</td><td>64 224 208</td><td>#40E0D0</td><td style="background-color: rgb(162, 205, 90);"></td><td>DarkOliveGreen3</td><td>162 205 90</td><td>#A2CD5A</td></tr><tr><td style="background-color: rgb(0, 255, 255);"></td><td>Cyan</td><td>0 255 255</td><td>#00FFFF</td><td style="background-color: rgb(110, 139, 61);"></td><td>DarkOliveGreen4</td><td>110 139 61</td><td>#6E8B3D</td></tr><tr><td style="background-color: rgb(224, 255, 255);"></td><td>LightCyan</td><td>224 255 255</td><td>#E0FFFF</td><td style="background-color: rgb(255, 246, 143);"></td><td>Khaki1</td><td>255 246 143</td><td>#FFF68F</td></tr><tr><td style="background-color: rgb(95, 158, 160);"></td><td>CadetBlue</td><td>95 158 160</td><td>#5F9EA0</td><td style="background-color: rgb(238, 230, 133);"></td><td>Khaki2</td><td>238 230 133</td><td>#EEE685</td></tr><tr><td style="background-color: rgb(102, 205, 170);"></td><td>MediumAquamarine</td><td>102 205 170</td><td>#66CDAA</td><td style="background-color: rgb(205, 198, 115);"></td><td>Khaki3</td><td>205 198 115</td><td>#CDC673</td></tr><tr><td style="background-color: rgb(127, 255, 212);"></td><td>Aquamarine</td><td>127 255 212</td><td>#7FFFD4</td><td style="background-color: rgb(139, 134, 78);"></td><td>Khaki4</td><td>139 134 78</td><td>#8B864E</td></tr><tr><td style="background-color: rgb(0, 100, 0);"></td><td>DarkGreen</td><td>0 100 0</td><td>#006400</td><td style="background-color: rgb(255, 236, 139);"></td><td>LightGoldenrod1</td><td>255 236 139</td><td>#FFEC8B</td></tr><tr><td style="background-color: rgb(85, 107, 47);"></td><td>DarkOliveGreen</td><td>85 107 47</td><td>#556B2F</td><td style="background-color: rgb(238, 220, 130);"></td><td>LightGoldenrod2</td><td>238 220 130</td><td>#EEDC82</td></tr><tr><td style="background-color: rgb(143, 188, 143);"></td><td>DarkSeaGreen</td><td>143 188 143</td><td>#8FBC8F</td><td style="background-color: rgb(205, 190, 112);"></td><td>LightGoldenrod3</td><td>205 190 112</td><td>#CDBE70</td></tr><tr><td style="background-color: rgb(46, 139, 87);"></td><td>SeaGreen</td><td>46 139 87</td><td>#2E8B57</td><td style="background-color: rgb(139, 129, 76);"></td><td>LightGoldenrod4</td><td>139 129 76</td><td>#8B814C</td></tr><tr><td style="background-color: rgb(60, 179, 113);"></td><td>MediumSeaGreen</td><td>60 179 113</td><td>#3CB371</td><td style="background-color: rgb(255, 255, 224);"></td><td>LightYellow1</td><td>255 255 224</td><td>#FFFFE0</td></tr><tr><td style="background-color: rgb(32, 178, 170);"></td><td>LightSeaGreen</td><td>32 178 170</td><td>#20B2AA</td><td style="background-color: rgb(238, 238, 209);"></td><td>LightYellow2</td><td>238 238 209</td><td>#EEEED1</td></tr><tr><td style="background-color: rgb(152, 251, 152);"></td><td>PaleGreen</td><td>152 251 152</td><td>#98FB98</td><td style="background-color: rgb(205, 205, 180);"></td><td>LightYellow3</td><td>205 205 180</td><td>#CDCDB4</td></tr><tr><td style="background-color: rgb(0, 255, 127);"></td><td>SpringGreen</td><td>0 255 127</td><td>#00FF7F</td><td style="background-color: rgb(139, 139, 122);"></td><td>LightYellow4</td><td>139 139 122</td><td>#8B8B7A</td></tr><tr><td style="background-color: rgb(124, 252, 0);"></td><td>LawnGreen</td><td>124 252 0</td><td>#7CFC00</td><td style="background-color: rgb(255, 255, 0);"></td><td>Yellow1</td><td>255 255 0</td><td>#FFFF00</td></tr><tr><td style="background-color: rgb(0, 255, 0);"></td><td>Green</td><td>0 255 0</td><td>#00FF00</td><td style="background-color: rgb(238, 238, 0);"></td><td>Yellow2</td><td>238 238 0</td><td>#EEEE00</td></tr><tr><td style="background-color: rgb(127, 255, 0);"></td><td>Chartreuse</td><td>127 255 0</td><td>#7FFF00</td><td style="background-color: rgb(205, 205, 0);"></td><td>Yellow3</td><td>205 205 0</td><td>#CDCD00</td></tr><tr><td style="background-color: rgb(0, 250, 154);"></td><td>MedSpringGreen</td><td>0 250 154</td><td>#00FA9A</td><td style="background-color: rgb(139, 139, 0);"></td><td>Yellow4</td><td>139 139 0</td><td>#8B8B00</td></tr><tr><td style="background-color: rgb(173, 255, 47);"></td><td>GreenYellow</td><td>173 255 47</td><td>#ADFF2F</td><td style="background-color: rgb(255, 215, 0);"></td><td>Gold1</td><td>255 215 0</td><td>#FFD700</td></tr><tr><td style="background-color: rgb(50, 205, 50);"></td><td>LimeGreen</td><td>50 205 50</td><td>#32CD32</td><td style="background-color: rgb(238, 201, 0);"></td><td>Gold2</td><td>238 201 0</td><td>#EEC900</td></tr><tr><td style="background-color: rgb(154, 205, 50);"></td><td>YellowGreen</td><td>154 205 50</td><td>#9ACD32</td><td style="background-color: rgb(205, 173, 0);"></td><td>Gold3</td><td>205 173 0</td><td>#CDAD00</td></tr><tr><td style="background-color: rgb(34, 139, 34);"></td><td>ForestGreen</td><td>34 139 34</td><td>#228B22</td><td style="background-color: rgb(139, 117, 0);"></td><td>Gold4</td><td>139 117 0</td><td>#8B7500</td></tr><tr><td style="background-color: rgb(107, 142, 35);"></td><td>OliveDrab</td><td>107 142 35</td><td>#6B8E23</td><td style="background-color: rgb(255, 193, 37);"></td><td>Goldenrod1</td><td>255 193 37</td><td>#FFC125</td></tr><tr><td style="background-color: rgb(189, 183, 107);"></td><td>DarkKhaki</td><td>189 183 107</td><td>#BDB76B</td><td style="background-color: rgb(238, 180, 34);"></td><td>Goldenrod2</td><td>238 180 34</td><td>#EEB422</td></tr><tr><td style="background-color: rgb(238, 232, 170);"></td><td>PaleGoldenrod</td><td>238 232 170</td><td>#EEE8AA</td><td style="background-color: rgb(205, 155, 29);"></td><td>Goldenrod3</td><td>205 155 29</td><td>#CD9B1D</td></tr><tr><td style="background-color: rgb(250, 250, 210);"></td><td>LtGoldenrodYello</td><td>250 250 210</td><td>#FAFAD2</td><td style="background-color: rgb(139, 105, 20);"></td><td>Goldenrod4</td><td>139 105 20</td><td>#8B6914</td></tr><tr><td style="background-color: rgb(255, 255, 224);"></td><td>LightYellow</td><td>255 255 224</td><td>#FFFFE0</td><td style="background-color: rgb(255, 185, 15);"></td><td>DarkGoldenrod1</td><td>255 185 15</td><td>#FFB90F</td></tr><tr><td style="background-color: rgb(255, 255, 0);"></td><td>Yellow</td><td>255 255 0</td><td>#FFFF00</td><td style="background-color: rgb(238, 173, 14);"></td><td>DarkGoldenrod2</td><td>238 173 14</td><td>#EEAD0E</td></tr><tr><td style="background-color: rgb(255, 215, 0);"></td><td>Gold</td><td>255 215 0</td><td>#FFD700</td><td style="background-color: rgb(205, 149, 12);"></td><td>DarkGoldenrod3</td><td>205 149 12</td><td>#CD950C</td></tr><tr><td style="background-color: rgb(238, 221, 130);"></td><td>LightGoldenrod</td><td>238 221 130</td><td>#EEDD82</td><td style="background-color: rgb(139, 101, 139);"></td><td>DarkGoldenrod4</td><td>139 101 8</td><td>#8B658B</td></tr><tr><td style="background-color: rgb(218, 165, 32);"></td><td>goldenrod</td><td>218 165 32</td><td>#DAA520</td><td style="background-color: rgb(255, 193, 193);"></td><td>RosyBrown1</td><td>255 193 193</td><td>#FFC1C1</td></tr><tr><td style="background-color: rgb(184, 134, 11);"></td><td>DarkGoldenrod</td><td>184 134 11</td><td>#B8860B</td><td style="background-color: rgb(238, 180, 180);"></td><td>RosyBrown2</td><td>238 180 180</td><td>#EEB4B4</td></tr><tr><td style="background-color: rgb(188, 143, 143);"></td><td>RosyBrown</td><td>188 143 143</td><td>#BC8F8F</td><td style="background-color: rgb(205, 155, 155);"></td><td>RosyBrown3</td><td>205 155 155</td><td>#CD9B9B</td></tr><tr><td style="background-color: rgb(205, 92, 92);"></td><td>IndianRed</td><td>205 92 92</td><td>#CD5C5C</td><td style="background-color: rgb(139, 105, 105);"></td><td>RosyBrown4</td><td>139 105 105</td><td>#8B6969</td></tr><tr><td style="background-color: rgb(139, 69, 19);"></td><td>SaddleBrown</td><td>139 69 19</td><td>#8B4513</td><td style="background-color: rgb(255, 106, 106);"></td><td>IndianRed1</td><td>255 106 106</td><td>#FF6A6A</td></tr><tr><td style="background-color: rgb(160, 82, 45);"></td><td>Sienna</td><td>160 82 45</td><td>#A0522D</td><td style="background-color: rgb(238, 99, 99);"></td><td>IndianRed2</td><td>238 99 99</td><td>#EE6363</td></tr><tr><td style="background-color: rgb(205, 133, 63);"></td><td>Peru</td><td>205 133 63</td><td>#CD853F</td><td style="background-color: rgb(205, 85, 85);"></td><td>IndianRed3</td><td>205 85 85</td><td>#CD5555</td></tr><tr><td style="background-color: rgb(222, 184, 135);"></td><td>Burlywood</td><td>222 184 135</td><td>#DEB887</td><td style="background-color: rgb(139, 58, 58);"></td><td>IndianRed4</td><td>139 58 58</td><td>#8B3A3A</td></tr><tr><td style="background-color: rgb(245, 245, 220);"></td><td>Beige</td><td>245 245 220</td><td>#F5F5DC</td><td style="background-color: rgb(255, 130, 71);"></td><td>Sienna1</td><td>255 130 71</td><td>#FF8247</td></tr><tr><td style="background-color: rgb(245, 222, 179);"></td><td>Wheat</td><td>245 222 179</td><td>#F5DEB3</td><td style="background-color: rgb(238, 121, 66);"></td><td>Sienna2</td><td>238 121 66</td><td>#EE7942</td></tr><tr><td style="background-color: rgb(244, 164, 96);"></td><td>SandyBrown</td><td>244 164 96</td><td>#F4A460</td><td style="background-color: rgb(205, 104, 57);"></td><td>Sienna3</td><td>205 104 57</td><td>#CD6839</td></tr><tr><td style="background-color: rgb(210, 180, 140);"></td><td>Tan</td><td>210 180 140</td><td>#D2B48C</td><td style="background-color: rgb(139, 71, 38);"></td><td>Sienna4</td><td>139 71 38</td><td>#8B4726</td></tr><tr><td style="background-color: rgb(210, 105, 30);"></td><td>Chocolate</td><td>210 105 30</td><td>#D2691E</td><td style="background-color: rgb(255, 211, 155);"></td><td>Burlywood1</td><td>255 211 155</td><td>#FFD39B</td></tr><tr><td style="background-color: rgb(178, 34, 34);"></td><td>Firebrick</td><td>178 34 34</td><td>#B22222</td><td style="background-color: rgb(238, 197, 145);"></td><td>Burlywood2</td><td>238 197 145</td><td>#EEC591</td></tr><tr><td style="background-color: rgb(165, 42, 42);"></td><td>Brown</td><td>165 42 42</td><td>#A52A2A</td><td style="background-color: rgb(205, 170, 125);"></td><td>Burlywood3</td><td>205 170 125</td><td>#CDAA7D</td></tr><tr><td style="background-color: rgb(233, 150, 122);"></td><td>DarkSalmon</td><td>233 150 122</td><td>#E9967A</td><td style="background-color: rgb(139, 115, 85);"></td><td>Burlywood4</td><td>139 115 85</td><td>#8B7355</td></tr><tr><td style="background-color: rgb(250, 128, 114);"></td><td>Salmon</td><td>250 128 114</td><td>#FA8072</td><td style="background-color: rgb(255, 231, 186);"></td><td>Wheat1</td><td>255 231 186</td><td>#FFE7BA</td></tr><tr><td style="background-color: rgb(255, 160, 122);"></td><td>LightSalmon</td><td>255 160 122</td><td>#FFA07A</td><td style="background-color: rgb(238, 216, 174);"></td><td>Wheat2</td><td>238 216 174</td><td>#EED8AE</td></tr><tr><td style="background-color: rgb(255, 165, 0);"></td><td>Orange</td><td>255 165 0</td><td>#FFA500</td><td style="background-color: rgb(205, 186, 150);"></td><td>Wheat3</td><td>205 186 150</td><td>#CDBA96</td></tr><tr><td style="background-color: rgb(255, 140, 0);"></td><td>DarkOrange</td><td>255 140 0</td><td>#FF8C00</td><td style="background-color: rgb(139, 126, 102);"></td><td>Wheat4</td><td>139 126 102</td><td>#8B7E66</td></tr><tr><td style="background-color: rgb(255, 127, 80);"></td><td>Coral</td><td>255 127 80</td><td>#FF7F50</td><td style="background-color: rgb(255, 165, 79);"></td><td>Tan1</td><td>255 165 79</td><td>#FFA54F</td></tr><tr><td style="background-color: rgb(240, 128, 128);"></td><td>LightCoral</td><td>240 128 128</td><td>#F08080</td><td style="background-color: rgb(238, 154, 73);"></td><td>Tan2</td><td>238 154 73</td><td>#EE9A49</td></tr><tr><td style="background-color: rgb(255, 99, 71);"></td><td>Tomato</td><td>255 99 71</td><td>#FF6347</td><td style="background-color: rgb(205, 133, 63);"></td><td>Tan3</td><td>205 133 63</td><td>#CD853F</td></tr><tr><td style="background-color: rgb(255, 69, 0);"></td><td>OrangeRed</td><td>255 69 0</td><td>#FF4500</td><td style="background-color: rgb(139, 90, 43);"></td><td>Tan4</td><td>139 90 43</td><td>#8B5A2B</td></tr><tr><td style="background-color: rgb(255, 0, 0);"></td><td>Red</td><td>255 0 0</td><td>#FF0000</td><td style="background-color: rgb(255, 127, 36);"></td><td>Chocolate1</td><td>255 127 36</td><td>#FF7F24</td></tr><tr><td style="background-color: rgb(255, 105, 180);"></td><td>HotPink</td><td>255 105 180</td><td>#FF69B4</td><td style="background-color: rgb(238, 118, 33);"></td><td>Chocolate2</td><td>238 118 33</td><td>#EE7621</td></tr><tr><td style="background-color: rgb(255, 20, 147);"></td><td>DeepPink</td><td>255 20 147</td><td>#FF1493</td><td style="background-color: rgb(205, 102, 29);"></td><td>Chocolate3</td><td>205 102 29</td><td>#CD661D</td></tr><tr><td style="background-color: rgb(255, 192, 203);"></td><td>Pink</td><td>255 192 203</td><td>#FFC0CB</td><td style="background-color: rgb(139, 69, 19);"></td><td>Chocolate4</td><td>139 69 19</td><td>#8B4513</td></tr><tr><td style="background-color: rgb(255, 182, 193);"></td><td>LightPink</td><td>255 182 193</td><td>#FFB6C1</td><td style="background-color: rgb(255, 48, 48);"></td><td>Firebrick1</td><td>255 48 48</td><td>#FF3030</td></tr><tr><td style="background-color: rgb(219, 112, 147);"></td><td>PaleVioletRed</td><td>219 112 147</td><td>#DB7093</td><td style="background-color: rgb(238, 44, 44);"></td><td>Firebrick2</td><td>238 44 44</td><td>#EE2C2C</td></tr><tr><td style="background-color: rgb(176, 48, 96);"></td><td>Maroon</td><td>176 48 96</td><td>#B03060</td><td style="background-color: rgb(205, 38, 38);"></td><td>Firebrick3</td><td>205 38 38</td><td>#CD2626</td></tr><tr><td style="background-color: rgb(199, 21, 133);"></td><td>MediumVioletRed</td><td>199 21 133</td><td>#C71585</td><td style="background-color: rgb(139, 26, 26);"></td><td>Firebrick4</td><td>139 26 26</td><td>#8B1A1A</td></tr><tr><td style="background-color: rgb(208, 32, 144);"></td><td>VioletRed</td><td>208 32 144</td><td>#D02090</td><td style="background-color: rgb(255, 64, 64);"></td><td>Brown1</td><td>255 64 64</td><td>#FF4040</td></tr><tr><td style="background-color: rgb(255, 0, 255);"></td><td>Magenta</td><td>255 0 255</td><td>#FF00FF</td><td style="background-color: rgb(238, 59, 59);"></td><td>Brown2</td><td>238 59 59</td><td>#EE3B3B</td></tr><tr><td style="background-color: rgb(238, 130, 238);"></td><td>Violet</td><td>238 130 238</td><td>#EE82EE</td><td style="background-color: rgb(205, 51, 51);"></td><td>Brown3</td><td>205 51 51</td><td>#CD3333</td></tr><tr><td style="background-color: rgb(221, 160, 221);"></td><td>Plum</td><td>221 160 221</td><td>#DDA0DD</td><td style="background-color: rgb(139, 35, 35);"></td><td>Brown4</td><td>139 35 35</td><td>#8B2323</td></tr><tr><td style="background-color: rgb(218, 112, 214);"></td><td>Orchid</td><td>218 112 214</td><td>#DA70D6</td><td style="background-color: rgb(255, 140, 105);"></td><td>Salmon1</td><td>255 140 105</td><td>#FF8C69</td></tr><tr><td style="background-color: rgb(186, 85, 211);"></td><td>MediumOrchid</td><td>186 85 211</td><td>#BA55D3</td><td style="background-color: rgb(238, 130, 98);"></td><td>Salmon2</td><td>238 130 98</td><td>#EE8262</td></tr><tr><td style="background-color: rgb(153, 50, 204);"></td><td>DarkOrchid</td><td>153 50 204</td><td>#9932CC</td><td style="background-color: rgb(205, 112, 84);"></td><td>Salmon3</td><td>205 112 84</td><td>#CD7054</td></tr><tr><td style="background-color: rgb(148, 0, 211);"></td><td>DarkViolet</td><td>148 0 211</td><td>#9400D3</td><td style="background-color: rgb(139, 76, 57);"></td><td>Salmon4</td><td>139 76 57</td><td>#8B4C39</td></tr><tr><td style="background-color: rgb(138, 43, 226);"></td><td>BlueViolet</td><td>138 43 226</td><td>#8A2BE2</td><td style="background-color: rgb(255, 160, 122);"></td><td>LightSalmon1</td><td>255 160 122</td><td>#FFA07A</td></tr><tr><td style="background-color: rgb(160, 32, 240);"></td><td>Purple</td><td>160 32 240</td><td>#A020F0</td><td style="background-color: rgb(238, 149, 114);"></td><td>LightSalmon2</td><td>238 149 114</td><td>#EE9572</td></tr><tr><td style="background-color: rgb(147, 112, 219);"></td><td>MediumPurple</td><td>147 112 219</td><td>#9370DB</td><td style="background-color: rgb(205, 129, 98);"></td><td>LightSalmon3</td><td>205 129 98</td><td>#CD8162</td></tr><tr><td style="background-color: rgb(216, 191, 216);"></td><td>Thistle</td><td>216 191 216</td><td>#D8BFD8</td><td style="background-color: rgb(139, 87, 66);"></td><td>LightSalmon4</td><td>139 87 66</td><td>#8B5742</td></tr><tr><td style="background-color: rgb(255, 250, 250);"></td><td>Snow1</td><td>255 250 250</td><td>#FFFAFA</td><td style="background-color: rgb(255, 165, 0);"></td><td>Orange1</td><td>255 165 0</td><td>#FFA500</td></tr><tr><td style="background-color: rgb(238, 233, 233);"></td><td>Snow2</td><td>238 233 233</td><td>#EEE9E9</td><td style="background-color: rgb(238, 154, 0);"></td><td>Orange2</td><td>238 154 0</td><td>#EE9A00</td></tr><tr><td style="background-color: rgb(205, 201, 201);"></td><td>Snow3</td><td>205 201 201</td><td>#CDC9C9</td><td style="background-color: rgb(205, 133, 0);"></td><td>Orange3</td><td>205 133 0</td><td>#CD8500</td></tr><tr><td style="background-color: rgb(139, 137, 137);"></td><td>Snow4</td><td>139 137 137</td><td>#8B8989</td><td style="background-color: rgb(139, 90, 0);"></td><td>Orange4</td><td>139 90 0</td><td>#8B5A00</td></tr><tr><td style="background-color: rgb(255, 245, 238);"></td><td>Seashell1</td><td>255 245 238</td><td>#FFF5EE</td><td style="background-color: rgb(255, 127, 0);"></td><td>DarkOrange1</td><td>255 127 0</td><td>#FF7F00</td></tr><tr><td style="background-color: rgb(238, 229, 222);"></td><td>Seashell2</td><td>238 229 222</td><td>#EEE5DE</td><td style="background-color: rgb(238, 118, 0);"></td><td>DarkOrange2</td><td>238 118 0</td><td>#EE7600</td></tr><tr><td style="background-color: rgb(205, 197, 191);"></td><td>Seashell3</td><td>205 197 191</td><td>#CDC5BF</td><td style="background-color: rgb(205, 102, 0);"></td><td>DarkOrange3</td><td>205 102 0</td><td>#CD6600</td></tr><tr><td style="background-color: rgb(139, 134, 130);"></td><td>Seashell4</td><td>139 134 130</td><td>#8B8682</td><td style="background-color: rgb(139, 69, 0);"></td><td>DarkOrange4</td><td>139 69 0</td><td>#8B4500</td></tr><tr><td style="background-color: rgb(255, 239, 219);"></td><td>AntiqueWhite1</td><td>255 239 219</td><td>#FFEFDB</td><td style="background-color: rgb(255, 114, 86);"></td><td>Coral1</td><td>255 114 86</td><td>#FF7256</td></tr><tr><td style="background-color: rgb(238, 223, 204);"></td><td>AntiqueWhite2</td><td>238 223 204</td><td>#EEDFCC</td><td style="background-color: rgb(238, 106, 80);"></td><td>Coral2</td><td>238 106 80</td><td>#EE6A50</td></tr><tr><td style="background-color: rgb(205, 192, 176);"></td><td>AntiqueWhite3</td><td>205 192 176</td><td>#CDC0B0</td><td style="background-color: rgb(205, 91, 69);"></td><td>Coral3</td><td>205 91 69</td><td>#CD5B45</td></tr><tr><td style="background-color: rgb(139, 131, 120);"></td><td>AntiqueWhite4</td><td>139 131 120</td><td>#8B8378</td><td style="background-color: rgb(139, 62, 47);"></td><td>Coral4</td><td>139 62 47</td><td>#8B3E2F</td></tr><tr><td style="background-color: rgb(255, 228, 196);"></td><td>Bisque1</td><td>255 228 196</td><td>#FFE4C4</td><td style="background-color: rgb(255, 99, 71);"></td><td>Tomato1</td><td>255 99 71</td><td>#FF6347</td></tr><tr><td style="background-color: rgb(238, 213, 183);"></td><td>Bisque2</td><td>238 213 183</td><td>#EED5B7</td><td style="background-color: rgb(238, 92, 66);"></td><td>Tomato2</td><td>238 92 66</td><td>#EE5C42</td></tr><tr><td style="background-color: rgb(205, 183, 158);"></td><td>Bisque3</td><td>205 183 158</td><td>#CDB79E</td><td style="background-color: rgb(205, 79, 57);"></td><td>Tomato3</td><td>205 79 57</td><td>#CD4F39</td></tr><tr><td style="background-color: rgb(139, 125, 107);"></td><td>Bisque4</td><td>139 125 107</td><td>#8B7D6B</td><td style="background-color: rgb(139, 54, 38);"></td><td>Tomato4</td><td>139 54 38</td><td>#8B3626</td></tr><tr><td style="background-color: rgb(255, 218, 185);"></td><td>PeachPuff1</td><td>255 218 185</td><td>#FFDAB9</td><td style="background-color: rgb(255, 69, 0);"></td><td>OrangeRed1</td><td>255 69 0</td><td>#FF4500</td></tr><tr><td style="background-color: rgb(238, 203, 173);"></td><td>PeachPuff2</td><td>238 203 173</td><td>#EECBAD</td><td style="background-color: rgb(238, 64, 0);"></td><td>OrangeRed2</td><td>238 64 0</td><td>#EE4000</td></tr><tr><td style="background-color: rgb(205, 175, 149);"></td><td>PeachPuff3</td><td>205 175 149</td><td>#CDAF95</td><td style="background-color: rgb(205, 55, 0);"></td><td>OrangeRed3</td><td>205 55 0</td><td>#CD3700</td></tr><tr><td style="background-color: rgb(139, 119, 101);"></td><td>PeachPuff4</td><td>139 119 101</td><td>#8B7765</td><td style="background-color: rgb(139, 37, 0);"></td><td>OrangeRed4</td><td>139 37 0</td><td>#8B2500</td></tr><tr><td style="background-color: rgb(255, 222, 173);"></td><td>NavajoWhite1</td><td>255 222 173</td><td>#FFDEAD</td><td style="background-color: rgb(255, 0, 0);"></td><td>Red1</td><td>255 0 0</td><td>#FF0000</td></tr><tr><td style="background-color: rgb(238, 207, 161);"></td><td>NavajoWhite2</td><td>238 207 161</td><td>#EECFA1</td><td style="background-color: rgb(238, 0, 0);"></td><td>Red2</td><td>238 0 0</td><td>#EE0000</td></tr><tr><td style="background-color: rgb(205, 179, 139);"></td><td>NavajoWhite3</td><td>205 179 139</td><td>#CDB38B</td><td style="background-color: rgb(205, 0, 0);"></td><td>Red3</td><td>205 0 0</td><td>#CD0000</td></tr><tr><td style="background-color: rgb(139, 121, 94);"></td><td>NavajoWhite4</td><td>139 121 94</td><td>#8B795E</td><td style="background-color: rgb(139, 0, 0);"></td><td>Red4</td><td>139 0 0</td><td>#8B0000</td></tr><tr><td style="background-color: rgb(255, 250, 205);"></td><td>LemonChiffon1</td><td>255 250 205</td><td>#FFFACD</td><td style="background-color: rgb(255, 20, 147);"></td><td>DeepPink1</td><td>255 20 147</td><td>#FF1493</td></tr><tr><td style="background-color: rgb(238, 233, 191);"></td><td>LemonChiffon2</td><td>238 233 191</td><td>#EEE9BF</td><td style="background-color: rgb(238, 18, 137);"></td><td>DeepPink2</td><td>238 18 137</td><td>#EE1289</td></tr><tr><td style="background-color: rgb(205, 201, 165);"></td><td>LemonChiffon3</td><td>205 201 165</td><td>#CDC9A5</td><td style="background-color: rgb(205, 16, 118);"></td><td>DeepPink3</td><td>205 16 118</td><td>#CD1076</td></tr><tr><td style="background-color: rgb(139, 137, 112);"></td><td>LemonChiffon4</td><td>139 137 112</td><td>#8B8970</td><td style="background-color: rgb(139, 10, 80);"></td><td>DeepPink4</td><td>139 10 80</td><td>#8B0A50</td></tr><tr><td style="background-color: rgb(255, 248, 220);"></td><td>Cornsilk1</td><td>255 248 220</td><td>#FFF8DC</td><td style="background-color: rgb(255, 110, 180);"></td><td>HotPink1</td><td>255 110 180</td><td>#FF6EB4</td></tr><tr><td style="background-color: rgb(238, 232, 205);"></td><td>Cornsilk2</td><td>238 232 205</td><td>#EEE8CD</td><td style="background-color: rgb(238, 106, 167);"></td><td>HotPink2</td><td>238 106 167</td><td>#EE6AA7</td></tr><tr><td style="background-color: rgb(205, 200, 177);"></td><td>Cornsilk3</td><td>205 200 177</td><td>#CDC8B1</td><td style="background-color: rgb(205, 96, 144);"></td><td>HotPink3</td><td>205 96 144</td><td>#CD6090</td></tr><tr><td style="background-color: rgb(139, 136, 120);"></td><td>Cornsilk4</td><td>139 136 120</td><td>#8B8878</td><td style="background-color: rgb(139, 58, 98);"></td><td>HotPink4</td><td>139 58 98</td><td>#8B3A62</td></tr><tr><td style="background-color: rgb(255, 255, 240);"></td><td>Ivory1</td><td>255 255 240</td><td>#FFFFF0</td><td style="background-color: rgb(255, 181, 197);"></td><td>Pink1</td><td>255 181 197</td><td>#FFB5C5</td></tr><tr><td style="background-color: rgb(238, 238, 224);"></td><td>Ivory2</td><td>238 238 224</td><td>#EEEEE0</td><td style="background-color: rgb(238, 169, 184);"></td><td>Pink2</td><td>238 169 184</td><td>#EEA9B8</td></tr><tr><td style="background-color: rgb(205, 205, 193);"></td><td>Ivory3</td><td>205 205 193</td><td>#CDCDC1</td><td style="background-color: rgb(205, 145, 158);"></td><td>Pink3</td><td>205 145 158</td><td>#CD919E</td></tr><tr><td style="background-color: rgb(139, 139, 131);"></td><td>Ivory4</td><td>139 139 131</td><td>#8B8B83</td><td style="background-color: rgb(139, 99, 108);"></td><td>Pink4</td><td>139 99 108</td><td>#8B636C</td></tr><tr><td style="background-color: rgb(240, 255, 240);"></td><td>Honeydew1</td><td>240 255 240</td><td>#F0FFF0</td><td style="background-color: rgb(255, 174, 185);"></td><td>LightPink1</td><td>255 174 185</td><td>#FFAEB9</td></tr><tr><td style="background-color: rgb(224, 238, 224);"></td><td>Honeydew2</td><td>224 238 224</td><td>#E0EEE0</td><td style="background-color: rgb(238, 162, 173);"></td><td>LightPink2</td><td>238 162 173</td><td>#EEA2AD</td></tr><tr><td style="background-color: rgb(193, 205, 193);"></td><td>Honeydew3</td><td>193 205 193</td><td>#C1CDC1</td><td style="background-color: rgb(205, 140, 149);"></td><td>LightPink3</td><td>205 140 149</td><td>#CD8C95</td></tr><tr><td style="background-color: rgb(131, 139, 131);"></td><td>Honeydew4</td><td>131 139 131</td><td>#838B83</td><td style="background-color: rgb(139, 95, 101);"></td><td>LightPink4</td><td>139 95 101</td><td>#8B5F65</td></tr><tr><td style="background-color: rgb(255, 240, 245);"></td><td>LavenderBlush1</td><td>255 240 245</td><td>#FFF0F5</td><td style="background-color: rgb(255, 130, 171);"></td><td>PaleVioletRed1</td><td>255 130 171</td><td>#FF82AB</td></tr><tr><td style="background-color: rgb(238, 224, 229);"></td><td>LavenderBlush2</td><td>238 224 229</td><td>#EEE0E5</td><td style="background-color: rgb(238, 121, 159);"></td><td>PaleVioletRed2</td><td>238 121 159</td><td>#EE799F</td></tr><tr><td style="background-color: rgb(205, 193, 197);"></td><td>LavenderBlush3</td><td>205 193 197</td><td>#CDC1C5</td><td style="background-color: rgb(205, 104, 137);"></td><td>PaleVioletRed3</td><td>205 104 137</td><td>#CD6889</td></tr><tr><td style="background-color: rgb(139, 131, 134);"></td><td>LavenderBlush4</td><td>139 131 134</td><td>#8B8386</td><td style="background-color: rgb(139, 71, 93);"></td><td>PaleVioletRed4</td><td>139 71 93</td><td>#8B475D</td></tr><tr><td style="background-color: rgb(255, 228, 225);"></td><td>MistyRose1</td><td>255 228 225</td><td>#FFE4E1</td><td style="background-color: rgb(255, 52, 179);"></td><td>Maroon1</td><td>255 52 179</td><td>#FF34B3</td></tr><tr><td style="background-color: rgb(238, 213, 210);"></td><td>MistyRose2</td><td>238 213 210</td><td>#EED5D2</td><td style="background-color: rgb(238, 48, 167);"></td><td>Maroon2</td><td>238 48 167</td><td>#EE30A7</td></tr><tr><td style="background-color: rgb(205, 183, 181);"></td><td>MistyRose3</td><td>205 183 181</td><td>#CDB7B5</td><td style="background-color: rgb(205, 41, 144);"></td><td>Maroon3</td><td>205 41 144</td><td>#CD2990</td></tr><tr><td style="background-color: rgb(139, 125, 123);"></td><td>MistyRose4</td><td>139 125 123</td><td>#8B7D7B</td><td style="background-color: rgb(139, 28, 98);"></td><td>Maroon4</td><td>139 28 98</td><td>#8B1C62</td></tr><tr><td style="background-color: rgb(240, 255, 255);"></td><td>Azure1</td><td>240 255 255</td><td>#F0FFFF</td><td style="background-color: rgb(255, 62, 150);"></td><td>VioletRed1</td><td>255 62 150</td><td>#FF3E96</td></tr><tr><td style="background-color: rgb(224, 238, 238);"></td><td>Azure2</td><td>224 238 238</td><td>#E0EEEE</td><td style="background-color: rgb(238, 58, 140);"></td><td>VioletRed2</td><td>238 58 140</td><td>#EE3A8C</td></tr><tr><td style="background-color: rgb(193, 205, 205);"></td><td>Azure3</td><td>193 205 205</td><td>#C1CDCD</td><td style="background-color: rgb(205, 50, 120);"></td><td>VioletRed3</td><td>205 50 120</td><td>#CD3278</td></tr><tr><td style="background-color: rgb(131, 139, 139);"></td><td>Azure4</td><td>131 139 139</td><td>#838B8B</td><td style="background-color: rgb(139, 34, 82);"></td><td>VioletRed4</td><td>139 34 82</td><td>#8B2252</td></tr><tr><td style="background-color: rgb(131, 111, 255);"></td><td>SlateBlue1</td><td>131 111 255</td><td>#836FFF</td><td style="background-color: rgb(255, 0, 255);"></td><td>Magenta1</td><td>255 0 255</td><td>#FF00FF</td></tr><tr><td style="background-color: rgb(122, 103, 238);"></td><td>SlateBlue2</td><td>122 103 238</td><td>#7A67EE</td><td style="background-color: rgb(238, 0, 238);"></td><td>Magenta2</td><td>238 0 238</td><td>#EE00EE</td></tr><tr><td style="background-color: rgb(105, 89, 205);"></td><td>SlateBlue3</td><td>105 89 205</td><td>#6959CD</td><td style="background-color: rgb(205, 0, 205);"></td><td>Magenta3</td><td>205 0 205</td><td>#CD00CD</td></tr><tr><td style="background-color: rgb(71, 60, 139);"></td><td>SlateBlue4</td><td>71 60 139</td><td>#473C8B</td><td style="background-color: rgb(139, 0, 139);"></td><td>Magenta4</td><td>139 0 139</td><td>#8B008B</td></tr><tr><td style="background-color: rgb(72, 118, 255);"></td><td>RoyalBlue1</td><td>72 118 255</td><td>#4876FF</td><td style="background-color: rgb(255, 131, 250);"></td><td>Orchid1</td><td>255 131 250</td><td>#FF83FA</td></tr><tr><td style="background-color: rgb(67, 110, 238);"></td><td>RoyalBlue2</td><td>67 110 238</td><td>#436EEE</td><td style="background-color: rgb(238, 122, 233);"></td><td>Orchid2</td><td>238 122 233</td><td>#EE7AE9</td></tr><tr><td style="background-color: rgb(58, 95, 205);"></td><td>RoyalBlue3</td><td>58 95 205</td><td>#3A5FCD</td><td style="background-color: rgb(205, 105, 201);"></td><td>Orchid3</td><td>205 105 201</td><td>#CD69C9</td></tr><tr><td style="background-color: rgb(39, 64, 139);"></td><td>RoyalBlue4</td><td>39 64 139</td><td>#27408B</td><td style="background-color: rgb(139, 71, 137);"></td><td>Orchid4</td><td>139 71 137</td><td>#8B4789</td></tr><tr><td style="background-color: rgb(0, 0, 255);"></td><td>Blue1</td><td>0 0 255</td><td>#0000FF</td><td style="background-color: rgb(255, 187, 255);"></td><td>Plum1</td><td>255 187 255</td><td>#FFBBFF</td></tr><tr><td style="background-color: rgb(0, 0, 238);"></td><td>Blue2</td><td>0 0 238</td><td>#0000EE</td><td style="background-color: rgb(238, 174, 238);"></td><td>Plum2</td><td>238 174 238</td><td>#EEAEEE</td></tr><tr><td style="background-color: rgb(0, 0, 205);"></td><td>Blue3</td><td>0 0 205</td><td>#0000CD</td><td style="background-color: rgb(205, 150, 205);"></td><td>Plum3</td><td>205 150 205</td><td>#CD96CD</td></tr><tr><td style="background-color: rgb(0, 0, 139);"></td><td>Blue4</td><td>0 0 139</td><td>#00008B</td><td style="background-color: rgb(139, 102, 139);"></td><td>Plum4</td><td>139 102 139</td><td>#8B668B</td></tr><tr><td style="background-color: rgb(30, 144, 255);"></td><td>DodgerBlue1</td><td>30 144 255</td><td>#1E90FF</td><td style="background-color: rgb(224, 102, 255);"></td><td>MediumOrchid1</td><td>224 102 255</td><td>#E066FF</td></tr><tr><td style="background-color: rgb(28, 134, 238);"></td><td>DodgerBlue2</td><td>28 134 238</td><td>#1C86EE</td><td style="background-color: rgb(209, 95, 238);"></td><td>MediumOrchid2</td><td>209 95 238</td><td>#D15FEE</td></tr><tr><td style="background-color: rgb(24, 116, 205);"></td><td>DodgerBlue3</td><td>24 116 205</td><td>#1874CD</td><td style="background-color: rgb(180, 82, 205);"></td><td>MediumOrchid3</td><td>180 82 205</td><td>#B452CD</td></tr><tr><td style="background-color: rgb(16, 78, 139);"></td><td>DodgerBlue4</td><td>16 78 139</td><td>#104E8B</td><td style="background-color: rgb(122, 55, 139);"></td><td>MediumOrchid4</td><td>122 55 139</td><td>#7A378B</td></tr><tr><td style="background-color: rgb(99, 184, 255);"></td><td>SteelBlue1</td><td>99 184 255</td><td>#63B8FF</td><td style="background-color: rgb(191, 62, 255);"></td><td>DarkOrchid1</td><td>191 62 255</td><td>#BF3EFF</td></tr><tr><td style="background-color: rgb(92, 172, 238);"></td><td>SteelBlue2</td><td>92 172 238</td><td>#5CACEE</td><td style="background-color: rgb(178, 58, 238);"></td><td>DarkOrchid2</td><td>178 58 238</td><td>#B23AEE</td></tr><tr><td style="background-color: rgb(79, 148, 205);"></td><td>SteelBlue3</td><td>79 148 205</td><td>#4F94CD</td><td style="background-color: rgb(154, 50, 205);"></td><td>DarkOrchid3</td><td>154 50 205</td><td>#9A32CD</td></tr><tr><td style="background-color: rgb(54, 100, 139);"></td><td>SteelBlue4</td><td>54 100 139</td><td>#36648B</td><td style="background-color: rgb(104, 34, 139);"></td><td>DarkOrchid4</td><td>104 34 139</td><td>#68228B</td></tr><tr><td style="background-color: rgb(0, 191, 255);"></td><td>DeepSkyBlue1</td><td>0 191 255</td><td>#00BFFF</td><td style="background-color: rgb(155, 48, 255);"></td><td>Purple1</td><td>155 48 255</td><td>#9B30FF</td></tr><tr><td style="background-color: rgb(0, 178, 238);"></td><td>DeepSkyBlue2</td><td>0 178 238</td><td>#00B2EE</td><td style="background-color: rgb(145, 44, 238);"></td><td>Purple2</td><td>145 44 238</td><td>#912CEE</td></tr><tr><td style="background-color: rgb(0, 154, 205);"></td><td>DeepSkyBlue3</td><td>0 154 205</td><td>#009ACD</td><td style="background-color: rgb(125, 38, 205);"></td><td>Purple3</td><td>125 38 205</td><td>#7D26CD</td></tr><tr><td style="background-color: rgb(0, 104, 139);"></td><td>DeepSkyBlue4</td><td>0 104 139</td><td>#00688B</td><td style="background-color: rgb(85, 26, 139);"></td><td>Purple4</td><td>85 26 139</td><td>#551A8B</td></tr><tr><td style="background-color: rgb(135, 206, 255);"></td><td>SkyBlue1</td><td>135 206 255</td><td>#87CEFF</td><td style="background-color: rgb(171, 130, 255);"></td><td>MediumPurple1</td><td>171 130 255</td><td>#AB82FF</td></tr><tr><td style="background-color: rgb(126, 192, 238);"></td><td>SkyBlue2</td><td>126 192 238</td><td>#7EC0EE</td><td style="background-color: rgb(159, 121, 238);"></td><td>MediumPurple2</td><td>159 121 238</td><td>#9F79EE</td></tr><tr><td style="background-color: rgb(108, 166, 205);"></td><td>SkyBlue3</td><td>108 166 205</td><td>#6CA6CD</td><td style="background-color: rgb(137, 104, 205);"></td><td>MediumPurple3</td><td>137 104 205</td><td>#8968CD</td></tr><tr><td style="background-color: rgb(74, 112, 139);"></td><td>SkyBlue4</td><td>74 112 139</td><td>#4A708B</td><td style="background-color: rgb(93, 71, 139);"></td><td>MediumPurple4</td><td>93 71 139</td><td>#5D478B</td></tr><tr><td style="background-color: rgb(176, 226, 255);"></td><td>LightSkyBlue1</td><td>176 226 255</td><td>#B0E2FF</td><td style="background-color: rgb(255, 225, 255);"></td><td>Thistle1</td><td>255 225 255</td><td>#FFE1FF</td></tr><tr><td style="background-color: rgb(164, 211, 238);"></td><td>LightSkyBlue2</td><td>164 211 238</td><td>#A4D3EE</td><td style="background-color: rgb(238, 210, 238);"></td><td>Thistle2</td><td>238 210 238</td><td>#EED2EE</td></tr><tr><td style="background-color: rgb(141, 182, 205);"></td><td>LightSkyBlue3</td><td>141 182 205</td><td>#8DB6CD</td><td style="background-color: rgb(205, 181, 205);"></td><td>Thistle3</td><td>205 181 205</td><td>#CDB5CD</td></tr><tr><td style="background-color: rgb(96, 123, 139);"></td><td>LightSkyBlue4</td><td>96 123 139</td><td>#607B8B</td><td style="background-color: rgb(139, 123, 139);"></td><td>Thistle4</td><td>139 123 139</td><td>#8B7B8B</td></tr><tr><td style="background-color: rgb(198, 226, 255);"></td><td>SlateGray1</td><td>198 226 255</td><td>#C6E2FF</td><td style="background-color: rgb(28, 28, 28);"></td><td>grey11</td><td>28 28 28</td><td>#1C1C1C</td></tr><tr><td style="background-color: rgb(185, 211, 238);"></td><td>SlateGray2</td><td>185 211 238</td><td>#B9D3EE</td><td style="background-color: rgb(54, 54, 54);"></td><td>grey21</td><td>54 54 54</td><td>#363636</td></tr><tr><td style="background-color: rgb(159, 182, 205);"></td><td>SlateGray3</td><td>159 182 205</td><td>#9FB6CD</td><td style="background-color: rgb(79, 79, 79);"></td><td>grey31</td><td>79 79 79</td><td>#4F4F4F</td></tr><tr><td style="background-color: rgb(108, 123, 139);"></td><td>SlateGray4</td><td>108 123 139</td><td>#6C7B8B</td><td style="background-color: rgb(105, 105, 105);"></td><td>grey41</td><td>105 105 105</td><td>#696969</td></tr><tr><td style="background-color: rgb(202, 225, 255);"></td><td>LightSteelBlue1</td><td>202 225 255</td><td>#CAE1FF</td><td style="background-color: rgb(130, 130, 130);"></td><td>grey51</td><td>130 130 130</td><td>#828282</td></tr><tr><td style="background-color: rgb(188, 210, 238);"></td><td>LightSteelBlue2</td><td>188 210 238</td><td>#BCD2EE</td><td style="background-color: rgb(156, 156, 156);"></td><td>grey61</td><td>156 156 156</td><td>#9C9C9C</td></tr><tr><td style="background-color: rgb(162, 181, 205);"></td><td>LightSteelBlue3</td><td>162 181 205</td><td>#A2B5CD</td><td style="background-color: rgb(181, 181, 181);"></td><td>grey71</td><td>181 181 181</td><td>#B5B5B5</td></tr><tr><td style="background-color: rgb(110, 123, 139);"></td><td>LightSteelBlue4</td><td>110 123 139</td><td>#6E7B8B</td><td style="background-color: rgb(207, 207, 207);"></td><td>gray81</td><td>207 207 207</td><td>#CFCFCF</td></tr><tr><td style="background-color: rgb(191, 239, 255);"></td><td>LightBlue1</td><td>191 239 255</td><td>#BFEFFF</td><td style="background-color: rgb(232, 232, 232);"></td><td>gray91</td><td>232 232 232</td><td>#E8E8E8</td></tr><tr><td style="background-color: rgb(178, 223, 238);"></td><td>LightBlue2</td><td>178 223 238</td><td>#B2DFEE</td><td style="background-color: rgb(169, 169, 169);"></td><td>DarkGrey</td><td>169 169 169</td><td>#A9A9A9</td></tr><tr><td style="background-color: rgb(154, 192, 205);"></td><td>LightBlue3</td><td>154 192 205</td><td>#9AC0CD</td><td style="background-color: rgb(0, 0, 139);"></td><td>DarkBlue</td><td>0 0 139</td><td>#00008B</td></tr><tr><td style="background-color: rgb(104, 131, 139);"></td><td>LightBlue4</td><td>104 131 139</td><td>#68838B</td><td style="background-color: rgb(0, 139, 139);"></td><td>DarkCyan</td><td>0 139 139</td><td>#008B8B</td></tr><tr><td style="background-color: rgb(224, 255, 255);"></td><td>LightCyan1</td><td>224 255 255</td><td>#E0FFFF</td><td style="background-color: rgb(139, 0, 139);"></td><td>DarkMagenta</td><td>139 0 139</td><td>#8B008B</td></tr><tr><td style="background-color: rgb(209, 238, 238);"></td><td>LightCyan2</td><td>209 238 238</td><td>#D1EEEE</td><td style="background-color: rgb(139, 0, 0);"></td><td>DarkRed</td><td>139 0 0</td><td>#8B0000</td></tr><tr><td style="background-color: rgb(180, 205, 205);"></td><td>LightCyan3</td><td>180 205 205</td><td>#B4CDCD</td><td style="background-color: rgb(144, 238, 144);"></td><td>LightGreen</td><td>144 238 144</td><td>#90EE90</td></tr><tr><td style="background-color: rgb(122, 139, 139);"></td><td>LightCyan4</td><td>122 139 139</td><td>#7A8B8B</td></tr></tbody></table></div></div><div class="alert alert alert-success alert-dismissible"><h4>在线RGB三原色,HEX16色转换</h4><p>HEX16色转换为RGB为您提供把RGB颜色在线转换,HEX16色转换为RGB,十六进制颜色,RGB,十六进制颜色与RGB互转,在线RGB三原色,HEX16色转换rgb。</p></div> <div class="accordion-group"> </div></div></div></div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><script src="/static/script/hightout.js"></script><script src="/static/script/pcjs/rgb.js" type="text/javascript"></script><div class="container" id="foot-history">
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