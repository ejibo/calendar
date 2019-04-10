<?php
/**
 * Created by 03_group.
 */
namespace app\index\model;
use think\Model;
use think\Db;

class LogManage extends Model
{
    
    /**
     * 杨宇 董亚聪
     * 功能：记录企业微信端的登陆和操作日志
     * @param 
     * @uid：用户id
     * @type ：1登陆 2增加 3修改 4删除
     * @action：操作内容
     * @agent ：请求头字段
     * @ip ：对端ip
     * @return int|string
     */
 public function addLoginLog($uid, $type, $action, $agent, $ip){
     $data = ['user_id' => $uid, 'operate_type'=> $type, 'operate_time'=> date('Y-m-d H:i:s',time()),'operate_action' => $action, 'user_agent'=> $agent,'ip' => $ip];
     $res = Db::name('log_user')->insert($data);
     return $res;
 }
 
/**
     * 苏恒杰
     * 功能：插入新的日志数据到数据库
     * @param $uid,$action,$text,$ip
     * @return int|string
     */
 public function addMangerLog($uid,$opt_type,$action,$text,$ip){
     $data = ['user_id' => $uid,'operate_type'=>$opt_type,'operate_time'=> date('Y-m-d H:i:s',time()),'operate_action'=>$action,'user_agent'=>$text,'ip'=>$ip];
     $res = Db::name('log_user')->insert($data);
     return $res;
 }


 /**
     * 贺文鑫
     * 功能：根据本人的id号来查询日志
     * @param $uid
     * @return int
     */
public function getLogByUid($uid){
     $nameItem = Db::name('log_user')
         ->where('user_id',$uid)
          ->order("log_user.operate_time desc")
         ->find();
     return $nameItem;
 }
    
  /**
     * 链接查询 https://blog.csdn.net/weixin_42358094/article/details/81839243
     * 徐辉
     * 功能：查询所有日志
     * @param $uid
     * @return int
     */
public function getManagerLogList(){
    $list = Db::name('log_user')->field('user_info.*, log_user.*')
          ->join('user on work_id = log_user.user_id')  
          ->where("user.is_delete=0")
          ->order("log_user.operate_time desc")
          ->select();
     return $list;
 }
    
/* https://blog.csdn.net/luogan129/article/details/74687139
    https://blog.csdn.net/qq_40270754/article/details/86065307
    获取client ip
 */
/*function get_real_ip(){ 
    $ip=false; 
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){ 
        $ip=$_SERVER['HTTP_CLIENT_IP']; 
    }
    if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ 
        $ips=explode (', ', $_SERVER['HTTP_X_FORWARDED_FOR']); 
        if($ip){ array_unshift($ips, $ip); $ip=FALSE; }
        for ($i=0; $i < count($ips); $i++){
            if(!eregi ('^(10│172.16│192.168).', $ips[$i])){
                $ip=$ips[$i];
                break;
            }
        }
    }
    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']); 
}*/
}