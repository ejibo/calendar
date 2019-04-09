<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function gotoScheduleArea(){
    	$list = DB::table('schedule_place')->where('is_delete',0)->select();
    	$this->assign('arealist',$list);
    	return $this->fetch('area');
    }

    public function searchPlaceInfo(){
    	//$param = Request::instance()->param();
    	//$pageCondition = $param['fromPageNum'].",".$param['everyPageNum'];
    	//获取地点总个数
		//$sumCount = Db::table('schedule_place')->count();
		//获取指定个数的地点信息
		//$list = DB::table('schedule_place')->limit($pageCondition)->select();

		//$merg = array_merge(array("content"=>$list),array("num"=>$sumCount));

    	$list = DB::table('schedule_place')->where('is_delete',0)->select();
    	var_dump($list);die();
		return $list;
    }

    //添加新地点
    public function addNewArea(){
    	$param = Request::instance()->param();
    	$area = trim($param['areaName']);
    	$temp = DB::table('schedule_place')->where('name',$area)->where('is_delete',0)->count();

    	if($temp != 0)
    		return 3;
    	$data = ['name'=>$area,'create_time'=>date("Y-m-d H:i:s",time()),'update_time'=>date("Y-m-d H:i:s",time()),'is_delete'=>0];
    	$info = DB::table('schedule_place')->insert($data);
    	if($info)
    		return 0;
    	else
    		return 1;
    }

    //删除地点信息
    public function deleteArea(){
    	$param = Request::instance()->param();
    	$id = trim($param['id']);
    	//$info = DB::table('schedule_place')->where('id',$id)->delete();
    	$info =Db::name('schedule_place')->where('id',$id)->update(['is_delete'=>1]);
    	if($info)
    		return 0;
    	else
    		return 1;
    }

    //修改地点信息
    public function changeArea(){
    	$param = Request::instance()->param();
    	$id = trim($param['id']);
    	$area = trim($param['area']);
    	//var_dump($area);die();
    	$temp = DB::table('schedule_place')->where('name',$area)->where('is_delete',0)->count();
    	if($temp != 0)
    		return 3;
    	$info =Db::name('schedule_place')->where('id',$id)->update(['name'=>$area]);
    	if($info)
    		return 0;
    	else
    		return 1;
    }

}
