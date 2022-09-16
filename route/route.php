<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//后台域名
Route::domain('tooladmin.ruyo.net', 'admin');

//前台域名
Route::domain('tool.ruyo.net', function () {
    Route::domain('tool.ruyo.net', 'index');
    Route::rule('404', 'index/e404');
    //接口
    Route::rule('doapi', 'index/api');
    Route::rule('api', 'index/api');
    //静态页面
    Route::rule('ip/:ip', 'index/index?act=ip')->pattern(['ip' => '.*']);
    Route::rule(':act','index/index');
});

//Route::get('static', response()->code(404));
