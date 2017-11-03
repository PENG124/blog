<?php
    class admin extends main{
        function init(){
            //登录页
            if(!isset($_SESSION["login"])){
                echo "<script>location.href='index.php?m=admin&f=login'</script>";
                exit;
            }
            $this->smarty->assign("aname",$_SESSION["aname"]);
            $this->smarty->display("admin/main.html");
        }
        //查看管理员
        function selectadmin(){
            $dbobj=new db("admin");
            $row=$dbobj->field("admin.*,level.lname")->join1("level")->on1("admin.level=level.lid")->correlate();
            $this->smarty->assign("row",$row);
            $this->smarty->display(TEMPLATE_PATH.'/admin/main/selectadmin.html');
        }
        //添加管理员
        function addadmin(){
            $dbobj=new db("level");
            $row=$dbobj->field("*")->select();
            $this->smarty->assign("row",$row);
            $this->smarty->display(TEMPLATE_PATH.'/admin/main/addadmin.html');
        }
        //添加管理员验证
        function adminCon(){
            $lid=$_SESSION["lid"];
            $dbobj=new db("level");
            $result=$dbobj->where("lid=".$lid." and find_in_set('2',adminnum)")->select();
            if(count($result)>0){
                $dbobj=new db("admin");
                $aname=$_POST["aname"];
                $level=$_POST["level"];
                $apass=md5($_POST["apass"]);
                $arr=array(
                    "aname"=>"'$aname'",
                    "level"=>"'$level'",
                    "apass"=>"'$apass'"
                );
                $row=$dbobj->insert($arr);
                if($row>0){
                    echo "<script>alert('成功')</script>";
                }else{
                    echo "<script>alert('失败')</script>";
                }
                $this->addadmin();
            }else{
                echo "<script>alert('不好意思，你没有权限添加管理员');location.href='index.php?m=admin&f=admin&a=addadmin';</script>";
            }

        }
        //删除管理员
        function deladmin(){
            $lid=$_SESSION["lid"];
            $dbobj=new db("level");
            $result=$dbobj->where("lid=".$lid." and find_in_set('3',adminnum)")->select();
            if(count($result)>0){
                $dbobj=new db("admin");
                $aid=$_GET["aid"];
                $row=$dbobj->field("*")->where("aid=".$aid)->delete();
                if($row>0){
                    echo "<script>alert('成功')</script>";
                }else{
                    echo "<script>alert('失败')</script>";
                }
                $this->selectadmin();
            }else{
                echo "<script>alert('不好意思，你没有权限删除管理员');</script>";
                $this->selectadmin();
            }
        }
        //编辑管理员
        function updataadmin(){
            $lid=$_SESSION["lid"];
            $dbobj=new db("level");
            $result=$dbobj->where("lid=".$lid." and find_in_set('4',adminnum)")->select();
            if(count($result)>0){
                $dbobj=new db("admin");
                $aid=$_GET["aid"];
                $row=$dbobj->field("*")->where("aid=".$aid)->select();
                $this->smarty->assign("row",$row);
                $this->smarty->display(TEMPLATE_PATH.'/admin/main/updataadmin.html');
            }else{
                echo "<script>alert('不好意思，你没有权限修改管理员');</script>";
                $this->selectadmin();
            }
        }
        //编辑管理员验证
        function updataadminCon(){
            $dbobj=new db("admin");
            $aid=$_GET["aid"];
            $aname=$_POST["aname"];
            $level=$_POST["level"];
            if($_POST["apass"]){
                $apass=md5($_POST["apass"]);
                $row=$dbobj->field("*")->where("aid=".$aid)->updata("aname='$aname',level='$level',apass='$apass'");
            }else{
                $row=$dbobj->field("*")->where("aid=".$aid)->updata("aname='$aname',level='$level'");
            }
            if($row>0){
                echo "<script>alert('成功')</script>";
            }else{
                echo "<script>alert('失败')</script>";
            }
            $this->selectadmin();
        }
        //个人中心
        function personal(){
            $this->smarty->display(TEMPLATE_PATH.'/admin/personal.html');
        }
    }