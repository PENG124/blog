<?php
    class code{
        public $width=100;
        public $height=40;
        //验证码
        public $zhongzi="123456789wertyupasdfghkxvbnmWERTYUPASDFGHKZXCVBNM";
        //创建一个真彩图像
        public $img;
        public $color;
        public $pmin=50;
        public $pmax=500;
        public $sizelength=30;
        public $angle=0;
        public $linelength=15;
        public $textlength=4;
        public $pixellength;
        public $str="";
        public $url="../demo.ttf";
//        public  $type="png";


        //设置画布
        private function setCavan(){
            $this->img=imagecreatetruecolor($this->width,$this->height);
            //为一幅图分配颜色
            $this->color=imagecolorallocate($this->img,mt_rand(0,120),mt_rand(8,120),mt_rand(1,120) );
            //区域填充
            imagefill($this->img,0,0,$this->color);
        }
        //设置文字
        private function setText(){
            //内容的颜色
            $imgcolor=imagecolorallocate($this->img,mt_rand(100,220),mt_rand(120,220),mt_rand(130,220));
            //存放验证码
            for($i=0;$i<$this->textlength;$i++){
                $this->str.= $this->zhongzi[mt_rand(0,strlen($this->zhongzi)-1)];
                //imagestring/imagettftext(— 用 TrueType 字体向图像写入文本,返回的是一个数组)
                imagefttext($this->img,$this->sizelength,$this->angle,7,33,$imgcolor,$this->url,$this->str);
            }
        }
        //设置线
        private function setLine(){
            for($i=0;$i<$this->linelength;$i++) {
                $linecolor=imagecolorallocate($this->img,mt_rand(80,220),mt_rand(80,220),mt_rand(80,220));
                //imageline画一条线
                imageline($this->img, mt_rand(1, 159), mt_rand(1, 59), mt_rand(1, 159), mt_rand(1, 59), $linecolor);
            }
        }
        //设置点
        private function setPixel(){
            $this->pixellength=mt_rand($this->pmin,$this->pmax);
            for($i=0;$i<$this->pixellength;$i++) {
                $pcolor= imagecolorallocate($this->img,mt_rand(50,220),mt_rand(50,220),mt_rand(80,220));
                //imagesetpixel画点
                imagesetpixel($this->img,mt_rand(1, 159), mt_rand(1, 59),$pcolor);
            }
        }
        public function out(){
            //解析为一张图片
            header("content-type:image/png");
            $this->setCavan();
            $this->setText();
            $this->setLine();
            $this->setPixel();
            $_SESSION["code"]=strtolower($this->str);
            //输出到浏览器,以png格式输出
            imagepng($this->img);
            //用完之后从内存销毁
            imagedestroy($this->img);
        }
    }