<?php
    defined("COME") or exit("访问地址不正确");
    class index extends main{
        function init(){
            if(!isset($_SESSION["index"])){
                $this->smarty->display(TEMPLATE_PATH.'/index/index.html');
            }else{
                session_unset($_SESSION["index"]);
                $this->smarty->display(TEMPLATE_PATH.'/index/index.html');
            }

        }
        function back(){
            $this->smarty->display(TEMPLATE_PATH.'/index/index.html');
        }
        //登录页
        function login(){
            $dbobj=new db("user");
            $dbobj->field("*")->select();
            $_SESSION["index"]="yes";
            $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
        }
        function codeimg(){
            include_once LIBS_PATH."/code.class.php";
            $codeobj=new code();
            $codeobj->width=100;
            $codeobj->height=40;
            $codeobj->url="demo.ttf";
            $codeobj->out();
        }
//        登录验证
        function loginCon(){
            $dbobj=new db("user");
            //验证码验证
            $code=$_SESSION["code"];
            $code1=$_POST["code"];
            if($code!=$code1){
                echo "<script>alert('验证码有误')</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
                exit;
            }
            //手机验证
//            $phonecode=$_SESSION["phonecode"];
//            $phonecode1=$_POST["phonecode"];
//            if($phonecode!=$phonecode1){
//                echo "<script>alert('手机验证码有误')</script>";
//                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
//                exit;
//            }
            $uname=$_POST["uname"];
            $phone=$_POST["phone"];
            $upass=md5($_POST["upass"]);
            $row=$dbobj->field("*")->where("uname='{$uname}' and phone='{$phone}' and upass='{$upass}'")->selectOne();
            if($row>0){
                $_SESSION["index"]="yes";
                $this->smarty->assign("uname",$row["uname"]);
                $_SESSION["uname"]=$row["uname"];
                $_SESSION["uid"]=$row["uid"];
                $this->smarty->display(TEMPLATE_PATH.'/index/index.html');
            }else{
                echo "<script>alert('登录失败');</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
            }
        }
//        注册验证
        function regCon(){
            $dbobj=new db("user");
            //验证码验证
            $code=$_SESSION["code"];
            $code1=strtolower($_POST["code"]);
            if($code!=$code1){
                echo "<script>alert('验证码有误')</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
                exit;
            }
//            //手机验证
//            $phonecode=$_SESSION["phonecode"];
//            $phonecode1=$_POST["phonecode"];
//            if($phonecode!=$phonecode1){
//                echo "<script>alert('手机验证码有误')</script>";
//                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
//                exit;
//            }
            //后台验证
            $uname=$_POST["uname"];
            $upass=$_POST["upass"];
            $upass1=$_POST["upass1"];
            $phone=$_POST["phone"];
            var_dump($phone);
            //用户名,由数字、字母、下划线组成
            if(!preg_match("/^\w{2,}$/",$uname)){
                echo "<script>alert('用户名不正确');</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
                exit;
            }
            //密码，由数字、字母、下划线组成
            if(!(preg_match("/^\w{5,}$/",$upass)&&preg_match("/^\w{5,}$/",$upass1)&&$upass==$upass1)){
                echo "<script>alert('密码不正确');</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
                exit;
            }
            //手机号,由数字、字母、下划线组成
            if(!preg_match("/^\d{6,11}$/",$phone)){
                echo "<script>alert('手机号不正确');</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
                exit;
            }

            //  4. 数据库当中是不是有即将插入的值
            $upass=md5($upass);
            $arr=array(
                "uname"=>"'$uname'",
                "upass"=>"'$upass'",
                "phone"=>"'$phone'"
            );
            $row=$dbobj->insert($arr);
            if($row>0){
                echo "<script>alert('注册成功，请登录');</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
            }else{
                echo "<script>alert('注册失败，请重新注册');</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
            }
        }
//        详情页
        function details(){
            $this->smarty->display(TEMPLATE_PATH.'/index/details.html');
        }
//        文章作者的个人页
        function reg(){
            $this->smarty->display(TEMPLATE_PATH.'/index/reg.html');
        }
//        列表页
        function lists(){
            $this->smarty->display(TEMPLATE_PATH.'/index/lists.html');
        }
//        博客主个人页
        function userreg(){
            $dbobj=new db("user");
            $dbobj->field("*")->select();
            $row=$dbobj->field("*")->table("con")->select();
            $_SESSION["index"]="yes";
            $this->smarty->assign("row",$row);
            $this->smarty->display(TEMPLATE_PATH.'/index/userreg.html');
        }
//        登出验证
        function userOut(){
            session_unset($_SESSION["index"]);
            echo "<script>alert('退出成功')</script>";
            $this->smarty->display(TEMPLATE_PATH.'/index/index.html');
        }
        //先浏览看看
        function look(){
            session_unset($_SESSION["index"]);
            $this->smarty->display(TEMPLATE_PATH.'/index/index.html');
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
        //留言验证是否登录
        function validationleave(){
            if(!isset($_SESSION["index"])){
                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
            }else{
                $this->leave();
            }
        }
        //留言
        function leave(){
            echo "<script>alert('留言成功');</script>";
            $this->smarty->display(TEMPLATE_PATH.'/index/reg.html');
        }
        //下载验证是否登录
        function validationdownload(){
            if(!isset($_SESSION["index"])){
                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
            }else{
                $this->download();
            }
        }
        //下载
        function download(){
            echo "<script>alert('下载成功');</script>";
            $this->smarty->display(TEMPLATE_PATH.'/index/details.html');
        }
        //评论验证是否登录
        function validationsubmit(){
            if(!isset($_SESSION["index"])){
                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
            }else{
                $this->submit();
            }
        }
        //评论
        function submit(){
            echo "<script>alert('评论成功');</script>";
            $this->smarty->display(TEMPLATE_PATH.'/index/details.html');
        }
        //评论验证是否登录
        function validation(){
            if(!isset($_SESSION["index"])){
                $this->smarty->display(TEMPLATE_PATH.'/index/login.html');
            }else{
                $this->people();
            }
        }
        //评论
        function people(){
            echo "<script>alert('成功');</script>";
            $this->smarty->display(TEMPLATE_PATH.'/index/lists.html');
        }
        //购物车
        function car(){
            $dbobj=new db("car");
            $row=$dbobj->field("*")->select();
            $_SESSION["index"]="yes";
            $this->smarty->assign("row",$row);
            $this->smarty->display(TEMPLATE_PATH.'/index/car.html');
        }
        //个人信息设置
        function setusermessage(){
            $dbobj=new db("user");
            $_SESSION["index"]="yes";
            $id=$_SESSION["uid"];
            $row=$dbobj->field("*")->where("$id")->selectOne();
            $this->smarty->assign("nicheng",$row["nicheng"]);
            $this->smarty->assign("photo",$row["photo"]);
            $this->smarty->assign("phone",$row["phone"]);
            $this->smarty->display(TEMPLATE_PATH.'/index/setusermessage.html');
        }
        //个人信息设置验证
        function regmessage(){
            $dbobj=new db("user");
            //后台验证
            $uname=$_POST["uname"];
            $upass=$_POST["upass"];
            $nicheng=$_POST["nicheng"];
            $phone=$_POST["phone"];
            //用户名,由数字、字母、下划线组成
            if(!preg_match("/^[\u4e00-\u9fa5]+$/",$uname)){
                echo "<script>alert('用户名不正确');</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/setusermessage.html');
                exit;
            }
            //密码，由数字、字母、下划线组成
            if(!(preg_match("/^\w{5,}$/",$upass))){
                echo "<script>alert('密码不正确');</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/setusermessage.html');
                exit;
            }
            //手机号,由数字、字母、下划线组成
            if(!preg_match("/^\d{6,11}$/",$phone)){
                echo "<script>alert('手机号不正确');</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/setusermessage.html');
                exit;
            }

            //  4. 数据库当中是不是有即将插入的值
            $upass=md5($upass);
            $arr=array(
                "uname"=>"'$uname'",
                "upass"=>"'$upass'",
                "nicheng"=>"'$nicheng'",
                "phone"=>"'$phone'"
            );
            $row=$dbobj->insert($arr);
            if($row>0){
                echo "<script>alert('设置成功');</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/userreg.html');
            }else{
                echo "<script>alert('设置失败');</script>";
                $this->smarty->display(TEMPLATE_PATH.'/index/setusermessage.html');
            }
        }
        //文章查询
        function articlequery(){
            $dbobj=new db("user");
            $uname=$_SESSION["uname"];
            $rows=$dbobj->field("uid")->where("uname='$uname'")->selectOne();
            $uid=$rows["uid"];
            $dbobj=new db("con");
            $row=$dbobj->field("*")->where("uid='$uid'")->select();
            $_SESSION["index"]="yes";
            $this->smarty->assign("row",$row);
            $this->smarty->display(TEMPLATE_PATH.'/index/articlequery.html');
        }
        //留言查询
        function messagequery(){
            $dbobj=new db("message");
            $row=$dbobj->field("*")->select();
            $_SESSION["index"]="yes";
            $this->smarty->assign("row",$row);
            $this->smarty->display(TEMPLATE_PATH.'/index/messagequery.html');
        }
        //点赞查询
        function goodquery(){
            $dbobj=new db("good");
            $row=$dbobj->field("*")->select();
            $_SESSION["index"]="yes";
            $this->smarty->assign("row",$row);
            $this->smarty->display(TEMPLATE_PATH.'/index/goodquery.html');
        }
        //关注查询
        function gzquery(){
            $dbobj=new db("guanzhu");
            $row=$dbobj->field("*")->select();
            $_SESSION["index"]="yes";
            $this->smarty->assign("row",$row);
            $this->smarty->display(TEMPLATE_PATH.'/index/gzquery.html');
        }
        //收藏查询
        function scquery(){
            $dbobj=new db("shoucang");
            $row=$dbobj->field("*")->select();
            $_SESSION["index"]="yes";
            $this->smarty->assign("row",$row);
            $this->smarty->display(TEMPLATE_PATH.'/index/scquery.html');
        }
        //发布内容查询
        function conquery(){
            $dbobj=new db("con");
            $row=$dbobj->field("*")->select();
            $_SESSION["index"]="yes";
            $this->smarty->assign("row",$row);
            $this->smarty->display(TEMPLATE_PATH.'/index/conquery.html');
        }
        //账户查询
        function accountquery(){
            $dbobj=new db("self");
            $row=$dbobj->field("*")->select();
            $_SESSION["index"]="yes";
            $this->smarty->assign("row",$row);
            $this->smarty->display(TEMPLATE_PATH.'/index/accountquery.html');
        }
        //发表博文页面
        function publish(){
            $this->smarty->display(TEMPLATE_PATH.'/index/publish.html');
        }
        //把博文存入数据库
        function publishCon(){
            $dbobj=new db("user");
            $uname=$_SESSION["uname"];
            $rows=$dbobj->field("uid")->where("uname='$uname'")->selectOne();
            $uid=$rows["uid"];
            $ctitle=$_POST["ctitle"];
            $con=$_POST["con"];
            $cid=$_POST["cid"];
            $price=$_POST["price"];
            $cquanxian=$_POST["cquanxian"];
            $arr=array(
                "uid"=>"'$uid'",
                "cid"=>"'$cid'",
                "con"=>"'$con'",
                "ctitle"=>"'$ctitle'",
                "cquanxian"=>"'$cquanxian'",
                "price"=>"'$price'"
            );
            $row=$dbobj->table("con")->insert($arr);
            if($row>0){
                echo "<script>alert('成功')</script>";
            }else{
                echo "<script>alert('失败')</script>";
            }
            $row1=$dbobj->field("*")->table("con")->where("uid='$uid'")->select();
            $_SESSION["index"]="yes";
            $this->smarty->assign("row",$row1);
            $this->smarty->display(TEMPLATE_PATH.'/index/userreg.html');
        }
    }
?>