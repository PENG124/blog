<?php
class message extends main{

    //查看留言
    function selectmessage(){
        $dbobj=new db("message");
        $row=$dbobj->field("*")->select();
        $this->smarty->assign("row",$row);
        $this->smarty->display(TEMPLATE_PATH.'/admin/message/selectmessage.html');
    }
    //添加留言
    function addmessage(){
        $this->smarty->display(TEMPLATE_PATH.'/admin/message/addmessage.html');
    }
    //删除留言
    function delmessage(){
        $dbobj=new db("message");
        $mid=$_GET["mid"];
        $row=$dbobj->field("*")->where("mid=".$mid)->delete();
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->selectmessage();
    }
    //添加留言验证
    function messageCon(){
        $dbobj=new db("message");
        $uid1=$_POST["uid1"];
        $uid2=$_POST["uid2"];
        $mcon=$_POST["mcon"];
        $conid=$_POST["conid"];
        $state=$_POST["state"];
        $arr=array(
            "uid1"=>"'$uid1'",
            "uid2"=>"'$uid2'",
            "mcon"=>"'$mcon'",
            "conid"=>"'$conid'",
            "state"=>"'$state'"
        );
        $row=$dbobj->insert($arr);
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->smarty->display(TEMPLATE_PATH.'/admin/message/addmessage.html');
    }
}