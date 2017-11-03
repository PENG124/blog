<?php
/* Smarty version 3.1.30, created on 2017-10-30 01:09:50
  from "D:\wamp\www\mvc\template\admin\updataposition.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f67bde6afea6_33396476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25efda204ed28ce398312da81a797408bfd754ab' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\updataposition.html',
      1 => 1509325784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f67bde6afea6_33396476 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <form class="form-horizontal" method="post" style="margin-top: 30px;" action="index.php?m=admin&f=admin&a=updatapositionCon&pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
">
        <div class="form-group">
            <label class="col-sm-2 control-label">推荐位名称：</label>
            <div class="col-sm-5">
                <input type="text" class="form-control col-sm-3" placeholder="请输入推荐位名称" name="pname" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pname'];?>
">
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
                <button type="submit" class="btn btn-default">提交</button>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
