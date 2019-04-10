<?php
namespace app\userbase\controller;

use think\Controller;
use think\Request;
use think\Db;

class Usermanage extends Controller{

    public function user_base(){

        $userlist = Db::table('user_info')
            ->select();
        $this->assign("list", $userlist);
        return $this->fetch();
    }
}