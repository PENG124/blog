<?php
class content extends main{
    //查看内容
    function selectcon(){
        $arr=array();
        $dbobj=new db("con");
        $row=$dbobj->field("*")->select();
       foreach ($row as $v){
           $con=substr($v["con"],0,300)."...";
            $arr=array(
              0=>array(
                "conid"=>$v["conid"],
                "ctitle"=>$v["ctitle"],
                "con"=>$con,
                "uid"=>$v["uid"],
                "cquanxian"=>$v["cquanxian"],
                "thumb"=>$v["thumb"],
                "cid"=>$v["cid"],
                "condata"=>$v["condata"],
                "price"=>$v["price"],
              )
            );
            $content=$v["con"];
        }
        $this->smarty->assign("content",$content);
        $this->smarty->assign("row",$arr);
        $this->smarty->display(TEMPLATE_PATH.'/admin/content/selectcon.html');
    }
    //审核内容
    function checkcon(){
        $dbobj=new db("con");
        $row=$dbobj->field("*")->select();
        $this->smarty->assign("row",$row);
        $this->smarty->display(TEMPLATE_PATH.'/admin/content/checkcon.html');
    }
    //删除内容
    function delcon(){
        $dbobj=new db("message");
        $conid=$_GET["conid"];
        $row=$dbobj->field("*")->where("conid=".$conid)->delete();
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->selectcon();
    }
    //添加内容
    function addcon(){
        $this->smarty->display(TEMPLATE_PATH.'/admin/content/addcon.html');
    }
    //添加内容验证
    function conCon(){
        $dbobj=new db("con");
        $ctitle=$_POST["ctitle"];
        $uid=$_POST["uid"];
        $con=$_POST["con"];
        $cid=$_POST["cid"];
        $price=$_POST["price"];
        $cquanxian=$_POST["cquanxian"];
        $arr=array(
            "ctitle"=>"'$ctitle'",
            "uid"=>"'$uid'",
            "con"=>"'$con'",
            "cid"=>"'$cid'",
            "price"=>"'$price'",
            "cquanxian"=>"'$cquanxian'"
        );
        $row=$dbobj->insert($arr);
        if($row>0){
            echo "<script>alert('成功')</script>";
        }else{
            echo "<script>alert('失败')</script>";
        }
        $this->smarty->display(TEMPLATE_PATH.'/admin/content/addcon.html');
    }
}