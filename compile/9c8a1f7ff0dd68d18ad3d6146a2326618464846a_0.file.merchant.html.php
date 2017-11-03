<?php
/* Smarty version 3.1.30, created on 2017-10-26 03:21:40
  from "D:\wamp\www\mvc\template\admin\merchant.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f154c4043e77_35791262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c8a1f7ff0dd68d18ad3d6146a2326618464846a' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\merchant.html',
      1 => 1508988075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f154c4043e77_35791262 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
<table class="table table-striped">
    <tr>
        <th>用户</th>
        <th>文章</th>
        <th>收入或支出</th>
        <th>时间</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["conid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["money"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["data"];?>
</td>
        <td><a href="">删除</a><a href="">修改</a></td>
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
