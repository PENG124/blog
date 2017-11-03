<?php
/* Smarty version 3.1.30, created on 2017-11-02 09:31:38
  from "D:\wamp\www\mvc\template\admin\content\addcon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fae5faa05b15_15314384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdf919d99d849e1c796a530269fc36e9d54763e8' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\content\\addcon.html',
      1 => 1509613939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fae5faa05b15_15314384 (Smarty_Internal_Template $_smarty_tpl) {
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
<form class="form-horizontal" method="post" style="margin-top: 30px;" action="index.php?m=admin&f=content&a=conCon">
    <div class="form-group">
        <label class="col-sm-2 control-label">标题：</label>
        <div class="col-sm-5">
            <input type="text" class="form-control col-sm-3" placeholder="请输入标题" name="ctitle">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">内容：</label>
        <div class="col-sm-5">
            <textarea name="con" id="" cols="56" rows="8"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">作者：</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" placeholder="请输入作者" name="uid">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">缩略图：</label>
        <div class="col-sm-5">
            <div class="box"></div>
            <input type="hidden" name="thumb" id="img">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">所属分类：</label>
        <input type="radio" name="cid" value="0" checked>全部分类
        <input type="radio" name="cid" value="1">博文
        <input type="radio" name="cid" value="2">帖子
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">权限：</label>
        <input type="radio" name="cquanxian" value="0" checked>免费
        <input type="radio" name="cquanxian" value="1">限时免费
        <input type="radio" name="cquanxian" value="2">收费
        <input type="text" name="price">
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
