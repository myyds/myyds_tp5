<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\phpstudy_pro\WWW\myyds_tp5\public/../application/index\view\admin\show_admin.html";i:1642498199;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<!-- <script src="../css/bootstrap.html"></script> 无法加载框-->
<script>
    $(function() {
        $("#bt1").click(function() {
            $("#au1").modal({
                    show: true,
                    backdrop: 'static'
                }

            )

        });

    });
    $(function() {
        $("#bt2").click(function() {
            $("#au2").modal({
                    show: true,
                    backdrop: 'static'
                }

            )

        });

    });
    $(function() {
        $("#bt3").click(function() {
            $("#au3").modal({
                    show: true,
                    backdrop: 'static'
                }

            )

        });

    });
</script>



<body>

    <div class="modal fade" tabindex="-1" role="dialog" id=au1>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">新增学生信息</h4>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <form action="<?php echo url('admin/do_add_user'); ?>" method="post" class="form-style">
                        学号 ：<input type="text" name="id" value=""><br><br> 姓名 ：<input type="text" name="name" value=""><br><br> 性别 ：男
                        <input type="radio" name="sex" value="1" checked="checked">    女<input type="radio" name="sex" value="2">
                        <br><br> 年龄 ：
                        <input type="text" name="age" value=""><br><br> 电话 ：<input type="text" name="tel" value=""><br><br> 密码：

                        <input type="text" name="password" value=""><br><br>



                        <div class="modal-footer" style="text-align: center;">
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>

                            <button type="submit" class="btn btn-primary">确定</button>
                        </div>

                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary">确定</button>
                </div> -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id=au2>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">新增教师信息</h4>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <form action="<?php echo url('admin/do_add_teacher'); ?>" method="post" class="form-style">
                        工号 ：<input type="text" name="id" value=""><br><br> 姓名 ：<input type="text" name="name" value=""><br><br> 专业 ：<input type="text" name="major" value=""><br><br> 密码：
                        <input type="text" name="password" value=""><br><br> 电话：
                        <input type="text" name="tel" value=""><br><br>



                        <div class="modal-footer" style="text-align: center;">
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>

                            <button type="submit" class="btn btn-primary">确定</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id=au3>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">发布公告</h4>
                </div>
                <div class="modal-body">

                    <form action="<?php echo url('admin/publish_anno'); ?>" method="post" enctype="multipart/form-data" class="form-style">

                        <td>公告 <input type="text" name="ad" value="<?php echo $info['ad']; ?>"></td><br><br>
                        <!-- <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
                        <input type="submit" value="确定修改"> -->






                        <!-- <li><a href="<?php echo url('index/announcement'); ?>">发布公告 <span class="sr-only">(current)</span></a></li> -->


                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <button type="submit" class="btn btn-primary">确定</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- <br>教师编号<td><?php echo $data['id']; ?></td><br><td><?php echo $data['name']; ?>老师</td> -->

    <nav class="navbar navbar-default">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
                <a class="navbar-brand" href="#">用户管理 <small> v1.0</small></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li class="active"><a href="<?php echo url('index/show_admin'); ?>">首页 <span class="sr-only">(current)</span></a></li>
                    <!-- <li><a href="<?php echo url('index/add_user'); ?>">添加学生 <span class="sr-only">(current)</span></a></li> -->
                    <li id=bt1><a href="#">添加用户 <span class="sr-only">(current)</span></a></li>
                    <!-- <li><a href="<?php echo url('index/add_teacher'); ?>">添加教师 <span class="sr-only">(current)</span></a></li> -->
                    <li id=bt2><a href="#">添加管理 <span class="sr-only">(current)</span></a></li>
                    <!-- <li><a href="<?php echo url('index/announcement'); ?>">发布公告 <span class="sr-only">(current)</span></a></li> -->
                    <li id="bt3"><a href="#">发布公告 <span class="sr-only">(current)</span></a></li>


                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo url('index/logout'); ?>">注销登录 <span class="sr-only">(current)</span></a></li>
                    <!-- <li id="addbtn"><a href="<?php echo url('index/add_user'); ?>">注册</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <script>
    </script>
    <div class="col-sm-8 col-sm-offset-2">
        <div class="content">
            <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

            <body>
                <div>

                    <!-- Nav tabs -->


                    <!-- Tab panes -->
                    <!-- <div class="tab-content"> -->
                    <!-- //学生部分 -->



                    <body>

                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active">
                                <a href="#home" data-toggle="tab">
                              用户<?php echo $countuser; ?>
                            </a>
                            </li>
                            <li><a href="#ios" data-toggle="tab">管理<?php echo $countteacher; ?></a></li>
                            <li class="dropdown">
                                <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">其他
                              <b class="caret"></b>
                            </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                                    <li><a href="#jmeter" tabindex="-1" data-toggle="tab">管理员</a></li>
                                    <li><a href="#ejb" tabindex="-1" data-toggle="tab">ejb</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="home">
                                <div>

                                    <!-- <table border="1" cellpadding="5" cellspacing="0"> -->
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>姓名</th>
                                            <th>性别</th>
                                            <th>年龄</th>
                                            <th>电话</th>
                                            <th>操作</th>
                                        </tr>
                                        <?php if(is_array($data_list) || $data_list instanceof \think\Collection || $data_list instanceof \think\Paginator): $i = 0; $__LIST__ = $data_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <td><?php echo $vo['id']; ?></td>
                                            <td><?php echo $vo['name']; ?></td>
                                            <td><?php if($vo['sex'] == '1'): ?>男<?php elseif($vo['sex'] == '2'): ?>女<?php else: ?>保密<?php endif; ?></td>
                                            <td><?php echo $vo['age']; ?></td>
                                            <td><?php echo $vo['tel']; ?></td>
                                            <td><a href="<?php echo url('admin/edit_user_admin',['id' => $vo['id']]); ?>" class="btn btn-success btn-xs">
                              编辑</button> </a>&nbsp; &nbsp;<a href="<?php echo url('admin/del',['id' => $vo['id']]); ?>" class="btn btn-danger btn-xs">
                              删除</button></a></td>
                                        </tr>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </table>
                                    <div><?php echo $page; ?></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ios">
                                <div>

                                    <!-- <table border="1" cellpadding="5" cellspacing="0"> -->
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>姓名</th>
                                            <th>电话</th>
                                            <th>专业</th>
                                            <th>操作</th>
                                        </tr>
                                        <?php if(is_array($data_list1) || $data_list1 instanceof \think\Collection || $data_list1 instanceof \think\Paginator): $i = 0; $__LIST__ = $data_list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <td><?php echo $v1['id']; ?></td>
                                            <td><?php echo $v1['name']; ?></td>
                                            <td><?php echo $v1['tel']; ?></td>
                                            <td><?php echo $v1['major']; ?></td>
                                            <td><a href="<?php echo url('admin/edit_teacher_admin',['id' => $v1['id']]); ?>" class="btn btn-success btn-xs">编辑</a>&nbsp; &nbsp;
                                                <a href="<?php echo url('admin/del_t',['id' => $v1['id']]); ?>" class="btn btn-danger btn-xs">删除</a></td>
                                        </tr>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>


                                    </table>
                                    <div><?php echo $page1; ?></div>






                                </div>
                            </div>
                            <div class="tab-pane fade" id="jmeter">
                                <div>


                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>姓名</th>

                                            <th>公告</th>

                                        </tr>
                                        <?php if(is_array($data_list3) || $data_list3 instanceof \think\Collection || $data_list3 instanceof \think\Paginator): $i = 0; $__LIST__ = $data_list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <td><?php echo $v3['id']; ?></td>
                                            <td><?php echo $v3['name']; ?></td>
                                            <td><?php echo $v3['ad']; ?></td>



                                        </tr>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>


                                    </table>
                                    <div><?php echo $page1; ?></div>






                                </div>
                            </div>
                            <div class="tab-pane fade" id="ejb">
                                <p>Enterprise Java Beans（EJB）是一个创建高度可扩展性和强大企业级应用程序的开发架构，部署在兼容应用程序服务器（比如 JBOSS、Web Logic 等）的 J2EE 上。
                                </p>
                            </div>
                        </div>

                    </body>


                </div>
        </div>
    </div>
    </div>

    </div>





    </body>

</html>