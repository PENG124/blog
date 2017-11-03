<?php
/* Smarty version 3.1.30, created on 2017-11-02 09:31:14
  from "D:\wamp\www\mvc\template\admin\message\selectmessage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fae5e23f55d4_81848330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e54eee39f919e8db0005b2f01314842b556d739' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\message\\selectmessage.html',
      1 => 1509613943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fae5e23f55d4_81848330 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>审核内容</title>
    <link href="<?php echo CSS_URL;?>
/dpl.css" rel="stylesheet">
    <link href="<?php echo CSS_URL;?>
/bui.css" rel="stylesheet">
</head>
<body>
<div class="demo-content">

    <div class="row">
        <div class="offset1 span21 doc-content">
            <table cellspacing="0" class="table table-bordered">
                <thead>
                <tr><th colspan="7">
                    <ul class="toolbar">
                        <li><label class="checkbox"><input type="checkbox"><a href="#">全选</a></label></li>
                        <li><button class="button button-danger"><i class="icon-white icon-trash"></i>批量删除</button></li>
                        <li><button class="button button-success">审核通过</button></li>
                        <li><button class="button button-inverse">审核不通过</button></li>
                    </ul>
                </th></tr>
                <tr>
                    <th width="15"></th>
                    <th>留言者</th>
                    <th>被留言者</th>
                    <th>给那篇文章留言</th>
                    <th>留言的内容</th>
                    <th>留言(0)/回复</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid1"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid2"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value["conid"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value["state"];?>
</td>
                    <td><a href="index.php?m=admin&f=message&a=delmessage&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">删除</a></td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </tbody>
            </table>
            <div>
                <ul class="toolbar pull-left">
                    <li><label class="checkbox"><input type="checkbox"><a href="#">全选</a></label></li>
                    <li><button class="button button-danger"><i class="icon-white icon-trash"></i>批量删除</button></li>
                    <li><button class="button button-success">审核通过</button></li>
                    <li><button class="button button-inverse">审核不通过</button></li>
                </ul>
                <div class="pagination pull-right">
                    <ul>
                        <li class="disabled"><a href="#">« 上一页</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">下一页 »</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
