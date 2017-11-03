<?php
//接收
//检查
//创建目录
//1、判断根目录是否存在
//2、判断当天的目录
//3、创建文件名
//4、整合路径
//移动到指定目录
    //封装
    class upload{
        //文件名
        public $filename="file";
        //大小
        public $size;
        //根目录
        public $root="Avatar";
        //类型
        public $type=array(
            "image/jpeg", "image/png", "image/gif",
        );
        //数据
        public $data=[];
        //路径
        public $path;
        //构造函数
        public function __construct(){
            $this->size=1024*1024*10;

        }
        public function move(){
            //1、接收
            $this->accept();
            //2、检查
            if($this->data){
                $this->check();
                //创建目录
                $this->appr();
                //移动到指定目录
                $this->Wpath();
                echo $this->path;

            }else{
                echo "error";
            }
        }
        private function accept(){
            $this->data=$_FILES[$this->filename];
        }
        private function check(){
        //判断是否是通过http传送
            if(is_uploaded_file($_FILES[$this->filename]["tmp_name"])){
                //判断文件大小和文件类型
                if($this->data["size"]>$this->size&&strrchr($this->type[0],$this->data["type"])){
                   return true;
                }
            }
            return false;

        }
        private function appr(){
            //1.判断根目录的存在
            //2.判断当天的目录
            $dir=date("y-m-d");
            if(!is_dir($this->root."/".$dir)){
                mkdir($this->root."/".$dir,0777,true);
            }
            //3.创建文件名
            $name=mt_rand(1,10000).$this->data["name"];
            //4.整合路径
            $this->path=$this->root."/".$dir."/".$name;

        }
        private function Wpath(){
            move_uploaded_file($_FILES[$this->filename]["tmp_name"],"$this->path");
        }
    }
    $obj=new upload();
    $obj->move();