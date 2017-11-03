<?php
/* Smarty version 3.1.30, created on 2017-10-30 07:49:19
  from "D:\wamp\www\mvc\template\index\car.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f6d97f17dfe6_65098614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81cb6b4e49007c3c84adcd416403c8aaeb88a68b' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\index\\car.html',
      1 => 1509349758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f6d97f17dfe6_65098614 (Smarty_Internal_Template $_smarty_tpl) {
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
/car.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/car.js"><?php echo '</script'; ?>
>
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
            <h4>购物车</h4>
            <a href="index.php?m=index&f=index&a=userreg" class="btn btn-default">返回</a>
            <hr>
        </div>
        <div class="right">
            <ul class="shopping">
                <li>
                    <div class="shopping-input"></div>
                    <div class="shopping-img">
                       <span>缩略图</span>
                    </div>
                    <div class="shopping-title">
                        <span>名称</span>
                    </div>
                    <div class="shopping-num">
                        <span>数量</span>
                    </div>
                    <div class="shopping-price">
                        <span>价格</span>
                    </div>
                    <div class="shopping-del">
                        <span>操作</span>
                    </div>
                </li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <div class="shopping-input">
                        <input type="checkbox" name="">
                    </div>
                    <div class="shopping-img">
                        <img src="" alt="">
                    </div>
                    <div class="shopping-title">
                        <span><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</span>
                    </div>
                    <div class="shopping-num">
                        <span>3</span>
                    </div>
                    <div class="shopping-price">
                        <span>10.00</span>
                    </div>
                    <div class="shopping-del">
                        <a href="">删除</a>
                    </div>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <div class="check">
                <div class="check-input">
                    <input type="checkbox" name="">&nbsp;全选
                </div>
                <div class="check-del">
                    <a href="">删除</a>
                    <a href="">分享</a>
                </div>
                <div class="check-num">
                    <p>已选择<span>0</span>件，共计<span>0</span>元</p>
                </div>
                <div class="check-pay">
                   <button>结算</button>
                </div>
            </div>
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
