<?php
/* Smarty version 3.1.30, created on 2017-11-02 09:32:26
  from "D:\wamp\www\mvc\template\admin\content\selectposition.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fae62a5d8f26_34612056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55ef3a4d479563e1431915305fc25722767635b9' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\content\\selectposition.html',
      1 => 1509613941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fae62a5d8f26_34612056 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>推荐位ID</th>
        <th>推荐位名称</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["pid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>
</td>
        <td><a href="index.php?m=admin&f=positions&a=delposition&pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
">删除</a><a href="index.php?m=admin&f=positions&a=updataposition&pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
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
