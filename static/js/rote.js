BUI.use(['bui/grid','bui/data'],function(Grid,Data){
    var Grid = Grid,
        Store = Data.Store,
        enumObj = {"1" : "查看","2" : "添加","3" : "删除","4" : "编辑"},
        columns = [
            {title : '角色ID',dataIndex :'lid'}, //editor中的定义等用于 BUI.Form.Field.Text的定义
            {title : '角色名称', dataIndex :'lname'},
            {title : '内容权限',dataIndex : 'connum',renderer : Grid.Format.multipleItemsRenderer(enumObj)},
            {title : '留言权限',dataIndex : 'messagenum',renderer : Grid.Format.multipleItemsRenderer(enumObj)},
            {title : '管理员权限',dataIndex : 'adminnum',renderer : Grid.Format.multipleItemsRenderer(enumObj)},
            {title : '操作',renderer : function(){
                return '<span class="grid-command btn-edit">编辑</span>'
            }}
        ];
    //分页
    if(location.search.indexOf("pages")>-1){
        var pages=location.search.substr(location.search.lastIndexOf("=")+1)
    }else{
        var pages=0;
    }
    var isAddRemote = false,
        editing = new Grid.Plugins.DialogEditing({
            contentId : 'content', //设置隐藏的Dialog内容
            triggerCls : 'btn-edit', //触发显示Dialog的样式
            editor : {
                title : '自定义',
                width : 600,
                success:function () {
                    var edtor=this;
                    form=edtor.get('form');
                    form.valid();
                    var type=editing.get("editType");//确定编辑还是添加
                    if(form.isValid()){
                        form.ajaxSubmit({//表单异步提交
                            url:"index.php?m=admin&f=role&a=addrote&type="+type,
                            type:"post",
                            dataType:'text',
                            data:form.serializeToObject(),//自动将表单内的字段组合起来
                            success:function (e) {
                                if(e!="edit"){
                                    form.setFieldValue("lid",e);//将获取回来的ID动态的插入表
                                    edtor.accept();//成功之后关闭弹窗
                                }else{
                                    edtor.accept();
                                }
                            }
                        })
                    }
                }
            }
        }),
        store = new Store({
            autoLoad:true,
            url : "index.php?m=admin&f=role&a=roteCon&pages="+pages,
        }),
        grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            width : 700,
            forceFit : true,
            tbar:{ //添加、删除
                items : [{
                    btnCls : 'button button-small',
                    text : '<i class="icon-plus"></i>添加',
                    listeners : {
                        'click' : addFunction
                    }
                },
                    {
                        btnCls : 'button button-small',
                        text : '<i class="icon-remove"></i>删除',
                        listeners : {
                            'click' : delFunction
                        }
                    }]
            },
            plugins : [editing,Grid.Plugins.CheckSelection],
            store : store
        });

    grid.render();

    //添加记录
    function addFunction(){
        var newData = {b: 0};
        editing.add(newData,'lname'); //添加记录后，直接编辑
    }
    //删除选中的记录
    function delFunction(){
        var selections = grid.getSelection();
        var data="";
        selections.map(function (a) {
           data+=a.lid+",";
        })
        data="("+data.slice(0,-1)+")";
        $.ajax({
            url : "index.php?m=admin&f=role&a=delrote",
            type:"post",
            data:"lids="+data,
            success:function (e) {
               store.remove(selections);
            }
        })
    }
});