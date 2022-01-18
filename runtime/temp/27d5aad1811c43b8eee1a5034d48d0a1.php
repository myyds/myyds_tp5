<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"D:\phpstudy_pro\WWW\myyds_tp5\public/../application/index\view\admin\updateuser_admin.html";i:1642498123;}*/ ?>
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
            <form action="<?php echo url('admin/do_edit_user_admin'); ?>" method="post" enctype="multipart/form-data"
                class="form-style">

                <br>
                <br>

                <div class="form-group">
                    <label for="name">ID</label>
                    <input type="text" class="form-control" id="id" name="name" value="<?php echo $info['id']; ?>" placeholder="请输入名称">
                    <label for="name">姓名</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $info['name']; ?>"
                        placeholder="请输入名称">
                    <br>
                    <label for="name">性别</label>
                    <td><?php if($info['sex'] == '1'): ?>
                        男<input type="radio" name="sex" value="1" checked="checked">
                        女<input type="radio" name="sex" value="2"> <?php elseif($info['sex'] == '2'): ?> 
                        男<input type="radio" name="sex" value="1"> 
                        女<input type="radio" name="sex" value="2" checked="checked"> <?php endif; ?>
                    </td>
                    <!-- <input type="text" class="form-control" id="name" name="name" value="<?php echo $info['name']; ?>" placeholder="请输入名称"> -->
                    <br><br>
                    <label for="name">年龄</label>
                    <input type="text" class="form-control" name="age" value="<?php echo $info['age']; ?>" placeholder="请输入年龄">
                    <label for="name">电话</label>
                    <input type="text" class="form-control" name="tel" value="<?php echo $info['tel']; ?>" placeholder="请输入电话">
                    <label for="name">邮箱</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $info['email']; ?>" placeholder="请输入邮箱">
                    <label for="name">家庭住址</label>
                    <input type="text" class="form-control" name="family_adress" value="<?php echo $info['family_adress']; ?>"
                        placeholder="请输入家庭地址">
                    <label for="name">证件号码</label>
                    <input type="text" class="form-control" name="id_" value="<?php echo $info['id_']; ?>" placeholder="请输入证件号码">
                    <label for="name">专业</label>
                    <input type="text" class="form-control" name="major" value="<?php echo $info['major']; ?>" placeholder="请输入所属专业">

                </div>




                <!-- 
				<div class="content">
					<div class="add"> -->

                <!-- <form action="<?php echo url('index/do_edit_user_admin'); ?>" method="post" enctype="multipart/form-data" class="form-style"> -->

                <!-- <td>姓名123123 <input type="text" name="name" value="<?php echo $info['name']; ?>"></td><br><br> -->
                <!-- <td>性别:<?php if($info['sex'] == '1'): ?>
							男<input type="radio" name="sex" value="1" checked="checked">
							女<input type="radio" name="sex" value="2">
							<?php elseif($info['sex'] == '2'): ?>
							男<input type="radio" name="sex" value="1">
							女<input type="radio" name="sex" value="2" checked="checked">
							<?php endif; ?></td> -->
                <!-- <td><br><br>
							年龄 <input type="text" name="age" value="<?php echo $info['age']; ?>"></td><br><br> -->
                <!-- <td>
							电话 <input type="text" name="tel" value="<?php echo $info['tel']; ?>"><br><br>
						</td> -->


                <!-- 邮箱<input type="text" name="email" value="<?php echo $info['email']; ?>"><br><br>
						</td> -->
                <!-- 家庭住址<input type="text" name="family_adress" value="<?php echo $info['family_adress']; ?>"><br><br>
						</td>

						身份证号码<input type="text" name="id_" value="<?php echo $info['id_']; ?>"><br><br>
						</td>

						专业<input type="text" name="major" value="<?php echo $info['major']; ?>"><br><br>
						</td> -->
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

                <label for="name">头像</label>
                <!-- <td> -->
                <!-- <img src="/uploads/<?php echo $info['img']; ?>" width="100px;" height="100px;"> -->
                <!-- 显示img -->
                <!-- <input type="hidden" name="old_img" value="<?php echo $info['img']; ?>"> -->
                <!-- 输入img -->
                <!-- <a href="/uploads/<?php echo $info['img']; ?>" download="<?php echo $info['id']; ?>.jpg">下载头像</a> -->
                <!-- <input type="file" name="img"> -->
                <!-- </td> -->


               


                <div class="form-group">
                    <img src="/uploads/<?php echo $info['img']; ?>" width="100px;" height="100px;">
                    <!-- 显示img -->
                    <input type="hidden" name="old_img" value="<?php echo $info['img']; ?>">
                    <!-- 输入img -->
                    <a href="/uploads/<?php echo $info['img']; ?>" download="<?php echo $info['id']; ?>.jpg">下载头像</a>

                    <label for="inputfile">文件输入</label>
                    <input type="file" id="inputfile" name="img">
                    <!-- <p class="help-block">这里是块级帮助文本的实例。</p> -->
                </div>

                <!-- <td>文件上传
				<input type="hidden" name="old_paper" value="<?php echo $info['paper']; ?>">
				<a href="/uploads/<?php echo $info['paper']; ?>" download="<?php echo $info['id']; ?>.docx">下载</a>
				<input type="file" name="paper">
			</td> -->

                <br/> <br/>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> 请确保信息真实性并打勾
                    </label>
                </div>

                <!-- 无此行无法跳转 -->
                <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
                <button type="submit" class="btn btn-default">提交</button>
            </form>
        </div>
    </div>






</body>

</html>