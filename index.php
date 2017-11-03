<?php
    session_start();
    //单入口文件
    header("Content-Type:text/html;charset=utf-8");
    //锁
    define("COME","YES");
    //1、定义常用文件的路径
    //定义常量
    //当前文件的路径(服务器的根目录)
    define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"]);
    //当前项目的路径（应用的根目录）
    define("APP_PATH",substr($_SERVER["SCRIPT_FILENAME"],0,strrpos($_SERVER["SCRIPT_FILENAME"],"/")));
    //当前libs的路径
    define("LIBS_PATH",APP_PATH."/libs");
    //当前modules的路径
    define("MODULES_PATH",APP_PATH."/modules");
    //当前template的路径
    define("TEMPLATE_PATH",APP_PATH."/template");
    //当前smarty的路径
    define("SMARTY_PATH",LIBS_PATH."/smarty");
    //2、定义服务器的路径
    //协议
    define("PROT",strtolower(strchr($_SERVER["SERVER_PROTOCOL"],"/",true)));
    //主机地址
    define("HOST",$_SERVER["HTTP_HOST"]);
    //项目的路径
    define("APP_URL",substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")));
    //基于服务器的项目路径
    define("HTTP_URL",PROT."://".HOST.APP_URL);
    //静态目录的路径
    define("STATIC_URL",HTTP_URL."/static");
    define("CSS_URL",STATIC_URL."/css");
    define("UEDITOR_URL",STATIC_URL."/ueditor");
    define("FONT_URL",STATIC_URL."/fonts");
    define("JS_URL",STATIC_URL."/js");
    define("IMG_URL",STATIC_URL."/img");
    //控制器（路由）
    include_once LIBS_PATH."/route.class.php";
    include_once LIBS_PATH."/main.class.php";
    include_once LIBS_PATH."/Ucpaas.class.php";
    include_once SMARTY_PATH."/Smarty.class.php";
    $config=include_once APP_PATH."/config.php";
    include_once LIBS_PATH."/db.class.php";
    include_once LIBS_PATH."/functions.php";
//    include_once "gd.php";

    $routeobj = new route();
    $routeobj->set();
?>