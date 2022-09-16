<?php /*a:5:{s:67:"/data/wwwroot/tool.ruyo.net/application/index/view/index/jieri.html";i:1633603258;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.jieri.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.jieri.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.jieri.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/tuya/">在线涂鸦画板</a></li><li role="presentation"><a href="/shizhong/">在线时钟</a></li><li role="presentation"><a href="/worldtime/">世界各地时间</a></li><li role="presentation"><a href="/capital/">世界各国首都查询</a></li><li role="presentation"><a href="/currency/">世界各地货币查询</a></li><li role="presentation"><a href="/areacode/">世界各国区号时差查询</a></li><li role="presentation" class="active"><a href="/jieri/">世界节日查询</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/shaoshuminzu/">全国少数民族分布查询</a></li><li role="presentation"><a href="/chaodai/">中国历史朝代时间查询表</a></li><li role="presentation"><a href="/tesufuhao/">特殊符号大全</a></li></ul></li></ul><div class="panel"><form id="form1" class="form-horizontal" onsubmit="Public.TableSearch($('#table_jieri'), $('#keyword').val());return false;"> <div class="form-group"> <label class="col-sm-2 control-label">关键词：</label> <div class="col-sm-10"> <input class="form-control" type="text" id="keyword" name="keyword" placeholder="输入关键词"> </div> </div>
 	<div class="form-group">
		<div class="col-sm-12 text-center"><button type="button" class="btn btn-success" id="goSearch" onclick="Public.TableSearch($('#table_jieri'), $('#keyword').val())">查询节日</button> <input type="button" onclick="$('#keyword').val('');" value="清空" class="btn btn-default"></div>
	</div>	
</form> </div> <div class="accordion-group"> <div class="row"> <div class="col-sm-12">   
  <table id="table_jieri" class="table table-bordered table-striped table-hover"> <tbody> </tbody> <thead> <tr> <th colspan="2" style="text-align: center;"> 阳 历 节 日 </th> </tr> </thead> <tbody> <tr> <td width="160"> 1月1日 </td> <td> 元旦(New Year's Day) </td> </tr> <tr> <td> 1月 最后一个星期日 </td> <td> 国际麻风节 </td> </tr> <tr> <td> 2月2日 </td> <td> 世界湿地日(World Wetlands Day) </td> </tr> <tr> <td> 2月14日 </td> <td> 情人节(Valentine's Day) </td> </tr> <tr> <td> 3月3日 </td> <td> 全国爱耳日 </td> </tr> <tr> <td> 3月5日 </td> <td> 青年志愿者服务日 </td> </tr> <tr> <td> 3月8日 </td> <td> 国际妇女节(International Women' Day) </td> </tr> <tr> <td> 3月9日 </td> <td> 保护母亲河日 </td> </tr> <tr> <td> 3月12日 </td> <td> 中国植树节(China Arbor Day) </td> </tr> <tr> <td> 3月14日 </td> <td> 白色情人节(White Day) </td> </tr> <tr> <td> 3月14日 </td> <td> 国际警察日(International Policemen' Day) </td> </tr> <tr> <td> 3月15日 </td> <td> 世界消费者权益日(World Consumer Right Day) </td> </tr> <tr> <td> 3月21日 </td> <td> 世界森林日(World Forest Day) </td> </tr> <tr> <td> 3月21日 </td> <td> 世界睡眠日(World Sleep Day) </td> </tr> <tr> <td> 3月22日 </td> <td> 世界水日(World Water Day) </td> </tr> <tr> <td> 3月23日 </td> <td> 世界气象日(World Meteorological Day) </td> </tr> <tr> <td> 3月24日 </td> <td> 世界防治结核病日(World Tuberculosis Day) </td> </tr> <tr> <td> 3月 最后一个星期一 </td> <td> 中小学生安全教育日 </td> </tr> <tr> <td> 春分月圆后的 第一个星期日 </td> <td> 复活节(Easter Monday) (有可能是3月22—4月25日间的任一天) </td> </tr> <tr> <td> 4月1日 </td> <td> 愚人节(April Fools' Day) </td> </tr> <tr> <td> 4月5日 </td> <td> 清明节(Tomb-sweeping Day) </td> </tr> <tr> <td> 4月7日 </td> <td> 世界卫生日(World Health Day) </td> </tr> <tr> <td> 4月22日 </td> <td> 世界地球日(World Earth Day) </td> </tr> <tr> <td> 4月26日 </td> <td> 世界知识产权日(World Intellectual Property Day) </td> </tr> <tr> <td> 5月1日 </td> <td> 国际劳动节(International Labour Day) </td> </tr> <tr> <td> 5月3日 </td> <td> 世界哮喘日(World Asthma Day) </td> </tr> <tr> <td> 5月4日 </td> <td> 中国青年节(Chinese Youth Day) </td> </tr> <tr> <td> 5月8日 </td> <td> 世界红十字日(World Red-Cross Day) </td> </tr> <tr> <td> 5月12日 </td> <td> 国际护士节(International Nurse Day) </td> </tr> <tr> <td> 5月15日 </td> <td> 国际家庭日(International Family Day) </td> </tr> <tr> <td> 5月17日 </td> <td> 世界电信日(World Telecommunications Day) </td> </tr> <tr> <td> 5月20日 </td> <td> 全国学生营养日 </td> </tr> <tr> <td> 5月23日 </td> <td> 国际牛奶日(International Milk Day) </td> </tr> <tr> <td> 5月31日 </td> <td> 世界无烟日(World No-Smoking Day) </td> </tr> <tr> <td> 5月 第二个星期日 </td> <td> 母亲节(Mother's Day) </td> </tr> <tr> <td> 5月 第三个星期日 </td> <td> 全国助残日 </td> </tr> <tr> <td> 6月1日 </td> <td> 国际儿童节(International Children's Day) </td> </tr> <tr> <td> 6月5日 </td> <td> 世界环境日(International Environment Day) </td> </tr> <tr> <td> 6月6日 </td> <td> 全国爱眼日 </td> </tr> <tr> <td> 6月17日 </td> <td> 世界防治荒漠化和干旱日 (World Day to combat desertification) </td> </tr> <tr> <td> 6月23日 </td> <td> 国际奥林匹克日(International Olympic Day) </td> </tr> <tr> <td> 6月25日 </td> <td> 全国土地日 </td> </tr> <tr> <td> 6月26日 </td> <td> 国际禁毒日(International Day Against Drug Abuse and Illicit Trafficking) </td> </tr> <tr> <td> 6月 第三个星期日 </td> <td> 父亲节(Father's Day) </td> </tr> <tr> <td> 7月1日 </td> <td> 中国共产党诞生日(Anniversary of the Founding of the Chinese Communist Party) </td> </tr> <tr> <td> 7月1日 </td> <td> 国际建筑日(International Architecture Day) </td> </tr> <tr> <td> 7月7日 </td> <td> 中国人民抗日战争纪念日 </td> </tr> <tr> <td> 7月11日 </td> <td> 世界人口日(World Population Day) </td> </tr> <tr> <td> 8月1日 </td> <td> 中国人民解放军建军节(Army Day) </td> </tr> <tr> <td> 8月12日 </td> <td> 国际青年节(International Youth Day) </td> </tr> <tr> <td> 9月8日 </td> <td> 国际扫盲日(International Anti-illiteracy Day) </td> </tr> <tr> <td> 9月10日 </td> <td> 中国教师节(Teacher's Day) </td> </tr> <tr> <td> 9月16日 </td> <td> 中国脑健康日 </td> </tr> <tr> <td> 9月16日 </td> <td> 国际臭氧层保护日(International Day for the Preservation of the Ozone Layer) </td> </tr> <tr> <td> 9月20日 </td> <td> 全国爱牙日 </td> </tr> <tr> <td> 9月21日 </td> <td> 世界停火日(World Cease-fire Day) </td> </tr> <tr> <td> 9月27日 </td> <td> 世界旅游日(World Tourism Day) </td> </tr> <tr> <td> 9月 第三个星期二 </td> <td> 国际和平日(International Peace Day) </td> </tr> <tr> <td> 9月 第三个星期六 </td> <td> 全国国防教育日 </td> </tr> <tr> <td> 9月 第四个星期日 </td> <td> 国际聋人节(International Day of the Deaf) </td> </tr> <tr> <td> 10月1日 </td> <td> 中华人民共和国国庆节(National Day) </td> </tr> <tr> <td> 10月1日 </td> <td> 国际音乐日(International Music Day) </td> </tr> <tr> <td> 10月1日 </td> <td> 国际老年人日(International Day of Older Persons) </td> </tr> <tr> <td> 10月4日 </td> <td> 世界动物日(World Animal Day) </td> </tr> <tr> <td> 10月5日 </td> <td> 世界教师日(World Teachers' Day) </td> </tr> <tr> <td> 10月8日 </td> <td> 全国高血压日 </td> </tr> <tr> <td> 10月9日 </td> <td> 世界邮政日(World Post Day) </td> </tr> <tr> <td> 10月10日 </td> <td> 世界精神卫生日(World Mental Health Day) </td> </tr> <tr> <td> 10月14日 </td> <td> 世界标准日(World Standards Day) </td> </tr> <tr> <td> 10月15日 </td> <td> 国际盲人节(International Day of the Blind) </td> </tr> <tr> <td> 10月15日 </td> <td> 世界农村妇女日(World Rural Women's Day) </td> </tr> <tr> <td> 10月16日 </td> <td> 世界粮食日(World Food Day) </td> </tr> <tr> <td> 10月17日 </td> <td> 国际消除贫困日 (International Day for the Eradication of Poverty) </td> </tr> <tr> <td> 10月24日 </td> <td> 联合国日(United Nations Day) </td> </tr> <tr> <td> 10月24日 </td> <td> 世界发展新闻日 (World Development Information Day) </td> </tr> <tr> <td> 10月28日 </td> <td> 中国男性健康日 </td> </tr> <tr> <td> 10月31日 </td> <td> 万圣节(Halloween) </td> </tr> <tr> <td> 10月 第一个星期一 </td> <td> 世界住房日(World Habitat Day) </td> </tr> <tr> <td> 10月 第二个星期三 </td> <td> 国际减轻自然灾害日 (International Day for Natural Disaster Reduction) </td> </tr> <tr> <td> 10月 第二个星期四 </td> <td> 世界爱眼日(World Sight Day) </td> </tr> <tr> <td> 11月8日 </td> <td> 中国记者节 </td> </tr> <tr> <td> 11月9日 </td> <td> 消防宣传日 </td> </tr> <tr> <td> 11月14日 </td> <td> 世界糖尿病日(World Diabetes Day) </td> </tr> <tr> <td> 11月17日 </td> <td> 国际大学生节 </td> </tr> <tr> <td> 11月25日 </td> <td> 国际消除对妇女的暴力日(International Day For the elimination of Violence against Women) </td> </tr> <tr> <td> 12月1日 </td> <td> 世界爱滋病日(World AIDS Day) </td> </tr> <tr> <td> 12月3日 </td> <td> 世界残疾人日(World Disabled Day) </td> </tr> <tr> <td> 12月4日 </td> <td> 全国法制宣传日 </td> </tr> <tr> <td> 12月9日 </td> <td> 世界足球日(World Football Day) </td> </tr> <tr> <td> 12月25日 </td> <td> 圣诞节(Christmas Day) </td> </tr> <tr> <td> 12月29日 </td> <td> 国际生物多样性日(International Biological Diversity Day) </td> </tr> </tbody> <thead> <tr> <th colspan="2" style="text-align: center;"> 农 历 节 日 </th> </tr> </thead> <tbody> <tr> <td> 正月初一 </td> <td> 春节(the Spring Festival) </td> </tr> <tr> <td> 正月十五 </td> <td> 元宵节(Lantern Festival) </td> </tr> <tr> <td> 五月初五 </td> <td> 端午节(the Dragon-Boat Festival) </td> </tr> <tr> <td> 七月初七 </td> <td> 七夕节(Double-Seventh Day) </td> </tr> <tr> <td> 八月十五 </td> <td> 中秋节(the Mid-Autumn Festival) </td> </tr> <tr> <td> 九月初九 </td> <td> 重阳节(the Double Ninth Festival) </td> </tr> <tr> <td> 腊月初八 </td> <td> 腊八节(the laba Rice Porridge Festival) </td> </tr> <tr> <td> 腊月二十四 </td> <td> 传统扫房日 </td> </tr> </tbody> </table> 
 </div> </div> </div>
</div></div><div class="accordion-group"><div class="in collapse bs-docs-demoexample"><h4>世界节日查询</h4><p>提供阳历节日,农历节日,世界节日在线查询</p></div></div> <div class="accordion-group"> </div></div></div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><script type="text/javascript">var Public={};Public.TableSearch=function(table,keyword){if(keyword){keyword=keyword.replace(/\s+/g,'')}if(!keyword){$('tr',table).each(function(){$(this).show()});return}var pattern=new RegExp(keyword),is_show=false,is_td=false,str='';$('tr',table).each(function(){is_show=false,is_td=false;$('td',this).each(function(){is_td=true;str=$(this).text().replace(/\s+/g,'');if(pattern.test(str)){is_show=true}});if(is_td){if(is_show){$(this).show()}else{$(this).hide()}}})}</script><div class="container" id="foot-history">
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