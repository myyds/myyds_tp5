<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpstudy_pro\WWW\myyds_tp5\public/../application/index\view\user\paper_user.html";i:1642390662;}*/ ?>
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




    <form action="<?php echo url('index/do_uploadpaper'); ?>" method="post" enctype="multipart/form-data" class="form-style">


        <td>
            <label for="">初稿</label>
            <input type="hidden" name="old_paper" value="<?php echo $info['paper']; ?>">
            <!-- 输入img -->
            <input type="file" name="paper">


        </td>
        <label for="">提交状态</label> <?php if($info['paper'] == null): ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg> <?php else: ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
          </svg> <?php endif; ?>
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
        <label for="">提交状态</label> <?php if($info['paper3'] == null): ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg> <?php else: ?><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
          </svg> <?php endif; ?>
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