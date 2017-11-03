<?php
//后台语言
class code{
    function __construct(){
        //解析为一张图片
        header("content-type:image/png");
        //创建一个真彩图像
        $img=imagecreatetruecolor(150,50);
        //为一幅图分配颜色
        $color=imagecolorallocate($img,rand(0,120),rand(8,120),rand(1,120) );
        $imgcolor=imagecolorallocate($img,rand(100,220),rand(120,220),rand(130,220));
        //区域填充
        imagefill($img,0,0,$color);
        //验证码
        $str="0123456789wertyup";
        //存放验证码
        $code="";
        for($i=0;$i<4;$i++){
            $code.= $str[mt_rand(0,strlen($str)-1)];
            //imagestring/imagettftext(— 用 TrueType 字体向图像写入文本,返回的是一个数组)
            $arr=imagefttext($img, 40, 0,20,43,$imgcolor,"demo.ttf", $code);
        }
        for($i=0;$i<30;$i++) {
            $linecolor=imagecolorallocate($img,rand(80,220),rand(80,220),rand(80,220));
            //imageline画一条线
            imageline($img, mt_rand(1, 199), mt_rand(1, 129), mt_rand(1, 199), mt_rand(1, 129), $linecolor);
        }
        for($i=0;$i<1300;$i++) {
            $pcolor= imagecolorallocate($img,rand(50,220),rand(50,220),rand(80,220));
            //imagesetpixel画点
            imagesetpixel($img,mt_rand(1, 199), mt_rand(1, 129),$pcolor);
        }
        //输出到浏览器,以png格式输出
        imagepng($img);
    }
}
