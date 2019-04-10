<?php
namespace app\index\controller;

use think\Controller;

/**
 * @author zhangbo 
 * 
 *
 * @return void
 */
class TimeLimit extends Controller
{

    public function timelimit()
    {
        if (isset($_POST['timelimit'])) {
            if (preg_match("/^[1-9][0-9]*$/", $_POST['timelimit'])) {

                //echo $_POST["timelimit"];
                // 生成一个PHP数组
                $data = array();
                $data['TimeLimit'] = $_POST["timelimit"];

                // 把PHP数组转成JSON字符串
                $json_string = json_encode($data);

                // 写入文件
                file_put_contents('config.json', $json_string);
            } else {
                $this->error('输入异常');
            }
        }

        return $this->fetch();
    }
}
