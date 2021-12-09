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
       
        // $time['y']=date("Y-m-d",strtotime("now")); 
        // $time['r']=date('Y-m-d H:i:s',time());;
        $info = Db::name('admin')
                    ->where('id','1')
                    ->find();
        // $this->assign('data'=>$info,'time'=>$time);
        // return $this->fetch('index/index');
        return $this->fetch('index/index',array('data'=>$info,'time'=>$time));
    }
    
public function add_user(){
        return view('index/add_user');
    }

public function add_teacher(){
        return view('index/add_teacher');
}


public function shijian(){
    echo input('year').''.input('month');
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



 function login(Request $request){
    // 转实体
        
        // 多种方法过滤
        // $request ->filter(["htmlspecialchars","strip_tags"]);
        
        //对单个变量过滤后进行加密
        // $request ->get('name','','htmlspecialchars，md5‘);
        
        // dump($request->post());


        // 变量的排除和获取
        // $request->only('name');
        // $request->only('name',get);
        // $request->only(['name','password'],get);

        // input('get.id/d');     s字符型   d整型 b布尔型  a数组型 f浮点型   $request->get('id/d');
       

        // 过滤
        $request ->filter(["htmlspecialchars","strip_tags"]);
        $data=$request->post();
        
        
        // $data = input('post.');
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
        



// 修改变量
// public function xiugai(Request $request){
//     dump($request->get('id'));
//     dump($request->get(['id'=>20]));
//     dump($request->get('id'));

// }

// 类型
public function type(Request $request){
    
    echo "get";
    dump($request->isGet());
    echo "post";

    dump($request->isPost());
    echo "ismobile";

    dump($request->isMobile());
    
    echo "get";

    dump(request()->isGet());
    echo "ismobile";
    dump($request->method());
    dump(request()->isMobile());
    echo "ajax";
    dump(request()->isAjax());
}

// 表单页面
// 模拟请求put，delect
public function main(){
    return view();
}

// 参数绑定
// 1参数绑定的个数少于地址栏个数
// 2参数绑定名字和地址栏一一对应
// 3参数绑定可以设置默认值
public function bind($id,$name,$pass="asdad"){
    // dump(input('id'));
    // dump(input('name'));

    dump($id);
    dump($name);
    

}


//1. 使用配置文件链接数据库
public function data(){
    // 实例化系统数据库类
    $DB = new Db;
    // 查询数据
    // $data=$DB::table("user")->select();
    

    // 使用sql语句
    $data = $DB::query("select * from user");


    dump($data);
}

// 1.使用方法配置数据库链接
public function data1(){
    // 一、使用数组
    $Db = Db::connect([
        // 数据库类型
    'type'            => 'mysql',
    // 服务器地址
    'hostname'        => '127.0.0.1',
    // 数据库名
    'database'        => 'mall',
    // 用户名
    'username'        => 'root',
    // 密码
    'password'        => '123456',
    // 端口
    'hostport'        => '',
    // 连接dsn
    
    
    ]);
    $data=$Db->table("user")->select();






    // 二 、使用字符串
    $Db = Db::connect("mysql://root:123456@127.0.0.1/mall#utf8");
    $data=$Db->table("user")->select();
    


    
    dump($data);
}


public function data2(){
    // 三、使用模型类定义
    echo "使用模型链接数据库";

    $user = new \app\index\model\User();
    dump($user::all());
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
        // $result = Db::name('user')->order('id desc')->paginate(10);
        $result = Db::name('user')->order('id')->paginate(10);
        $page = $result->render();
        $this->assign('data_list',$result);
        $this->assign('page',$page);

        $result1 = Db::name('teacher')->order('id')->paginate(10);
        $page1 = $result1->render();
        $this->assign('data_list1',$result1);
        $this->assign('page1',$page1);

        $result3 = Db::name('admin')->order('id')->paginate(10);
        $page3 = $result->render();
        $this->assign('data_list3',$result3);
        $this->assign('page3',$page3);
        
        

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
     $result= session::get('id_1'); 
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


     $result = session::get('id'); 
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




// public function updatapw_t(){
    
//       if(request()->isGet()){
//             $id = input('id');
//             $info = Db::name('teacher')
//                     ->where('id',$id)
//                     ->find();
//             return $this->fetch('do_updatapw_t',array('info'=>$info));
//         }
      
// }

public function do_updatapw_t(){
    $get = $this->request->get();
    
    
    // 获取post上传的内容

    if(request()->isPost()){
            $id = input('id');
            $data['password'] = input('password');
            
            //执行修改
            $res = Db::name('teacher')
                    ->where('id',$get['id'])
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