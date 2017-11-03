$(function(){
    let flag=true;
    $(".aname").click(function(){
        if (flag) {
            $(".pull").css("display","block");
            flag=false;
        }else{
            $(".pull").css("display","none");
            flag=true;
        }
    })
    // $(".aname").toggle(function(){
    //     $(".pull").css("display","block");
    // })
    var zuo=$(".zuo>ul>li");
    for(let i=0;i<zuo.length;i++){
        zuo.eq(i).click(function () {
            $(".sub").css("display","none");
            $(".sub").eq(i).css("display","block");
        })
    }
})