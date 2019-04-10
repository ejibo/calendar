<?php

namespace app\usrmanage\controller;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use think\Controller;
use think\Db;
use think\Exception;


class AddUser extends Controller
{
//    public function test()
//    {
//        $spreadsheet = new Spreadsheet();
//        $sheet = $spreadsheet->getActiveSheet();
//        $sheet->setCellValue('A1', 'Welcome to Helloweba.');
//
//        $writer = new Xlsx($spreadsheet);
//        $writer->save('hello.xlsx');
//        return '[hello,test]';
//    }

    public function user_base() {
        $userlist = Db::table('user_info')
            ->select();
        $this->assign("list", $userlist);
        return $this->fetch();
    }

    public function addUser() {
        $work_id = $_POST["work_id"];
        $name = $_POST["name"];
        $type_id = $_POST["type_id"];
        $depart_id = $_POST["depart_id"];
        $position_id = $_POST["position_id"];
        $data = ['work_id' => $work_id, 'name' => $name, 'type_id' => $type_id
            , 'depart_id' => $depart_id, 'position_id' => $position_id];
        $userId = Db::table('user_info')->insertGetId($data);
        return json($userId);
    }

    public function addUserByExcel() {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        try{
            $spreadsheet = $reader->load($_FILES['file']['tmp_name']);
        }catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $exception) {
            die($exception->getMessage());
        }
        try {
            $sheet = $spreadsheet->getActiveSheet();
        } catch (\PhpOffice\PhpSpreadsheet\Exception $e) {
            die($e->getMessage());
        }
        $res = array();
        foreach ($sheet->getRowIterator(2) as $row) {
            $tmp = array();
            foreach ($row->getCellIterator() as $cell) {
                $tmp[] = $cell->getFormattedValue();
            }
            $tmp = ['name' => $tmp[0], "work_id" => $tmp[1], 'type_id' => $tmp[2]
                , 'depart_id' => $tmp[3], 'position_id' => $tmp[4]];
//            Db::table('user_info')->insert($tmp);
            $res[] = $tmp;
//            $res[$row->getRowIndex()-2] = $tmp;
        }
        Db::table('user_info')->insertAll($res);
        return json($res);
    }
}