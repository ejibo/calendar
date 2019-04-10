<?php
namespace app\index\controller;
use think\Controller;

class Provisions extends Controller{
    public function index(){
        if (request()->isGet()) {
            $myfile = fopen("provisions.txt", "r") or die("Unable to open file!");
            $last = fread($myfile,filesize("provisions.txt"));
            fclose($myfile);
            $this->assign('last',$last);
            return $this->fetch();
        } elseif (request()->isPost()) {
            $data = input('textarea-input');
            $myfile = fopen("provisions.txt", "w") or die("Unable to open file!");
            $tag = fwrite($myfile, $data);
            fclose($myfile);
            if ($tag) {
                return json(['msg' => '成功！', 'code' => 1]);
            } else {
                return json(['msg' => '失败！', 'code' => 0]);
            }
        }
    }
}