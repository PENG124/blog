<?php
/* Smarty version 3.1.30, created on 2017-10-31 01:10:22
  from "D:\wamp\www\mvc\template\index\userreg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f7cd7e7ff909_23505048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd80d8db50d4aec56f35d6c05b908de13e1b69fcd' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\index\\userreg.html',
      1 => 1509412216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f7cd7e7ff909_23505048 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/userreg.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/iconfont.css">
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
                    <span class="iconfont icon-yue">&nbsp;余额</span>
                    <span>￥2.00</span>
                    <a href="">提现</a>
                    <a href="">充值</a>
                </div>
                <div class="loginlately">
                    <span class="iconfont icon-huiyuan">&nbsp;我的会员服务</span>
                </div>
                <div class="out"><a href="index.php?m=index&f=index&a=userOut" class="iconfont icon-iconfonttuichu">&nbsp;退出</a></div>
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
                  <li><a href="index.php?m=index&f=index&a=setusermessage" class="iconfont icon-gerenzhongxin1">&nbsp;个人信息</a></li>
                  <li><a href="index.php?m=index&f=index&a=articlequery" class="iconfont icon-wenzhang">&nbsp;我的文章</a></li>
                  <li><a href="index.php?m=index&f=index&a=messagequery" class="iconfont icon-liuyan1">&nbsp;我的留言</a></li>
                  <li><a href="index.php?m=index&f=index&a=goodquery" class="iconfont icon-dianzan">&nbsp;我的点赞</a></li>
                  <li><a href="index.php?m=index&f=index&a=scquery" class="iconfont icon-shoucang11">&nbsp;我的收藏</a></li>
                  <li><a href="index.php?m=index&f=index&a=gzquery" class="iconfont icon-guanzhu">&nbsp;我的关注</a></li>
                  <li><a href="index.php?m=index&f=index&a=conquery" class="iconfont icon-fabiao1">&nbsp;我的发布</a></li>
                  <li><a href="index.php?m=index&f=index&a=accountquery" class="iconfont icon-zhanghu1">&nbsp;我的账户</a></li>
                  <li><a href="index.php?m=index&f=index&a=car" class="iconfont icon-gouwuche1">&nbsp;购物车</a></li>
              </ul>
          </div>
        </div>
        <!--中间的内容-->
        <div class="middlecon">
            <form class="essay" action="">
                <span class="essay1">写随记</span>
                标题：<input type="text" class="essaytitle">
                内容：<textarea name="" id="" cols="68" rows="7"></textarea>
                <input type="submit" value="发布" class="essaybtn">
            </form>
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
&nbsp;所属分类： <?php echo $_smarty_tpl->tpl_vars['v']->value["cid"];?>

                       </div>
                       <div class="publish-con">
                           <p><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</p>
                       </div>
                   </div>
               </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <div class="data">
                <span>没有更多数据了</span>
            </div>
        </div>
        <!--右面的分类-->
        <div class="conright">
            <!--可能感兴趣的话题-->
            <div class="topic">
                <span>可能感兴趣的话题</span>
                <ul>
                    <li><a href="">宋仲基宋慧乔婚讯</a></li>
                    <li><a href="">王者荣耀乱象</a></li>
                    <li><a href="">贾跃亭资产被冻结</a></li>
                    <li><a href="">长征五号遥二火箭发射失利</a></li>
                    <li><a href="">全新勒索病毒爆发</a></li>
                </ul>
            </div>
            <!--可能感兴趣的人-->
            <div class="people">
                <span>可能感兴趣的人</span>
                <ul>
                    <li>
                        <a href="">宋仲基qq</a>
                        <a href=""><span class="attention">加关注</span></a>
                    </li>
                    <li>
                        <a href="">防守打法</a>
                        <a href=""><span class="attention">加关注</span></a>
                    </li>
                    <li>
                        <a href="">宿舍</a>
                        <a href=""><span class="attention">加关注</span></a>
                    </li>
                    <li>
                        <a href="">分割</a>
                        <a href=""><span class="attention">加关注</span></a>
                    </li>
                    <li>
                        <a href="">干活的</a>
                        <a href=""><span class="attention">加关注</span></a>
                    </li>
                </ul>
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
