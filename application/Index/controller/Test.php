<?php
namespace app\index\controller;
use think\Controller;
use think\Model;
use think\Db;
use think\Request;
use think\Config;
use think\Session;

header("Content-type:text/html;charset=UTF-8");
class Test extends Controller
{
   

public function index()
    {    
        return "我是Test控制器的的方法";
    }

public function getCode(){
    //读取配置文件convention.php   一般不要修改
//使用系统方法
    echo config('name');
//使用系统类
    echo \think\Config::get('name');

// use think\Config;    使用use      
    echo Config::get('name');



//extre目录里存放自定义配置   需要新建对应配置文件

//应用配置

    echo Config('app_debug');
    echo Config('app_trace');

//读取扩展库
    dump(config('database'));


}
public function getmokuai(){

    //获取使用前台配置
    dump(config('index'));
}

//6动态配置
public function setConfig(){

    //1系统方法
    dump(config('name'));

    config ('name','php开发');
    dump(config('name'));

    //2系统类
    \think\Config::set('name','WEB前端');
    dump(config('name'));

    Config::set('name','小程序开发');
    dump(config('name'));



}

//读取环境变量
public function getEnv(){
    dump(\think\Env::get('name'));
}

public function test(){
    return "我是一个测试方法";
}

public function abc(){
    echo "dasdasdad";
    echo input('id');
}

}
    
    
        