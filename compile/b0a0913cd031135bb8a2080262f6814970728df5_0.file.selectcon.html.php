<?php
/* Smarty version 3.1.30, created on 2017-10-27 10:01:50
  from "D:\wamp\www\mvc\template\admin\selectcon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f3040e38b635_97239056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0a0913cd031135bb8a2080262f6814970728df5' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\selectcon.html',
      1 => 1509086858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f3040e38b635_97239056 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>标题</th>
        <th>内容</th>
        <th>作者</th>
        <th>内容权限</th>
        <th>缩略图</th>
        <th>所属分类</th>
        <th>发表时间</th>
        <th>价格</th>
        <th>操作</th>
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
        <td><a href="index.php?m=admin&f=admin&a=delcon&conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">删除</a></td>
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
