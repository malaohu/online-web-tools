<?php

namespace app\admin\controller;
use \qqlogin\Qq;

class Index extends C
{
    public function index()
    {
        $this->islogin();
        return $this->fetch();
    }
    public function main()
    {
        $this->islogin();
        return $this->fetch();
    }
    public function web_cache()
    {
        $this->islogin();
        if(request()->isPost()) {
            deleteDir('../runtime');
            return 'ok';
        }
        return $this->fetch();
    }
    public function out(){
        session('login_qq', null);
        session('login_qqname', null);
        return $this->redirect('/index/login.html',302);
    }
    public function login()
    {
        $qq = session('login_qq');
        if($qq){
            return $this->redirect('/index.html',302);
        }
        $qq = new Qq;
        $r = $qq->qq();
        if(!$r['code']) exit('QQ登录出错了！');
        if(request()->isAjax()){
            $data = ['code'=>0];
            $qrsig = input('qrsig');
            if (empty($qrsig)) {
                $data['msg'] = 'qrsig不能为空';
            }
            $r = $qq->login($qrsig);
            if($r['code']==1){
                if(in_array($r['data']['qq'], $this->Administrator)){
                    session('login_qq', $r['data']['qq']);
                    session('login_qqname', $r['data']['name']);
                    $data['code']=1;
                    $data['msg']='登录成功';
                }else{
                    $data['msg']='没有权限！';
                }
            }
            return json($data);
        }
        return $this->fetch('', [
            'qrsig'=>$r['data']['qrsig'],
            'qrcode'=>$r['data']['qrcode']
        ]);
    }

}
