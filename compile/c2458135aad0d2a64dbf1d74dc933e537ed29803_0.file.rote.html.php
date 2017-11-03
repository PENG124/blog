<?php
/* Smarty version 3.1.30, created on 2017-10-26 01:54:34
  from "D:\wamp\www\mvc\template\admin\rote.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1405a063815_19576357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2458135aad0d2a64dbf1d74dc933e537ed29803' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\rote.html',
      1 => 1508982865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1405a063815_19576357 (Smarty_Internal_Template $_smarty_tpl) {
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
    <table class="table table-striped" style="text-align: center">
        <tr>
            <th style="text-align: center">角色名称</th>
            <th style="text-align: center">权限</th>
            <th style="text-align: center">升级</th>
        </tr>
        <tr>
            <td>LV5  =  地主</td>
            <td>可以浏览、收藏、评论、打赏文章，下载文章6折，交易审核优先</td>
            <td>充值10次以上，可升为上一级</td>
        </tr>
        <tr>
            <td>LV4  =  富农</td>
            <td>可以浏览、收藏、评论、打赏文章，下载文章8折，交易审核优先</td>
            <td>充值3次，交易3次，可升为上一级</td>
        </tr>
        <tr>
            <td>LV3  =  贫农</td>
            <td>可以浏览、收藏、评论、打赏文章，下载10篇文章9折</td>
            <td>发表5篇文章，可升为上一级</td>
        </tr>
        <tr>
            <td>LV2  =  佃农</td>
            <td>可以浏览、收藏、评论、打赏文章，下载5篇文章9.8折</td>
            <td>收藏10篇文章，评论10篇文章，发表1篇文章，可升为上一级</td>
        </tr>
        <tr>
            <td>LV1  =  长工</td>
            <td>可以浏览、收藏、评论、打赏文章</td>
            <td>收藏3篇文章，评论5篇文章，可升为上一级</td>
        </tr>

    </table>
</body>
</html><?php }
}
