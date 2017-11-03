<?php
class user extends main{
    //查看用户
    function selectuser(){
        $dbobj=new db("user");
        $row=$dbobj->field("*")->select();
        $this->smarty->assign("row",$row);
        $this->smarty->display(TEMPLATE_PATH.'/admin/main/selectuser.html');
    }
    //添加用户
    function adduser(){
        $this->smarty->display(TEMPLATE_PATH.'/admin/main/adduser.html');
    }
    //添加用户验证
    function userCon(){
        $dbobj=new db("user");
        $uname=$_POST["uname"];
        $nicheng=$_POST["nicheng"];
        $phone=$_POST["phone"];
        $upass=md5($_POST["upass"]);
        $arr=array(
            "uname"=>"'$uname'",
            "nicheng"=>"'$nicheng'",
            "phone"=>"'$phone'",
            "level"=>"1",
            "upass"=>"'$upass'"
        );
        $row=$dbobj->insert($arr);
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->smarty->display(TEMPLATE_PATH.'/admin/main/adduser.html');
    }
    //删除用户
    function deluser(){
        $dbobj=new db("user");
        $uid=$_GET["uid"];
        $row=$dbobj->field("*")->where("uid=".$uid)->delete();
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->selectuser();
    }
    //编辑用户
    function updatauser(){
        $dbobj=new db("user");
        $uid=$_GET["uid"];
        $row=$dbobj->field("*")->where("uid=".$uid)->select();
        $this->smarty->assign("row",$row);
        $this->smarty->display(TEMPLATE_PATH.'/admin/main/updatauser.html');
    }
    //编辑用户
    function updatauserCon(){
        $dbobj=new db("user");
        $uid=$_GET["uid"];
        $uname=$_POST["uname"];
        $nicheng=$_POST["nicheng"];
        $phone=$_POST["phone"];
        if($_POST["upass"]){
            $upass=md5($_POST["upass"]);
            $row=$dbobj->field("*")->where("uid=".$uid)->updata("uname='$uname',upass='$upass',nicheng='$nicheng',phone='$phone'");
        }else{
            $row=$dbobj->field("*")->where("uid=".$uid)->updata("uname='$uname',nicheng='$nicheng',phone='$phone'");
        }
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->selectuser();
    }
}