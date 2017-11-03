<?php
class others extends main{
    //订单管理
    function indent(){
        $dbobj=new db("car");
        $row=$dbobj->field("*")->select();
        $this->smarty->assign("row",$row);
        $this->smarty->display(TEMPLATE_PATH.'/admin/others/indent.html');
    }
    //用户支付管理
    function userpay(){
        $dbobj=new db("car");
        $row=$dbobj->field("*")->select();
        $this->smarty->assign("row",$row);
        $this->smarty->display(TEMPLATE_PATH.'/admin/others/userpay.html');
    }
    //商家账户管理
    function merchant(){
        $dbobj=new db("self");
        $row=$dbobj->field("*")->select();
        $this->smarty->assign("row",$row);
        $this->smarty->display(TEMPLATE_PATH.'/admin/others/merchant.html');
    }
}