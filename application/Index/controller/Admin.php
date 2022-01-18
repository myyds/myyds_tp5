<?php
namespace app\index\controller;
use think\Controller;
use think\Model;
use think\Db;
use think\Request;
use think\Session;
use \app\index\model\User;
use \app\index\model\Teacher;



header("Content-type:text/html;charset=UTF-8");
class Admin extends Controller
{
   
    //初始化方法
 public function _initialize(){
    $havesession = session('?id');
    if($havesession==null){
        $this->error('登陆超时','index/index');
    }
}
    public function show_admin()
    {   
        $result = Db::name('user')->order('id')->paginate(8);
        $page = $result->render();
        $this->assign('data_list',$result);
        $this->assign('page',$page);
        
        $result1 = Db::name('teacher')->order('id')->paginate(8);
        $page1 = $result1->render();
        $this->assign('data_list1',$result1);
        $this->assign('page1',$page1);

        $result3 = Db::name('admin')->order('id')->paginate(10);
        $page3 = $result3->render();
        $this->assign('data_list3',$result3);
        $this->assign('page3',$page3);

        $countuser = User::count();
        $countteacher = Teacher::count();
        $this->assign('countuser', $countuser);
        $this->assign('countteacher',$countteacher);


        
        return $this->fetch('admin/show_admin');
    }


    public function edit_user_admin(){
        //编辑教师资料
              if(request()->isGet()){
                    $info1 = Db::name('teacher')->select();
                  $id = input('id');
                  $info = User::where('id',$id)
                          ->find();
                  return $this->fetch('updateuser_admin',array('info'=>$info,'info1'=>$info1),['__IMG__'=>'/uploads']);
              }
          }

    //发布公告
    public function publish_anno(){
            if(request()->isPost()){
            $data['ad'] = input('ad');
            $res = Db::name('admin')
                    ->where('id','1')
                    ->update($data);
            if($res){
                $this->success('更新成功','admin/show_admin');
            }else{
                $this->error('无更新内容');
            }
        }
        }


    //添加用户信息
public function do_add_user() 
{
    
    if(request()->isPost()){
        $data = input('post.');
        // $data['password'] = md5(input('password'));//密码加密
        if(strlen($data['id'])==10){
            $add_res = Db::name('user')->insert($data);
        }else{
            return $this->error('请输入正确的学号');
        }
        
        if($add_res){
            $this->success('新增成功','admin/show_admin');
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
        if($data['id']){
        $add_res = Teacher::create($data);
        }
        if($add_res){
            $this->success('新增成功','admin/show_admin');
        }else{
            return $this->error('新增失败!');
        }
    }
}
     

public function do_edit_user_admin(){
           //管理员编辑用户信息
              if(request()->isPost()){
                  //接收传值
                //   $data['id'] = input('id');
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
                      $this->success('更新成功','admin/show_admin');
                  }else{
                      $this->error('无更新内容!','admin/show_admin');
                  }
              }



public function edit_teacher_admin(){
                //查询单条用户信息
                    if(request()->isGet()){
                        $id = input('id');
                        $info = Db::name('teacher')
                                ->where('id',$id)
                                ->find();
                        return $this->fetch('updateteacher_admin',array('info'=>$info));
                    }
                }
              
  public function do_edit_teacher_admin(){
                    //修改用户信息
                        if(request()->isPost()){
                            //接收传值
                            $data['name'] = input('name');
                            $data['major'] = input('major');
                            $data['tel'] = input('tel');
                            //执行修改
                            $teacher = new Teacher;
                            $res = $teacher->save($data,['id'=>input('post.id')]);
                            if($res){
                                $this->success('更新成功','admin/show_admin');
                            }else{
                                $this->error('无更新内容!','admin/show_admin');
                            }
                        }
                    }


    //删除用户信息
    public function del(){
        if(request()->isGet()){
            $del_id = input('id');
            $res = User::destroy($del_id);
            if($res){
                $this->success('删除成功!','admin/show_admin');
            }else{
                $this->error('删除失败!');
            }
        }
    }


    //删除教师
    public function del_t(){
        if(request()->isGet()){
            $del_id = input('id');
            $res = Teacher::destroy($del_id);
            if($res){
                $this->success('删除成功!','admin/show_admin');
            }else{
                $this->error('删除失败!');
            }
        }
    }

}