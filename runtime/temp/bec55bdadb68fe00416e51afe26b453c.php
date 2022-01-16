<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpstudy_pro\WWW\myyds_tp5\public/../application/index\view\index\index.html";i:1639488160;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>




</head>

<style>
    .login_box1 {
        position: absolute;
        top: 200px;
    }
    
    .name {
        position: absolute;
        top: 35px;
        left: 130px;
        line-height: 36px;
    }
    
    .mod_services {
        height: 80px;
        border-bottom: 1px solid #ccc;
    }
    
    .bodycolor {
        position: relative;
    }
    
    .login_box {
        position: absolute;
        top: 181px;
        left: -38px;
    }
    
    .mod_services ul li {
        float: left;
        width: 250px;
        height: 50px;
        background-color: rgb(43, 32, 202);
        padding-left: 35px;
    }
    
    .mod_services ul li h5 {
        float: left;
        width: 50px;
        height: 50px;
        background-color: rgb(42, 231, 24);
        margin-right: 15px;
    }
    
    .mod_help {
        height: 185px;
        border-bottom: 1px solid #ccc;
        padding-top: 20px;
        padding-left: 50px;
    }
    
    .mod_help dl {
        margin-right: 120px;
        float: left;
    }
    
    .mod_help dl dt {
        font-size: 16px;
        margin-bottom: 10px;
    }
    
    .hide {
        display: none;
    }
    
    .layui-laypage-curr em {
        margin-right: 10px;
        font-style: normal;
    }
    
    #tab {
        position: absolute;
        top: 20%;
        width: 380px;
        right: 15%;
        height: 222px;
    }
    /*条*/
    
    #tab ul {
        list-style: none;
        height: 40px;
        line-height: 30px;
        border-bottom: 0px #cccccc solid;
    }
    /*   选项*/
    
    #select {
        position: absolute;
        top: -10px;
    }
    
    #tab ul li {
        cursor: pointer;
        float: left;
        list-style: none;
        height: 29px;
        line-height: 29px;
        padding: 0px 0px;
        margin: 20px 10px;
        border: 1px;
        border-bottom: 2px;
    }
    
    #tab div {
        height: 230px;
        width: 250px;
        line-height: 24px;
        border-top: none;
        padding: 0px;
        border: 0px solid #336699;
        padding: 10px;
    }
    
    .hide {
        display: none;
    }
    
    .box_111 {
        position: relative;
        top: -175px;
        right: 77px;
        height: 280px;
        width: 320px;
        border-bottom-right-radius: 100px;
    }
    
    .login_box_input {
        position: absolute;
        top: 50px;
    }
    
    #login {
        position: fixed;
        left: 45px;
        top: 250px;
        width: 100%;
        height: 100%;
        min-width: 970px;
        min-height: 500px;
        z-index: 11;
    }
    
    .login_bg_layer {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        min-width: 970px;
        min-height: 500px;
        z-index: 10;
    }
</style>
<script src=" https://cdn.jsdelivr.net/npm/vue/dist/vue.js ">
</script>

<script>
    $(function() {
        $("#addbtn").click(function() {
            $("#adduser1").modal({
                    show: true,
                    backdrop: 'static'
                }

            )

        });

    });
</script>



<body>
    <div class="login_bg_layer">
        <img src="/webposlogo1_zh.jpg" alt="" style="width: 100%;height: 100%;"></div>
    <div>

        <div class="modal fade" tabindex="-1" role="dialog" id="adduser1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" style="text-align: center;">添加用户</h4>
                    </div>
                    <div class="modal-body">

                        <form action="<?php echo url('index/do_add_user'); ?>" method="post" class="form-style" style="text-align: center;">
                            学号 ：<input type="text" name="id" value="" autocomplete="off"><br><br> 姓名 ：<input type="text" name="name" value="" autocomplete="off"><br><br> 性别 ： 男
                            <input type="radio" name="sex" value="1" checked="checked">     女
                            <input type="radio" name="sex" value="2"><br><br> 年龄 ：
                            <input type="text" name="age" value="" autocomplete="off"><br><br> 电话 ：
                            <input type="text" name="tel" value="" autocomplete="off"><br><br> 密码：
                            <input type="text" name="password" value="" autocomplete="off"><br><br>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <input type="submit" value="确定" class="btn btn-default btn-primary">


                    </div>
                    </form>
                </div>

            </div>
            <!-- /.modal-dialog -->
        </div>








        <div class="login_box1 col-md-3 col-md-offset-9" id="login">
            <div id="app">
                <div class="box_111">




                    <div v-if="isUser">
                        <!-- <form action="<?php echo url('index'); ?>" method="post"> -->
                        <form action="<?php echo url('index/login'); ?>" method="post">

                            <div class="login_box_input col-md-12 col-xs-12">
                                <div class="row login_row">
                                    <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">

                                    </div>
                                </div>

                                <br>
                                <div class="row login_row">
                                    <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
                                        <div class="input-group">

                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- -------- -->

                                <div class="input-group">
                                    <span class="input-group-addon radius-no" id="mark_UID"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                    <input name="id" type="text" value="a034s153437" id="id" class="form-control radius-no" placeholder="Account" aria-describedby="mark_UID" style="width:100%;" autocapitalize="false">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon radius-no" id="mark_PWD"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input name="password" type="password" id="password" class="form-control radius-no" placeholder="Password" aria-describedby="mark_PWD">
                                </div>
                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon radius-no" id="mark_DOMAIN"><i class="glyphicon glyphicon-globe"></i></span>
                                    <select name="LanguageSelect" onchange="javascript:setTimeout('__doPostBack(\'LanguageSelect\',\'\')', 0)" id="LanguageSelect" tabindex="4" class="form-control" aria-describedby="mark_DOMAIN" style="width:100%;">
<option value="English">English</option>
<option selected="selected" value="中文">中文</option>

</select>
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon radius-no" id="mark_VERIFY"><i class="glyphicon glyphicon-heart-empty"></i></span>

                                    <input name="txtCaptcha" type="text" id="txtCaptcha" autocomplete="off" class="form-control radius-no" style="height: 31px; width: 40%" placeholder="请输入验证码" maxlength="4" aria-describedby="mark_VERIFY">
                                    <!-- <div><?php echo captcha_img(); ?></div> -->
                                    <img src="<?php echo captcha_src(); ?>" class="verify" onclick="javascript:this.src='<?php echo captcha_src(); ?>?rand='+Math.random()">

                                </div>
                                <br>

                                <div>
                                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                        <div class="btn-group" role="group" style="width: 200px;">
                                            <input name="Hid_MacValue" type="hidden" id="Hid_MacValue">
                                            <input type="submit" name="Btn_Login" value="登 录" onclick="return checkForm();" id="Btn_Login" tabindex="6" class="btn btn-primary btn-lg">
                                        </div>
                                    </div>
                                </div>
                                <!-- -------- -->

                                <div class="row login_row1">
                                    <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
                                        <div class="input-group1">
                                            <!-- <button type="submit" class="btn btn-primary btn-block">登录</button> -->



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>



                    <div v-else>

                        <li id="addbtn"><a href="#">注册</a></li>
                    </div>





                    <!-- </div><button @click="isUser= !isUser"> 转换</button> -->
                </div>
            </div>













            <script>
                const app = new Vue({
                    el: '#app',
                    data: {
                        isUser: true
                    }
                })
            </script>


        </div>

</body>

</html>