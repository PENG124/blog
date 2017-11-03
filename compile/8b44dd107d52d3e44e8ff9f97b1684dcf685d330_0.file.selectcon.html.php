<?php
/* Smarty version 3.1.30, created on 2017-11-03 01:00:04
  from "D:\wamp\www\appid3wj3bfjn3f\template\admin\content\selectcon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fbbf944399d2_84130084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b44dd107d52d3e44e8ff9f97b1684dcf685d330' => 
    array (
      0 => 'D:\\wamp\\www\\appid3wj3bfjn3f\\template\\admin\\content\\selectcon.html',
      1 => 1509670800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fbbf944399d2_84130084 (Smarty_Internal_Template $_smarty_tpl) {
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
        tr{
            height: 100px;
            overflow: auto;
        }
        .con{
            width: 400px;
        }
        .cont{
            position: relative;
        }
        button{
            width: 20px;
            height: 30px;
            background: #e0e6fc;
            outline: none;
            border: none;
            cursor: pointer;
            border-radius: 2px;
            line-height: 30px;
            text-align: center;
            position: absolute;
            right: 0;
            bottom: 0;
        }
        .content{
            width: 800px;
            height: auto;
            background: #fff;
            border: 1px solid #C2CBE0;
            padding: 30px;
            position: absolute;
            top:-80px;
            left: -100px;
        }
    </style>
</head>
<body>
<table class="table table-bordered">
    <tr>
        <th>标题</th>
        <th class="con">内容</th>
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
        <td class="cont"><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>

            <button>...</button>
            <div class="content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
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
        <td><a href="index.php?m=admin&f=content&a=delcon&conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
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
