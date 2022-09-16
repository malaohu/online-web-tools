<?php /*a:5:{s:69:"/data/wwwroot/tool.ruyo.net/application/index/view/index/capital.html";i:1633603258;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.capital.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.capital.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.capital.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/tuya/">在线涂鸦画板</a></li><li role="presentation"><a href="/shizhong/">在线时钟</a></li><li role="presentation"><a href="/worldtime/">世界各地时间</a></li><li role="presentation" class="active"><a href="/capital/">世界各国首都查询</a></li><li role="presentation"><a href="/currency/">世界各地货币查询</a></li><li role="presentation"><a href="/areacode/">世界各国区号时差查询</a></li><li role="presentation"><a href="/jieri/">世界节日查询</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/shaoshuminzu/">全国少数民族分布查询</a></li><li role="presentation"><a href="/chaodai/">中国历史朝代时间查询表</a></li><li role="presentation"><a href="/tesufuhao/">特殊符号大全</a></li></ul></li></ul><div class="panel"><form id="form1" class="form-horizontal" onsubmit="Public.TableSearch($('#table_shoudu'), $('#keyword').val());return false;"> <div class="form-group"> <label class="col-sm-2 control-label">关键词：</label> <div class="col-sm-10"> <input class="form-control" type="text" id="keyword" name="keyword" placeholder="请输入你要搜索的关键词"> </div> </div>
 	<div class="form-group">
		<div class="col-sm-12 text-center"><button type="button" class="btn btn-success" id="goSearch" onclick="Public.TableSearch($('#table_shoudu'), $('#keyword').val())">查询首都</button> <input type="button" onclick="$('#keyword').val('');" value="清空" class="btn btn-default"></div>
	</div>
	
</form> </div> <div class="accordion-group"> <div class="row"> <div class="col-sm-12"> <table id="table_shoudu" class="table table-bordered table-striped table-hover"> <tbody> <tr> <th> 国 家 名 称 </th> <th> 首&nbsp; 都 </th> </tr> <tr> <td> 中华人民共和国 People's Republic of China </td> <td> 北京 Beijing </td> </tr> <tr> <td> 蒙古 Mongolia </td> <td> 乌兰巴托 Elggydggmgj </td> </tr> <tr> <td> 朝鲜 Democratic People's Republic of Korea </td> <td> 平壤 Pyongyang </td> </tr> <tr> <td> 韩国 Republic of Korea </td> <td> 首尔 Seoul </td> </tr> <tr> <td> 日本 Japan </td> <td> 东京 Tokyo </td> </tr> <tr> <td> 菲律宾 Republic of the Philippines </td> <td> 马尼拉 Manila </td> </tr> <tr> <td> 印度尼西亚 Republic of Indonesia </td> <td> 雅加达 Jakarta </td> </tr> <tr> <td> 文莱 Brunei Darussalam </td> <td> 斯里巴加湾市 Bandar Seri Begawan </td> </tr> <tr> <td> 新加坡 Republic of Singapore </td> <td> 新加坡 Singapore </td> </tr> <tr> <td> 泰国 Kingdom of Thailand </td> <td> 曼谷 Bangkok </td> </tr> <tr> <td> 马来西亚 Malaysia </td> <td> 吉隆坡 Kuala Lumpur </td> </tr> <tr> <td> 越南 Socialist Republic of Vietnam </td> <td> 河内 Hanoi </td> </tr> <tr> <td> 老挝 Lao People's Democratic Republic </td> <td> 万象 Vientiane </td> </tr> <tr> <td> 柬埔寨 Kingdom of Cambodia </td> <td> 金边 Phnom Penh </td> </tr> <tr> <td> 缅甸 Union of Myanmar </td> <td> 仰光 Yangon </td> </tr> <tr> <td> 不丹 Kingdom of Bhutan </td> <td> 廷布 Thimphu </td> </tr> <tr> <td> 东帝汶 Democratic Republic of East Timor </td> <td> 帝力 Dili </td> </tr> <tr> <td> 尼泊尔 Kingdom of Nepal </td> <td> 加德满都 Kathmandu </td> </tr> <tr> <td> 印度 Republic of India </td> <td> 新德里 New Delhi </td> </tr> <tr> <td> 孟加拉国 People's Republic of Bangladesh </td> <td> 达卡 Dhaka </td> </tr> <tr> <td> 斯里兰卡 Democratic Socialist Republic of Sri Lanka </td> <td> 科伦坡 Colombo </td> </tr> <tr> <td> 马尔代夫 Republic of Maldives </td> <td> 马累 Male </td> </tr> <tr> <td> 巴基斯坦 Islamic Republic of Pakistan </td> <td> 伊斯兰堡 Islamabad </td> </tr> <tr> <td> 阿富汗 Islamic State of Afghanistan </td> <td> 喀布尔 Kabul </td> </tr> <tr> <td> 塔吉克斯坦 Republic of Tajikistan </td> <td> 杜尚别 Dushanbe </td> </tr> <tr> <td> 吉尔吉斯斯坦 Kyrgyz Republic </td> <td> 比什凯克 Bishkek </td> </tr> <tr> <td> 哈萨克斯坦 Republic of Kazakhstan </td> <td> 阿斯塔纳 Astana </td> </tr> <tr> <td> 乌兹别克期坦 Republic of Uzbekistan </td> <td> 塔什干 Tashkent </td> </tr> <tr> <td> 土库曼斯坦 Republic of Turkmenistan </td> <td> 阿什哈巴德 Ashgabat </td> </tr> <tr> <td> 伊朗 Islamic Republic of Iran </td> <td> 德黑兰 Tehran </td> </tr> <tr> <td> 伊拉克 Republic of Iraq </td> <td> 巴格达 Baghdad </td> </tr> <tr> <td> 科威特 State of Kuwait </td> <td> 科威特城 Kuwait </td> </tr> <tr> <td> 卡塔尔 State of Qatarc </td> <td> 多哈 Doha </td> </tr> <tr> <td> 阿拉伯联合酋长国 United Arab Emirates </td> <td> 阿布扎比 Abu Dhabi </td> </tr> <tr> <td> 巴林 Kingdom of Bahrain </td> <td> 麦纳麦 Manama </td> </tr> <tr> <td> 阿曼 Sultanate of Oman </td> <td> 马斯喀特 Muscat </td> </tr> <tr> <td> 也门 Republic of Yemen </td> <td> 萨那 Sanaa </td> </tr> <tr> <td> 沙特阿拉伯 Kingdom of Saudi Arabia </td> <td> 利雅得 Riyadh </td> </tr> <tr> <td> 约旦 Hashemite Kingdom of Jordan </td> <td> 安曼 Amman </td> </tr> <tr> <td> 巴勒斯坦 State of Palestine </td> <td> 耶路撒冷 Jerusalem </td> </tr> <tr> <td> 以色列 State of Israel </td> <td> 耶路撒冷 Jerusalem </td> </tr> <tr> <td> 叙利亚 Syrian Arab Republic </td> <td> 大马士革 Damascus </td> </tr> <tr> <td> 黎巴嫩 Lebanese Republic </td> <td> 贝鲁特 Beirut </td> </tr> <tr> <td> 塞浦路斯 Republic of Cyprus </td> <td> 尼科西亚 Nicosia </td> </tr> <tr> <td> 土耳其 Republic of Turkey </td> <td> 安卡拉 Ankara </td> </tr> <tr> <td> 阿塞拜疆 Republic of Azerbaijan </td> <td> 巴库 Baku </td> </tr> <tr> <td> 格鲁吉亚 Georgia </td> <td> 第比利斯 T'bilisi </td> </tr> <tr> <td> 亚美尼亚 Republic of Armenia </td> <td> 埃里温 Yerevan </td> </tr> <tr> <td> 挪威 Kingdom of Norway </td> <td> 奥斯路 Oslo </td> </tr> <tr> <td> 冰岛 Republic of Iceland </td> <td> 雷克雅未克 Reykjavik </td> </tr> <tr> <td> 瑞典 Kingdom of Sweden </td> <td> 斯德哥尔摩 Stockholm </td> </tr> <tr> <td> 芬兰 Republic of Finland </td> <td> 赫尔辛基 Helsinki </td> </tr> <tr> <td> 爱沙尼亚 Republic of Estonia </td> <td> 塔林 Tallinn </td> </tr> <tr> <td> 拉脱维亚 Republic of Latvia </td> <td> 里加 Riga </td> </tr> <tr> <td> 立陶宛 Republic of Lithuania </td> <td> 维尔纽斯 Vilnius </td> </tr> <tr> <td> 白俄罗斯 Republic of Belarus </td> <td> 明斯克 Minsk </td> </tr> <tr> <td> 俄罗斯 Russian Federation </td> <td> 莫斯科 Moscow </td> </tr> <tr> <td> 乌克兰 Ukraine </td> <td> 基辅 Kiev </td> </tr> <tr> <td> 摩尔多瓦 Republic of Moldova </td> <td> 基希讷乌 Chisinau </td> </tr> <tr> <td> 波兰 Republic of Poland </td> <td> 华沙 Warsaw </td> </tr> <tr> <td> 捷克 Czech Republic </td> <td> 布拉格Prague </td> </tr> <tr> <td> 斯洛伐克 Slovak Republic </td> <td> 布拉提斯拉发 Bratislava </td> </tr> <tr> <td> 匈牙利 Republic of Hungary </td> <td> 布达佩斯 Budapest </td> </tr> <tr> <td> 德国 Federal Republic of Germany </td> <td> 柏林 Berlin </td> </tr> <tr> <td> 英国 United kingdom of Great Britain and Northern Ireland </td> <td> 伦敦 London </td> </tr> <tr> <td> 爱尔兰 Ireland </td> <td> 都柏林 Dublin </td> </tr> <tr> <td> 丹麦 Kingdom of Denmark </td> <td> 哥本哈根 Copenhagen </td> </tr> <tr> <td> 荷兰 Kingdom of the Netherlands </td> <td> 阿姆斯特丹 Amsterdam </td> </tr> <tr> <td> 摩纳哥 Principality of Monaco </td> <td> 摩纳哥 Monaco </td> </tr> <tr> <td> 法国 French Republic </td> <td> 巴黎 Paris </td> </tr> <tr> <td> 比利时 Kingdom of Belgium </td> <td> 布鲁塞尔 Brussels </td> </tr> <tr> <td> 卢森堡 Grand Duchy of Luxembourg </td> <td> 卢森堡 Luxembourg </td> </tr> <tr> <td> 奥地利 Republic of Austria </td> <td> 维也纳 Vienna </td> </tr> <tr> <td> 瑞士 Swiss Confederation </td> <td> 伯尔尼 Bern </td> </tr> <tr> <td> 列支敦士登 Principality of Liechtenstein </td> <td> 瓦杜兹 Vaduz </td> </tr> <tr> <td> 西班牙 Kingdom of Spain </td> <td> 马德里 Madrid </td> </tr> <tr> <td> 安道尔 Principality of Andorra </td> <td> 安道尔 Andorra la Vella </td> </tr> <tr> <td> 葡萄牙 Portuguese Republic </td> <td> 里斯本 Lisbon </td> </tr> <tr> <td> 意大利 Italian Republic </td> <td> 罗马 Rome </td> </tr> <tr> <td> 马耳他 Republic of Malta </td> <td> 瓦莱塔 Bamako </td> </tr> <tr> <td> 圣马力诺 Republic of San Marino </td> <td> 圣马力诺 San Marino </td> </tr> <tr> <td> 梵蒂冈 Vatican City State </td> <td> 梵蒂冈城 Vatican City </td> </tr> <tr> <td> 斯洛文尼亚 Republic of Slovenia </td> <td> 卢布尔雅那 Ljubljana </td> </tr> <tr> <td> 克罗地亚 Republic of Croatia </td> <td> 萨格勒布 Zagreb </td> </tr> <tr> <td> 波斯尼亚和黑塞哥维那 Bosnia and Herzegovina </td> <td> 萨拉热窝 Sarajevo </td> </tr> <tr> <td> 南斯拉夫 Federal Republic of Yugoslavia </td> <td> 贝尔格莱德 Belgrade </td> </tr> <tr> <td> 马其顿 Republic of Macedonia </td> <td> 斯科普里 Skopje </td> </tr> <tr> <td> 阿尔巴尼亚 Republic of Albania </td> <td> 地拉那 Tirana </td> </tr> <tr> <td> 罗马尼亚 Romania </td> <td> 布加勒斯特 Bucharest </td> </tr> <tr> <td> 保加利亚 Republic of Bulgaria </td> <td> 索非亚 Sofia </td> </tr> <tr> <td> 希腊 Hellenic Republic </td> <td> 雅典 Athens </td> </tr> <tr> <td> 埃及 Arab Republic of Egypt </td> <td> 开罗 Cairo </td> </tr> <tr> <td> 苏丹 Republic of the Sudan </td> <td> 喀土穆 Khartoum </td> </tr> <tr> <td> 埃塞俄比亚 Federal Democratic Republic of Ethiopia </td> <td> 亚的斯亚贝巴 Addis Ababa </td> </tr> <tr> <td> 厄立特里亚 State of Eritrea </td> <td> 阿斯马拉 Asmara </td> </tr> <tr> <td> 吉布提 Republic of Djibouti </td> <td> 吉布提 Djibouti </td> </tr> <tr> <td> 索马里 Somali Republic </td> <td> 摩加迪沙 Mogadishu </td> </tr> <tr> <td> 利比亚 Socialist People's Libyan Arab Jamahiriya </td> <td> 的黎波里 Tripoli </td> </tr> <tr> <td> 阿尔及利亚 Democratic People's Republic of Algeria </td> <td> 阿尔及尔 Algiers </td> </tr> <tr> <td> 突尼斯 Republic of Tunisia </td> <td> 突尼斯 Tunis </td> </tr> <tr> <td> 摩洛哥 Kingdom of Morocco </td> <td> 拉巴特 Rabat </td> </tr> <tr> <td> 佛得角 Republic of Cape Verde </td> <td> 普拉亚 Praia </td> </tr> <tr> <td> 毛里塔尼亚 Islamic Republic of Mauritania </td> <td> 努瓦克肖特 Nouakchott </td> </tr> <tr> <td> 马里 Republic of Mali </td> <td> 巴马科 Bamako </td> </tr> <tr> <td> 塞内加尔 Republic of Senegal </td> <td> 达喀尔 Dakar </td> </tr> <tr> <td> 冈比亚 Republic of the Gambia </td> <td> 班珠尔 Banjul </td> </tr> <tr> <td> 几内亚比绍 Republic of Guinea-Bissau </td> <td> 比绍 Bissau </td> </tr> <tr> <td> 几内亚 Republic of Guinea </td> <td> 科纳克里 Conakry </td> </tr> <tr> <td> 塞拉利昂 Republic of Sierra Leone </td> <td> 弗里敦 Freetown </td> </tr> <tr> <td> 利比里亚 Republic of Liberia </td> <td> 蒙罗维亚 Monrovia </td> </tr> <tr> <td> 科特迪瓦 Republic of Cote d'Ivoire </td> <td> 亚穆苏克罗 Yamoussoukro </td> </tr> <tr> <td> 布基纳法索 Burkina Faso </td> <td> 瓦加杜古 Ouagadougou </td> </tr> <tr> <td> 尼日尔 Republic of Niger </td> <td> 尼亚美 Niamey </td> </tr> <tr> <td> 乍得 Republic of Chad </td> <td> 恩贾梅纳 N'Djamena </td> </tr> <tr> <td> 尼日利亚 Federal Republic of Nigeria </td> <td> 阿布贾 Abuja </td> </tr> <tr> <td> 加纳 Republic of Ghana </td> <td> 阿克拉 Accra </td> </tr> <tr> <td> 多哥 Togolese Republic </td> <td> 洛美 Lome </td> </tr> <tr> <td> 贝宁 Republic of Benin </td> <td> 波多诺伏 Porto-Novo </td> </tr> <tr> <td> 喀麦隆 Republic of Cameroon </td> <td> 雅温得 Yaounde </td> </tr> <tr> <td> 加蓬 Gabonese Republic </td> <td> 利伯维尔 Libreville </td> </tr> <tr> <td> 赤道几内亚 Republic of Equatorial Guinea </td> <td> 马拉博 Malabo </td> </tr> <tr> <td> 圣多美和普林西比 Democratic Republic of Sao Tome and Principe </td> <td> 圣多美 Sao Tome </td> </tr> <tr> <td> 中非 Central African Republic </td> <td> 班吉 Bangui </td> </tr> <tr> <td> 刚果 Republic of the Congo </td> <td> 布拉柴维尔 Brazzaville </td> </tr> <tr> <td> 刚果民主共和国 Democratic Republic of the Congo </td> <td> 金沙萨 Kinshasa </td> </tr> <tr> <td> 乌干达 Republic of Uganda </td> <td> 坎帕拉 Kampala </td> </tr> <tr> <td> 卢旺达 Republic of Rwanda </td> <td> 基加利 Kigali </td> </tr> <tr> <td> 布隆迪 Republic of Burundi </td> <td> 布琼布拉 Bujumbura </td> </tr> <tr> <td> 坦桑尼亚 United Republic of Tanzania </td> <td> 多多马 Dodoma </td> </tr> <tr> <td> 肯尼亚 Republic of Kenya </td> <td> 内罗华 Nairobi </td> </tr> <tr> <td> 安哥拉 Republic of Angola </td> <td> 罗安达 Luanda </td> </tr> <tr> <td> 赞比亚 Republic of Zambia </td> <td> 卢萨卡 Lusaka </td> </tr> <tr> <td> 马拉维 Republic of Malawi </td> <td> 利隆圭 Lilongwe </td> </tr> <tr> <td> 莫桑比克 Republic of Mozambique </td> <td> 马普托 Maputo </td> </tr> <tr> <td> 马达加斯加 Republic of Madagascar </td> <td> 塔那那利佛 Antananarivo </td> </tr> <tr> <td> 科摩罗 Union of the Comoros </td> <td> 莫罗尼 Moroni </td> </tr> <tr> <td> 塞舌尔 Republic of Seychelles </td> <td> 维多利亚 Victoria </td> </tr> <tr> <td> 毛里求斯 Republic of Mauritius </td> <td> 路易港 Port Louis </td> </tr> <tr> <td> 津巴布韦 Republic of Zimbabwe </td> <td> 哈拉雷 Harare </td> </tr> <tr> <td> 博茨瓦纳 Republic of Botswana </td> <td> 哈博罗内 Gaborone </td> </tr> <tr> <td> 纳米比亚 Republic of Namibia </td> <td> 温得和克 Windhoek </td> </tr> <tr> <td> 斯威士兰 Kingdom of Swaziland </td> <td> 姆巴巴内 Mbabane </td> </tr> <tr> <td> 莱索托 Kingdom of Lesotho </td> <td> 马塞卢 Maseru </td> </tr> <tr> <td> 南非 Republic of South Africa </td> <td> 比勒陀利亚 Cape Town </td> </tr> <tr> <td> 澳大利亚 Commonwealth of Australia </td> <td> 堪培拉 Canberra </td> </tr> <tr> <td> 巴布亚新几内亚 Independent State of Papua New Guinea </td> <td> 莫尔兹比港 Port Moresby </td> </tr> <tr> <td> 所罗门群岛 Solomon Islands </td> <td> 霍尼亚拉 Honiara </td> </tr> <tr> <td> 瓦努阿图 Republic of Vanuatu </td> <td> 维拉港 Port-Vila </td> </tr> <tr> <td> 新西兰 New Zealand </td> <td> 惠灵顿 Wellington </td> </tr> <tr> <td> 斐济 Republic of the Fiji Islands </td> <td> 苏瓦 Suva </td> </tr> <tr> <td> 汤加 Kingdom of Tonga </td> <td> 努库阿洛法 Nuku'alofa </td> </tr> <tr> <td> 瑙鲁 Republic of Nauru </td> <td> 亚伦 Yaren District </td> </tr> <tr> <td> 基里巴斯 Republic of Kiribati </td> <td> 塔拉瓦 Tarawa </td> </tr> <tr> <td> 图瓦卢 Tuvalu </td> <td> 富纳富提 Funafuti </td> </tr> <tr> <td> 萨摩亚 Independent State of Samoa </td> <td> 阿皮亚 Apia </td> </tr> <tr> <td> 密克罗尼西亚联邦 Federated States of Micronesia </td> <td> 帕利基尔 Palikir </td> </tr> <tr> <td> 马绍尔群岛 Republic of the Marshall Islands </td> <td> 马朱罗 Majuro </td> </tr> <tr> <td> 帕劳 Republic of Palau </td> <td> 科罗尔 Koror </td> </tr> <tr> <td> 加拿大 Canada </td> <td> 渥太华 Ottawa </td> </tr> <tr> <td> 美国 United States of America </td> <td> 华盛顿 Washington </td> </tr> <tr> <td> 墨西哥 United Mexican States </td> <td> 墨西哥城 Mexico City </td> </tr> <tr> <td> 危地马拉 Republic of Guatemala </td> <td> 危地马拉 Guatemala </td> </tr> <tr> <td> 伯利兹 Belize </td> <td> 贝尔莫潘 Belmopan </td> </tr> <tr> <td> 萨尔瓦多 Republic of El Salvador </td> <td> 圣萨尔瓦多 San Salvador </td> </tr> <tr> <td> 洪都拉斯 Republic of Honduras </td> <td> 特古西加尔巴 Tegucigalpa </td> </tr> <tr> <td> 尼加拉瓜 Republic of Nicaragua </td> <td> 马那瓜 Managua </td> </tr> <tr> <td> 哥斯达黎加 Republic of Costa Rica </td> <td> 圣何塞 San Jose </td> </tr> <tr> <td> 巴拿马 Republic of Panama </td> <td> 巴拿马城 Panama </td> </tr> <tr> <td> 古巴 Republic of Cuba </td> <td> 哈瓦那 Havana </td> </tr> <tr> <td> 巴哈马 Commonwealth of the Bahamas </td> <td> 拿骚 Nassau </td> </tr> <tr> <td> 海地 Republic of Haiti </td> <td> 太子港 Port-au-Prince </td> </tr> <tr> <td> 多米尼加共和国 Dominican Republic </td> <td> 圣多明各 Santo Domingo </td> </tr> <tr> <td> 牙买加 Jamaica </td> <td> 金斯敦 Kingston </td> </tr> <tr> <td> 圣基茨和尼维斯 Federation of Saint Kitts and Nevis </td> <td> 巴斯特尔 Basseterre </td> </tr> <tr> <td> 安提瓜和巴布达 Antigua and Barbuda </td> <td> 圣约翰 Saint John's </td> </tr> <tr> <td> 多米尼克 Commonwealth of Dominica </td> <td> 罗索 Roseau </td> </tr> <tr> <td> 圣卢西亚 Saint Lucia </td> <td> 卡斯特里 Castries </td> </tr> <tr> <td> 圣文森特和格林纳丁斯 Saint Vincent and the Grenadines </td> <td> 金斯敦 Kingstown </td> </tr> <tr> <td> 格林纳达 Grenada </td> <td> 圣乔治 Saint George's </td> </tr> <tr> <td> 巴巴多斯 Barbados </td> <td> 布里奇敦 Bridgetown </td> </tr> <tr> <td> 特立尼达和多巴哥 Republic of Trinidad and Tobago </td> <td> 西班牙港 Port-of-Spain </td> </tr> <tr> <td> 哥伦比亚 Republic of Colombia </td> <td> 波哥大 Bogota </td> </tr> <tr> <td> 厄瓜多尔 Republic of Ecuador </td> <td> 基多 Quito </td> </tr> <tr> <td> 委内瑞拉 Bolivarian Republic of Venezuela </td> <td> 加拉加斯 Caracas </td> </tr> <tr> <td> 圭亚那 Co-operative Republic of Guyana </td> <td> 乔治敦 Georgetown </td> </tr> <tr> <td> 苏里南 Republic of Suriname </td> <td> 帕拉马里博 aramaribo </td> </tr> <tr> <td> 秘鲁 Republic of Peru </td> <td> 利马 Lima </td> </tr> <tr> <td> 玻利维亚 Republic of Bolivia </td> <td> 苏克雷 Sucre </td> </tr> <tr> <td> 巴拉圭 Republic of Paraguay </td> <td> 亚松森 Asuncion </td> </tr> <tr> <td> 阿根廷 Argentine Republic </td> <td> 布宜诺斯艾利斯 Buenos Aires </td> </tr> <tr> <td> 乌拉圭 Oriental Republic of Uruguay </td> <td> 蒙得维的亚 Montevide </td> </tr> <tr> <td> 巴西 Federative Republic of Brazil </td> <td> 巴西利亚 Brasilia </td> </tr> <tr> <td> 智利 Republic of Chile </td> <td> 圣地亚哥 Santiago </td> </tr> </tbody> </table> </div> </div> </div>
</form></div></div><div class="accordion-group"><div class="in collapse bs-docs-demoexample"><h4>世界各国首都查询工具</h4><p>世界各国首都查询工具为您提供世界各国首都查询表,哪些城市是首都查询,世界各国首都大全,世界各国首都是哪个城市,世界各国首都查询表,全世界各国首都在线查询工具等。</p><p>如：北京，简称“京”，古称燕京、北平，是中华人民共和国首都、省级行政区、直辖市、国家中心城市、超大城市，国务院批复确定的中国政治中心、文化中心、国际交往中心、科技创新中心</p></div></div> <div class="accordion-group"> </div></div></div></div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><script type="text/javascript">var Public={};Public.TableSearch=function(table,keyword){if(keyword){keyword=keyword.replace(/\s+/g,'')}if(!keyword){$('tr',table).each(function(){$(this).show()});return}var pattern=new RegExp(keyword),is_show=false,is_td=false,str='';$('tr',table).each(function(){is_show=false,is_td=false;$('td',this).each(function(){is_td=true;str=$(this).text().replace(/\s+/g,'');if(pattern.test(str)){is_show=true}});if(is_td){if(is_show){$(this).show()}else{$(this).hide()}}})}</script><div class="container" id="foot-history">
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