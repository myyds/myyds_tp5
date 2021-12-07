<?php

namespace app\index\controller;
use \think\View;
use \think\Controller;
class Controller1 extends Controller{


    //控制器初始方法，必须继承系统控制器，只有调用控制器下的任意方法，都会先找初始化方法

    // 1.可以用来提取控制器下公共的代码
    // 2.后台权限的把控
    public function _initialize(){
        echo "我是初始化方法";
    }




    public function index(){

       return "我是index方法";
    }
    public function jiazai(){
        // 实例化系统view类
        // $view = new \think\View;
        // return $view->fetch();



        // use \think\View;
        // $view = new View();
        // return $view->fetch();
        

        // 使用系统控制器方法  use \think\contraller   并extends
        // return $this->fetch();


        // 使用系统方法
        // return view();



    }
    public function show(){
        $arr =array(
            'name'=>'浩哥',
            'age'=>18
        );
        // return $arr;
        // return json_encode($arr);
        return "<h1>asda</h1>";
    }



    
    
}