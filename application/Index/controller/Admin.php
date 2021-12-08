<?php
namespace app\index\controller;
use think\Controller;
use think\Model;
use think\Db;
use think\Request;
use think\Session;


header("Content-type:text/html;charset=UTF-8");
class Admin extends Controller
{
   

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
                      $this->error('无更新内容!','index/show_admin');
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
                                $this->error('无更新内容!','index/show_admin');
                            }
                        }
                    }
}