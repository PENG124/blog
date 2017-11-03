<?php
/* Smarty version 3.1.30, created on 2017-10-30 02:21:29
  from "D:\wamp\www\mvc\template\index\meony.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f68ca9712545_78166631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f00140dc4fb876b5b40b47e45dd1f607976c642d' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\index\\meony.html',
      1 => 1509330087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f68ca9712545_78166631 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/car.css">
    <title>Document</title>
</head>
<body>
<header>
    <main>
        <div class="head">
            <span class="bbig">博客</span>
            <span class="small">有见识的人都在这里</span>
        </div>
        <!--回到首页-->
        <div class="index">
            <a href="index.php?m=index&f=index&a=back">回到首页</a>
        </div>
    </main>
</header>
<section class="user">
    <main>
        <h1>账单查询</h1>
        <hr>
    </main>
</section>
<section>
    <main>
        <table class="table table-striped">
            <tr>
                <th>购买的内容</th>
                <th>收入/支出</th>
                <th>时间</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["conid"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["money"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["data"];?>
</td>
                <td><a href="">删除</a></td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
        <a href="index.php?m=index&f=index&a=userreg" class="btn btn-default">返回</a>
    </main>
</section>
<!--底部-->
<footer class="foot">
    <main>
        <div class="footer">
            <div class="footer-top"></div>
            <ul>
                <li><a href="">关于博客</a></li>
                <li>|</li>
                <li><a href="">博客客服</a></li>
                <li>|</li>
                <li><a href="">隐私与版权</a></li>
                <li>|</li>
                <li><a href="">联系我们</a></li>
            </ul>
            <div class="blog-copy">© 2016 - 2017 博客 版权所有</div>
        </div>
    </main>
</footer>
</body>
</html><?php }
}
