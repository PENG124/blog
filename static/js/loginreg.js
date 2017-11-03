$(function () {
    $(".head-login").click(function () {
        $(".reg>form").css("display","none");
        $(".login>form").css("display","block");
    })
    $(".head-reg").click(function () {
        $(".login>form").css("display","none");
        $(".reg>form").css("display","block");
    })
})