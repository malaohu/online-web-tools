<?php

namespace app\admin\controller;
use think\Controller;

class C extends Controller
{
    public function initialize()
    {
        //后台管理账号
        $this->Administrator = config('admin.Administrator');
    }
    public function islogin()
    {
        $qq = session('login_qq');
        $name = session('login_qqname');
        if(!$qq||!$name||!in_array($qq, $this->Administrator)){
            exit($this->redirect('/index/login.html',302));
        }
        $this->assign('qq', $qq);
        $this->assign('qqname', $name);
    }
}