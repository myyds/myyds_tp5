<?php
namespace app\index\controller;

use think\Request;
use think\Url;
use think\Controller;
class Blog extends Controller{
    public function index(){
        dump(Url::build('index/index/index'));
        dump(Url('index/index/index'));
        dump(Url('index/index/test'));
        dump(Url::build('index/index/test'));
        dump(Url::build('index/index/course/12'));
        
        
        
        // 带参数
        dump(url('index/index/abc',['id'=>10]));
        dump(url('index/index/abc','id=a&a=asd'));

        // 带锚点
        dump(url('index/index/abcde#name','id=12323&name=asd'));
        //带域名
        // Url::root('/index.php');加入口文件
        dump(url('index/index/abcde#name@blog','id=12323&name=asd'));

        
    }
    
    public function geta(){
        echo "aaaa";
    }
    
    
    public function req(){
        // 使用系统方法
        // $request=request();


        // 使用系统Request
        // 因为request属于单例模式，所以不能直接new
        $request=Request::instance();
        dump($request);
        
    }

    public function index1(Request $request){
        // 实例化request类
        dump($request);

    }

    public function getUrl(Request $request){
        // 获取url请求

        // 获取域名
        dump($request->domain());
        //获取url地址   除域名外部分
        dump($request->url());

        // 获取入口文件
        dump($request->baseFile());

        // pathinfo
        dump($request->pathinfo());

    }


    // 5.获取请求模块控制器方法


    //获取模块信息

    public function getInfo(Request $request){
        // 获取模块
        dump($request->module());
        
        // 获取控制器
        dump($request->controller());
        // 获取方法
        dump($request->action());



       


    }
// 获取请求类型
    public function getType(Request $request){
        //请求类型
        dump($request->method());

        //资源类型
        dump($request->type());
        // 访问地址
        dump($request->ip());
        // 是否ajax请求
        dump($request->isAjax());

        // 获取请求的参数
        dump($request->param());
            // 只获取name,age
        dump($request->only(['name','age']));
            //除了name,age
        dump($request->except(['name','age']));


        

    }


    public function a(){
        return view();
    }

    // 7.获取变量,判断是否存在
    public function getData(Request $request){
        // 判断get类型中ID是否存在  但必须使用？id=abc形式
        dump($request->has('id','get'));


        dump(input('?get.id'));



        //读取参数   
        // id
        dump($request->get('id'));
        dump(input('get.id'));
        //读取全部 
        dump($request->get());
        dump(input('get.'));

        // 可以获取的数据类型
        // get post delete put session cookie server等

        $request ->get();
        $request ->post();
        $request ->delete();
        $request ->put();
        $request ->session();
        $request ->cookie();
        $request ->server();
    }
}