<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpstudy_pro\WWW\myyds_tp5\public/../application/index\view\user\paper_user.html";i:1642322889;}*/ ?>
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

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>


    <!-- <div class="content">
        <h1 class="title"> 欢迎使用桂林电子科技大学北海校区毕业设计管理系统</h1>
        <div class="add">
            <ul class="nav nav-pills">
                <li role="presentation"><a href="<?php echo url('index/show_user'); ?>">选题信息</a></li>
                <li role="presentation"><a href="<?php echo url('index/edit_user'); ?>?id=<?php echo $data['id']; ?>">修改信息</a></li>
                <li role="presentation" class="active"><a href="<?php echo url('index/uploadpaper'); ?>?id=<?php echo $data['id']; ?>">论文管理</a></li>
                <li role="presentation"><a href="<?php echo url('index/updatapw_u'); ?>?id=<?php echo $data['id']; ?>">修改密码</a></li>
                <li role="presentation"><a href="<?php echo url('index/select_t'); ?>?id=<?php echo $data['id']; ?>">选择导师</a></li>
                <li role="presentation"><a href="<?php echo url('index/logout'); ?>">注销登录</a></li>
            </ul> -->

    <!--  <nav aria-label="...">
  <ul class="pager">
    <li class="next"><a href="<?php echo url('index/logout'); ?>">注销登录 <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav> -->


    <form action="<?php echo url('index/do_uploadpaper'); ?>" method="post" enctype="multipart/form-data" class="form-style">


        <td>
            <label for="">初稿</label>
            <input type="hidden" name="old_paper" value="<?php echo $info['paper']; ?>">
            <!-- 输入img -->
            <input type="file" name="paper">


        </td>
        <label for="">提交状态</label> <?php if($info['paper'] == null): ?> <span class="glyphicon glyphicon-remove"></span> <?php else: ?> <span class="glyphicon glyphicon-ok"></span> <?php endif; ?>
        <a href="/uploads/<?php echo $info['paper']; ?>" download="<?php echo $info['id']; ?>.docx">下载</a>

        <br>
        <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
        <input type="submit" value="提交">


    </form>




    <br>
    <br>
    <br>
    <br>








    <form action="<?php echo url('user/do_uploadpaper3'); ?>" method="post" enctype="multipart/form-data" class="form-style">


        <td>终稿
            <input type="hidden" name="old_paper" value="<?php echo $info['paper3']; ?>">
            <!-- 输入img -->
            <input type="file" name="paper3">


        </td>
        <label for="">提交状态</label> <?php if($info['paper3'] == null): ?> <span class="glyphicon glyphicon-remove"></span> <?php else: ?> <span class="glyphicon glyphicon-ok"></span> <?php endif; ?>
        <a href="/uploads/<?php echo $info['paper3']; ?>" download="<?php echo $info['id']; ?>.docx">下载</a>

        <br>

        <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
        <input type="submit" value="提交">





    </form>
    </div>
    </div>


    <!-- <form action="<?php echo url('index/do_uploadpaper2'); ?>" method="post" enctype="multipart/form-data">


<td>文件上传
	<input type="hidden" name="old_paper" value="<?php echo $info['paper2']; ?>">
	<a href="/uploads/<?php echo $info['paper2']; ?>" download="<?php echo $info['id']; ?>.docx">下载</a>
	<input type="file" name="paper2">

	
		</td>
$info.paper2
<br>


<br/> <br/> 
<input type="hidden" name="id"  value="<?php echo $info['id']; ?>">
<input type="submit" value="确定修改">


</form> -->

</body>

</html>