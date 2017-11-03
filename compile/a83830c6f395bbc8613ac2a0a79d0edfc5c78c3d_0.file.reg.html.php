<?php
/* Smarty version 3.1.30, created on 2017-10-25 09:19:36
  from "D:\wamp\www\mvc\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f05728a41903_90869618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a83830c6f395bbc8613ac2a0a79d0edfc5c78c3d' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\index\\reg.html',
      1 => 1508922986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f05728a41903_90869618 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/reg.css">
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
            <a href="index.php?m=index&f=index&a=init">回到首页</a>
        </div>
    </main>
</header>
<!--内容-->
<section class="con">
    <main>
        <!--左面的个人信息-->
        <div class="userleft">
            <div class="usermessage">
                <!--头像-->
               <div class="kuang">
                   <img src="<?php echo IMG_URL;?>
/1.jpg" alt="">
               </div>
                <div class="username">
                    <span>陌生人</span>
                </div>
                <!--关注……-->
                <div class="friend">
                    <a href="">关注</a>
                    <a href="">加好友</a>
                </div>
                <div class="integral">
                    <span>积分：12334</span>
                    <span>注册时间：2017-10-22</span>
                </div>
                <!--留言-->
                <form action="index.php?m=index&f=index&a=validationleave" class="leavemessage" method="post">
                    <span>给他留言:</span>
                    <textarea name="con" id="" cols="43" rows="8"></textarea>
                    <input type="submit" value="留言" class="leavebtn">
                </form>

            </div>
            <div class="userclassify">
                <span>他的博文</span>
                <ul>
                    <li>--<a href="index.php?m=index&f=index&a=lists">全部博文</a></li>
                </ul>
            </div>
        </div>
        <!--右面的分类-->
        <div class="conright">
            <span class="conrightspan">他的博文</span>
            <table>
                <tr>
                    <th>标题</th>
                    <th>发布时间</th>
                    <th>评论</th>
                </tr>
                <tr>
                    <td class="tabletitle">--<a href="index.php?m=index&f=index&a=details">王利芬对今日头条的批评尚属浅层</a></td>
                    <td class="tabledata">2017-10-21 02:12</td>
                    <td class="tablenum">0</td>
                </tr>
                <tr>
                    <td class="tabletitle">--<a href="">马云的达摩院及一个时代的风气扭转</a></td>
                    <td class="tabledata">2017-10-21 02:12</td>
                    <td class="tablenum">0</td>
                </tr>
                <tr>
                    <td class="tabletitle">--<a href="">禁枪还是持枪——个人权利与国家责任的博弈</a></td>
                    <td class="tabledata">2017-10-21 02:12</td>
                    <td class="tablenum">0</td>
                </tr>
                <tr>
                    <td class="tabletitle">--<a href="">尬舞、嘻哈与中国人的身体解放</a></td>
                    <td class="tabledata">2017-10-21 02:12</td>
                    <td class="tablenum">0</td>
                </tr>
                <tr>
                    <td class="tabletitle">--<a href="">人民需要窦文涛</a></td>
                    <td class="tabledata">2017-10-21 02:12</td>
                    <td class="tablenum">0</td>
                </tr>
                <tr>
                    <td class="tabletitle">--<a href="">为什么听过那么多道理，还是过不好这一生</a></td>
                    <td class="tabledata">2017-10-21 02:12</td>
                    <td class="tablenum">0</td>
                </tr>
                <tr>
                    <td class="tabletitle">--<a href="">郭敬明随便踩，许知远骂不得</a></td>
                    <td class="tabledata">2017-10-21 02:12</td>
                    <td class="tablenum">0</td>
                </tr>
                <tr>
                    <td class="tabletitle">--<a href="">海底捞要赞，但也要警惕“公关文化”泛滥</a></td>
                    <td class="tabledata">2017-10-21 02:12</td>
                    <td class="tablenum">0</td>
                </tr>
            </table>
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
