<?php
class positions extends main{

    //查看推荐位
    function selectposition(){
        $dbobj=new db("position");
        $row=$dbobj->field("*")->select();
        $this->smarty->assign("row",$row);
        $this->smarty->display(TEMPLATE_PATH.'/admin/content/selectposition.html');
    }
    //添加推荐位
    function addposition(){
        $this->smarty->display(TEMPLATE_PATH.'/admin/content/addposition.html');
    }
    //添加推荐位验证
    function positionCon(){
        $dbobj=new db("position");
        $pname=$_POST["pname"];
        $arr=array(
            "pname"=>"'$pname'"
        );
        $row=$dbobj->insert($arr);
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->smarty->display(TEMPLATE_PATH.'/admin/content/addposition.html');
    }
    //删除推荐位
    function delposition(){
        $dbobj=new db("position");
        $pid=$_GET["pid"];
        $row=$dbobj->field("*")->where("pid=".$pid)->delete();
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->selectposition();
    }
    //编辑推荐位
    function updataposition(){
        $dbobj=new db("position");
        $pid=$_GET["pid"];
        $row=$dbobj->field("*")->where("pid=".$pid)->select();
        $this->smarty->assign("row",$row);
        $this->smarty->display(TEMPLATE_PATH.'/admin/content/updataposition.html');
    }
    //编辑推荐位验证
    function updatapositionCon(){
        $dbobj=new db("position");
        $pid=$_GET["pid"];
        $pname=$_POST["pname"];
        $row=$dbobj->field("*")->where("pid=".$pid)->updata("pname='$pname'");
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->selectposition();
    }
}