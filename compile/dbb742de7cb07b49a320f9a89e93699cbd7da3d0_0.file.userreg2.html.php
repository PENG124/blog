<?php
/* Smarty version 3.1.30, created on 2017-10-30 02:10:01
  from "D:\wamp\www\mvc\template\index\userreg2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f689f94b9048_68612612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbb742de7cb07b49a320f9a89e93699cbd7da3d0' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\index\\userreg2.html',
      1 => 1509329397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f689f94b9048_68612612 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/userreg2.css">
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
<!--个人信息-->
<section>
    <main>
        <div class="usermessage">
            <!--照片-->
            <div class="messagephoto"><img src="<?php echo IMG_URL;?>
/1.jpg" alt=""></div>
            <div class="messagename">
                <span><?php echo $_SESSION['uname'];?>
</span>
            </div>
            <!--横条内容-->
            <div class="messages">
                <div class="meony">
                    <a href="index.php?m=index&f=index&a=meony" target="right">我的钱包</a>
                </div>
                <div class="loginlately">
                    最近登录：<span>2017-10-22</span>
                </div>
                <div class="out"><a href="index.php?m=index&f=index&a=userOut">退出</a></div>
            </div>
        </div>
    </main>
</section>
<!--内容-->
<section class="con">
    <main>
        <!--左面的个人信息-->
        <div class="userleft">
            <div class="fetails">
                <ul>
                    <li>个人中心</li>
                    <li><a href="index.php?m=index&f=index&a=setusermessage" target="right">个人信息设置</a></li>
                    <li><a href="index.php?m=index&f=index&a=articlequery" target="right">个人文章查询</a></li>
                    <li><a href="index.php?m=index&f=index&a=messagequery" target="right">个人留言查询</a></li>
                    <li><a href="index.php?m=index&f=index&a=goodquery" target="right">点赞、收藏、关注查询</a></li>
                    <li><a href="index.php?m=index&f=index&a=conquery" target="right">文章内容发布</a></li>
                    <li><a href="index.php?m=index&f=index&a=accountquery" target="right">个人账户查询</a></li>
                    <li><a href="index.php?m=index&f=index&a=car" target="right">购物车查询</a></li>
                </ul>
            </div>
        </div>
        <!--中间的内容-->
        <div class="con-right">
            <iframe src="" frameborder="0" name="right"></iframe>
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
