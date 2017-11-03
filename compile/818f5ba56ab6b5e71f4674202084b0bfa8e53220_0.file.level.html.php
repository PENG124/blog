<?php
/* Smarty version 3.1.30, created on 2017-10-26 00:53:45
  from "D:\wamp\www\mvc\template\admin\level.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1321992ec36_42598893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '818f5ba56ab6b5e71f4674202084b0bfa8e53220' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\level.html',
      1 => 1508979217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1321992ec36_42598893 (Smarty_Internal_Template $_smarty_tpl) {
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
<table class="table table-striped" style="text-align: center">
    <tr>
        <th style="text-align: center">管理员级别名称</th>
        <th style="text-align: center">管理员权限</th>
    </tr>
    <tr>
        <td>超级管理员</td>
        <td>查看、添加、删除、修改、对管理员进行操作</td>
    </tr>
    <tr>
        <td>一级管理员</td>
        <td>查看、添加、删除、修改</td>
    </tr>
    <tr>
        <td>二级管理员</td>
        <td>查看、删除、修改</td>
    </tr>
    <tr>
        <td>三级管理员</td>
        <td>查看、修改</td>
    </tr>
</table>
</body>
</html><?php }
}
