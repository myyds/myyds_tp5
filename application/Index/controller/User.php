<?php
namespace app\index\controller;
use think\Controller;
use think\Model;
use think\Db;
use think\Request;
use think\Session;


header("Content-type:text/html;charset=UTF-8");
class User extends Controller
{
   
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
    return $this->fetch('user/show_user');
    
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
            $this->success('更新成功','user/show_user');
        }else{
            $this->error('更新成功!');
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
    public function do_updatapw_u(){

        if(request()->isPost()){
                
                $data['password'] = input('password');
                
                //执行修改
                $res = Db::name('user')
                        ->where('id',input('post.id'))
                        ->update($data);
                if($res){
                    $this->success('更新成功','user/show_user');
                }else{
                    $this->error('无更新内容!');
                }
            }
    }
public function uploadpaper(){//上传学生照片
    if(request()->isGet()){
        $id = input('id');
        $info = Db::name('user')
                ->where('id',$id)
                ->find();
        return $this->fetch('user/paper_user',array('info'=>$info),['__IMG__'=>'/uploads']);
    }
}
public function uploadpaper2(){//上传学生照片
    if(request()->isGet()){
        $id = input('id');
        $info = Db::name('user')
                ->where('id',$id)
                ->find();
        return $this->fetch('user/paper_state',array('info'=>$info),['__IMG__'=>'/uploads']);
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
             $this->success('选题成功','user/show_user');
         }else{
             $this->error('选题失败!');
         }
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
          $this->success('更新成功','user/show_user');
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
          $this->success('更新成功','user/show_user');
      }else{
          $this->error('更新失败!');
      }
  }
  }
}