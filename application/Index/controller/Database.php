<?php
namespace app\index\controller;
use think\Controller;
// use think\Model;
// use think\Db;
class Database extends controller{
    public function index(){

//1.连接数据库
        $link=mysqli_connect('localhost','root','123456');
        // var_dump($link);
        //2.判断是否成功
        if(!$link){
            exit('数据库连接失败');
        }else{
            echo "连接数据库成功";
        }
        //3.设置字符集
        mysqli_set_charset($link,'utf-8');
        //4.选择数据库
        mysqli_select_db($link,'mall');
        //5.准备sql语句
        $sql="select *from user";
        //6.发送sql语句
        $res=mysqli_query($link,$sql);
        //7. 处理数字集
        // $result=mysqli_fetch_assoc($res);
        // $result=mysqli_fetch_row($res);
        // $result=mysqli_fetch_array($res);
        // $result=mysqli_num_rows($res);
        // $result=mysqli_affected_rows($link);
        // var_dump($result);


        // // 7.1处理数字集
        // echo '<table width="600" border="1">';
        //     echo '<th>学号</th><th>姓名</th><th>专业</th><th>性别</th>';
        //     while($result=mysqli_fetch_assoc($res)){
        //         echo '<tr>';
        //         echo '<td>'.$result['id'].'</td>';
        //         echo '<td>'.$result['name'].'</td>';
        //         echo '<td>'.$result['major'].'</td>';
        //         echo '<td>'.$result['sex'].'</td>';
        //         echo '</tr>';

        //     }
        // echo '</table>';
        
        // // 8.关闭数据库，释放资源
        // mysqli_close($link);


        //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        //echo phpinfo();
        //  echo time();
        //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        
        //打开文件
        // var_dump(readfile('D:/phpstudy_pro/WWW/tp5/thinkphp/application/Index/view/index/a.txt')); 读文件
        // var_dump(file('D:/phpstudy_pro/WWW/tp5/thinkphp/application/Index/view/index/a.txt'));   读文件
        // $f=fopen('D:/phpstudy_pro/WWW/tp5/thinkphp/application/Index/view/index/a.txt','r+');    打开文件，只读模式
        // $f=fopen('b.txt','w+');      //打开文件，写入模式，写入模式无此文件时不报错，直接创建，tp5创建在public目录下
        // $f=fopen('c.txt','a+');  //a模式，无文件创建，内容累加写入，a+可读
        // $str='abcdefghijklmn';
        // fwrite($f,$str);     //写入
        // fseek($f,0);      //光标移动到0位置
        // echo fread($f,100);      //返回文件前三个字符
        // fclose($f); //关闭文件
        // var_dump(pathinfo('c.txt'));    //路径信息
        // 数组不能echo，只能var_dump

        // file_exists
        // is_executable
        // is_file
        // is_writeable
        // is_readable
        // chmod();   //权限 0777最高   r w x

//-----------------------正则-------------------------------------------------------------------
       
        // $str='www.sassdm';
        // $pattern='/(http|https)?(:\/\/)?(\w+.?)(\w+.?)(\w+.?)/';
        // if(preg_match($pattern,$str,$matche)){
        //     echo '匹配成功';
        //     var_dump($matche);
        // }else{
        //     echo '匹配失败';
        // };
//------------------------正则------------------------------------------------------------------------------------------------------------------------------------------------
      
        // 函数preg_match_all($pattern,$str,$matches);全部查找以数组方式展示
        
        // 用法
        // $string='<div>换前</div>';
        // $pattern='/<div>(.*)<\/div>/';
        // $replace='<div>换后</div>';
        // $new=preg_replace($pattern,$replace,$string);
        // echo $new;    //变量不用引号
        
//--------------------------类和对象-----------------------------------------------

// class Person{
//     //类名遵循大驼峰原则 每个单词首字母大写
//     public $age;
//     public function eat(){
//         echo '我在吃饭';
//     }
// }
// //类是抽象的对象
// $xiangming =new Person();
// var_dump($xaioming);

// $name ='Person';
// $xiaoming =new $name();
// var_dump($xiaoming ->age);//访问属性
// $xiaoming->eat();//访问方法
// $xiaoming->age =18;//设置年龄

// class Person{
//     public $name;
//     public $age;

//     public function __construct($name,$age)

//     {
        
//         //在类里面如何访问自己的成员属性
//         //this代表当前对象
//         $this ->name=$name;
//         $this ->age=$age;
//     }
//     public function test1(){
//         echo 'asdasdsa';
//     }
// }
// $ming =new Person('小明',20);
//创建对象直接调用构造方法 __construct
// $ming =new Person();
// $ming ->name;
// $ming ->age;
// $niu =new Person();

// class Animal
// {
//     public $name ='小芳';
//     public function eat(){
//         echo '我会吃饭';
//     }
// }
// class Person extends Animal
// {

// }
// $xiaoming =new Person();
// echo $xiaoming->name;
// $xiaoming->eat();


}
}