<?php
/* Smarty version 3.1.30, created on 2017-10-27 06:50:24
  from "D:\wamp\www\mvc\template\admin\selectcate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f2d730116997_50281503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '425d73844db59da729f1d2773a0cee8e69959491' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\selectcate.html',
      1 => 1509086858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f2d730116997_50281503 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>分类名称</th>
        <th>分类图片</th>
        <th>分类权限</th>
        <th>分类信息</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cimage"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cquanxian"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cinfo"];?>
</td>
        <td><a href="index.php?m=admin&f=admin&a=delcate&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">删除</a><a href="index.php?m=admin&f=admin&a=updatacate&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
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
