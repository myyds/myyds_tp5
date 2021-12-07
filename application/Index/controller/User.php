<?php
namespace app\index\controller;
use \app\index\controller\Test;
use \app\admin\controller\Index as AdminIndex;
use think\Controller;
use think\Model;
use think\Db;
use think\Request;
use think\Session;

header("Content-type:text/html;charset=UTF-8");
class User extends Controller
{
   

public function index()
    {    
        return "我是User控制器的方法";
    }
// 调用当前index模块控制器
public function diaoyong(){
    



    // 1.命名空间
    $model = new \app\index\controller\Test;
    echo $model->index();


    // 2.user
    $model = new Test;
    echo $model->index();

    // 3.使用系统方法
    $model = controller('Test');
    echo $model->index();

}


//调用后台模块的控制器
public function diaoyongs(){
    // 1.命名空间
    $model = new \app\admin\controller\Index;
    echo $model ->index();

    // 2.同名需要起别名
    $model = new AdminIndex;
    echo $model ->index();

    // 3.系统方法
    $model = controller('admin/Index');
    echo $model->index();

    

}
public function fangfa(){

    // 调用自己控制器的方法
    echo $this->index();
    echo "<hr>";
    echo self::index();
    echo "<hr>";
    echo User::index();
    echo "<hr>";
    echo action('index');
}

public function fangfas(){
    // 调用其他控制器的方法
    $model = new \app\index\controller\Test;
    echo $model ->index();
    echo "<hr>";

    echo action('Test/index');

}

// 调用后台模块的index方法
public function fangfass(){
    $model = new \app\admin\controller\Index;

    echo $model ->index();

    echo "<hr>";

    echo action('admin/Index/index');
}


// 数据库操作
public function select(){
    // 查询   使用系统类
    // $data = Db::query("select *from user");
    // dump($data);

    $data = Db::query("select * from user where age>=? and age<=?",[1,60]);
    dump($data);
    // 获取执行的sql语句
    echo Db::getLastSql();

}


public function insert(){
    // $data = Db::execute("insert into admin value('1616025489','123','asd','asd')");
    // $data = Db::execute("insert into admin value(?,?,?,?)",['11835','123','asd','asd']);
    $data = Db::execute("insert into admin value(:id,:a,:b,:c)",['id'=>'123','a'=>'1','b'=>'w','c'=>'sad']);
    dump($data);
}

public function delect(){
    // $data = Db::execute("insert into admin value('1616025489','123','asd','asd')");
    // $data = Db::execute("insert into admin value(?,?,?,?)",['11835','123','asd','asd']);
    $data = Db::execute("delete from admin where id='123'");
    dump($data);
}
}
    
    
        