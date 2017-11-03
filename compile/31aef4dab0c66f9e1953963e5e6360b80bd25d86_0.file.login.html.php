<?php
/* Smarty version 3.1.30, created on 2017-11-03 00:42:20
  from "D:\wamp\www\appid3wj3bfjn3f\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fbbb6ca937b4_55614766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31aef4dab0c66f9e1953963e5e6360b80bd25d86' => 
    array (
      0 => 'D:\\wamp\\www\\appid3wj3bfjn3f\\template\\admin\\login.html',
      1 => 1509613941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fbbb6ca937b4_55614766 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/loginreg.js"><?php echo '</script'; ?>
>
    <title>Document</title>
</head>
<body>
        <div class="big">
            <div class="head">
                <button class="head-login">登录</button>
                <div class="divi"></div>
                <button class="head-reg">注册</button>
            </div>
            <div class="loginreg">
                <div class="login">
                    <form class="form-horizontal" action="index.php?m=admin&f=login&a=loginCon" method="post">
                        <!---->
                        <div class="form-group">
                            <label class="col-sm-3 control-label glyphicon glyphicon-user"></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="请输入用户名" autocomplete="off" name="aname">
                            </div>
                        </div>
                        <!---->
                        <div class="form-group">
                            <label class="col-sm-3 glyphicon glyphicon-lock control-label"></label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="请输入密码" autocomplete="off" name="apass">
                            </div>
                        </div>
                        <!---->
                        <div class="form-group">
                            <label class="col-sm-3 glyphicon glyphicon-phone control-label"></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="请输入手机号" autocomplete="off" name="phone">
                            </div>
                        </div>
                        <!---->
                        <div class="form-group">
                            <label class="col-sm-3 control-label glyphicon glyphicon-envelope"></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" autocomplete="off" name="phonecode" placeholder="请输入手机验证码">
                            </div>
                            <div class="four">
                                <a href="javascript:;">获取验证码</a>
                            </div>
                        </div>
                        <!---->
                        <div class="form-group">
                            <label class="col-sm-3 control-label glyphicon glyphicon-picture"></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" autocomplete="off" name="code"  placeholder="请输入验证码">
                            </div>
                            <img src="index.php?m=admin&f=login&a=codeimg" class="codeimg" alt="" onclick="src='index.php?m=admin&f=login&a=codeimg'">
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <button type="submit" class="btn btn-primary">登录</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="reg">
                    <form class="form-horizontal" action="index.php?m=admin&f=login&a=regCon" method="post">
                        <div class="form-group">
                            <label for="uname" class="col-sm-3 control-label glyphicon glyphicon-user"></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="uname" placeholder="请输入用户名" name="aname" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upass" class="col-sm-3 control-label glyphicon glyphicon-lock control-label"></label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" id="upass" placeholder="请输入密码" name="apass" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="upass1" class="col-sm-3 control-label glyphicon glyphicon-lock control-label"></label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" id="upass1" placeholder="请输入再次密码" name="apass1" autocomplete="off">
                            </div>
                        </div>
                        <!---->
                        <div class="form-group">
                            <label class="col-sm-3 glyphicon glyphicon-phone control-label"></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="请输入手机号" autocomplete="off" name="uname">
                            </div>
                        </div>
                        <!---->
                        <div class="form-group">
                            <label class="col-sm-3 control-label glyphicon glyphicon-envelope"></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" autocomplete="off" name="phonecode" placeholder="请输入手机验证码">
                            </div>
                            <div class="four">
                                <a href="javascript:;">获取验证码</a>
                            </div>
                        </div>
                        <!---->
                        <div class="form-group">
                            <label class="col-sm-3 control-label glyphicon glyphicon-picture"></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" autocomplete="off" name="code"  placeholder="请输入验证码">
                            </div>
                            <img src="index.php?m=admin&f=login&a=codeimg" class="codeimg" alt="" onclick="src='index.php?m=admin&f=login&a=codeimg'">
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <button type="submit" class="btn btn-primary">注册</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html><?php }
}
