<?php
/* Smarty version 3.1.30, created on 2017-11-02 09:32:38
  from "D:\wamp\www\mvc\template\admin\main\adduser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fae636324476_69338519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7813323d546efa8fb593dabf199cd75507c80cee' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\main\\adduser.html',
      1 => 1509613940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fae636324476_69338519 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/upload.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/adduser.js"><?php echo '</script'; ?>
>
    <style>
        .box{
            width: 755px;
            height: 180px;
            position: relative;
            margin-top: 55px;
        }
    </style>
</head>
<body>
    <form class="form-horizontal" method="post" style="margin-top: 30px;" action="index.php?m=admin&f=user&a=userCon">
        <div class="form-group">
            <label class="col-sm-2 control-label">姓名：</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="请输入用户姓名" name="uname">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">密码：</label>
            <div class="col-sm-5">
                <input type="password" class="form-control col-sm-3" placeholder="请输入用户密码" name="upass">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">昵称：</label>
            <div class="col-sm-5">
                <input type="text" class="form-control col-sm-3" placeholder="请输入用户昵称" name="nicheng">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">头像：</label>
            <div class="col-sm-5">
                <div class="box"></div>
                <input type="hidden" name="photo" id="img">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">电话：</label>
            <div class="col-sm-5">
                <input type="text" class="form-control col-sm-3" placeholder="请输入用户电话" name="phone">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
                <button type="submit" class="btn btn-default">提交</button>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
