<?php
/* Smarty version 3.1.30, created on 2017-10-27 03:40:20
  from "D:\wamp\www\mvc\template\admin\checkcon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f2aaa48ade13_16495173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7133b904098731f72c4af2b24d2e9ee4bd564f94' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\checkcon.html',
      1 => 1509075341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f2aaa48ade13_16495173 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>标题</th>
        <th>内容</th>
        <th>作者</th>
        <th>内容权限</th>
        <th>缩略图</th>
        <th>所属分类</th>
        <th>发表时间</th>
        <th>价格</th>
        <th>状态</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cquanxian"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["thumb"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["condata"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>
</td>
        <td>等待审核</td>
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
