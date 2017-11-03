<?php
/* Smarty version 3.1.30, created on 2017-11-02 07:39:07
  from "D:\wamp\www\mvc\template\admin\main\rote.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59facb9b6a1127_59686121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a11b796b96197e7baad812ffbe84e01dd93438' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\main\\rote.html',
      1 => 1509608343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59facb9b6a1127_59686121 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>rote</title>
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/dpl.css" rel="stylesheet">
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/bui.css" rel="stylesheet">

</head>
<body>
<div class="demo-content">
    <div class="row">
        <div class="span16">
            <div id="grid">

            </div>
        </div>
    </div>
    <!-- 初始隐藏 dialog内容 -->
    <div id="content" class="hide">
        <form class="form-horizontal" >
            <div class="row">
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>角色名称：</label>
                    <div class="controls">
                        <input type="hidden" name="lid">
                        <input name="lname" type="text" data-rules="{ required:true }" class="input-normal control-text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">内容权限：</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'查看',value:'1' },{ text:'添加',value:'2' },{ text:'删除',value:'3' },{ text:'编辑',value:'4' }] }">
                        <input type="hidden" name="connum">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">留言权限：</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'查看',value:'1' },{ text:'添加',value:'2' },{ text:'删除',value:'3' },{ text:'编辑',value:'4' }] }">
                        <input type="hidden" name="messagenum">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">管理员权限：</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'查看',value:'1' },{ text:'添加',value:'2' },{ text:'删除',value:'3' },{ text:'编辑',value:'4' }] }">
                        <input type="hidden" name="adminnum">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>


    <?php echo '<script'; ?>
 src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/seajs/2.3.0/sea.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/bui/1.1.21/config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/rote.js"><?php echo '</script'; ?>
>
</div>
</body>
</html><?php }
}
