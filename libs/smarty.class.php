<?php
if(!defined("COME")){
    echo "非法访问";
    exit;
}
//用极简的语法模拟数据
    class smarty{
        public $templateUrl;//值的路径
        public $compileUrl;//编译的文件放哪
        public $arr=array();
        public $cacheUrl;//缓存
        //值存放的路径
        public function settemplateUrl($dirname="template"){
            $this->templateUrl=$dirname;//路径
            $tplurl=APP_PATH."/".$this->templateUrl;
            $this->templateUrl=$tplurl;
            //判断是否有文件
            if(!is_dir($tplurl)){
                mkdir($tplurl);
            }
        }
        //编译的文件存放的地方 compile文件夹
        public function setcompileUrl($dirname="compile"){
            $this->compileUrl=$dirname;
            $comurl=APP_PATH."/".$this->compileUrl;
            $this->compileUrl=$comurl;
            //判断是否有文件
            if(!is_dir($comurl)){
                mkdir($comurl);
            }
        }
        //缓存
        public function setcacheUrl($dirname="cache"){
            $this->cacheUrl=$dirname;
            $cacheurl=APP_PATH."/".$this->cacheUrl;
            $this->cacheUrl=$cacheurl;
            //判断是否有文件
            if(!is_dir($cacheurl)){
                mkdir($cacheurl);
            }
        }
        //分配的方法
        public function assign($str,$val){
            //把字符串作为属性，把值作为值存放在数组里面
            $this->arr[$str]=$val;
        }
        //用正则判断并显示
        public  function display($url){
            $fullpath=$this->templateUrl."/".$url;
            //将文件的内容读入到一个字符串中
            $str=file_get_contents($fullpath);
            //用正则判断字符串里面的
            $newstr=preg_replace("/\{([^\}\s]+)\}/",'<?php echo $this->arr["$1"]?>',$str);
            $urls=md5($url);
            //编译出来的页面显示到compile文件夹里面的某个文件里面
            $comfullpath=$this->compileUrl."/".$urls.".php";
            file_put_contents($comfullpath,$newstr);
            //缓存
            if($newstr){
                include $comfullpath;
            }else{
                ob_start();
                $coche=ob_get_contents($newstr);
                file_put_contents(demo.html,$coche);
            }
        }
    }