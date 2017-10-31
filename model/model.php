<?php
require "share/share.php";

 // model/model.php
 class Model {
 	
 	//定义数组
     public $data = array(
                 'ses' => 'df-pw',
                 'url' => '{$_SERVER["QUERY_STRING"]}',//当前的网址参数
                 'Df'=>'df'
                 );
      //定义方法
     public function getData($key) {
         return $this->data[$key];
     }


//操作session
public function &ReadSession($name){
	if(isset($_SESSION))
	session_destroy();
	Session_Start();
return $_SESSION[$name];
}
public function SetSession($name,$val,$rt=""){
	if(isset($_SESSION))
	session_destroy();
	Session_Start();
$_SESSION[$name]=$val;	
	if($rt!="")
header("location:{$this->SplitUrl($rt)}");
}
public function delSession($name,$rt=""){
	if(isset($_SESSION))
	session_destroy();
	Session_Start();
	unset ($_SESSION[$name]);
	if($rt!="")
header("location:{$this->SplitUrl($rt)}");
}    

//拼接url参数    //admin/login/index
public function SplitUrl($str){
	
$s=explode("/",$str);
if(count($s)<3)
		$s[2]="index";
		else if($s[2]=="")
		$s[2]="index";
$rt="?A={$s[0]}&c={$s[1]}&a={$s[2]}";
return $rt;
}
     
//输出表格数据
public function &show($tb,$id=0){
	require "share/share.php";
	if($id<0){
	$sql = "select * from `{$tb}` ";
	$r = $db->query($sql);
	$rt = $r->fetch_all();	
	}
	else if($id!=0){
	$sql = "select * from `{$tb}` where id='{$id}'";  //sql语句的表名区分大小写
	$r = $db->query($sql);
	$rt = $r->fetch_array();
	}	
	else{	
		$rt= null;
			} 

	return 	$rt;
}     

//把数据库表格数据转化为json字符串
public function &tableToJson($tb,$id=0){
	require "share/share.php";
	if($id==0)
$sql = "select * from $tb";
else{
$sql = "select * from $tb where Id=$id";}
$result = $db->query($sql);
//echo $db->error; 
$attr = $result->fetch_all(MYSQLI_ASSOC);//以数据表中的字段为键
$str='';
foreach ($attr as $item){
$json=json_encode($item);
 $str= $str.$json.',';
 }
  $str=substr($str,0,strlen($str)-1);
header("content-type:application/json");// 尽量不要用text/json 某些浏览器会不兼容
$json='{"name":"df","time":"1111-01-01","data":['.$str.']}';//注意外面的单引号     
	return 	$json;     //json打印出来之后除了json字符串，不应该有多余的字符，空格除外
}   

//更新或插入数据
public function &update($tb,$data,$id,$rt){	
include "share/share.php";
$return=0;
if($id!=0){//edit
$sql="update `{$tb}` set ";
foreach($data as $key=>$val){
// echo 'user: ',$key,' = ',$val,'<br />';
$sql=$sql.$key."='".$val."',";   
}
$sql=substr($sql,0,strlen($sql)-1);
$sql=$sql." where id=".$id;
//echo $sql;
$r = $db->query($sql);
if($r)
{
	$r="修改成功！";   
	$return=1; 
}
else
{
  $r="修改失败！";
}
}
else{//add
$sql1='';$sql2='';
foreach($data as $key=>$val){   
$sql1=$sql1.$key.',';
$sql2=$sql2."'".$val."',";
}
$sql1=substr($sql1,0,strlen($sql1)-1);
$sql2=substr($sql2,0,strlen($sql2)-1);
$sql="insert into `{$tb}`({$sql1}) values({$sql2})";
//echo $tb.$sql1.$sql2.$sql;
$r = $db->query($sql);
if($r)
{
	$r= "add成功！";
	$return=1;
   
}
else
{
   $r= "add失败！";
}	
}

if($return==1)
 header("location:{$rt}");
 else
 return $r;
}


//删除数据
public function del($tb,$id,$rt)
{
include "share/share.php";
$return=0;
$sql = "delete from $tb where id ='{$id}'";
$r = $db->query($sql);
if($r)
{
   $r= "del complete！";
   $return=1;
}
else
{
    $r="删除失败！";
}
if($return==1)
 header("location:{$rt}");
}


//生成一个指定大小的数组
public function &DefineArr($a) {
    $array = [];
    for ($i = 0; $i < $a; $i++) {
        $array[$i] = $i;
    }
    return $array;
}

 }
 // End of model.php
?>