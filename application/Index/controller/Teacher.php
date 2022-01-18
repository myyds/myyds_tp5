<?php
namespace app\index\controller;
use think\Controller;
use think\Model;
use think\Db;
use think\Request;
use think\Session;


header("Content-type:text/html;charset=UTF-8");
class Teacher extends Controller
{
   //初始化方法
 public function _initialize(){
    $havesession = session('?id');
    if($havesession==null){
        $this->error('登陆超时','index/index');
    }
}
    //显示教师页面
public function show_teacher(){
    
    $result= session::get('id'); 
    $data = Db::table('teacher')->where('id',$result)->find();
    
    $data2 = Db::table('theme')->where('teacher_id',$result)->select();
    $res=Db::table('user')
       ->join('theme','theme.student_id= user.id')
       ->where('theme.teacher_id',$result)->select();
    
    $this->assign('res',$res);
    $this->assign('data',$data);
    $this->assign('data2',$data2);
    return $this->fetch('teacher/show_teacher');
 }
 public function ud_th(){
    if(request()->isGet()){
   $id = session('id');
   $info = Db::name('theme')
           ->where('teacher_id',$id)
           ->select();
   return $this->fetch('ud_th',array('info'=>$info));
}
}

public function show_check(){
    $teacherid=session('id');
    $check=Db::name('user')
        ->join('message','user.id = message.student_id')
        ->where('message.pass',null)->where('message.teacher_id',$teacherid)->select();
    // $student=Db::name('user')->where('id',$check['student_id'])->select();
    return $this->fetch('manage_user',array('check_student' =>$check));

}


//添加选题
public function do_add_theme(){
        
    $id = session::get('id');
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
            $this->success('更新成功','teacher/show_teacher');}
            else{$this->error('选题已达到上限');}
        }else{
            $this->error('添加失败');
        }
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
         $this->success('审核成功','teacher/show_teacher');
     }else{
         $this->error('审核失败!');
     }
 }

}

public function uploadpaper2(){//上传学生照片
    if(request()->isGet()){
        $id = input('id');
        $info = Db::name('user')
                ->where('id',$id)
                ->find();
        return $this->fetch('teacher/paper_teacher',array('info'=>$info),['__IMG__'=>'/uploads']);
    }
}
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
                $this->success('更新成功','teacher/show_teacher');
            }else{
                $this->error('无更新内容');
            }
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
                $this->success('更新成功','teacher/show_teacher');
            }else{
                $this->error('更新成功!');
            }
        }
    }

    
    



}