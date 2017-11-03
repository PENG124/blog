<?php
class role extends main{
    static private $limit;
    //用户角色管理
    function rote(){
        include LIBS_PATH."/pages.class.php";
        $pagesObj=new pages();

        $db=new db("level");
        $result=$db->select();
        $pagesObj->total=count($result);
        $this->smarty->assign("pages",$pagesObj->show());
        self::$limit=$pagesObj->limit;

        $result=$db->limit(self::$limit)->select();

        $this->smarty->assign("data",$result);

        $this->smarty->display(TEMPLATE_PATH.'/admin/main/rote.html');
    }
    //查看角色
    function roteCon(){
        $dbobj=new db("level");
        $s=$_GET["pages"]*10;
        $result=$dbobj->limit("{$s}, 10")->select();
        $arr=array();
        $arr['rows']=$result;
        $arr['results']=count($arr);
        echo json_encode($arr,true);
    }
    //添加角色
    function addrote(){
        $type=$_GET["type"];
        $dbobj=new db("level");
        if($type=="add"){
            $lname=$_POST["lname"];
            $connum=$_POST["connum"];
            $adminnum=$_POST["adminnum"];
            $messagenum=$_POST["messagenum"];
            $arr=array(
                "lname"=>"'$lname'",
                "connum"=>"'$connum'",
                "adminnum"=>"'$adminnum'",
                "messagenum"=>"'$messagenum'"
            );
            if($dbobj->insert($arr)>0){
                echo $dbobj->db->insert_id;
            }
        }else if($type=="edit"){
            $lid=$_POST["lid"];
            $lname=$_POST["lname"];
            $connum=$_POST["connum"];
            $messagenum=$_POST["messagenum"];
            $adminnum=$_POST["adminnum"];
            if($dbobj->where("lid=".$lid)->updata("lname='$lname',connum='$connum',messagenum='$messagenum',adminnum='$adminnum'")>0){
                echo "edit";
            }
        }
    }
    //编辑角色
    function editrote(){
        $dbobj=new db("level");
        $lid=$_POST["lid"];
        $lname=$_POST["lname"];
        $result=$dbobj->where("lid=".$lid)->updata("lname=>'$lname'");
        echo $result;
        if($result>0){
            echo "edit";
        }
    }
    //删除角色
    function delrote(){
        $lids=$_POST["lids"];
        $dbobj=new db("level");
        $result=$dbobj->where("lid in ".$lids)->delete();
        echo $result;
        if($result>0){
            echo "del";
        }
    }
}