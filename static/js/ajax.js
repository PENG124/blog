/*
* params类型object
*       URL交互的地址
*       data传递的数据
*       dataType返回数据的类型
*       type传递数据的方式
*       success当数据执行成功返回的函数
*       async是不是异步
*
*
* */
function ajax(params) {
    //类型
    if(typeof params!="object"){
        console.error("参数必须是对象");
        return;
    }
    //传递地址是否是URL
    if(params.url==undefined){
        console.error("参数必须指定url");
        return;
    }
    //参数初始化
    var url=params.url;
    var type=params.type||"get";
    var dataType=params.dataType||"text";
    var async=params.async===undefined?true:params.async;
    var data=params.data||"";
    if(typeof data=="object"){
        var str="";
        for(var i in data){
            //"name=zhangsan&age=12&sex=nv"规范
            str+=i+"="+data[i]+"&";
        }

        data=str.slice(0,-1);
    }


    var xmlobj=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
    xmlobj.responseType=dataType;
    xmlobj.onload=function(){
        params.success(xmlobj.response)
    }
    if(type=="get"){
        xmlobj.open("get",url+"?"+data,async);
        xmlobj.send();

    }else if(type=="post"){
        xmlobj.open("post",url);
        xmlobj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xmlobj.send(data);
    }

}