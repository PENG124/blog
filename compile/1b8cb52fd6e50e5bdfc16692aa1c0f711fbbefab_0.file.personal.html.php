<?php
/* Smarty version 3.1.30, created on 2017-10-27 03:20:21
  from "D:\wamp\www\mvc\template\admin\personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f2a5f5095305_31502514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b8cb52fd6e50e5bdfc16692aa1c0f711fbbefab' => 
    array (
      0 => 'D:\\wamp\\www\\mvc\\template\\admin\\personal.html',
      1 => 1508988728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f2a5f5095305_31502514 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <style>
        body{
            width: 400px;
            height: 400px;
            padding: 30px;
            background: red;
        }
        h3{
            width: 100%;
            height: 30px;
            line-height: 30px;
        }
        button{
            width: 50px;
            height: 30px;
            outline: none;
            border: none;
            text-align: center;
            line-height: 30px;
            margin-right: 30px;
            float: right;
        }
        .updata{
            width: 50px;
            height: 30px;
            outline: none;
            background: #fff;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .updata:hover{
            background: #ccc;
        }
        .pas2{
            margin-top: 60px;
            width: 100%;
            height: auto;
            margin-bottom: 20px;

        }
        .pas2 span{
            display: block;
            margin-top: 10px;
        }
        .pas3{
            display: none;
        }
        .pas3 input{
            width: 500px;
        }
        h4{
            color: #000;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h3>个人中心</h3>
<button class="updata">编辑</button>
<div class="pas2">
    <h4>用户名：</h4><span></span>
    <h4>权限：</h4><span></span>
</div>
<div class="pas3">
    <form action="" method="post">
    <button type="submit" class="btn btn-default">保存</button>
    <div class="form-group">
        <label >管理员姓名：</label>
        <input type="text" class="form-control" placeholder="管理员姓名" name="aname" value="">
    </div>
    <div class="form-group">
        <label >管理员密码：</label>
        <input type="password" class="form-control" placeholder="管理员密码" name="apass"  value="">
    </div>
    </form>
</div>
<?php echo '<script'; ?>
>
    $(function () {
        let flag=true;
        $(".updata").click(function () {
            if(flag){
                $(".updata").text("返回");
                $(".pas3").css("display","block");
                $(".pas2").css("display","none");
                flag=false;
            }else{
                $(".updata").text("编辑");
                $(".pas3").css("display","none");
                $(".pas2").css("display","block");
                flag=true;
            }

        })
    })

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
