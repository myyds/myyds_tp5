<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpstudy_pro\WWW\myyds_tp5\public/../application/index\view\user\show_user.html";i:1642521413;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">



</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $("#usi").click(function() {
                $("#updatastudentinformation").modal({
                    show: true,
                    backdrop: 'static'
                })

            });
            $("#usp").click(function() {
                $("#updatastudentpw").modal({
                    show: true,
                    backdrop: 'static'
                })

            });

        });
    </script>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">用户管理系统</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">首页 <span class="sr-only">(current)</span></a></li>
                    <!-- <li><a href="<?php echo url('index/edit_teacher'); ?>?id=<?php echo $data['id']; ?>">修改信息</a></li> -->
                    <li><a href="<?php echo url('user/select_t'); ?>?id=<?php echo $data['id']; ?>">选择导师</a></li>
                    <li><a href="<?php echo url('user/uploadpaper'); ?>?id=<?php echo $data['id']; ?>">论文管理<?php echo $havesession; ?></a></li>


                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><strong>学号</strong> <?php echo $data['id']; ?> <strong> 姓名</strong> <?php echo $data['name']; ?> </a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人信息 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <!-- <li id="usi"><a href="<?php echo url('index/edit_user'); ?>?id=<?php echo $data['id']; ?>">修改信息</a></li> -->
                            <li id="usi"><a href="#">修改信息</a></li>
                            <!-- <li><a href="<?php echo url('index/updatapw_u'); ?>?id=<?php echo $data['id']; ?>">修改密码</a></li> -->
                            <li id="usp"><a href="#">修改密码</a></li>

                            <li><a href="#">其他</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo url('index/logout'); ?>">注销登录</a></li>

                </ul>
            </div>

        </div>

    </nav>
    <div class="container">
        &nbsp;&nbsp;课题:<?php echo $teacher['theme_name']; ?> &nbsp;&nbsp;已选教师编号:<?php echo $teacher['teacher_id']; ?> &nbsp;&nbsp; 已选教师姓名:<?php echo $teacher['name']; ?>
        <div>
            <div class="modal fade" tabindex="-1" role="dialog" id="updatastudentinformation">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">修改信息</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo url('user/do_edit_user'); ?>" method="post" enctype="multipart/form-data" class="form-style">

                                <td>姓名 <input type="text" name="name" value="<?php echo $data['name']; ?>"></td><br><br>
                                <td>性别:<?php if($data['sex'] == '1'): ?> 男
                                    <input type="radio" name="sex" value="1" checked="checked"> 女
                                    <input type="radio" name="sex" value="2"> <?php elseif($data['sex'] == '2'): ?> 男
                                    <input type="radio" name="sex" value="1"> 女
                                    <input type="radio" name="sex" value="2" checked="checked"> <?php endif; ?>
                                </td>
                                <td><br><br> 年龄 <input type="text" name="age" value="<?php echo $data['age']; ?>"></td><br><br>
                                <td>
                                    电话 <input type="text" name="tel" value="<?php echo $data['tel']; ?>"><br><br>
                                </td>


                                邮箱<input type="text" name="email" value="<?php echo $data['email']; ?>"><br><br>
                                </td>
                                家庭住址<input type="text" name="family_adress" value="<?php echo $data['family_adress']; ?>"><br><br>
                                </td>

                                身份证号码<input type="text" name="id_" value="<?php echo $data['id_']; ?>"><br><br>
                                </td>

                                专业<input type="text" name="major" value="<?php echo $data['major']; ?>"><br><br>
                                </td>
                                <!-- 
                                <select name="teacher_id">
                                               <option value="">请选择</option>
                                                                     <?php if(is_array($info1) || $info1 instanceof \think\Collection || $info1 instanceof \think\Paginator): $i = 0; $__LIST__ = $info1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                  <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                                                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                  </select> -->



                                <!-- <td>
                                密码<input type="text" name="password" value="<?php echo $info['password']; ?>"><br><br>
                                <input type="hidden" value="<?php echo $info['id']; ?>" name="id">
                                </td> -->


                                <br><br>


                                <td>头像
                                    <img src="/uploads/<?php echo $data['img']; ?>" width="100px;" height="100px;">
                                    <!-- 显示img -->
                                    <input type="hidden" name="old_img" value="<?php echo $data['img']; ?>">
                                    <!-- 输入img -->
                                    <a href="/uploads/<?php echo $data['img']; ?>" download="<?php echo $data['id']; ?>.jpg">下载头像</a>
                                    <input type="file" name="img">
                                </td>


                                <!-- <td>文件上传
                                  <input type="hidden" name="old_paper" value="<?php echo $info['paper']; ?>">
                                  <a href="__IMG__/<?php echo $info['paper']; ?>" download="<?php echo $info['id']; ?>.docx">下载</a>
                                  <input type="file" name="paper">
                                </td> -->

                                <br /> <br />


                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <button type="submit" class="btn btn-primary">保存</button>
                        </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div class="modal fade" tabindex="-1" role="dialog" id="updatastudentpw">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">修改密码</h4>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo url('user/updatapw'); ?>" method="post" enctype="multipart/form-data" class="form-style">
                                密码<input type="text" name="password" value="<?php echo $data['password']; ?>"><br><br>
                                <input type="hidden" value="<?php echo $data['id']; ?>" name="id">
                                </td>

                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                    <button type="submit" class="btn btn-primary">保存</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- Nav tabs -->

        </div>
    </div>
    </div>
    </ul>
    </div>
    </div>



</body>

</html>