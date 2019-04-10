<?php
namespace app\wxsched\controller;

use think\Controller;

class Sched extends Controller
{
    public function sched()
    {
        return $this->fetch();
    }
}