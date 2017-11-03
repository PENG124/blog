<?php
/* Smarty version 3.1.30, created on 2017-10-31 01:52:04
  from "D:\wamp\www\mvc\template\index\setusermessage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f7d744ac7e95_73414839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '237828718c57da178f1102d5838c92ed151a8dce' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\index\\setusermessage.html',
      1 => 1509414722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f7d744ac7e95_73414839 (Smarty_Internal_Template $_smarty_tpl) {
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
/setusermessage.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/upload.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/adduser.js"><?php echo '</script'; ?>
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
                <h4>个人信息</h4>
                <hr>
                <a href="index.php?m=index&f=index&a=userreg" class="btn btn-default">返回</a>
            </div>
            <div class="right">
                <form class="form-horizontal" method="post" style="margin-top: 30px;" action="index.php?m=index&f=index&a=regmessage">
                <div class="form-group">
                    <label class="col-sm-2 control-label">姓名：</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="uname" value="<?php echo $_SESSION['uname'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">密码：</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control col-sm-3" name="upass" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">昵称：</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control col-sm-3" value="<?php echo $_smarty_tpl->tpl_vars['nicheng']->value;?>
" name="nicheng">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">头像：</label>
                    <div class="col-sm-5">
                        <div class="box"></div>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="">
                        <input type="hidden" name="photo" id="img">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">电话：</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control col-sm-3" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-5">
                        <button type="submit" class="btn btn-default">提交</button>

                    </div>
                </div>
                </form>
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
