<?php
/* Smarty version 3.1.30, created on 2017-11-02 09:13:29
  from "D:\wamp\www\mvc\template\admin\main\addmessage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fae1b9210704_67806592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c697b54a7033bd675b333c0352cf6f7c70924c8' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\main\\addmessage.html',
      1 => 1509613942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fae1b9210704_67806592 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
        textarea{
            resize: none;
        }
    </style>
</head>
<body>
<form class="form-horizontal" method="post" style="margin-top: 30px;" action="index.php?m=admin&f=message&a=messageCon">
    <div class="form-group">
        <label class="col-sm-2 control-label">留言者：</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" placeholder="请输入留言者" name="uid1">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">被留言者：</label>
        <div class="col-sm-5">
            <input type="text" class="form-control col-sm-3" placeholder="请输入被留言者" name="uid2">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">给那篇文章留言：</label>
        <div class="col-sm-5">
            <input type="text" class="form-control col-sm-3" placeholder="请输入给那篇文章留言" name="conid">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">留言的内容：</label>
        <div class="col-sm-5">
            <textarea name="mcon" id="" cols="56" rows="8"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">状态：</label>
        <input type="radio" name="state" value="0" checked>留言
        <input type="radio" name="state" value="1">回复 <br>
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
