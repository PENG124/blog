<?php
class category extends main{
    //查看分类
    function selectcate(){
        $dbobj=new db("category");
        $row=$dbobj->field("*")->select();
        $this->smarty->assign("row",$row);
        $this->smarty->display(TEMPLATE_PATH.'/admin/content/selectcate.html');
    }
    //添加分类
    function addcate(){
        $this->smarty->display(TEMPLATE_PATH.'/admin/content/addcate.html');
    }
    //添加分类验证
    function cateCon(){
        $dbobj=new db("category");
        $cname=$_POST["cname"];
//            $cimage=$_POST["cimage"];
//            "cimage"=>"'$cimage'",
        $cquanxian=$_POST["cquanxian"];
        $cinfo=$_POST["cinfo"];
        $arr=array(
            "cname"=>"'$cname'",
            "cquanxian"=>"'$cquanxian'",
            "cinfo"=>"'$cinfo'"
        );
        $row=$dbobj->insert($arr);
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->smarty->display(TEMPLATE_PATH.'/admin/content/addcate.html');
    }
    //编辑分类
    function updatacate(){
        $dbobj=new db("category");
        $cid=$_GET["cid"];
        $row=$dbobj->field("*")->where("cid=".$cid)->select();
        $this->smarty->assign("row",$row);
        $this->smarty->display(TEMPLATE_PATH.'/admin/content/updatacate.html');
    }
    //编辑分类验证
    function updatacateCon(){
        $dbobj=new db("category");
        $cid=$_GET["cid"];
        $cname=$_POST["cname"];
//            $cimage=$_POST["cimage"];
//            "cimage"=>"'$cimage'",
        $cquanxian=$_POST["cquanxian"];
        $cinfo=$_POST["cinfo"];
        $row=$dbobj->field("*")->where("cid=".$cid)->updata("cname='$cname',cquanxian='$cquanxian',cinfo='$cinfo'");
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->selectcate();
    }

    //删除分类
    function delcate(){
        $dbobj=new db("category");
        $cid=$_GET["cid"];
        $row=$dbobj->field("*")->where("cid=".$cid)->delete();
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->selectcate();
    }
}