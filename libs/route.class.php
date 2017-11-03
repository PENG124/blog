<?php
    //面向对象的编程思想
    //锁
    if(!defined("COME")){
        echo "你访问的地址错误";
        exit;
    }
    class route{
        //调度  地址 用相应的逻辑去呈现相应的页面
        private static $m;
        private static $f;
        private static $a;
        //参数信息
        private function getInfo(){
            //m=""&&f=""&&a="";赋值
            //文件夹
            self::$m=isset($_REQUEST["m"])&&!empty($_REQUEST["m"])?$_REQUEST["m"]:"index";
            //文件、类  （文件名和类名要一致）
            self::$f=isset($_REQUEST["f"])&&!empty($_REQUEST["f"])?$_REQUEST["f"]:"index";
            //方法
            self::$a=isset($_REQUEST["a"])&&!empty($_REQUEST["a"])?$_REQUEST["a"]:"init";
        }
        //设置
        public function set(){
            //先获取参数信息
            $this->getInfo();
            //访问某个模块文件
            $murl=MODULES_PATH."/".self::$m;
            if(is_dir($murl)){
               //查看文件存不存在
                $furl=MODULES_PATH."/".self::$m."/".self::$f.".class.php";
                if(is_file($furl)){
                    //载入文件
                    include_once $furl;
                    //判断类是否存在class_exists()
                    if(class_exists(self::$f)) {
                        $obj=new self::$f();
                        //实例化一个类
                        //判断方法是否存在
                        if(method_exists($obj,self::$a)){
                            //给方法定义一个变量
                            $method=self::$a;
                            //调用该方法
                            $obj->$method();
                        }else{
                            echo self::$a."这个方法不存在";
                            exit;
                        }
                    }else{
                        echo self::$f."这个类不存在";
                        exit;
                    }
                }else{
                    echo $furl."这个文件不存在";
                    exit;
                }
            }else{
               echo $murl."这个目录不存在";
               exit;
            }
        }
    }