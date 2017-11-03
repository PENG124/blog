<?php
/* Smarty version 3.1.30, created on 2017-10-30 09:45:34
  from "D:\wamp\www\mvc\template\index\publish.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f6f4be638cb2_57525989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c96d639b6fa7410e1565b3c0f515f4f70014d34' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\index\\publish.html',
      1 => 1509356733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f6f4be638cb2_57525989 (Smarty_Internal_Template $_smarty_tpl) {
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
/publish.css">
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo UEDITOR_URL;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo UEDITOR_URL;?>
/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo UEDITOR_URL;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
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
            <h4>发表博文</h4>
            <hr>
            <a href="index.php?m=index&f=index&a=userreg" class="btn btn-default">返回</a>
        </div>
        <div class="right">
        <form class="form-horizontal" method="post" style="margin-top: 30px;" action="index.php?m=index&f=index&a=publishCon">
            <div class="form-group">
                <label class="col-sm-2 control-label">作者：<?php echo $_SESSION['uname'];?>
</label>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">标题：</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control col-sm-3" placeholder="请输入标题" name="ctitle">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">内容：</label>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:790px;height:300px;" name="con"><?php echo '</script'; ?>
>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">所属分类：</label>
                <input type="radio" name="cid" value="0" checked>全部分类
                <input type="radio" name="cid" value="1">博文
                <input type="radio" name="cid" value="2">随记
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">权限：</label>
                <input type="radio" name="cquanxian" value="0" checked>免费
                <input type="radio" name="cquanxian" value="1">限时免费
                <input type="radio" name="cquanxian" value="2">收费
                <input type="text" name="price" value="0">
                <br>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-default">发表</button>
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
</html>
<?php echo '<script'; ?>
 type="text/javascript">
    var ue = UE.getEditor('editor');
<?php echo '</script'; ?>
><?php }
}
