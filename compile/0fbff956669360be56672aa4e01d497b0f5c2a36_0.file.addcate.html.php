<?php
/* Smarty version 3.1.30, created on 2017-11-02 09:32:07
  from "D:\wamp\www\mvc\template\admin\content\addcate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fae617dfeaa0_84166617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fbff956669360be56672aa4e01d497b0f5c2a36' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\content\\addcate.html',
      1 => 1509613941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fae617dfeaa0_84166617 (Smarty_Internal_Template $_smarty_tpl) {
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
        textarea{
            resize: none;
        }
    </style>
</head>
<body>
<form class="form-horizontal" method="post" style="margin-top: 30px;" action="index.php?m=admin&f=category&a=cateCon">
    <div class="form-group">
        <label class="col-sm-2 control-label">分类名称：</label>
        <div class="col-sm-5">
            <input type="text" class="form-control col-sm-3" placeholder="请输入分类名称" name="cname">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">缩略图：</label>
        <div class="col-sm-5">
            <div class="box"></div>
            <input type="hidden" name="cimage" id="img">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">权限：</label>
        <input type="radio" name="cquanxian" value="0" checked>免费
        <input type="radio" name="cquanxian" value="1">限时免费
        <input type="radio" name="cquanxian" value="2">收费
        <br>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">分类信息：</label>
        <div class="col-sm-5">
            <input type="text" class="form-control col-sm-3" placeholder="请输入分类信息" name="cinfo">
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
