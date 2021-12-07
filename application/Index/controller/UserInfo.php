<?php
namespace app\index\controller;
use think\Controller;
class UserInfo extends Controller{
    public function index(){
        return "我是UserInfo控制器下的index方法";
    }
    public function index1(){
        return "我是UserInfo控制器下的index1方法";
    }


    // 前置方法的属性
    protected $beforeActionList=[
        'one','three',



        //针对只是用与某方法
        // 'two'=>['only'=>'index1'],
        
        //设置某方法不能使用
        'two'=>['except'=>'index']
        
        
    ];
    public function one(){
        echo "one";
    }
    public function two(){
        echo "two";
    }
    public function three(){
        echo "three";
    }


    //重定向
    public function cdx(){
        $this->redirect('index/index',['id'=>100,'name'=>'asdad']);
    }


    public function _empty(){
        $this->redirect('index/index');
        //    空操作
        //    tp5/index.php/index/user_info/任意字符

    }

    // 空控制器


    // 注意：1.网站上线的时候每个控制器都必须添加空操作
            // 2.无论前后台都需要写一个空控制器


    // 资源控制器
    
}