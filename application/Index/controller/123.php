<?php
namespace app\index\controller;
use think\Controller;
use think\Exception;
use think\Model;


class 123{
    public function a(){
        $request=request();
        dump($request);
        echo "<hr>";
        dump($_REQUEST);
    }
}
// header("Content-type:text/html;charset=UTF-8");
// class Index extends Controller
// { 
// const ABC=122;//常量不能加修饰符
// static public $name='小芳';
// public static $age=18;
// public static function indexq()
//     {       
//          echo '我是静态方法';
//     }
    
// }
// // $qwe =new Index();
// // $qwe ->index();
// // echo Index->index;
// echo Index::$name;



    
// }


// class Dog
// {
//     function wang()
//     {
//         echo '摇尾巴</br>';
//     }
//     function rock()
//     {
//         echo '叫';
//     }

// }





// $dog =new Dog();

// // $dog->wang();
// call_user_func('wang');
// $dog->rock();

// $dsn = 'mysql:host=localhost;dbname=mall;charset=utf8';
// $pdo =new PDO($dsn,'root','123456');
// vardump($pdo);


// $pdo ='mysql:host=localhost;dbname=mall;charset=utf8';
// try {
//     $pdo= new PDO($dsn,'root','123456');
//     $pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_ECCEPTION);

// }catch (PDOException $e){
//     die('数据库连接失败'.$e->getMessage());
// }
// try {
//     //开启一个事务
//     $pdo ->beginTransaction();
//     $sql ='updata user set email=email-1 where id=1616040105';
//     $ret = $pdo->exec($sql);
//     if ($ret > 0){
//         echo 'zhixingchenggong ';

//     }else{
//         echo '转出失败';
//         throw new PODException('狗蛋转出失败');
//     }

// }catch (PDOException $e ){
//     $pdo->rollback();
//     echo $e->getMessage();
// }

