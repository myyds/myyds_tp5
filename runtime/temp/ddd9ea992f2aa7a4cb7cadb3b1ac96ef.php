<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"D:\phpstudy_pro\WWW\myyds_tp5\public/../application/index\view\teacher\paper_teacher.html";i:1642323616;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/static/css/main.css">
    <title>用户信息表</title>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>


    <div class="content">
        <h1 class="title">查看论文（教师端）</h1>
        <div class="add">


            <form action="<?php echo url('teacher/do_uploadpaper'); ?>" method="post" enctype="multipart/form-data" class="form-style">


                <td>初稿
                    <input type="hidden" name="old_paper" value="<?php echo $info['paper']; ?>">
                    <!-- 输入img -->
                    <a href="/uploads/<?php echo $info['paper']; ?>" download="<?php echo $info['id']; ?>.docx">下载</a>
                    <input type="file" name="paper">


                </td>
                <?php if($info['paper'] == null): ?>未提交论文<?php else: ?>已提交论文<?php endif; ?>
                <br>


                <br/> <br/>
                <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
                <input type="submit" value="确定修改">


            </form>













            <form action="<?php echo url('teacher/do_uploadpaper3'); ?>" method="post" enctype="multipart/form-data" class="form-style">


                <td>终稿
                    <input type="hidden" name="old_paper" value="<?php echo $info['paper3']; ?>">
                    <!-- 输入img -->
                    <a href="/uploads/<?php echo $info['paper3']; ?>" download="<?php echo $info['id']; ?>.docx">下载</a>
                    <input type="file" name="paper3">


                </td>
                <?php if($info['paper3'] == null): ?>未提交论文<?php else: ?>已提交论文<?php endif; ?>
                <br>


                <br/> <br/>
                <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
                <input type="submit" value="确定修改">





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