<?php

namespace app\admin\controller;

class Web extends C
{
    public function index()
    {
        $this->islogin();
        $web = config('web.');
        if(request()->isPost()){
            $web = input('web/a');
            $webconfig = "<?php\n".'return ' . var_export($web, true) . ';'."\n?>";
            file_put_contents('../config/web.php', $webconfig);
        }
        return $this->fetch('', [
            'web'=>$web,
            'content'=>$web['header']
        ]);
    }
    public function link()
    {
        $this->islogin();
        $dir = '../application/index/view/link.html';
        if(request()->isPost()){
            $Xcode = input('Xcode');
            file_put_contents($dir, $Xcode);
        }
        $link = file_get_contents($dir);
        return $this->fetch('', [
            'content'=>$link
        ]);
    }
    public function nav()
    {
        $this->islogin();
        $dir = '../application/index/view/nav.html';
        if(request()->isPost()){
            $Xcode = input('Xcode');
            file_put_contents($dir, $Xcode);
        }
        $link = file_get_contents($dir);
        return $this->fetch('', [
            'content'=>$link
        ]);
    }
    public function header()
    {
        $this->islogin();
        $dir = '../application/index/view/header.html';
        if(request()->isPost()){
            $Xcode = input('Xcode');
            file_put_contents($dir, $Xcode);
        }
        $link = file_get_contents($dir);
        return $this->fetch('', [
            'content'=>$link
        ]);
    }
    public function footer()
    {
        $this->islogin();
        $dir = '../application/index/view/footer.html';
        if(request()->isPost()){
            $Xcode = input('Xcode');
            file_put_contents($dir, $Xcode);
        }
        $link = file_get_contents($dir);
        return $this->fetch('', [
            'content'=>$link
        ]);
    }
}