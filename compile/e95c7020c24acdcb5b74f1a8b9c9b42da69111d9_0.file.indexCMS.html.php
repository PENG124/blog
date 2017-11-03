<?php
/* Smarty version 3.1.30, created on 2017-10-30 01:49:26
  from "D:\wamp\www\mvc\template\admin\indexCMS.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f685266a7852_47873467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95c7020c24acdcb5b74f1a8b9c9b42da69111d9' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\indexCMS.html',
      1 => 1509328163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f685266a7852_47873467 (Smarty_Internal_Template $_smarty_tpl) {
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
/indexCMS.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/iconfont.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/indexCMS.js"><?php echo '</script'; ?>
>
    <title>Document</title>
</head>
<body>
<!--头部-->
    <header>
        <div class="left">
            <h2>欢迎进入博客后台</h2>
        </div>
        <div class="right">
            <div class="menu"></div>
            <div class="pull">
                <ul>
                    <li><a href="index.php?m=admin&f=admin&a=personal" target="you" class="iconfont icon-gerenzhongxin1">个人中心</a></li>
                    <li><a href="index.php?m=admin&f=admin&a=merchant" target="you" class="iconfont icon-zhanghu3">账户管理</a></li>
                    <li><a href="index.php?m=index&f=index&a=init" target="_blank" class="iconfont icon-wangye">查看首页</a></li>
                    <li><a href="index.php?m=admin&f=admin&a=loginOut" class="iconfont icon-iconfonttuichu">退出系统</a></li>
                </ul>
            </div>

            <div class="aname"><?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
</div>
            <div class="photo"><img src="<?php echo IMG_URL;?>
/1.jpg" alt=""></div>
        </div>
    </header>
    <section class="row">
        <!--左侧-->
        <div class="zuo col-lg-3 col-md-4 col-sm-4">
            <ul>
                <li class="iconfont icon-guanliyuanbiao">
                    管理员管理
                    <div class="iconfont icon-jiantou-right"></div>
                    <ul class="sub">
                        <li><a href="index.php?m=admin&f=admin&a=selectadmin" target="you">查看管理员</a></li>
                        <li><a href="index.php?m=admin&f=admin&a=addadmin" target="you">添加管理员</a></li>
                        <li><a href="index.php?m=admin&f=admin&a=level" target="you" class="iconfont icon-dengji">管理员级别管理</a></li>
                    </ul>
                </li>
                <li class="iconfont icon-yonghu1">
                    用户管理
                    <div class="iconfont icon-jiantou-right"></div>
                    <ul class="sub">
                        <li><a href="index.php?m=admin&f=admin&a=selectuser" target="you">查看用户</a></li>
                        <li><a href="index.php?m=admin&f=admin&a=adduser" target="you">添加用户</a></li>
                        <li><a href="index.php?m=admin&f=admin&a=rote" target="you" class="iconfont icon-45881">用户角色管理</a></li>
                    </ul>
                </li>
                <li class="iconfont icon-liuyan">
                    留言管理
                    <div class="iconfont icon-jiantou-right"></div>
                    <ul class="sub">
                        <li><a href="index.php?m=admin&f=admin&a=selectmessage" target="you">查看留言</a></li>
                        <li><a href="index.php?m=admin&f=admin&a=addmessage" target="you">添加留言</a></li>
                    </ul>
                </li>
                <li class="iconfont icon-neirongguanli">
                    用户发表内容管理
                    <div class="iconfont icon-jiantou-right"></div>
                    <ul class="sub">
                        <li><a href="index.php?m=admin&f=admin&a=selectcon" target="you">查看内容</a></li>
                        <li><a href="index.php?m=admin&f=admin&a=checkcon" target="you">审核内容</a></li>
                        <li><a href="index.php?m=admin&f=admin&a=addcon" target="you">添加内容</a></li>
                    </ul>
                </li>
                <li class="iconfont icon-fenlei">
                    分类管理
                    <div class="iconfont icon-jiantou-right"></div>
                    <ul class="sub">
                        <li><a href="index.php?m=admin&f=admin&a=selectcate" target="you">查看分类</a></li>
                        <li><a href="index.php?m=admin&f=admin&a=addcate" target="you">添加分类</a></li>
                    </ul>
                </li>
                <li class="iconfont icon-tuijiandaozhiwei">
                    推荐位管理
                    <div class="iconfont icon-jiantou-right"></div>
                    <ul class="sub">
                        <li><a href="index.php?m=admin&f=admin&a=selectposition" target="you">查看推荐位</a></li>
                        <li><a href="index.php?m=admin&f=admin&a=addposition" target="you">添加推荐位</a></li>
                    </ul>
                </li>
                <li class="iconfont icon-dingdan">
                    其他管理
                    <div class="iconfont icon-jiantou-right"></div>
                    <ul class="sub">
                        <li><a href="index.php?m=admin&f=admin&a=indent" target="you" class="iconfont icon-dingdan1">订单管理</a></li>
                        <li><a href="index.php?m=admin&f=admin&a=userpay" target="you" class="icon-zhanghu3">用户支付管理</a></li>
                        <li><a href="index.php?m=admin&f=admin&a=merchant" target="you" class="iconfont icon-zhanghu1">商家账户管理</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--右侧-->
        <div class="you col-lg-9 col-md-8 col-sm-8">
            <iframe src="" frameborder="0" name="you"></iframe>
        </div>
    </section>
</body>
</html><?php }
}
