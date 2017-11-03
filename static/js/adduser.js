window.onload=function () {
    let updata=new Updata();
    updata.createSelect({parents:document.querySelector(".box")});5
    updata.Up("class.php",function (e) {
    let url=e.join(";");
    document.querySelector("input[id=img]").value=url;
    });
}