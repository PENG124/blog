$(function () {
    $(".abonum>li:nth-of-type(3n)").children().css("color","#A2B8CE");
    $(".abonum>li:nth-of-type(5n)").children().css("color","#BE8787");
    $(".abonum>li:nth-of-type(7n)").children().css("color","#1E689C");
    //轮播图
    var num=0;
    var banner=$(".tuen");
    var circle=$(".tuen-dot>ul>li");
    var ground=$(".tuen>li");
//自动轮播
    t = setInterval(fn,2000);
//当鼠标移到banner图上，清除自动轮播，鼠标离开，继续动起来
    banner.mouseenter(function(){
        clearInterval(t);
    }).mouseleave(function(){
        t = setInterval(fn,2000);
    })
//按键右边
    function fn(){
        num++;
        if (num == ground.length) {
            num=0;
        }
        for (let i = 0; i < ground.length; i++) {
            ground.eq(i).css('display','none');
            circle.eq(i).css('background','#ccc');
        }
        ground.eq(num).css('display','block');
        circle.eq(num).css('background','#2965B1');
    }
    //圆点点击轮播
    for (let j=0;j<circle.length;j++) {
        circle.eq(j).click(function(){
            ground.eq(num).css('display','none');
            ground.eq(j).css('display','block');
            circle.eq(j).css('background','#2965B1');
            circle.eq(num).css('background','#ccc');
            num = j;
        })
    }
    ////固定定位
    let search = $(".hot-head");
    //获取固定定位相对于浏览器的高度
    let a = search.offset().top;
    $(".hot-heads").css('display','none');
    $(document).scroll(function () {
        //获取滚动条滚动的高度
        let h=$(document).scrollTop();
        if(h>500){
            search.css({
                "position":"fixed",
                top:0,
            });
        }else if(h<500){
            $(".hot-heads").css('display','block');
            $(".hot").css('position',"relative");
            search.css({
                "position":"absolute",
                top:0
            });
        }
    })
    //搜索
    $(".search2").css('display','none');
    $(".sousuo>input").focus(function () {
        $(".search1").css('display','none');
        $(".search2").css('display','block');
    }).blur(function () {
        $(".search2").css('display','none');
        $(".search1").css('display','block');
    })
})