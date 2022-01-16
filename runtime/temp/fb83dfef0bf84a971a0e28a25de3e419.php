<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"D:\phpstudy_pro\WWW\myyds_tp5\public/../application/index\view\index\show_teacher.html";i:1639574477;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/static/css/main.css"> -->

    <title>用户信息表</title>

</head>

<style>
    .icon {
        width: 1em;
        height: 1em;
        vertical-align: -0.15em;
        fill: currentColor;
        overflow: hidden;
    }
</style>

<body>
    <script src="./iconfont.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>


    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                    <li><a href="#">指标管理</a></li>
                    <!-- <li><a href="<?php echo url('index/add_theme'); ?>?id=<?php echo $data['id']; ?>">添加选题</a></li> -->
                    <li><a href="<?php echo url('index/ud_th'); ?>?id=<?php echo $data['id']; ?>">选题管理</a></li>
                    <li><a href="<?php echo url('index/show_check'); ?>?id=<?php echo $data['id']; ?>">用户管理</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal3">
                            添加选题</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <span style="color: red;"><i class="glyphicon glyphicon-user"></i></span> <strong>
                                管理员编号</strong><?php echo $data['id']; ?> <strong>姓名</strong> <?php echo $data['name']; ?>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">个人中心 <span class="caret"></span></a>

                        <!-- Button trigger modal -->


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">修改密码</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-body" style="text-align: center;">
                                            <form action="<?php echo url('index/do_updatapw_t'); ?>?id=<?php echo $data['id']; ?>" method="post"
                                                enctype="multipart/form-data" class="form-style">



                                                密码<input type="text" name="password" value="<?php echo $data['password']; ?>"><br><br>
                                                <input type="hidden" value="<?php echo $info['id']; ?>" name="id">
                                                </td>




                                                <br /> <br />
                                                <input type="hidden" name="id" value="<?php echo $info['id']; ?>">


                                                <div class="modal-footer" style="text-align: center;">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">取消</button>

                                                    <button type="submit" class="btn btn-primary">确定</button>
                                                </div>
                                                <!-- <input type="submit" value="确定修改"> -->
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">个人信息</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-body" style="text-align: center;">
                                            <form action="<?php echo url('index/do_edit_teacher'); ?>" method="post"
                                                enctype="multipart/form-data" class="form-style">

                                                <td>姓名 <input type="text" name="name" value="<?php echo $data['name']; ?>"></td><br><br>




                                                <td>专业 <input type="text" name="major" value="<?php echo $data['major']; ?>"></td>
                                                <br><br>

                                                <td>电话 <input type="text" name="tel" value="<?php echo $data['tel']; ?>"><br><br></td>
                                                <!-- <td>密码<input type="text" name="password" value="<?php echo $info['password']; ?>"><br><br></td> -->


                                                <input type="hidden" value="<?php echo $data['id']; ?>" name="id">



                                                <br><br>
                                                <div class="modal-footer" style="text-align: center;">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">取消</button>
                                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                                                    <button type="submit" class="btn btn-primary">确定</button>
                                                </div>
                                                <br /> <br />

                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">添加选题</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-body" style="text-align: center;">
                                            <form action="<?php echo url('index/do_add_theme'); ?>" method="post"
                                                enctype="multipart/form-data" class="form-style">

                                                <!-- <td>工号 <input type="text" name="name" value="<?php echo $info['id']; ?>"></td><br>
                                                <td>姓名 <input type="text" name="name" value="<?php echo $info['name']; ?>"></td><br>
                                                <td>密码 <input type="text" name="password" value="<?php echo $info['password']; ?>"></td><br> -->
                                                <td>主题 <input type="text" name="theme_name" value=""></td><br>



                                                <!-- <input type="hidden" name="id"  value="<?php echo $data['id']; ?>">
                                                <input type="submit" value="添加主题"> -->

                                                <div class="modal-footer" style="text-align: center;">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">取消</button>
                                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                                                    <button type="submit" class="btn btn-primary">确定</button>
                                                </div>


                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <ul class="dropdown-menu">
                            <!-- <li><a href="<?php echo url('index/edit_teacher'); ?>?id=<?php echo $data['id']; ?>">修改信息</a></li> -->


                            <li><a href="#" data-toggle="modal" data-target="#myModal">
                                    修改密码</a>
                            </li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal2">
                                    个人信息</a>
                            </li>

                            <!-- <li><a href="<?php echo url('index/updatapw_t'); ?>?id=<?php echo $data['id']; ?>">修改密码</a></li> -->
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>

                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo url('index/logout'); ?>"> <span><i class="glyphicon glyphicon-off"></i></span> 注销登录</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        



                        <div>
                            <table class="table table-hover">
                                <tr>
                                    <th>选题序号</th>
                                    <th>已发布选题</th>
                                </tr>
                                <?php if(is_array($data2) || $data2 instanceof \think\Collection || $data2 instanceof \think\Paginator): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td><?php echo $vo['theme_id']; ?></td>
                                    <td><?php echo $vo['theme_name']; ?></td>
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </table>
                        </div>

                        <div>
                            <table class="table table-hover" style="position: absolute;top: 299px;" >
                                <tr>
                                    <th>选题序号</th>
                                    <th>选题</th>
                                    <th>已选用户编号</th>
                                    <th>已选用户姓名</th>
                                    <th>文件管理</th>
                                </tr>
                                <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td><?php echo $vo['theme_id']; ?></td>
                                    <td><?php echo $vo['theme_name']; ?></td>
                                    <td><?php echo $vo['student_id']; ?></td>
                                    <td><?php echo $vo['name']; ?></td>
                                    <td><a
                                            href="<?php echo url('index/uploadpaper2',['id' => $vo['id']]); ?>"><button>查看文件</button></a>
                                    </td>
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>



                        </table>
                    </div>
                </div>
                
                
            </div>

        </div>
       
    </div>
</body>

</html>