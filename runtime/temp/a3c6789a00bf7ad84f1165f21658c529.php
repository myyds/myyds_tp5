<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpstudy_pro\WWW\myyds_tp5\public/../application/index\view\index\ud_th.html";i:1639221077;}*/ ?>
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
<style type="text/css">
/* table, td
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
} */

span{
  position: fixed;
	top: 23110px;
	left: -700px;
}
</style>
<body>

<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>


    
<!-- <br>教师编号<td><?php echo $data['id']; ?></td><br><td><?php echo $data['name']; ?>老师</td> -->





<div class="content" >
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"><h3>选题管理</h3>
      <form action="<?php echo url('index/ud_th'); ?>" method="post" enctype="multipart/form-data" class="form-style">
        <!-- <table border="1" cellpadding="5" cellspacing="0" style="text-align: center;"> -->
          <table class="table table-hover">
            <tr>
                <th>选题序号</th>
                <th>选题</th>
            </tr>
            <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $vo['theme_id']; ?></td>
                <td><?php echo $vo['theme_name']; ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <tr>
        
        
        
        <!-- </tr>
        <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
          
          <td><?php echo $vo['theme_id']; ?></td>
        
        <td>主题 <input type="text" name="theme_name" value="<?php echo $vo['theme_name']; ?>"></td><br>
        
        </tr> -->
        
        
        <!-- <?php endforeach; endif; else: echo "" ;endif; ?> -->
        
        
        
        
        
        </table>
        </form>
          </div>
          <br>
          <span  class="glyphicon glyphicon-chevron-left" style="font-size:30px"
                onclick="javascript:window.history.go(-1)"></span>
        </div></div>
    
    
  </div>
  
  



　　</body>

</html>
