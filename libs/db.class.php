<?php
//目的：使操作数据更简洁一点
//锁
    if(!defined("COME")){
        echo "你访问的地址错误";
        exit;
    }
    class db{
        public function __construct($table){
            global $config;
            $this->host=$config["database"]["host"];
            $this->port=$config["database"]["port"];
            $this->user=$config["database"]["user"];
            $this->password=$config["database"]["password"];
            $this->database=$config["database"]["database"];
            $this->table=$table;//表名
            $this->refer["field"]="*";//字段
            $this->refer["where"]=$this->refer["order"]=$this->refer["limit"]="";//查询条件
            $this->refer["join1"]=$this->refer["on1"]=$this->refer["join2"]=$this->refer["on2"]="";//三表关联
            $this->content();
        }
        //表名
        public function table($table){
            $this->table=$table;
            return $this;
        }
        //字段
        public function field($field){
            $this->refer["field"]=$field;
            return $this;
        }
        //条件
        public function where($where){
            $this->refer["where"]=" where ".$where;
            return $this;
        }
        //排序
        public function order($order){
            $this->refer["order"]=" order by ".$order;
            return $this;
        }
        //截取
        public function limit($limit){
            $this->refer["limit"]=" limit ".$limit;
            return $this;
        }
        //二表关联
        public function join1($join1){
            $this->refer["join1"]=" join ".$join1;
            return $this;
        }
        public function on1($on1){
            $this->refer["on1"]=" on ".$on1;
            return $this;
        }
        //三表关联
        public function join2($join2){
            $this->refer["join2"]=" join ".$join2;
            return $this;
        }
        public function on2($on2){
            $this->refer["on2"]=" on ".$on2;
            return $this;
        }
        //链接数据库
        public function content(){
            $this->db=new mysqli($this->host,$this->user,$this->password,$this->database,$this->port);
            if(mysqli_connect_error()){
               echo "数据库链接失败";
               exit;
            }
            $this->db->query("set names utf8");
            return $this->db;
        }
        //查询(多条)
        public function select(){
            $sql="select ".$this->refer["field"]." from ".$this->table.$this->refer["where"].$this->refer["order"].$this->refer["limit"];
            $result=$this->db->query($sql);
            $arr=array();
            while ($row=$result->fetch_assoc()){
                $arr[]=$row;
            }
            return $arr;
        }
        //查询(一条)
        public function selectOne(){
            $sql="select ".$this->refer["field"]." from ".$this->table.$this->refer["where"];
            $result=$this->db->query($sql);
            $row=$result->fetch_assoc();
            return $row;
        }
        //自定义查询
        public function custom($sql){
            $result=$this->db->query($sql);
            return $result;
        }
        //添加
        public function insert($arr){
            $attr="";//属性
            $val="";//值
            foreach ($arr as $k=>$v){
                $attr.=$k.",";
                $val.=$v.",";
        }
            //（name,age,sex）属性  值('$name','$age','$sex')
            //截取
            $attr=substr($attr,0,-1);
            $val=substr($val,0,-1);
            $sql="insert into ".$this->table." (".$attr.") values (".$val.")";
            $this->db->query($sql);
            return $this->db->affected_rows;
        }
        //编辑
        public function updata($sql){
            $sql="update ".$this->table." set ".$sql.$this->refer["where"];
            $this->db->query($sql);
            return $this->db->affected_rows;
        }
        //删除
        public function delete(){
            $sql="delete from ".$this->table.$this->refer["where"];
            $this->db->query($sql);
            return $this->db->affected_rows;
        }
        //关联查询
        //select stu.name,classes.cname,middle.* from stu,classes,middle;可以查出来所有的可能性
        //select stu.name,classes.cname,middle.* from stu,classes,middle where stu.sid=middle.sid and classes.cid=middle.cid;//三表关联
        //select classes.cname,middle.sid from classes join middle on classes.cid=middle.cid where classes.cid=1    两个表进行关联 on后面写查询的条件
        //谁预定了什么课程
        //select stu.sname,middle.cid from stu join middle on stu.sid=middle.sid;没选的查不出来，join 一一对应的
        //select stu.sname,middle.cid from stu left join middle on stu.sid=middle.sid;没选的也能查出来，left join 以左边的表为基准
        //select stu.sname,middle.cid from stu right join middle on stu.sid=middle.sid;没被选的也能查出来，right join 以右边的表为基准
        //select stu.sname,middle.cid from stu join middle on stu.sid=middle.sid join classes;三表关联
        //select stu.sname,classes.cname from stu join middle on stu.sid=middle.sid join classes on classes.cid=middle.cid;三表关联
        public function correlate(){
            $sql="select ".$this->refer["field"]." from ".$this->table.$this->refer["join1"].$this->refer["on1"].$this->refer["join2"].$this->refer["on2"].";";
            $result=$this->db->query($sql);
            $arr=array();
            while ($row=$result->fetch_assoc()){
                $arr[]=$row;
            }
            return $arr;
        }
    }
