<?php /*a:4:{s:70:"/data/wwwroot/tool.ruyo.net/application/index/view/index/areacode.html";i:1633860274;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.areacode.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.areacode.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.areacode.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/tuya/">在线涂鸦画板</a></li><li role="presentation"><a href="/shizhong/">在线时钟</a></li><li role="presentation"><a href="/worldtime/">世界各地时间</a></li><li role="presentation"><a href="/capital/">世界各国首都查询</a></li><li role="presentation"><a href="/currency/">世界各地货币查询</a></li><li role="presentation" class="active"><a href="/areacode/">世界各国区号时差查询</a></li><li role="presentation"><a href="/jieri/">世界节日查询</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/shaoshuminzu/">全国少数民族分布查询</a></li><li role="presentation"><a href="/chaodai/">中国历史朝代时间查询表</a></li><li role="presentation"><a href="/tesufuhao/">特殊符号大全</a></li></ul></li></ul><div class="panel"><form id="form1" class="form-horizontal" onsubmit="Public.TableSearch($('#table_quhao'), $('#keyword').val());return false;"> <div class="form-group"> <label class="col-sm-2 control-label">关键词：</label> <div class="col-sm-10"> <input class="form-control" type="text" id="keyword" name="keyword" placeholder="输入关键词（区号,国家名称,域名后缀）"> </div> </div>
 	<div class="form-group">
		<div class="col-sm-12 text-center"><button type="button" class="btn btn-success" id="goSearch" onclick="Public.TableSearch($('#table_quhao'), $('#keyword').val())">查询</button> <input type="button" onclick="$('#keyword').val('');" value="清空" class="btn btn-default"></div>
	</div>	
</form> </div> <div class="accordion-group"> <div class="row"> <div class="col-sm-12">   
 <table id="table_quhao" class="table table-bordered table-striped table-hover"> <tbody> <tr> <th> Countries and Regions </th> <th> 国家或地区 </th> <th> 国际域名缩写 </th> <th> 电话代码 </th> <th> 时差 </th> </tr> <tr> <td> Angola </td> <td> 安哥拉 </td> <td> AO </td> <td> 244 </td> <td> -7 </td> </tr> <tr> <td> Afghanistan </td> <td> 阿富汗 </td> <td> AF </td> <td> 93 </td> <td> 0 </td> </tr> <tr> <td> Albania </td> <td> 阿尔巴尼亚 </td> <td> AL </td> <td> 355 </td> <td> -7 </td> </tr> <tr> <td> Algeria </td> <td> 阿尔及利亚 </td> <td> DZ </td> <td> 213 </td> <td> -8 </td> </tr> <tr> <td> Andorra </td> <td> 安道尔共和国 </td> <td> AD </td> <td> 376 </td> <td> -8 </td> </tr> <tr> <td> Anguilla </td> <td> 安圭拉岛 </td> <td> AI </td> <td> 1264 </td> <td> -12 </td> </tr> <tr> <td> Antigua and Barbuda </td> <td> 安提瓜和巴布达 </td> <td> AG </td> <td> 1268 </td> <td> -12 </td> </tr> <tr> <td> Argentina </td> <td> 阿根廷 </td> <td> AR </td> <td> 54 </td> <td> -11 </td> </tr> <tr> <td> Armenia </td> <td> 亚美尼亚 </td> <td> AM </td> <td> 374 </td> <td> -6 </td> </tr> <tr> <td> Ascension </td> <td> 阿森松 </td> <td> &nbsp; </td> <td> 247 </td> <td> -8 </td> </tr> <tr> <td> Australia </td> <td> 澳大利亚 </td> <td> AU </td> <td> 61 </td> <td> +2 </td> </tr> <tr> <td> Austria </td> <td> 奥地利 </td> <td> AT </td> <td> 43 </td> <td> -7 </td> </tr> <tr> <td> Azerbaijan </td> <td> 阿塞拜疆 </td> <td> AZ </td> <td> 994 </td> <td> -5 </td> </tr> <tr> <td> Bahamas </td> <td> 巴哈马 </td> <td> BS </td> <td> 1242 </td> <td> -13 </td> </tr> <tr> <td> Bahrain </td> <td> 巴林 </td> <td> BH </td> <td> 973 </td> <td> -5 </td> </tr> <tr> <td> Bangladesh </td> <td> 孟加拉国 </td> <td> BD </td> <td> 880 </td> <td> -2 </td> </tr> <tr> <td> Barbados </td> <td> 巴巴多斯 </td> <td> BB </td> <td> 1246 </td> <td> -12 </td> </tr> <tr> <td> Belarus </td> <td> 白俄罗斯 </td> <td> BY </td> <td> 375 </td> <td> -6 </td> </tr> <tr> <td> Belgium </td> <td> 比利时 </td> <td> BE </td> <td> 32 </td> <td> -7 </td> </tr> <tr> <td> Belize </td> <td> 伯利兹 </td> <td> BZ </td> <td> 501 </td> <td> -14 </td> </tr> <tr> <td> Benin </td> <td> 贝宁 </td> <td> BJ </td> <td> 229 </td> <td> -7 </td> </tr> <tr> <td> Bermuda Is. </td> <td> 百慕大群岛 </td> <td> BM </td> <td> 1441 </td> <td> -12 </td> </tr> <tr> <td> Bolivia </td> <td> 玻利维亚 </td> <td> BO </td> <td> 591 </td> <td> -12 </td> </tr> <tr> <td> Botswana </td> <td> 博茨瓦纳 </td> <td> BW </td> <td> 267 </td> <td> -6 </td> </tr> <tr> <td> Brazil </td> <td> 巴西 </td> <td> BR </td> <td> 55 </td> <td> -11 </td> </tr> <tr> <td> Brunei </td> <td> 文莱 </td> <td> BN </td> <td> 673 </td> <td> 0 </td> </tr> <tr> <td> Bulgaria </td> <td> 保加利亚 </td> <td> BG </td> <td> 359 </td> <td> -6 </td> </tr> <tr> <td> Burkina-faso </td> <td> 布基纳法索 </td> <td> BF </td> <td> 226 </td> <td> -8 </td> </tr> <tr> <td> Burma </td> <td> 缅甸 </td> <td> MM </td> <td> 95 </td> <td> -1.3 </td> </tr> <tr> <td> Burundi </td> <td> 布隆迪 </td> <td> BI </td> <td> 257 </td> <td> -6 </td> </tr> <tr> <td> Cameroon </td> <td> 喀麦隆 </td> <td> CM </td> <td> 237 </td> <td> -7 </td> </tr> <tr> <td> Canada </td> <td> 加拿大 </td> <td> CA </td> <td> 1 </td> <td> -13 </td> </tr> <tr> <td> Cayman Is. </td> <td> 开曼群岛 </td> <td> &nbsp; </td> <td> 1345 </td> <td> -13 </td> </tr> <tr> <td> Central African Republic </td> <td> 中非共和国 </td> <td> CF </td> <td> 236 </td> <td> -7 </td> </tr> <tr> <td> Chad </td> <td> 乍得 </td> <td> TD </td> <td> 235 </td> <td> -7 </td> </tr> <tr> <td> Chile </td> <td> 智利 </td> <td> CL </td> <td> 56 </td> <td> -13 </td> </tr> <tr> <td> China </td> <td> 中国 </td> <td> CN </td> <td> 86 </td> <td> 0 </td> </tr> <tr> <td> Colombia </td> <td> 哥伦比亚 </td> <td> CO </td> <td> 57 </td> <td> 0 </td> </tr> <tr> <td> Congo </td> <td> 刚果 </td> <td> CG </td> <td> 242 </td> <td> -7 </td> </tr> <tr> <td> Cook Is. </td> <td> 库克群岛 </td> <td> CK </td> <td> 682 </td> <td> -18.3 </td> </tr> <tr> <td> Costa Rica </td> <td> 哥斯达黎加 </td> <td> CR </td> <td> 506 </td> <td> -14 </td> </tr> <tr> <td> Cuba </td> <td> 古巴 </td> <td> CU </td> <td> 53 </td> <td> -13 </td> </tr> <tr> <td> Cyprus </td> <td> 塞浦路斯 </td> <td> CY </td> <td> 357 </td> <td> -6 </td> </tr> <tr> <td> Czech Republic </td> <td> 捷克 </td> <td> CZ </td> <td> 420 </td> <td> -7 </td> </tr> <tr> <td> Denmark </td> <td> 丹麦 </td> <td> DK </td> <td> 45 </td> <td> -7 </td> </tr> <tr> <td> Djibouti </td> <td> 吉布提 </td> <td> DJ </td> <td> 253 </td> <td> -5 </td> </tr> <tr> <td> Dominica Rep. </td> <td> 多米尼加共和国 </td> <td> DO </td> <td> 1890 </td> <td> -13 </td> </tr> <tr> <td> Ecuador </td> <td> 厄瓜多尔 </td> <td> EC </td> <td> 593 </td> <td> -13 </td> </tr> <tr> <td> Egypt </td> <td> 埃及 </td> <td> EG </td> <td> 20 </td> <td> -6 </td> </tr> <tr> <td> EI Salvador </td> <td> 萨尔瓦多 </td> <td> SV </td> <td> 503 </td> <td> -14 </td> </tr> <tr> <td height="17"> Estonia </td> <td height="17"> 爱沙尼亚 </td> <td height="17"> EE </td> <td height="17"> 372 </td> <td height="17"> -5 </td> </tr> <tr> <td> Ethiopia </td> <td> 埃塞俄比亚 </td> <td> ET </td> <td> 251 </td> <td> -5 </td> </tr> <tr> <td> Fiji </td> <td> 斐济 </td> <td> FJ </td> <td> 679 </td> <td> +4 </td> </tr> <tr> <td> Finland </td> <td> 芬兰 </td> <td> FI </td> <td> 358 </td> <td> -6 </td> </tr> <tr> <td> France </td> <td> 法国 </td> <td> FR </td> <td> 33 </td> <td> -8 </td> </tr> <tr> <td> French Guiana </td> <td> 法属圭亚那 </td> <td> GF </td> <td> 594 </td> <td> -12 </td> </tr> <tr> <td> Gabon </td> <td> 加蓬 </td> <td> GA </td> <td> 241 </td> <td> -7 </td> </tr> <tr> <td> Gambia </td> <td> 冈比亚 </td> <td> GM </td> <td> 220 </td> <td> -8 </td> </tr> <tr> <td> Georgia </td> <td> 格鲁吉亚 </td> <td> GE </td> <td> 995 </td> <td> 0 </td> </tr> <tr> <td> Germany </td> <td> 德国 </td> <td> DE </td> <td> 49 </td> <td> -7 </td> </tr> <tr> <td> Ghana </td> <td> 加纳 </td> <td> GH </td> <td> 233 </td> <td> -8 </td> </tr> <tr> <td> Gibraltar </td> <td> 直布罗陀 </td> <td> GI </td> <td> 350 </td> <td> -8 </td> </tr> <tr> <td> Greece </td> <td> 希腊 </td> <td> GR </td> <td> 30 </td> <td> -6 </td> </tr> <tr> <td> Grenada </td> <td> 格林纳达 </td> <td> GD </td> <td> 1809 </td> <td> -14 </td> </tr> <tr> <td> Guam </td> <td> 关岛 </td> <td> GU </td> <td> 1671 </td> <td> +2 </td> </tr> <tr> <td> Guatemala </td> <td> 危地马拉 </td> <td> GT </td> <td> 502 </td> <td> -14 </td> </tr> <tr> <td> Guinea </td> <td> 几内亚 </td> <td> GN </td> <td> 224 </td> <td> -8 </td> </tr> <tr> <td> Guyana </td> <td> 圭亚那 </td> <td> GY </td> <td> 592 </td> <td> -11 </td> </tr> <tr> <td> Haiti </td> <td> 海地 </td> <td> HT </td> <td> 509 </td> <td> -13 </td> </tr> <tr> <td> Honduras </td> <td> 洪都拉斯 </td> <td> HN </td> <td> 504 </td> <td> -14 </td> </tr> <tr> <td> Hongkong </td> <td> 香港 </td> <td> HK </td> <td> 852 </td> <td> 0 </td> </tr> <tr> <td> Hungary </td> <td> 匈牙利 </td> <td> HU </td> <td> 36 </td> <td> -7 </td> </tr> <tr> <td> Iceland </td> <td> 冰岛 </td> <td> IS </td> <td> 354 </td> <td> -9 </td> </tr> <tr> <td> India </td> <td> 印度 </td> <td> IN </td> <td> 91 </td> <td> -2.3 </td> </tr> <tr> <td> Indonesia </td> <td> 印度尼西亚 </td> <td> ID </td> <td> 62 </td> <td> -0.3 </td> </tr> <tr> <td> Iran </td> <td> 伊朗 </td> <td> IR </td> <td> 98 </td> <td> -4.3 </td> </tr> <tr> <td> Iraq </td> <td> 伊拉克 </td> <td> IQ </td> <td> 964 </td> <td> -5 </td> </tr> <tr> <td> Ireland </td> <td> 爱尔兰 </td> <td> IE </td> <td> 353 </td> <td> -4.3 </td> </tr> <tr> <td> Israel </td> <td> 以色列 </td> <td> IL </td> <td> 972 </td> <td> -6 </td> </tr> <tr> <td> Italy </td> <td> 意大利 </td> <td> IT </td> <td> 39 </td> <td> -7 </td> </tr> <tr> <td> Ivory Coast </td> <td> 科特迪瓦 </td> <td> &nbsp; </td> <td> 225 </td> <td> -6 </td> </tr> <tr> <td> Jamaica </td> <td> 牙买加 </td> <td> JM </td> <td> 1876 </td> <td> -12 </td> </tr> <tr> <td> Japan </td> <td> 日本 </td> <td> JP </td> <td> 81 </td> <td> +1 </td> </tr> <tr> <td> Jordan </td> <td> 约旦 </td> <td> JO </td> <td> 962 </td> <td> -6 </td> </tr> <tr> <td> Kampuchea (Cambodia ) </td> <td> 柬埔寨 </td> <td> KH </td> <td> 855 </td> <td> -1 </td> </tr> <tr> <td> Kazakstan </td> <td> 哈萨克斯坦 </td> <td> KZ </td> <td> 327 </td> <td> -5 </td> </tr> <tr> <td> Kenya </td> <td> 肯尼亚 </td> <td> KE </td> <td> 254 </td> <td> -5 </td> </tr> <tr> <td> Korea </td> <td> 韩国 </td> <td> KR </td> <td> 82 </td> <td> +1 </td> </tr> <tr> <td> Kuwait </td> <td> 科威特 </td> <td> KW </td> <td> 965 </td> <td> -5 </td> </tr> <tr> <td> Kyrgyzstan </td> <td> 吉尔吉斯坦 </td> <td> KG </td> <td> 331 </td> <td> -5 </td> </tr> <tr> <td> Laos </td> <td> 老挝 </td> <td> LA </td> <td> 856 </td> <td> -1 </td> </tr> <tr> <td> Latvia </td> <td> 拉脱维亚 </td> <td> LV </td> <td> 371 </td> <td> -5 </td> </tr> <tr> <td> Lebanon </td> <td> 黎巴嫩 </td> <td> LB </td> <td> 961 </td> <td> -6 </td> </tr> <tr> <td> Lesotho </td> <td> 莱索托 </td> <td> LS </td> <td> 266 </td> <td> -6 </td> </tr> <tr> <td> Liberia </td> <td> 利比里亚 </td> <td> LR </td> <td> 231 </td> <td> -8 </td> </tr> <tr> <td> Libya </td> <td> 利比亚 </td> <td> LY </td> <td> 218 </td> <td> -6 </td> </tr> <tr> <td> Liechtenstein </td> <td> 列支敦士登 </td> <td> LI </td> <td> 423 </td> <td> -7 </td> </tr> <tr> <td> Lithuania </td> <td> 立陶宛 </td> <td> LT </td> <td> 370 </td> <td> -5 </td> </tr> <tr> <td> Luxembourg </td> <td> 卢森堡 </td> <td> LU </td> <td> 352 </td> <td> -7 </td> </tr> <tr> <td> Macao </td> <td> 澳门 </td> <td> MO </td> <td> 853 </td> <td> 0 </td> </tr> <tr> <td> Madagascar </td> <td> 马达加斯加 </td> <td> MG </td> <td> 261 </td> <td> -5 </td> </tr> <tr> <td> Malawi </td> <td> 马拉维 </td> <td> MW </td> <td> 265 </td> <td> -6 </td> </tr> <tr> <td> Malaysia </td> <td> 马来西亚 </td> <td> MY </td> <td> 60 </td> <td> -0.5 </td> </tr> <tr> <td> Maldives </td> <td> 马尔代夫 </td> <td> MV </td> <td> 960 </td> <td> -7 </td> </tr> <tr> <td> Mali </td> <td> 马里 </td> <td> ML </td> <td> 223 </td> <td> -8 </td> </tr> <tr> <td> Malta </td> <td> 马耳他 </td> <td> MT </td> <td> 356 </td> <td> -7 </td> </tr> <tr> <td> Mariana Is </td> <td> 马里亚那群岛 </td> <td> &nbsp; </td> <td> 1670 </td> <td> +1 </td> </tr> <tr> <td> Martinique </td> <td> 马提尼克 </td> <td> &nbsp; </td> <td> 596 </td> <td> -12 </td> </tr> <tr> <td> Mauritius </td> <td> 毛里求斯 </td> <td> MU </td> <td> 230 </td> <td> -4 </td> </tr> <tr> <td> Mexico </td> <td> 墨西哥 </td> <td> MX </td> <td> 52 </td> <td> -15 </td> </tr> <tr> <td> Moldova, Republic of </td> <td> 摩尔多瓦 </td> <td> MD </td> <td> 373 </td> <td> -5 </td> </tr> <tr> <td> Monaco </td> <td> 摩纳哥 </td> <td> MC </td> <td> 377 </td> <td> -7 </td> </tr> <tr> <td> Mongolia </td> <td> 蒙古 </td> <td> MN </td> <td> 976 </td> <td> 0 </td> </tr> <tr> <td> Montserrat Is </td> <td> 蒙特塞拉特岛 </td> <td> MS </td> <td> 1664 </td> <td> -12 </td> </tr> <tr> <td> Morocco </td> <td> 摩洛哥 </td> <td> MA </td> <td> 212 </td> <td> -6 </td> </tr> <tr> <td> Mozambique </td> <td> 莫桑比克 </td> <td> MZ </td> <td> 258 </td> <td> -6 </td> </tr> <tr> <td> Namibia </td> <td> 纳米比亚 </td> <td> NA </td> <td> 264 </td> <td> -7 </td> </tr> <tr> <td> Nauru </td> <td> 瑙鲁 </td> <td> NR </td> <td> 674 </td> <td> +4 </td> </tr> <tr> <td> Nepal </td> <td> 尼泊尔 </td> <td> NP </td> <td> 977 </td> <td> -2.3 </td> </tr> <tr> <td> Netheriands Antilles </td> <td> 荷属安的列斯 </td> <td> &nbsp; </td> <td> 599 </td> <td> -12 </td> </tr> <tr> <td> Netherlands </td> <td> 荷兰 </td> <td> NL </td> <td> 31 </td> <td> -7 </td> </tr> <tr> <td> New Zealand </td> <td> 新西兰 </td> <td> NZ </td> <td> 64 </td> <td> +4 </td> </tr> <tr> <td> Nicaragua </td> <td> 尼加拉瓜 </td> <td> NI </td> <td> 505 </td> <td> -14 </td> </tr> <tr> <td> Niger </td> <td> 尼日尔 </td> <td> NE </td> <td> 227 </td> <td> -8 </td> </tr> <tr> <td> Nigeria </td> <td> 尼日利亚 </td> <td> NG </td> <td> 234 </td> <td> -7 </td> </tr> <tr> <td> North Korea </td> <td> 朝鲜 </td> <td> KP </td> <td> 850 </td> <td> +1 </td> </tr> <tr> <td> Norway </td> <td> 挪威 </td> <td> NO </td> <td> 47 </td> <td> -7 </td> </tr> <tr> <td> Oman </td> <td> 阿曼 </td> <td> OM </td> <td> 968 </td> <td> -4 </td> </tr> <tr> <td> Pakistan </td> <td> 巴基斯坦 </td> <td> PK </td> <td> 92 </td> <td> -2.3 </td> </tr> <tr> <td> Panama </td> <td> 巴拿马 </td> <td> PA </td> <td> 507 </td> <td> -13 </td> </tr> <tr> <td> Papua New Cuinea </td> <td> 巴布亚新几内亚 </td> <td> PG </td> <td> 675 </td> <td> +2 </td> </tr> <tr> <td> Paraguay </td> <td> 巴拉圭 </td> <td> PY </td> <td> 595 </td> <td> -12 </td> </tr> <tr> <td> Peru </td> <td> 秘鲁 </td> <td> PE </td> <td> 51 </td> <td> -13 </td> </tr> <tr> <td> Philippines </td> <td> 菲律宾 </td> <td> PH </td> <td> 63 </td> <td> 0 </td> </tr> <tr> <td> Poland </td> <td> 波兰 </td> <td> PL </td> <td> 48 </td> <td> -7 </td> </tr> <tr> <td> French Polynesia </td> <td> 法属玻利尼西亚 </td> <td> PF </td> <td> 689 </td> <td> +3 </td> </tr> <tr> <td> Portugal </td> <td> 葡萄牙 </td> <td> PT </td> <td> 351 </td> <td> -8 </td> </tr> <tr> <td> Puerto Rico </td> <td> 波多黎各 </td> <td> PR </td> <td> 1787 </td> <td> -12 </td> </tr> <tr> <td> Qatar </td> <td> 卡塔尔 </td> <td> QA </td> <td> 974 </td> <td> -5 </td> </tr> <tr> <td> Reunion </td> <td> 留尼旺 </td> <td> &nbsp; </td> <td> 262 </td> <td> -4 </td> </tr> <tr> <td> Romania </td> <td> 罗马尼亚 </td> <td> RO </td> <td> 40 </td> <td> -6 </td> </tr> <tr> <td> Russia </td> <td> 俄罗斯 </td> <td> RU </td> <td> 7 </td> <td> -5 </td> </tr> <tr> <td> Saint Lueia </td> <td> 圣卢西亚 </td> <td> LC </td> <td> 1758 </td> <td> -12 </td> </tr> <tr> <td> Saint Vincent </td> <td> 圣文森特岛 </td> <td> VC </td> <td> 1784 </td> <td> -12 </td> </tr> <tr> <td> Samoa Eastern </td> <td> 东萨摩亚(美) </td> <td> &nbsp; </td> <td> 684 </td> <td> -19 </td> </tr> <tr> <td> Samoa Western </td> <td> 西萨摩亚 </td> <td> &nbsp; </td> <td> 685 </td> <td> -19 </td> </tr> <tr> <td> San Marino </td> <td> 圣马力诺 </td> <td> SM </td> <td> 378 </td> <td> -7 </td> </tr> <tr> <td> Sao Tome and Principe </td> <td> 圣多美和普林西比 </td> <td> ST </td> <td> 239 </td> <td> -8 </td> </tr> <tr> <td> Saudi Arabia </td> <td> 沙特阿拉伯 </td> <td> SA </td> <td> 966 </td> <td> -5 </td> </tr> <tr> <td> Senegal </td> <td> 塞内加尔 </td> <td> SN </td> <td> 221 </td> <td> -8 </td> </tr> <tr> <td> Seychelles </td> <td> 塞舌尔 </td> <td> SC </td> <td> 248 </td> <td> -4 </td> </tr> <tr> <td> Sierra Leone </td> <td> 塞拉利昂 </td> <td> SL </td> <td> 232 </td> <td> -8 </td> </tr> <tr> <td> Singapore </td> <td> 新加坡 </td> <td> SG </td> <td> 65 </td> <td> +0.3 </td> </tr> <tr> <td> Slovakia </td> <td> 斯洛伐克 </td> <td> SK </td> <td> 421 </td> <td> -7 </td> </tr> <tr> <td> Slovenia </td> <td> 斯洛文尼亚 </td> <td> SI </td> <td> 386 </td> <td> -7 </td> </tr> <tr> <td height="18"> Solomon Is </td> <td height="18"> 所罗门群岛 </td> <td height="18"> SB </td> <td height="18"> 677 </td> <td height="18"> +3 </td> </tr> <tr> <td> Somali </td> <td> 索马里 </td> <td> SO </td> <td> 252 </td> <td> -5 </td> </tr> <tr> <td> South Africa </td> <td> 南非 </td> <td> ZA </td> <td> 27 </td> <td> -6 </td> </tr> <tr> <td> Spain </td> <td> 西班牙 </td> <td> ES </td> <td> 34 </td> <td> -8 </td> </tr> <tr> <td> Sri Lanka </td> <td> 斯里兰卡 </td> <td> LK </td> <td> 94 </td> <td> 0 </td> </tr> <tr> <td> St.Lucia </td> <td> 圣卢西亚 </td> <td> LC </td> <td> 1758 </td> <td> -12 </td> </tr> <tr> <td> St.Vincent </td> <td> 圣文森特 </td> <td> VC </td> <td> 1784 </td> <td> -12 </td> </tr> <tr> <td> Sudan </td> <td> 苏丹 </td> <td> SD </td> <td> 249 </td> <td> -6 </td> </tr> <tr> <td> Suriname </td> <td> 苏里南 </td> <td> SR </td> <td> 597 </td> <td> -11.3 </td> </tr> <tr> <td> Swaziland </td> <td> 斯威士兰 </td> <td> SZ </td> <td> 268 </td> <td> -6 </td> </tr> <tr> <td> Sweden </td> <td> 瑞典 </td> <td> SE </td> <td> 46 </td> <td> -7 </td> </tr> <tr> <td> Switzerland </td> <td> 瑞士 </td> <td> CH </td> <td> 41 </td> <td> -7 </td> </tr> <tr> <td> Syria </td> <td> 叙利亚 </td> <td> SY </td> <td> 963 </td> <td> -6 </td> </tr> <tr> <td> Taiwan </td> <td> 台湾省 </td> <td> TW </td> <td> 886 </td> <td> 0 </td> </tr> <tr> <td> Tajikstan </td> <td> 塔吉克斯坦 </td> <td> TJ </td> <td> 992 </td> <td> -5 </td> </tr> <tr> <td> Tanzania </td> <td> 坦桑尼亚 </td> <td> TZ </td> <td> 255 </td> <td> -5 </td> </tr> <tr> <td> Thailand </td> <td> 泰国 </td> <td> TH </td> <td> 66 </td> <td> -1 </td> </tr> <tr> <td> Togo </td> <td> 多哥 </td> <td> TG </td> <td> 228 </td> <td> -8 </td> </tr> <tr> <td> Tonga </td> <td> 汤加 </td> <td> TO </td> <td> 676 </td> <td> +4 </td> </tr> <tr> <td> Trinidad and Tobago </td> <td> 特立尼达和多巴哥 </td> <td> TT </td> <td> 1809 </td> <td> -12 </td> </tr> <tr> <td> Tunisia </td> <td> 突尼斯 </td> <td> TN </td> <td> 216 </td> <td> -7 </td> </tr> <tr> <td> Turkey </td> <td> 土耳其 </td> <td> TR </td> <td> 90 </td> <td> -6 </td> </tr> <tr> <td> Turkmenistan </td> <td> 土库曼斯坦 </td> <td> TM </td> <td> 993 </td> <td> -5 </td> </tr> <tr> <td> Uganda </td> <td> 乌干达 </td> <td> UG </td> <td> 256 </td> <td> -5 </td> </tr> <tr> <td> Ukraine </td> <td> 乌克兰 </td> <td> UA </td> <td> 380 </td> <td> -5 </td> </tr> <tr> <td> United Arab Emirates </td> <td> 阿拉伯联合酋长国 </td> <td> AE </td> <td> 971 </td> <td> -4 </td> </tr> <tr> <td> United Kiongdom </td> <td> 英国 </td> <td> GB </td> <td> 44 </td> <td> -8 </td> </tr> <tr> <td> United States of America </td> <td> 美国 </td> <td> US </td> <td> 1 </td> <td> -13 </td> </tr> <tr> <td> Uruguay </td> <td> 乌拉圭 </td> <td> UY </td> <td> 598 </td> <td> -10.3 </td> </tr> <tr> <td> Uzbekistan </td> <td> 乌兹别克斯坦 </td> <td> UZ </td> <td> 233 </td> <td> -5 </td> </tr> <tr> <td> Venezuela </td> <td> 委内瑞拉 </td> <td> VE </td> <td> 58 </td> <td> -12.3 </td> </tr> <tr> <td> Vietnam </td> <td> 越南 </td> <td> VN </td> <td> 84 </td> <td> -1 </td> </tr> <tr> <td> Yemen </td> <td> 也门 </td> <td> YE </td> <td> 967 </td> <td> -5 </td> </tr> <tr> <td> Yugoslavia </td> <td> 南斯拉夫 </td> <td> YU </td> <td> 381 </td> <td> -7 </td> </tr> <tr> <td> Zimbabwe </td> <td> 津巴布韦 </td> <td> ZW </td> <td> 263 </td> <td> -6 </td> </tr> <tr> <td> Zaire </td> <td> 扎伊尔 </td> <td> ZR </td> <td> 243 </td> <td> -7 </td> </tr> <tr> <td> Zambia </td> <td> 赞比亚 </td> <td> ZM </td> <td> 260 </td> <td> -6 </td> </tr> </tbody> </table> 
 </div> </div> </div>
</div></div><div class="accordion-group"><div class="in collapse bs-docs-demoexample"><h4>世界各国区号时差查询</h4><p>提供在线国际电话代码查询,国际域名缩写查询,国际区号查询,世界时差查询,国际电话区号查询,世界各国区号代码查询。</p></div></div> <div class="accordion-group"> </div></div></div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><script type="text/javascript">var Public={};Public.TableSearch=function(table,keyword){if(keyword){keyword=keyword.replace(/\s+/g,'')}if(!keyword){$('tr',table).each(function(){$(this).show()});return}var pattern=new RegExp(keyword),is_show=false,is_td=false,str='';$('tr',table).each(function(){is_show=false,is_td=false;$('td',this).each(function(){is_td=true;str=$(this).text().replace(/\s+/g,'');if(pattern.test(str)){is_show=true}});if(is_td){if(is_show){$(this).show()}else{$(this).hide()}}})}</script><div class="container" id="foot-history">
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