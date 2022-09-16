# 在线工具源码

来源：https://hostloc.com/thread-976473-1-1.html

演示：https://tool.ruyo.net/


# 安装说明

Nginx+php必须7.4   无需数据库

运行目录设置 /public

宝塔面板内设置伪静态规则为 ThinkPHP

/route/route.php 设置前台跟后台地址

/config/admin.php 设置后台登录QQ号

前台和后台是用的两个单独的二级域名（当然顶级域名也是可以的），后台登陆要在/config/admin.php配置正确的管理员QQ号，用配置好的QQ扫码才能登陆后台，比如我/config/admin.php里面设置的QQ号是123456，那么必须用登陆123456的手机QQ打开后台域名扫码才能登陆后台

如果访问有任何问题，请取消防跨站设置或在public目录中文件.user.ini 删除，一般安装正确是不用的，请自行尝试。

尽量用宝塔安装。lnmp装这个工具太麻烦了