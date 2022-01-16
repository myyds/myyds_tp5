<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\phpstudy_pro\WWW\myyds_tp5\public/../application/index\view\index\manage_user.html";i:1639231871;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<title>用户信息表</title>

</head>
<style type="text/css">
table, td
  {
  border:1px solid green;
  }

th
  {
  background-color:green;
  color:white;
  }	
.t{
	position: fixed;
	top: 150px;
	left: 100px;
}
.s{
	position: fixed;
	top: 150px;
	left: 500px;
}


span{
  position: fixed;
	top: 23110px;
	left: -700px;
}
</style>

</style>
<body>

<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>


  
    <div class="content" >
      <div class="row"><br>
        <div class="col-md-4"></div>
        <span  class="glyphicon glyphicon-chevron-left" style="font-size:30px"
                    onclick="javascript:window.history.go(-1)"></span>
        <div class="col-md-4"><h3>审核学生名单</h3>
          <form action="<?php echo url('index/do_check'); ?>" method="post" enctype="multipart/form-data" class="form-style">



            
            <?php if(is_array($check_student) || $check_student instanceof \think\Collection || $check_student instanceof \think\Paginator): $i = 0; $__LIST__ = $check_student;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <input type="radio" name="like[]" value=<?php echo $vo['theme_id']; ?>>学号:<?php echo $vo['student_id']; ?>&nbsp&nbsp&nbsp&nbsp选题学生:<?php echo $vo['name']; ?>&nbsp&nbsp&nbsp选题:<?php echo $vo['theme_id']; ?><br>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            
            <input type="hidden" name="id"  value="<?php echo $info['id']; ?>">
            <input type="submit" value="确定修改">
            
            
            </form>
              </div>
             
              
            </div>
        
        
      </div>

</body>










  
  



　　

</html>



