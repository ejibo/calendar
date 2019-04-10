<?php
/**
 * Created by PhpStorm.
 * User: 柳俊志
 * Date: 2019/4/9
 * Time: 18:44
 */

namespace app\whitelist\controller;
use think\Controller;
use think\Db;

class Add extends Controller
{
    public function index(){
        //table数据
        $info = Db::table('user_info')
            ->alias(['user_info' => 'ui', 'user_depart' => 'ud', 'user_position' => 'up'])
            ->where('ui.is_delete',0)
            ->where('ud.is_delete',0)
            ->where('up.is_delete',0)
            ->join('user_depart','ui.depart_id = ud.id')
            ->join('user_position','ui.position_id = up.id')
            ->field('ui.id,ui.name as ui_name,ui.work_id,ui.type_id,ui.depart_id,ui.position_id,ud.name as ud_name,up.name as up_name')
            ->select();



        foreach($info as $key=>$value){
            if ($info[$key]['type_id'] == 0){
                $info[$key]['type'] = '普通用户';
            }
             elseif ($info[$key]['type_id'] == 1){
                $info[$key]['type'] = '院领导';
            }elseif ($info[$key]['type_id'] == 2){
                $info[$key]['type'] = '部门领导';
            }elseif ($info[$key]['type_id'] == 3){
                $info[$key]['type'] = '系领导';
            }
        }

        $this->assign('info',$info);

        //添加人员模态框传值
        $depart = Db::table('user_depart')->where('is_delete',0)->field('id,name')->select();
        $position = Db::table('user_position')->where('is_delete',0)->field('id,name')->select();

        $this->assign('depart',$depart);
        $this->assign('position',$position);

        return $this->fetch();

    }

    public function addwhitelist(){
        $data = input('post.');
        if (empty($data['name']) || empty($data['work_id'])){
            $this->error('输入不可为空');
        }

        $exist_work_id = Db::table('user_info')->where('work_id',$data['work_id'])->find();
        if ($exist_work_id){
            $this->error('该工号已存在');
        }
        $is_add = Db::table('user_info')->insert($data);
        if ($is_add){
            $this->success('添加成功');
        }else{
            $this->error('添加'+$data['name']+'失败');
        }

    }

    public function delwhitelist(){
        $data = input('post.');
        $is_delete = Db::table('user_info')->where('id',$data['del_id'])
            ->update(['is_delete' => 1]);
        if($is_delete){
            $this->success('删除成功！');
        }

    }

    public function editwhitelist(){
        $data = input('post.');

        $is_add = Db::table('user_info')->where('id',$data['edit_id'])
            ->update(['name' => $data['name'],
                'work_id' => $data['work_id'],
                'type_id' => $data['type_id'],
                'depart_id' => $data['depart_id'],
                'position_id' => $data['position_id']]);
        if ($is_add){
            $this->success('修改成功！');
        }
    }
}