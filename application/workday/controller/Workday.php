<?php
namespace app\workday\controller;
use think\Controller;
use app\index\model\ScheduleTime;
use think\Db;
use think\Request;

class Workday extends Controller
{	
	
    public function workday()
    {
    	/**
         * ThinkPHP版本为5.0.24
    	 * 测试index界面
    	 * by 第12组 黄捷
    	 */
        return $this->fetch('workday');
       /* return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 V1.1 - 为API开发设计的高性能框架</span></p><p>This is a test</p></div>';*/
    }

}
