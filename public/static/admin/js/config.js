const menu = [{
    "name": "首页",
    "icon": "&#xe68e;",
    "url": "index.html",
    "hidden": false,
    "list": []
}, {
    "name": "系统设置",
    "icon": "&#xe620;",
    "url": "",
    "hidden": false,
    "list": [{
        "name": "全局head",
        "url": "/web/index.html"
    }, {
        "name": "友情连接",
        "url": "/web/link.html"
    },{
        "name": "全局顶部",
        "url": "/web/header.html"
    }, {
        "name": "导航管理",
        "url": "/web/nav.html"
    }, {
        "name": "全局底部",
        "url": "/web/footer.html"
    }, {
        "name": "清除缓存",
        "url": "/index/web_cache.html"
    }, {
        "name": "文件管理",
        "url": "/file/index.html"
    }]
}, {
    "name": "退出登录",
    "icon": "&#xe65c;",
    "url": "/index/out.html",
    "list": []
}];

const config = {
    name: "Tool",
    menu: menu,
    version: 'v1.6',
    official:'/'
};

try {
    module.exports.name = "Tool";
    module.exports.menu = menu;
}catch (e){

}
