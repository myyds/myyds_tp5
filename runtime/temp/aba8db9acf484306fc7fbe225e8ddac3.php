<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\phpstudy_pro\WWW\myyds_tp5\public/../application/index\view\user\select_t.html";i:1642315165;}*/ ?>
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
<style type="text/css">
    /*.nav-pills{
        width: 900px;
        height: 300px;
    }*/
</style>

<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    </a>

    <!-- 
        <div class="content">
          <h1 class="title">欢迎使用桂林电子科技大学北海校区毕业设计管理系统</h1>
          <div class="add">
            <ul class="nav nav-pills">
  <li role="presentation" ><a href="<?php echo url('index/show_user'); ?>?id=<?php echo $data['id']; ?>">选题信息</a></li>
  <li role="presentation"><a href="<?php echo url('index/edit_user'); ?>?id=<?php echo $data['id']; ?>">修改信息</a></li>
  <li role="presentation"><a href="<?php echo url('index/uploadpaper'); ?>?id=<?php echo $data['id']; ?>">论文管理</a></li>
  <li role="presentation"><a href="<?php echo url('index/updatapw_u'); ?>?id=<?php echo $data['id']; ?>">修改密码</a></li>
  <li role="presentation"  class="active"><a href="<?php echo url('index/select_t'); ?>?id=<?php echo $data['id']; ?>">选择导师</a></li>
  <li role="presentation"><a href="<?php echo url('index/logout'); ?>">注销登录</a></li>
</ul>


<br> -->



    </tr>

    <form action="<?php echo url('user/do_select_t'); ?>" method="post" enctype="multipart/form-data" class="form-style">




        <select name="teacher_id">
      <option value="">请选择导师</option>
      <?php if(is_array($info1) || $info1 instanceof \think\Collection || $info1 instanceof \think\Paginator): $i = 0; $__LIST__ = $info1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?> (专业方向：<?php echo $vo['major']; ?>)</option>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </select>






        <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
        <input type="submit" value="确定修改">


    </form>
    <form action="<?php echo url('user/do_select_theme'); ?>" method="post" enctype="multipart/form-data" class="form-style">




        <select name="theme_id">
      <option value="">请选择选题</option>
      <?php if(is_array($theme_id) || $theme_id instanceof \think\Collection || $theme_id instanceof \think\Paginator): $i = 0; $__LIST__ = $theme_id;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <option value="<?php echo $vo['theme_id']; ?>"><?php echo $vo['theme_name']; ?> </option>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </select>






        <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
        <input type="submit" value="确定修改">


    </form>
    </div>
    </div>

    </head>

</body>

</html>