<?php
/* Smarty version 3.1.30, created on 2017-11-03 00:43:51
  from "D:\wamp\www\appid3wj3bfjn3f\template\admin\main\selectadmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fbbbc7256c95_32138071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3459ec1ad7b4d28cd4c52e46fdc04fb9b4dad58a' => 
    array (
      0 => 'D:\\wamp\\www\\appid3wj3bfjn3f\\template\\admin\\main\\selectadmin.html',
      1 => 1509607770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fbbbc7256c95_32138071 (Smarty_Internal_Template $_smarty_tpl) {
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
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <style>
        td a{
            width: 50px;
            height: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: block;
            float: left;
            margin-right: 30px;
            color: #000;
            text-align: center;
            line-height: 30px;
        }
    </style>
</head>
<body>
<table class="table table-striped">
    <tr>
        <th>管理员ID</th>
        <th>管理员姓名</th>
        <th>管理员角色</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["aid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["aname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["lname"];?>
</td>
        <td><a href="index.php?m=admin&f=admin&a=deladmin&aid=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
">删除</a><a href="index.php?m=admin&f=admin&a=updataadmin&aid=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
">修改</a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
