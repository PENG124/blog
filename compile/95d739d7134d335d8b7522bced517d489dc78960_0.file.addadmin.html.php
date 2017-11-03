<?php
/* Smarty version 3.1.30, created on 2017-11-02 03:52:18
  from "D:\wamp\www\mvc\template\admin\main\addadmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fa967209cee8_91855966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95d739d7134d335d8b7522bced517d489dc78960' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\main\\addadmin.html',
      1 => 1509594735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fa967209cee8_91855966 (Smarty_Internal_Template $_smarty_tpl) {
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
<form class="form-horizontal" method="post" style="margin-top: 30px;" action="index.php?m=admin&f=admin&a=adminCon">
    <div class="form-group">
        <label class="col-sm-2 control-label">管理员姓名：</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" placeholder="管理员姓名" name="aname">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">管理员密码：</label>
        <div class="col-sm-5">
            <input type="password" class="form-control col-sm-3" placeholder="管理员密码" name="apass">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">等级：</label>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <input type="radio" name="level" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['lname'];?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
