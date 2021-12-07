<?php
namespace app\idnex\controller;
class Goods{
    public function index(){
        return "我是前台控制器idnex方法";
    }
    public function a(){
        $request=request();
        dump($request);
        echo "<hr>";
        dump($_REQUEST);
    }
}