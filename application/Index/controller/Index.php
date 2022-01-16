<?php
namespace app\index\controller;
use think\Controller;
use think\Model;
use think\View;
use think\Db;
use think\Request;
use think\Session;
use \app\index\model\User;


header("Content-type:text/html;charset=UTF-8");
class Index extends Controller
{

// public function _initialize(){
//     // $havesession = session('?id');
//     // $this->assign('havesession',$havesession);

//     // return $this->fetch('index/show_user');
//     if(!session('id')){
//         return $this->fetch('index/index');
//     }
// }

public function index()
    {
        // var_dump('asdasd');
        // $tes = User::get(3);
        // dump($tes);
        // $user=new \app\index\model\User;
        // dump($user::get(3)->toArray());die;
        return $this->fetch('index/index');     
       
    }
// public function getOne(){
//     $res=User::get(3);
//     dump($res->toArray());
// }

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
        
        //-----------验证码验证功能开启------
        // if(!captcha_check($data['txtCaptcha'])){
        //     $this->error('验证码不正确');
        // }
        //----------------------------------

    
        $result1 = Db::table('user')->where('id',$data['id'])->find();
        $result2 = Db::table('teacher')->where('id',$data['id'])->find();
        $result3 = Db::table('admin')->where('id',$data['id'])->find();
        
        
        if ($result1){
            if ($result1['password']==($data['password'])) {
                        session::set('id',$data['id']);
                        

                        $this->success('登录成功','user/show_user');
                        }else{
                                        $this->error('密码错误');
                                        }
        }

        if ($result2){
            if ($result2['password']==($data['password'])) {
                        session('id',$data['id']);
                        

                        $this->success('登录成功','teacher/show_teacher');
                        }else{
                                        $this->error('密码错误');
                                        }
        }

        if ($result3){
            if ($result3['password']==($data['password'])) {
                
                        session('id',$data['id']);
                        
                        $this->success('登录成功','admin/show_admin');
                        }else{
                                        $this->error('密码错误');
                                        }
        }


        if (!$result1||!$result2||!$result3) {
            $this->error('账号不存在');
        } 

       
}
        






//空操作
public function _empty(){
    return $this->redirect('index/index');
}





    

            

 





  


    
    
   

//注销登录
    public function logout()
    {
        session::delete('id');
        $this->success('退出登录成功','index');
    }


    }