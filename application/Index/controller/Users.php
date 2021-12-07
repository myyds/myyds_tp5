<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;

class Users extends Controller{

    public function index(){
        // 查询user表数据
        $data = Db::query("select *from user");
        // dump($data);
        return view();
    }
}