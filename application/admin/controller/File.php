<?php

namespace app\admin\controller;

class File extends C
{
    public function index()
    {
        $this->islogin();
        $path = '../application/index/view/index/';
        $filename = scandir($path);
        $filelist = array();
        foreach ($filename as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            $filesize=filesize($path . '/' . $file)/pow(1024, 1);
            $modif = date('Y-m-d H:i:s', filemtime($path . '/' . $file));
            $filelist[]=[
                $file,
                $filesize,
                $modif
            ];
        }
        return $this->fetch('', [
            'filelist' => $filelist
        ]);
    }
    public function html()
    {
        $this->islogin();
        $file = input('file');
        $dir = '../application/index/view/index/'.$file;
        if(request()->isPost()){
            $Xcode = input('Xcode');
            file_put_contents($dir, $Xcode);
        }
        $link = file_get_contents($dir);
        return $this->fetch('', [
            'name'=>$file,
            'content'=>$link
        ]);
    }
}
