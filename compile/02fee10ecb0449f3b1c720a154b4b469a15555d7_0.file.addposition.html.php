<?php
/* Smarty version 3.1.30, created on 2017-11-02 09:32:28
  from "D:\wamp\www\mvc\template\admin\content\addposition.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fae62c05b108_80825593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02fee10ecb0449f3b1c720a154b4b469a15555d7' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\content\\addposition.html',
      1 => 1509613941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fae62c05b108_80825593 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
<form class="form-horizontal" method="post" style="margin-top: 30px;" action="index.php?m=admin&f=positions&a=positionCon">
    <div class="form-group">
        <label class="col-sm-2 control-label">推荐位名称：</label>
        <div class="col-sm-5">
            <input type="text" class="form-control col-sm-3" placeholder="请输入推荐位名称" name="pname">
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
