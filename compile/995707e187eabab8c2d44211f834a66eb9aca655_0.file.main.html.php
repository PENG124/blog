<?php
/* Smarty version 3.1.30, created on 2017-11-02 08:18:15
  from "D:\wamp\www\mvc\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fad4c7682fb5_83958400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '995707e187eabab8c2d44211f834a66eb9aca655' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\main.html',
      1 => 1509610648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fad4c7682fb5_83958400 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
 <head>
  <title> BUI 管理系统</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="<?php echo CSS_URL;?>
/dpl-min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo CSS_URL;?>
/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo CSS_URL;?>
/main-min.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
      <div class="dl-title">
          <a href="JavaScript:;" title="文档库地址" target="_blank">
              <span class="dl-title-text">欢迎进入后台管理系统</span>
          </a>
      </div>
    <div class="dl-log">
        欢迎您
        <span class="dl-log-user"><?php echo $_SESSION['aname'];?>
</span>
        <a href="index.php?m=admin&f=admin&a=loginOut" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title">贴心小秘书<s class="dl-inform-icon dl-up"></s></div></div>
      <ul id="J_Nav"  class="nav-list ks-clear">
        <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">首页</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-order">内容管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-inventory">留言管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-supplier">其他管理</div></li>
      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery-1.8.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/bui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/config.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>
    //依赖
    BUI.use('common/main',function(){
      var config = [{
          id:'menu', 
          homePage : 'code',
          menu:[{
              text:'管理员设置',
              items:[
                {
                    id:'code',text:'查看管理员',href:"index.php?m=admin&f=admin&a=selectadmin",closeable : false
                },
                {
                    id:'main-menu',text:'添加管理员',href:'index.php?m=admin&f=admin&a=addadmin'
                },

              ]
            },{
              text:'管理员角色',
              items:[
                {
                    id:'operation',text:'查看角色',href:'index.php?m=admin&f=admin&a=rote'
                }
              ]
            }, {
              text: '用户管理',
              items: [
                  {
                      id: 'resource', text: '查看用户', href: 'index.php?m=admin&f=admin&a=selectuser'
                  },
                  {
                      id: 'loader', text: '添加用户', href: 'index.php?m=admin&f=admin&a=adduser'
                  }
              ]
          }]
          },{
            id:'form',
            menu:[{
                text:'内容管理',
                items:[
                    {
                        id:'resource',text:'查看内容',href:'index.php?m=admin&f=admin&a=selectcon'
                    },
                    {
                        id:'resource',text:'审核内容',href:'index.php?m=admin&f=admin&a=checkcon'
                    },
                    {
                        id:'loader',text:'添加内容',href:'index.php?m=admin&f=admin&a=addcon'
                    }
                ]

            },{
                text:'分类管理',
                items:[
                    {
                        id:'resource',text:'查看分类',href:'index.php?m=admin&f=admin&a=selectcate'
                    },
                    {
                        id:'loader',text:'添加分类',href:'index.php?m=admin&f=admin&a=addcate'
                    }
                ]
            }, {
                text: '推荐位管理',
                items: [
                    {
                        id: 'resource', text: '查看推荐位', href: 'index.php?m=admin&f=admin&a=selectposition'
                    },
                    {
                        id: 'loader', text: '添加推荐位', href: 'index.php?m=admin&f=admin&a=addposition'
                    }
                ]
            }]
            },{
            id:'search',
            menu:[{
                text: '留言管理',
                items: [
                    {
                        id: 'resource', text: '查看留言', href: 'index.php?m=admin&f=admin&a=selectmessage'
                    },
                    {
                        id: 'loader', text: '添加留言', href: 'index.php?m=admin&f=admin&a=addmessage'
                    }
                ]
                }]
            },{
            id:'detail',
            menu:[{
                text:'其他管理',
                items:[
                    {
                        id:'resource',text:'订单管理',href:'index.php?m=admin&f=admin&a=indent'
                    },
                    {
                        id:'loader',text:'用户支付管理',href:'index.php?m=admin&f=admin&a=userpay'
                    },
                    {
                        id:'loader',text:'商家账户管理',href:'index.php?m=admin&f=admin&a=merchant'
                    }
                ]
            }]
            }];
      new PageUtil.MainPage({
        modulesConfig : config
      });
    });
  <?php echo '</script'; ?>
>
 </body>
</html>
<?php }
}
