<?php
/* Smarty version 3.1.30, created on 2017-10-31 01:12:16
  from "D:\wamp\www\mvc\template\index\articlequery.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f7cdf0480a77_57015563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecc5252c6d15ea2857474678042da75e089ea36e' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\index\\articlequery.html',
      1 => 1509344109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f7cdf0480a77_57015563 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/articlequery.css">

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
    <section class="article">
        <main>
            <div class="user">
                <h4>文章查询</h4>
                <hr>
                <a href="index.php?m=index&f=index&a=userreg" class="btn btn-default">返回</a>
            </div>
            <div class="right">
                <ul class="publish">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li>
                        <!--右边的文章信息-->
                        <div class="publish-text">
                            <div class="publish-title">
                                <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</a>
                            </div>
                            <div class="publish-time">
                                <?php echo $_smarty_tpl->tpl_vars['v']->value["condata"];?>
所属分类： <?php echo $_smarty_tpl->tpl_vars['v']->value["cid"];?>

                            </div>
                            <div class="publish-con">
                                <p><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</p>
                            </div>
                        </div>
                        <div class="img">
                            <img src="" alt="">
                        </div>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
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
