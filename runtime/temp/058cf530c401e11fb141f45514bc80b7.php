<?php /*a:5:{s:76:"/data/wwwroot/tool.ruyo.net/application/index/view/index/androidkeycode.html";i:1633603258;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/header.html";i:1647761189;s:59:"/data/wwwroot/tool.ruyo.net/application/index/view/nav.html";i:1647761189;s:60:"/data/wwwroot/tool.ruyo.net/application/index/view/link.html";i:1647760721;s:62:"/data/wwwroot/tool.ruyo.net/application/index/view/footer.html";i:1647767959;}*/ ?>
<!DOCTYPE html><html lang="zh-CN"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /><title><?php echo htmlentities(app('config')->get('web.androidkeycode.title')); ?></title><meta name="applicable-device" content="pc,mobile" /><meta http-equiv="Cache-Control" content="no-transform" /><meta http-equiv="Cache-Control" content="no-siteapp" /><meta name="keywords" content="<?php echo htmlentities(app('config')->get('web.androidkeycode.keywords')); ?>" /><meta name="description" content="<?php echo htmlentities(app('config')->get('web.androidkeycode.description')); ?>" /><meta name="renderer" content="webkit" /><meta name="apple-mobile-web-app-capable" content="yes" /><link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon" /><link href="/static/style/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="/static/style/tool.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script><script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--><?php echo app('config')->get('web.header'); ?></head><body><div class="navbar navbar-default navbar-static-top navbar-fixed-top">
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
<ul class="nav nav-tabs hbflag"><li role="presentation"><a href="/img2base64/"> 图片转Base64</a></li><li role="presentation"><a href="/utf8/">UTF-8转GBK</a></li><li role="presentation"><a href="/unicode/">Unicode/ASCII转换</a></li><li role="presentation"><a href="/ascii/">ASCII编码/解码</a></li><li role="presentation"><a href="/urlencode/">URL编码/解码</a></li><li role="presentation"><a href="/navtiveunicode/">Native/Unicode编码转换</a></li><li role="presentation" class="active"><a href="/androidkeycode/">Android按键码</a></li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false">更多工具<span class="caret"> </span></a><ul class="dropdown-menu"><li role="presentation"><a href="/keyboardcode/">KeyCode键盘按键码</a></li><li role="presentation"><a href="/keyboardtest/">键盘测试工具</a></li></ul></li></ul><div class="panel"><h4>电话键</h4><div><table class="table table-bordered table-striped"><tbody><tr><td>KEYCODE_CALL</td><td>拨号键</td><td>5</td></tr><tr><td>KEYCODE_ENDCALL</td><td>挂机键</td><td>6</td></tr><tr><td>KEYCODE_HOME</td><td>按键Home</td><td>3</td></tr><tr><td>KEYCODE_MENU</td><td>菜单键</td><td>82</td></tr><tr><td>KEYCODE_BACK</td><td>返回键</td><td>4</td></tr><tr><td>KEYCODE_SEARCH</td><td>搜索键</td><td>84</td></tr><tr><td>KEYCODE_CAMERA</td><td>拍照键</td><td>27</td></tr><tr><td>KEYCODE_FOCUS</td><td>拍照对焦键</td><td>80</td></tr><tr><td>KEYCODE_POWER</td><td>电源键</td><td>26</td></tr><tr><td>KEYCODE_NOTIFICATION</td><td>通知键</td><td>83</td></tr><tr><td>KEYCODE_MUTE</td><td>话筒静音键</td><td>91</td></tr><tr><td>KEYCODE_VOLUME_MUTE</td><td>扬声器静音键</td><td>164</td></tr><tr><td>KEYCODE_VOLUME_UP</td><td>音量增加键</td><td>24</td></tr><tr><td>KEYCODE_VOLUME_DOWN</td><td>音量减小键</td><td>25</td></tr></tbody></table></div><h4>控制键</h4><div><table class="table table-bordered table-striped"><tbody><tr><td>KEYCODE_ENTER</td><td>回车键</td><td>66</td></tr><tr><td>KEYCODE_ESCAPE</td><td>ESC键</td><td>111</td></tr><tr><td>KEYCODE_DPAD_CENTER</td><td>导航键确定键</td><td>23</td></tr><tr><td>KEYCODE_DPAD_UP</td><td>导航键向上</td><td>19</td></tr><tr><td>KEYCODE_DPAD_DOWN</td><td>导航键向下</td><td>20</td></tr><tr><td>KEYCODE_DPAD_LEFT</td><td>导航键向左</td><td>21</td></tr><tr><td>KEYCODE_DPAD_RIGHT</td><td>导航键向右</td><td>22</td></tr><tr><td>KEYCODE_MOVE_HOME</td><td>光标移动到开始键</td><td>122</td></tr><tr><td>KEYCODE_MOVE_END</td><td>光标移动到末尾键</td><td>123</td></tr><tr><td>KEYCODE_PAGE_UP</td><td>向上翻页键</td><td>92</td></tr><tr><td>KEYCODE_PAGE_DOWN</td><td>向下翻页键</td><td>93</td></tr><tr><td>KEYCODE_DEL</td><td>退格键</td><td>67</td></tr><tr><td>KEYCODE_FORWARD_DEL</td><td>删除键</td><td>112</td></tr><tr><td>KEYCODE_INSERT</td><td>插入键</td><td>124</td></tr><tr><td>KEYCODE_TAB</td><td>Tab键</td><td>61</td></tr><tr><td>KEYCODE_NUM_LOCK</td><td>小键盘锁</td><td>143</td></tr><tr><td>KEYCODE_CAPS_LOCK</td><td>大写锁定键</td><td>115</td></tr><tr><td>KEYCODE_BREAK</td><td>Break/Pause键</td><td>121</td></tr><tr><td>KEYCODE_SCROLL_LOCK</td><td>滚动锁定键</td><td>116</td></tr><tr><td>KEYCODE_ZOOM_IN</td><td>放大键</td><td>168</td></tr><tr><td>KEYCODE_ZOOM_OUT</td><td>缩小键</td><td>169</td></tr></tbody></table></div><h4>组合键</h4><div><table class="table table-bordered table-striped"><tbody><tr><td>KEYCODE_ALT_LEFT</td><td>Alt+Left</td></tr><tr><td>KEYCODE_ALT_RIGHT</td><td>Alt+Right</td></tr><tr><td>KEYCODE_CTRL_LEFT</td><td>Control+Left</td></tr><tr><td>KEYCODE_CTRL_RIGHT</td><td>Control+Right</td></tr><tr><td>KEYCODE_SHIFT_LEFT</td><td>Shift+Left</td></tr><tr><td>KEYCODE_SHIFT_RIGHT</td><td>Shift+Right</td></tr></tbody></table></div><h4><a name="t6"></a>基本</h4><div><table class="table table-bordered table-striped"><tbody><tr><td>KEYCODE_0</td><td>按键'0'</td><td>7</td></tr><tr><td>KEYCODE_1</td><td>按键'1'</td><td>8</td></tr><tr><td>KEYCODE_2</td><td>按键'2'</td><td>9</td></tr><tr><td>KEYCODE_3</td><td>按键'3'</td><td>10</td></tr><tr><td>KEYCODE_4</td><td>按键'4'</td><td>11</td></tr><tr><td>KEYCODE_5</td><td>按键'5'</td><td>12</td></tr><tr><td>KEYCODE_6</td><td>按键'6'</td><td>13</td></tr><tr><td>KEYCODE_7</td><td>按键'7'</td><td>14</td></tr><tr><td>KEYCODE_8</td><td>按键'8'</td><td>15</td></tr><tr><td>KEYCODE_9</td><td>按键'9'</td><td>16</td></tr><tr><td>KEYCODE_A</td><td>按键'A'</td><td>29</td></tr><tr><td>KEYCODE_B</td><td>按键'B'</td><td>30</td></tr><tr><td>KEYCODE_C</td><td>按键'C'</td><td>31</td></tr><tr><td>KEYCODE_D</td><td>按键'D'</td><td>32</td></tr><tr><td>KEYCODE_E</td><td>按键'E'</td><td>33</td></tr><tr><td>KEYCODE_F</td><td>按键'F'</td><td>34</td></tr><tr><td>KEYCODE_G</td><td>按键'G'</td><td>35</td></tr><tr><td>KEYCODE_H</td><td>按键'H'</td><td>36</td></tr><tr><td>KEYCODE_I</td><td>按键'I'</td><td>37</td></tr><tr><td>KEYCODE_J</td><td>按键'J'</td><td>38</td></tr><tr><td>KEYCODE_K</td><td>按键'K'</td><td>39</td></tr><tr><td>KEYCODE_L</td><td>按键'L'</td><td>40</td></tr><tr><td>KEYCODE_M</td><td>按键'M'</td><td>41</td></tr><tr><td>KEYCODE_N</td><td>按键'N'</td><td>42</td></tr><tr><td>KEYCODE_O</td><td>按键'O'</td><td>43</td></tr><tr><td>KEYCODE_P</td><td>按键'P'</td><td>44</td></tr><tr><td>KEYCODE_Q</td><td>按键'Q'</td><td>45</td></tr><tr><td>KEYCODE_R</td><td>按键'R'</td><td>46</td></tr><tr><td>KEYCODE_S</td><td>按键'S'</td><td>47</td></tr><tr><td>KEYCODE_T</td><td>按键'T'</td><td>48</td></tr><tr><td>KEYCODE_U</td><td>按键'U'</td><td>49</td></tr><tr><td>KEYCODE_V</td><td>按键'V'</td><td>50</td></tr><tr><td>KEYCODE_W</td><td>按键'W'</td><td>51</td></tr><tr><td>KEYCODE_X</td><td>按键'X'</td><td>52</td></tr><tr><td>KEYCODE_Y</td><td>按键'Y'</td><td>53</td></tr><tr><td>KEYCODE_Z</td><td>按键'Z'</td><td>54</td></tr></tbody></table></div><h4>符号</h4><div><table class="table table-bordered table-striped"><tbody><tr><td>KEYCODE_PLUS</td><td>按键'+'</td></tr><tr><td>KEYCODE_MINUS</td><td>按键'-'</td></tr><tr><td>KEYCODE_STAR</td><td>按键'*'</td></tr><tr><td>KEYCODE_SLASH</td><td>按键'/'</td></tr><tr><td>KEYCODE_EQUALS</td><td>按键'='</td></tr><tr><td>KEYCODE_AT</td><td>按键'@'</td></tr><tr><td>KEYCODE_POUND</td><td>按键'#'</td></tr><tr><td>KEYCODE_APOSTROPHE</td><td>按键''' (单引号)
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_BACKSLASH
					</td>
					<td>
						按键'\'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_COMMA
					</td>
					<td>
						按键','
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_PERIOD
					</td>
					<td>
						按键'.'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_LEFT_BRACKET
					</td>
					<td>
						按键'['
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_RIGHT_BRACKET
					</td>
					<td>
						按键']'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_SEMICOLON
					</td>
					<td>
						按键';'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_GRAVE
					</td>
					<td>
						按键'`'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_SPACE
					</td>
					<td>
						空格键
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<h4>
		小键盘
	</h4>
	<div>
		<table class="table table-bordered table-striped">
			<tbody>
				<tr>
					<td>
						KEYCODE_NUMPAD_0
					</td>
					<td>
						小键盘按键'0'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_1
					</td>
					<td>
						小键盘按键'1'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_2
					</td>
					<td>
						小键盘按键'2'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_3
					</td>
					<td>
						小键盘按键'3'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_4
					</td>
					<td>
						小键盘按键'4'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_5
					</td>
					<td>
						小键盘按键'5'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_6
					</td>
					<td>
						小键盘按键'6'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_7
					</td>
					<td>
						小键盘按键'7'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_8
					</td>
					<td>
						小键盘按键'8'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_9
					</td>
					<td>
						小键盘按键'9'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_ADD
					</td>
					<td>
						小键盘按键
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_SUBTRACT
					</td>
					<td>
						小键盘按键'-'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_MULTIPLY
					</td>
					<td>
						小键盘按键'*'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_DIVIDE
					</td>
					<td>
						小键盘按键'/'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_EQUALS
					</td>
					<td>
						小键盘按键'='
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_COMMA
					</td>
					<td>
						小键盘按键','
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_DOT
					</td>
					<td>
						小键盘按键'.'
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_LEFT_PAREN
					</td>
					<td>
						小键盘按键'('
					</td>
				</tr>
				<tr>
					<td>
						KEYCODE_NUMPAD_RIGHT_PAREN
					</td>
					<td>
						小键盘按键')'</td></tr><tr><td>KEYCODE_NUMPAD_ENTER</td><td>小键盘按键回车</td></tr></tbody></table></div><h4>功能键</h4><div><table class="table table-bordered table-striped"><tbody><tr><td>KEYCODE_F1</td><td>按键F1</td></tr><tr><td>KEYCODE_F2</td><td>按键F2</td></tr><tr><td>KEYCODE_F3</td><td>按键F3</td></tr><tr><td>KEYCODE_F4</td><td>按键F4</td></tr><tr><td>KEYCODE_F5</td><td>按键F5</td></tr><tr><td>KEYCODE_F6</td><td>按键F6</td></tr><tr><td>KEYCODE_F7</td><td>按键F7</td></tr><tr><td>KEYCODE_F8</td><td>按键F8</td></tr><tr><td>KEYCODE_F9</td><td>按键F9</td></tr><tr><td>KEYCODE_F10</td><td>按键F10</td></tr><tr><td>KEYCODE_F11</td><td>按键F11</td></tr><tr><td>KEYCODE_F12</td><td>按键F12</td></tr></tbody></table></div><h4>多媒体键</h4><div><table class="table table-bordered table-striped"><tbody><tr><td>KEYCODE_MEDIA_PLAY</td><td>多媒体键播放</td></tr><tr><td>KEYCODE_MEDIA_STOP</td><td>多媒体键停止</td></tr><tr><td>KEYCODE_MEDIA_PAUSE</td><td>多媒体键暂停</td></tr><tr><td>KEYCODE_MEDIA_PLAY_PAUSE</td><td>多媒体键播放/暂停</td></tr><tr><td>KEYCODE_MEDIA_FAST_FORWARD</td><td>多媒体键快进</td></tr><tr><td>KEYCODE_MEDIA_REWIND</td><td>多媒体键快退</td></tr><tr><td>KEYCODE_MEDIA_NEXT</td><td>多媒体键下一首</td></tr><tr><td>KEYCODE_MEDIA_PREVIOUS</td><td>多媒体键上一首</td></tr><tr><td>KEYCODE_MEDIA_CLOSE</td><td>多媒体键关闭</td></tr><tr><td>KEYCODE_MEDIA_EJECT</td><td>多媒体键弹出</td></tr><tr><td>KEYCODE_MEDIA_RECORD</td><td>多媒体键录音</td></tr></tbody></table></div><h4>手柄按键</h4><div><table class="table table-bordered table-striped"><tbody><tr><td>KEYCODE_BUTTON_1</td><td>通用游戏手柄按钮#1</td></tr><tr><td>KEYCODE_BUTTON_2</td><td>通用游戏手柄按钮#2</td></tr><tr><td>KEYCODE_BUTTON_3</td><td>通用游戏手柄按钮#3</td></tr><tr><td>KEYCODE_BUTTON_4</td><td>通用游戏手柄按钮#4</td></tr><tr><td>KEYCODE_BUTTON_5</td><td>通用游戏手柄按钮#5</td></tr><tr><td>KEYCODE_BUTTON_6</td><td>通用游戏手柄按钮#6</td></tr><tr><td>KEYCODE_BUTTON_7</td><td>通用游戏手柄按钮#7</td></tr><tr><td>KEYCODE_BUTTON_8</td><td>通用游戏手柄按钮#8</td></tr><tr><td>KEYCODE_BUTTON_9</td><td>通用游戏手柄按钮#9</td></tr><tr><td>KEYCODE_BUTTON_10</td><td>通用游戏手柄按钮#10</td></tr><tr><td>KEYCODE_BUTTON_11</td><td>通用游戏手柄按钮#11</td></tr><tr><td>KEYCODE_BUTTON_12</td><td>通用游戏手柄按钮#12</td></tr><tr><td>KEYCODE_BUTTON_13</td><td>通用游戏手柄按钮#13</td></tr><tr><td>KEYCODE_BUTTON_14</td><td>通用游戏手柄按钮#14</td></tr><tr><td>KEYCODE_BUTTON_15</td><td>通用游戏手柄按钮#15</td></tr><tr><td>KEYCODE_BUTTON_16</td><td>通用游戏手柄按钮#16</td></tr><tr><td>KEYCODE_BUTTON_A</td><td>游戏手柄按钮A</td></tr><tr><td>KEYCODE_BUTTON_B</td><td>游戏手柄按钮B</td></tr><tr><td>KEYCODE_BUTTON_C</td><td>游戏手柄按钮C</td></tr><tr><td>KEYCODE_BUTTON_X</td><td>游戏手柄按钮X</td></tr><tr><td>KEYCODE_BUTTON_Y</td><td>游戏手柄按钮Y</td></tr><tr><td>KEYCODE_BUTTON_Z</td><td>游戏手柄按钮Z</td></tr><tr><td>KEYCODE_BUTTON_L1</td><td>游戏手柄按钮L1</td></tr><tr><td>KEYCODE_BUTTON_L2</td><td>游戏手柄按钮L2</td></tr><tr><td>KEYCODE_BUTTON_R1</td><td>游戏手柄按钮R1</td></tr><tr><td>KEYCODE_BUTTON_R2</td><td>游戏手柄按钮R2</td></tr><tr><td>KEYCODE_BUTTON_MODE</td><td>游戏手柄按钮Mode</td></tr><tr><td>KEYCODE_BUTTON_SELECT</td><td>游戏手柄按钮Select</td></tr><tr><td>KEYCODE_BUTTON_START</td><td>游戏手柄按钮Start</td></tr><tr><td>KEYCODE_BUTTON_THUMBL</td><td>Left Thumb Button</td></tr><tr><td>KEYCODE_BUTTON_THUMBR</td><td>Right Thumb Button</td></tr></tbody></table></div><h4><a name="t18"></a>待查</h4><table class="table table-bordered table-striped"><tbody><tr><td>KEYCODE_NUM</td><td>按键Number modifier</td></tr><tr><td>KEYCODE_INFO</td><td>按键Info</td></tr><tr><td>KEYCODE_APP_SWITCH</td><td>按键App switch</td></tr><tr><td>KEYCODE_BOOKMARK</td><td>按键Bookmark</td></tr><tr><td>KEYCODE_AVR_INPUT</td><td>按键A/V Receiver input</td></tr><tr><td>KEYCODE_AVR_POWER</td><td>按键A/V Receiver power</td></tr><tr><td>KEYCODE_CAPTIONS</td><td>按键Toggle captions</td></tr><tr><td>KEYCODE_CHANNEL_DOWN</td><td>按键Channel down</td></tr><tr><td>KEYCODE_CHANNEL_UP</td><td>按键Channel up</td></tr><tr><td>KEYCODE_CLEAR</td><td>按键Clear</td></tr><tr><td>KEYCODE_DVR</td><td>按键DVR</td></tr><tr><td>KEYCODE_ENVELOPE</td><td>按键Envelope special function</td></tr><tr><td>KEYCODE_EXPLORER</td><td>按键Explorer special function</td></tr><tr><td>KEYCODE_FORWARD</td><td>按键Forward</td></tr><tr><td>KEYCODE_FORWARD_DEL</td><td>按键Forward Delete</td></tr><tr><td>KEYCODE_FUNCTION</td><td>按键Function modifier</td></tr><tr><td>KEYCODE_GUIDE</td><td>按键Guide</td></tr><tr><td>KEYCODE_HEADSETHOOK</td><td>按键Headset Hook</td></tr><tr><td>KEYCODE_META_LEFT</td><td>按键Left Meta modifier</td></tr><tr><td>KEYCODE_META_RIGHT</td><td>按键Right Meta modifier</td></tr><tr><td>KEYCODE_PICTSYMBOLS</td><td>按键Picture Symbols modifier</td></tr><tr><td>KEYCODE_PROG_BLUE</td><td>按键Blue“programmable”</td></tr><tr><td>KEYCODE_PROG_GREEN</td><td>按键Green“programmable”</td></tr><tr><td>KEYCODE_PROG_RED</td><td>按键Red“programmable”</td></tr><tr><td>KEYCODE_PROG_YELLOW</td><td>按键Yellow“programmable”</td></tr><tr><td>KEYCODE_SETTINGS</td><td>按键Settings</td></tr><tr><td>KEYCODE_SOFT_LEFT</td><td>按键Soft Left</td></tr><tr><td>KEYCODE_SOFT_RIGHT</td><td>按键Soft Right</td></tr><tr><td>KEYCODE_STB_INPUT</td><td>按键Set-top-box input</td></tr><tr><td>KEYCODE_STB_POWER</td><td>按键Set-top-box power</td></tr><tr><td>KEYCODE_SWITCH_CHARSET</td><td>按键Switch Charset modifier</td></tr><tr><td>KEYCODE_SYM</td><td>按键Symbol modifier</td></tr><tr><td>KEYCODE_SYSRQ</td><td>按键System Request/Print Screen</td></tr><tr><td>KEYCODE_TV</td><td>按键TV</td></tr><tr><td>KEYCODE_TV_INPUT</td><td>按键TV input</td></tr><tr><td>KEYCODE_TV_POWER</td><td>按键TV power</td></tr><tr><td>KEYCODE_WINDOW</td><td>按键Window</td></tr><tr><td>KEYCODE_UNKNOWN</td><td>未知按键</td></tr></tbody></table></div></div></div><div class="accordion-group"><div class="in collapse bs-docs-demoexample"><h4>Android KeyCode对照表工具</h4><p>Android KeyCode对照表工具提供Android KeyCode键盘按键码在线获取,在线获取KeyCode按键码,在线提取Android KeyCode码。</p></div></div> <div class="accordion-group"> </div></div></div></div></div><script src="/static/script/jquery-1.11.3.min.js" type="text/javascript"></script><script src="/static/script/bootstrap.min.js" type="text/javascript"></script><script src="/static/script/tool.js" type="text/javascript"></script><div class="container" id="foot-history">
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