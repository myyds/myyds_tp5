<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"D:\phpstudy_pro\WWW\myyds_tp5\public/../application/index\view\admin\updateteacher_admin.html";i:1642521243;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<meta charset="UTF-8">
<title>更新信息</title>

<body>
    <div class="row">
        <div class=" col-md-4 col-md-offset-4">


            <!-- <form role="form"> -->
            <form action="<?php echo url('admin/do_edit_teacher_admin'); ?>" method="post" enctype="multipart/form-data" class="form-style">
                <br>
                <br>

                <div class="form-group">
                    <label for="name">姓名</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $info['name']; ?>" placeholder="请输入名称">
                    <label for="name">专业</label>
                    <input type="text" class="form-control" name="major" value="<?php echo $info['major']; ?>" placeholder="请输入年龄">
                    <label for="name">电话</label>
                    <input type="text" class="form-control" name="tel" value="<?php echo $info['tel']; ?>" placeholder="请输入电话">

                    <!-- 无此行无法跳转 -->
                    <input type="hidden" value="<?php echo $info['id']; ?>" name="id">



                    <div class="checkbox">
                        <label>
								<input type="checkbox"> 请确保信息真实性并打勾
							</label>

                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
            </form>
            </div>
        </div>
</body>

</html>