<?php
defined("COME") or exit("error");
class login extends main{
    function init()
    {
        $this->smarty->display("admin/login.html");
    }
    //验证码
    function codeimg(){
        include_once LIBS_PATH."/code.class.php";
        $codeobj=new code();
        $codeobj->width=100;
        $codeobj->height=40;
        $codeobj->url="demo.ttf";
        $codeobj->out();
    }
    //登录验证
    function loginCon(){
        $dbobj=new db("admin");
        //验证码验证
        $code=$_SESSION["code"];
        $code1=$_POST["code"];
        if($code!=$code1){
            echo "<script>alert('验证码有误')</script>";
            $this->smarty->display(TEMPLATE_PATH.'/admin/login.html');
            exit;
        }
        $aname=sql(P("aname"));
        //4. 密码
        $apass=md5(P("apass"));
        if(count($result=$dbobj->where("aname='{$aname}' and apass='{$apass}'")->selectOne())>0){
            $_SESSION["login"]="yes";
            $_SESSION["aname"]=$aname;
            $_SESSION["aid"]=$result["aid"];
            $_SESSION["lid"]=$result["level"];
            $this->smarty->assign("aname",$aname);
            echo "<script>location.href='index.php?m=admin&f=admin&a=init'</script>";

        }else{
            echo "error";
        }
    }
    //退出登录
    function loginOut(){
        unset($_SESSION["login"]);
        unset($_SESSION["aname"]);
        unset($_SESSION["apass"]);
        echo "<script>alert('登出成功');location.href='index.php?m=admin&f=login&a=init'</script>";
    }
    //手机短信验证
    function phone(){
        //载入ucpass类
        require_once(LIBS_PATH.'/Ucpaas.class.php');
//初始化必填
//接入参数
        $options['accountsid']='996dad46a46b93d635f9d7f6f8fdd9a0';
        $options['token']='258726fd1c4ce80383e3ea92b5c63d09';
//初始化 $options必填
        $ucpass = new Ucpaas($options);
//开发者账号信息查询默认为json或xml
        header("Content-Type:text/html;charset=utf-8");
//短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $phone=$_GET["phone"];
        $appId = "9a37d972e05e467d9c692f951203d8b8";
        $to="$phone";
        $templateId = "60488";
        $param="";
        $str="3456789qwertyuip";
        //存放验证码
        for($i=0;$i<4;$i++){
            $param.= $str[mt_rand(0,strlen($str)-1)];
        }
        echo $ucpass->templateSMS($appId,$to,$templateId,$param);
    }
}



