/*
* 创建类
* js动态创建页面，
* 视图：
* 1、创建选择按钮
* 父容器，选择按钮，上传按钮
* 获取父容器，选择按钮    createSelect
* createSelect:
* 创建选择按钮：（parent，按钮）
* 1、判断是否创建了父元素
* 2、判断选择按钮是否存在
* 没有就自己创建一个，给到父元素
* 设置样式  callback
* 2、创建上传按钮
* 箭头函数 this
* 3、创建预览容器*
* 4、先选择文件change
* 开始选择文件：事件
* 针对每一个检查：check。for循环-》方法 创建预览的列表
* 创建预览的列表：let fas = new FileReader();   进度条容器   进度条
* 错误：error
* 检查：大小，类型
* 删除按钮：鼠标移入出现，移出消失
* 把带有length属性的对象转化为数组：Array.prototype.slice.call(对象);
* 点击删除：得到当前点击的是哪一个tmp，临时目录：原始数据，和数据进行比对，splice
* 判断是否符合类型，判断大小 if(this.size<this.data[i].size) indexOf>-1
* 上传：有几个文件上传几次
* for循环 ajax ，form对象    this.filename   百分比
* //后台
* 时间戳$name=time()mt_rand(0,100000).$_FILE["file"]["name"];
* mt_rand();随机数
* */

class Updata{
    constructor(){
        this.data=[];
        this.list=[];
        //大小
        this.size=1024*1024*10;
        //类型
        this.type="image/png;image/jpeg;image/gif";
        //文件名
        this.filename="file";
        this.fbtnStyle="width:100px;height:50px;";
        this.divStyle="width:120px;height:40px;background: #ccc;border-radius:10px;position:absolute;left:0;top:-45px;";
        this.divText="请选择文件";
        this.btnStyle="width:120px;height:40px;background: #ccc;border-radius:10px;position:absolute;left:170px;top:-45px;cursor: pointer;";
        this.btnText="点击上传";
        this.prStyle="width:500px;height:165px;border: 1px solid #ccc;position:absolute;left:0;top:0;";
        this.listStyle="width:250px;height:160px;float:left;";
        this.progressStyle="width:100%;height:5px;position:absolute;bottom:0;left:0;"

        this.bar="width:0%;height:100%;background:red";
        this.errorStyle="width:100%;height:30px;position:absolute;left:0;top:0;right:0;bottom:0;margin:auto;text-align:center;line-height:30px;color:red;background:rgba(0,0,0,.8)";
        this.errorText="错误";
        this.delStyle="width:20px;height:20px;position:absolute;right:5px;top:5px;text-align:center;line-height:20px;cursor:pointer;border:1px solid #777;display:none";

    }
    createSelect(parent){
        this.Select(parent.parents,parent.selects,()=>{
            //预览
            this.Prview(parent.pr);
            //上传
            this.Upbtn(parent.btn);
            //选择文件
            this.change();

        });
    }
    //开始选择文件
    //选择文件
    change(){
        let that=this;
        this.selects.onchange=function () {
            that.data=Array.prototype.slice.call(this.files);
            //检查
            that.check();
        }
    }
    //检查
    check(){
        let that = this;
        //临时文件
        let tmp=[];
        for(let i=0;i<this.data.length;i++){
            //把数据存储到临时文件里面
            tmp[i]=this.data[i];
            //把数据放到列表里面
            let obj=this.createList(this.data[i]);
            that.list[i]=obj;

            obj.del.index=i;
            //闭包
            (function(obj){
                obj.list.onmouseover=function(){
                    obj.del.style.display="block";
                }
                obj.list.onmouseout=function(){
                    obj.del.style.display="none";
                }
            })(obj)
            obj.del.onclick=function(){
                this.parentNode.parentNode.removeChild(this.parentNode);
                //当前的下标
                let tmpdata=tmp[this.index];
                for(let j=0; j<that.data.length;j++){
                    if(that.data[j]==tmpdata){
                        //在内存里删除
                        that.data.splice(j,1);
                        that.list.splice(j,1);
                    }
                }
            }
            //判断是不是符合类型
            if(this.type.indexOf(this.data[i].type)<0){
                let tmpdatas=tmp[i];

                for(let j=0;j<that.data.length;j++){
                    if(that.data[j]==tmpdatas){
                        that.data.splice(j,1);
                        that.list.splice(j,1);
                    }
                }
                obj.error.style.display="block";
                obj.error.innerHTML="类型有误";
            }

            //判断大小是不是满足条件
            if(this.data[i]) {
                if (this.size < this.data[i].size) {
                    let tmpdataa = tmp[i];

                    for (let j = 0; j < that.data.length; j++) {
                        if (that.data[j] == tmpdataa) {
                            that.data.splice(j, 1);
                            that.list.splice(j,1);
                        }
                    }
                    obj.error.style.display = "block";
                    obj.error.innerHTML = "尺寸太大";
                }
            }
        }
    }
//上传
    Up(url,callback){
        let that=this;
        this.btn.onclick=function() {
            for (let i = 0; i < that.data.length;i++) {
                let ajax = new XMLHttpRequest();
                let form = new FormData();

                form.append(that.filename, that.data[i]);

                let arr=[];
                !function(i,ajax){
                    ajax.onload = function () {
                        arr.push(ajax.response);
                        if(callback) {
                            callback(arr);
                        }
                    }
                    ajax.upload.onprogress = function (e) {
                        let bili = e.loaded / e.total * 100 + "%"
                        that.list[i].bar.style.width = bili;
                    }
                }(i,ajax)
                ajax.open("post", url);
                ajax.send(form);
            }
        }
    }


    //创建预览的列表
    createList(data){
        //列表
        let list=document.createElement("div");
        list.style.cssText=this.listStyle;
        list.style.position="relative";
        //临时文件的文件类型
        let tmptype="image/jpeg;image/gif;image/png";
        if(tmptype.indexOf(data.type)>-1) {
            //完成 图片数据地址的转换
            let read = new FileReader();
            read.onload = function (e) {
                list.style.background = "url(" + e.target.result + ")";
                list.style.backgroundSize = "cover";
            }
            read.readAsDataURL(data);
        }else {
            let notice = document.createElement("div");
            notice.innerHTML = "未知的类型";
            list.appendChild(notice);
        }
        //进度条框
        let progress=document.createElement("div");
        progress.style.cssText=this.progressStyle;
        //进度条
        let bar=document.createElement("div");
        bar.style.cssText= this.bar;
        //错误
        let error=document.createElement("div");
        error.style.cssText=this.errorStyle;
        error.innerHTML=this.errorText;
        error.style.display="none";

        //删除按钮
        let del=document.createElement("div");
        del.style.cssText=this.delStyle;
        del.innerHTML="X";
        //
        progress.appendChild(bar);
        list.appendChild(error);

        list.appendChild(progress);
        list.appendChild(del);

        this.pr.appendChild(list);

        return {
            del:del,
            error:error,
            list:list,
            bar:bar
        }
    }
    //创建视图
    Select(parents,selects,callback){
       if(!parents){
           console.error("请选择父元素");
       }
       if(selects){
           this.selects=selects;
           return false;
       }
       this.parents=parents;
        let div=document.createElement("div");
       div.style.cssText=this.divStyle;
       div.style.position="relative";
       div.style.textAlign="center";
       div.innerHTML=this.divText;

        let file=document.createElement("input");
       file.type="file";
       file.name=this.filename;
       file.style.cssText=this.fbtnStyle;
       file.style.cssText="opacity:0;position:absolute;z-index:1;height:100%;width:100%;left:0;top:0;";
       file.multiple="multiple";

       div.appendChild(file);
       parents.appendChild(div);
       this.selects=file;
       div.style.lineHeight=div.offsetHeight+"px";
       callback();
    }
    //按钮
    Upbtn(obj){
        if (obj){
            this.btn=obj;
        }else{
            let btn=document.createElement("div");
            btn.style.cssText=this.btnStyle;
            btn.innerHTML=this.btnText;
            this.parents.appendChild(btn);
            btn.style.textAlign="center";
            btn.style.lineHeight=btn.offsetHeight+"px";
            this.btn=btn;
        }
    }
    //预览容器
    Prview(obj){
        if(obj){
            this.pr=obj;
        }else{
            let div=document.createElement("div");
            div.style.cssText=this.prStyle;
            this.parents.appendChild(div);
            this.pr=div;

        }
    }
}