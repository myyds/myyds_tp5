<?php
namespace app\index\controller;
use think\Controller;
use think\Model;
use think\Db;
use think\Request;
use think\Session;

header("Content-type:text/html;charset=UTF-8");
class Index extends Controller
{
   

public function index()
    {       
        //1.连接数据库
        $link=mysqli_connect('localhost','root','123456');
        // var_dump($link);
        //2.判断是否成功
        if(!$link){
            exit('数据库连接失败');
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




//--------------------------这是分隔线-----------------------------------------------
        $time['y']=date("Y-m-d",strtotime("now")); 
        $time['r']=date('Y-m-d H:i:s',time());;
        $info = Db::name('admin')
                    ->where('id','1')
                    ->find();
        // $this->assign('data'=>$info,'time'=>$time);
        // return $this->fetch('index/index');
        return $this->fetch('index/index',array('data'=>$info,'time'=>$time));
    }
public function course(){
    echo input('id');
} 



public function shijian(){
    echo input('nian').'年'.input('yue').'月';
}
public function dongtai(){
    echo input('a').''.input('b');
}
public function test(){
    echo "我是测试方法1";
}

public function test2(){
    var_dump(input());
    echo "我是测试方法2";
}

public function type(){
    echo "我是测试请求类型";
    dump(input());
    return view();
    
}

public function add_user(){
        return view('index/add_user');
    }

public function add_teacher(){
        return view('index/add_teacher');
}
//添加用户信息
public function do_add_user() 
    {
        
        if(request()->isPost()){
            $data = input('post.');
           
            if(strlen($data['id'])==10){
                $add_res = Db::name('user')->insert($data);
            }else{
                return $this->error('请输入正确的学号');
            }
            
            if($add_res){
                $this->success('新增成功','Index/show_admin');
            }else{
                return $this->error('新增失败!');
            }
        }
    }
 //添加用户信息
public function do_add_teacher() 
    {
       
        if(request()->isPost()){
            $data = input('post.');
            $add_res = Db::name('teacher')->insert($data);
            if($add_res){
                $this->success('新增成功','Index/show_admin');
            }else{
                return $this->error('新增失败!');
            }
        }
    }
   //查询单条用户信息
public function edit_user(){
  //查询教师资料
  
        if(request()->isGet()){
              $info1 = Db::name('teacher')->select();
            $id = input('id');
            $info = Db::name('user')
                    ->where('id',$id)
                    ->find();
            return $this->fetch('update',array('info'=>$info,'info1'=>$info1),['__IMG__'=>'/uploads']);
        }
    }

//修改用户信息
public function do_edit_user(){
     
        if(request()->isPost()){
            //接收传值
            $data['name'] = input('name');
            $data['sex'] = input('sex');
            $data['age'] = input('age');
            $data['tel'] = input('tel');
            $data['email'] = input('email');
            $data['family_adress'] = input('family_adress');
            $data['id_'] = input('id_');
            $data['major'] = input('major');
        }

            //上传图片
            $old_img=Request::instance()->param('old_img');
            $img =\request()->file('img');
                if (empty($img)) {
                    $data['img']=$old_img;//文件空，路径默认为空
                }else{
                    //如果有文件被上传，获取上传后的文件路径
                    $inf=$img->move(ROOT_PATH.'public'.DS.'uploads');
                    if($inf) {
                        $data['img']=$inf->getSaveName();
                    }
                } 
            $res = Db::name('user')
                    ->where('id',input('post.id'))
                    ->update($data);
            if($res){
                $this->success('更新成功','index/show_user');
            }else{
                $this->error('更新成功!');
            }
        }
    public function edit_user_admin(){
  //查询教师资料
        if(request()->isGet()){
              $info1 = Db::name('teacher')->select();
            $id = input('id');
            $info = Db::name('user')
                    ->where('id',$id)
                    ->find();
            return $this->fetch('update_admin',array('info'=>$info,'info1'=>$info1),['__IMG__'=>'/uploads']);
        }
    }

public function do_edit_user_admin(){
     //管理员编辑用户信息
        if(request()->isPost()){
            //接收传值
            $data['name'] = input('name');
            $data['sex'] = input('sex');
            $data['age'] = input('age');
            $data['tel'] = input('tel');
            $data['email'] = input('email');
            $data['family_adress'] = input('family_adress');
            $data['id_'] = input('id_');
            $data['major'] = input('major');

        }
            $old_img=Request::instance()->param('old_img');
            $img =\request()->file('img');
                if (empty($img)) {
                    $data['img']=$old_img;//文件空，路径默认为空
                }else{
                    //如果有文件被上传，获取上传后的文件路径
                    $inf=$img->move(ROOT_PATH.'public'.DS.'uploads');
                    if($inf) {
                        $data['img']=$inf->getSaveName();
                    }
                }
            //执行修改
            $res = Db::name('user')
                    ->where('id',input('post.id'))
                    ->update($data);
            if($res){
                $this->success('更新成功','index/show_admin');
            }else{
                $this->error('更新成功!');
            }
        }
   
    public function uploadpaper(){//上传学生照片
        if(request()->isGet()){
            $id = input('id');
            $info = Db::name('user')
                    ->where('id',$id)
                    ->find();
            return $this->fetch('index/uploadpaper',array('info'=>$info),['__IMG__'=>'/uploads']);
        }
    }
public function uploadpaper2(){//上传学生照片
        if(request()->isGet()){
            $id = input('id');
            $info = Db::name('user')
                    ->where('id',$id)
                    ->find();
            return $this->fetch('index/uploadpaper2',array('info'=>$info),['__IMG__'=>'/uploads']);
        }
    }


    public function do_uploadpaper(){
          if(request()->isPost()){
            //上传论文
            $old_paper=Request::instance()->param('old_paper');
            $paper =\request()->file('paper');
                if (empty($paper)) {
                    $data['paper']=$old_paper;//文件空，路径默认为空
                }else{
                    //如果有文件被上传，获取上传后的文件路径
                    $info=$paper->move(ROOT_PATH.'public'.DS.'uploads');
                    if($info) {
                        $data['paper']=$info->getSaveName();
                    }
                }
            $res = Db::name('user')
                    ->where('id',input('post.id'))
                    ->update($data);
            if($res){
                $this->success('更新成功','index/show_user');
            }else{
                $this->error('更新成功!');
            }
        }
        }

    public function do_uploadpaper3(){
          if(request()->isPost()){
            //上传论文
            $old_paper=Request::instance()->param('old_paper');
            $paper =\request()->file('paper3');
                if (empty($paper)) {
                    $data['paper3']=$old_paper;//文件空，路径默认为空
                }else{
                    //如果有文件被上传，获取上传后的文件路径
                    $info=$paper->move(ROOT_PATH.'public'.DS.'uploads');
                    if($info) {
                        $data['paper3']=$info->getSaveName();
                    }
                }      
            $res = Db::name('user')
                    ->where('id',input('post.id'))
                    ->update($data);
            if($res){
                $this->success('更新成功','index/show_user');
            }else{
                $this->error('更新失败!');
            }
        }
        }





    public function edit_teacher(){
    //查询单条用户信息
        if(request()->isGet()){
            $id = input('id');
            $info = Db::name('teacher')
                    ->where('id',$id)
                    ->find();
            return $this->fetch('do_edit_teacher',array('info'=>$info));
        }
    }

    public function edit_teacher_admin(){
    //查询单条用户信息
        if(request()->isGet()){
            $id = input('id');
            $info = Db::name('teacher')
                    ->where('id',$id)
                    ->find();
            return $this->fetch('do_edit_teacher_admin',array('info'=>$info));
        }
    }


public function do_edit_teacher(){
    //修改用户信息
        if(request()->isPost()){
            //接收传值
            $data['name'] = input('name');
            $data['major'] = input('major');
            //$data['age'] = input('age');
            $data['tel'] = input('tel');
            // $data['password'] = input('password');
            //执行修改
            $res = Db::name('teacher')
                    ->where('id',input('post.id'))
                    ->update($data);
            if($res){
                $this->success('更新成功','index/show_teacher');
            }else{
                $this->error('更新成功!');
            }
        }
    }
public function do_edit_teacher_admin(){
    //修改用户信息
        if(request()->isPost()){
            //接收传值
            $data['name'] = input('name');
            $data['major'] = input('major');
            //$data['age'] = input('age');
            $data['tel'] = input('tel');
            // $data['password'] = input('password');
            //执行修改
            $res = Db::name('teacher')
                    ->where('id',input('post.id'))
                    ->update($data);
            if($res){
                $this->success('更新成功','index/show_admin');
            }else{
                $this->error('更新成功!');
            }
        }
    }
         
  //删除用户信息
    public function del(){
        if(request()->isGet()){
            $del_id = input('id');
            $res = Db::name('user')
                    ->where('id',$del_id)
                    ->delete();
            if($res){
                $this->success('删除成功！','index/show_admin');
            }else{
                $this->error('删除失败!');
            }
        }
    }
public function del_t(){
        if(request()->isGet()){
            $del_id = input('id');
            $res = Db::name('teacher')
                    ->where('id',$del_id)
                    ->delete();
            if($res){
                $this->success('删除成功！','index/show_admin');
            }else{
                $this->error('删除失败!');
            }
        }
    }

// //用户登录
//     public function login_user(){
//         $data = input('post.');
       
//         $result = Db::table('user')->where('id',$data['id'])->find();
        
//         if ($result) {
//                 if ($result['password']==($data['password'])) {
//                     session('id',$data['id']);
                    
//                     $this->success('登录成功','index/show_user');
//                 }else{
//                     $this->error('密码错误');
//                 }
//             }else{
//                 $this->error('用户不存在');
//             }
//             exit;


//     }

// //教师登录
//     public function login_teacher(){
//         $data = input('post.');
//         // $data=Request::instance()->param();
//         $result = Db::table('teacher')->where('id',$data['id_1'])->find();
        
//         if ($result) {
//                 if ($result['password']==($data['password_1'])) {
//                     session('id_1',$data['id_1']);
                    
//                     $this->success('登录成功','index/show_teacher');
//                 }
                
//                 else{
//                     $this->error('密码错误');
//                 }
//             }else{
//                 $this->error('用户不存在');
//             }
//             exit;


//     }
//     public function admin(){

//     $data = input('post.');
//         // $data=Request::instance()->param();
//         $result = Db::table('admin')->where('id',$data['id'])->find();
        
//         if ($result) {
//                 if ($result['password']==($data['password'])) {
//                     session('id_admin',$data['id']);
                    
//                     $this->success('登录成功','index/show_admin');
//                 }else{
//                     $this->error('密码错误');
//                 }
//             }else{
//                 $this->error('用户不存在');
//             }
//             exit;
// }

//测试
 function login(){

    $data = input('post.');
        $result1 = Db::table('user')->where('id',$data['id'])->find();
        $result2 = Db::table('teacher')->where('id',$data['id'])->find();
        $result3 = Db::table('admin')->where('id',$data['id'])->find();
        
        // if ($result1||$result2||$result3) {
        //     if ($result1['password']==($data['password'])) {
        //         session('id',$data['id']);
        //         $this->success('登录成功','index/show_user');
        //         }
        //         elseif($result2['password']==($data['password'])){
        //         session('id_1',$data['id']);
        //         $this->success('登录成功','index/show_teacher');
        //         }
        //         elseif($result3['password']==($data['password'])){
        //         session('id_1',$data['id']);
        //         $this->success('登录成功','index/show_admin');
        //         }
        //         else{
        //             $this->error('密码错误');
        //             }
        //     }
        if ($result1){
            if ($result1['password']==($data['password'])) {
                        session('id',$data['id']);
                        

                        $this->success('登录成功','index/show_user');
                        }else{
                                        $this->error('密码错误');
                                        }
        }


        if ($result2){
            if ($result2['password']==($data['password'])) {
                        session('id_1',$data['id']);
                        

                        $this->success('登录成功','index/show_teacher');
                        }else{
                                        $this->error('密码错误');
                                        }
        }

        if ($result3){
            if ($result3['password']==($data['password'])) {
                
                        session('id_1',$data['id']);
                        
                        $this->success('登录成功','index/show_admin');
                        }else{
                                        $this->error('密码错误');
                                        }
        }


        if (!$result1||!$result2||!$result3) {
            $this->error('账号不存在');
        } 

       
}
        






public function form()
{
    if (isset($_REQUEST['authcode'])) {
		session_start();
 
		if (strtolower($_REQUEST['authcode'])==$_SESSION['authcode']) {
			echo'<font color ="#0000CC"> 输出正确</font>';
			# code...
		}else{
			echo $_REQUEST['authcode'];
			echo $_SESSION['authcode'];
			echo'<font color ="#CC0000"> 输出错误</font>';
		}
 
		exit();
 
	}
}



public function show_admin()
    {   
        $result = Db::name('user')->paginate(5);
        $page = $result->render();
        $this->assign('data_list',$result);
        $this->assign('page',$page);

        $result1 = Db::name('teacher')->paginate(5);
        $page1 = $result1->render();
        $this->assign('data_list1',$result1);
        $this->assign('page1',$page1);
        
        

        return $this->fetch('index/show_admin');
    }
//注销登录
    public function logout()
    {
        session(null);
        $this->success('退出登录成功','index');
    }





//显示教师页面
public function show_teacher(){
     $result= session('id_1'); 
     $data = Db::table('teacher')->where('id',$result)->find();
     

     $data2 = Db::table('theme')->where('teacher_id',$result)->select();
     $res=Db::table('user')
        ->join('theme','theme.student_id= user.id')
        ->where('theme.teacher_id',$result)->select();
     
     $this->assign('res',$res);
     $this->assign('data',$data);
     $this->assign('data2',$data2);
     return $this->fetch('index/show_teacher');
  }
//显示学生页面
public function show_user(){


     $result = session('id'); 
     $data = Db::table('user')->where('id',$result)->find();
     
     $teacher=Db::table('theme')
     ->join('teacher','teacher.id = theme.teacher_id')
     ->where('theme.student_id',$result)->find();

     $this->assign('teacher',$teacher);
     $this->assign('data',$data);
     $this->assign('teacher',$teacher);
     return $this->fetch('index/show_user');
     
      
}

public function updatapw_u(){
    
      if(request()->isGet()){
            $id = input('id');
            $info = Db::name('user')
                    ->where('id',$id)
                    ->find();
            return $this->fetch('do_updatapw_u',array('info'=>$info));
        }
      
}

public function do_updatapw_u(){

    if(request()->isPost()){
            
            $data['password'] = input('password');
            //执行修改
            $res = Db::name('user')
                    ->where('id',input('post.id'))
                    ->update($data);
            if($res){
                $this->success('更新成功','index/show_user');
            }else{
                $this->error('无更新内容!','index/show_user');
            }
        }
}




public function updatapw_t(){
    
      if(request()->isGet()){
            $id = input('id');
            $info = Db::name('teacher')
                    ->where('id',$id)
                    ->find();
            return $this->fetch('do_updatapw_t',array('info'=>$info));
        }
      
}

public function do_updatapw_t(){

    if(request()->isPost()){
            
            $data['password'] = input('password');
            //执行修改
            $res = Db::name('teacher')
                    ->where('id',input('post.id'))
                    ->update($data);
            if($res){
                $this->success('更新成功','index/show_teacher');
            }else{
                $this->error('无更新内容','index/show_teacher');
            }
        }
}


public function announcement(){
            return $this->fetch('index/announcement');
        }
            
      
public function publish_anno(){
            if(request()->isPost()){
            $data['ad'] = input('ad');
            $res = Db::name('admin')
                    ->where('id','1')
                    ->update($data);
            if($res){
                $this->success('更新成功','index/show_admin');
            }else{
                $this->error('无更新内容','index/show_admin');
            }
        }
        }
            


//获取选题
    public function add_theme(){
             if(request()->isGet()){
            $id = session('id_1');
            $info = Db::name('theme')
                    ->where('teacher_id',$id)
                    ->find();
            return $this->fetch('show_theme',array('info'=>$info));
    }
}
 public function ud_th(){
             if(request()->isGet()){
            $id = session('id_1');
            $info = Db::name('theme')
                    ->where('teacher_id',$id)
                    ->select();
            return $this->fetch('ud_th',array('info'=>$info));
    }
}
 
//添加选题
    public function do_add_theme(){
        $id = session('id_1');
        $list=Db::name('theme')->where('teacher_id',$id)->select();
            $list_length=count($list);
             // dump($list_length);die;
        if(request()->isPost()){
            if($list_length<5){
            $data['theme_name'] = input('theme_name');
            $data['teacher_id'] = $id;
                $res = Db::name('theme')
                    ->where('teacher_id',$id)
                    ->insert($data);
                $this->success('更新成功','index/show_teacher');}
                else{$this->error('选题已达到上限','index/show_teacher');}
            }else{
                $this->error('添加失败','index/show_teacher');
            }
        }





public function select_t(){
       if(request()->isGet()){
             $info1 = Db::name('teacher')->select();//获取老师名字
            $id = input('id');
            $info = Db::name('user')
                    ->where('id',$id)
                    ->find();
            return $this->fetch('select_t',array('info'=>$info,'info1'=>$info1));
        }
    }
//学生选择选题 
    public function do_select_t(){  
       if(request()->isPost()){ 
            $data['teacher_id'] = input('teacher_id');
            $res = Db::name('theme')
                    ->where('teacher_id',$data['teacher_id'])->where('student_id',null)
                    ->select();
           return $this->fetch('select_t',array('theme_id'=>$res));
            }
        }

    public function do_select_theme(){        
       if(request()->isPost()){ 
            $data['student_id'] = session('id');//学生id
            $theme_id= input('theme_id');//选题id
            $teacher_id= Db::name('theme')
                    ->where('theme_id',$theme_id)
                    ->find();


            $data['teacher_id']=$teacher_id['teacher_id'];//教师id
            $data['theme_id']=$theme_id;
            $res = Db::name('message')
                    ->insert($data);
            if($res){
                $this->success('选题成功','index/show_user');
            }else{
                $this->error('选题失败!');
            }
        }
}


    public function show_check(){
            $teacherid=session('id_1');
            // $check=Db::name('message')
            // ->where('teacher_id',$teacherid)
            // ->where('pass',null)
            // ->select();
            $check=Db::name('user')
                ->join('message','user.id = message.student_id')
                ->where('message.pass',null)->where('message.teacher_id',$teacherid)->select();
            // $student=Db::name('user')->where('id',$check['student_id'])->select();
            return $this->fetch('manage_user',array('check_student' =>$check));

    }
    
   //审批学生
            public function do_check(){     
               if( $_POST['like'] ){
            $likes = $_POST['like'];
            $data['pass']='1';
            $res= Db::name('message')
                    ->where('theme_id',$likes[0])
                    ->update($data);
 //插入主题表
            $themeid=$likes[0];     
            $mess= Db::name('message')
                    ->where('theme_id',$likes[0])
                    ->find();
            $data1['student_id'] = $mess['student_id'];
            $res1=Db::name('theme')
            ->where('theme_id',$themeid)
            ->update($data1);
            if($res1){
                $this->success('审核成功','index/show_teacher');
            }else{
                $this->error('审核失败!');
            }
        }

}




    }