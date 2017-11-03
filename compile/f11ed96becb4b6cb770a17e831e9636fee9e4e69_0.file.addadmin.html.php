<?php
/* Smarty version 3.1.30, created on 2017-10-27 01:50:44
  from "D:\wamp\www\mvc\template\admin\addadmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f290f43c1326_06059629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f11ed96becb4b6cb770a17e831e9636fee9e4e69' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\addadmin.html',
      1 => 1509069041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f290f43c1326_06059629 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
    <form class="form-horizontal" method="post" style="margin-top: 30px;" action="index.php?m=admin&f=admin&a=adminCon">
        <div class="form-group">
            <label class="col-sm-2 control-label">管理员姓名：</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="管理员姓名" name="aname">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">管理员密码：</label>
            <div class="col-sm-5">
                <input type="password" class="form-control col-sm-3" placeholder="管理员密码" name="apass">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">等级：</label>
            <input type="radio" name="level" value="1" checked>一级
            <input type="radio" name="level" value="2">二级
            <input type="radio" name="level" value="3">三级
            <br>
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
