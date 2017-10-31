<?php
require "share/share.php";
require('model/model.php'); 
 define("__ROOT__",dirname(__FILE__));
 // controller/democontroller.php
 class demoController
 {
     // private $data = 'Hello furzoom!';
//  function index($param){
//   // echo 'hello world';
//	require('model/model.php');  
//  require('view/'.__FUNCTION__.'.php');   
//  
//	$model = new Model();
//	$view = new Index();     
//   
//  $data = $model->getData($param);
//  $view->display($data);     
//   
//  }     
     
  public   function index($param){   
require(__ROOT__.'/../view/'.str_replace('Controller','',__CLASS__) .'/'.__FUNCTION__.'.php'); 
    
   $model = new Model();
   $myValue = &$model->show("com",-1);
     $view = new Index();     
     $view->display($myValue);     
     
    }     
    
    
     public   function json($param){
     	      require "share/BackShare.php";
            
     	$model = new Model();
   $myValue = &$model->tableToJson("com");
   echo $myValue;
    }  
    
     function edit($param){    
require(__ROOT__.'/../view/'.str_replace('Controller','',__CLASS__) .'/'.__FUNCTION__.'.php');       //加载视图 
//$sql = "select * from `".$tb."` where id='{$param}'";  //sql语句的表名区分大小写
//$r1 = $db->query($sql);
//$att1 = $r1->fetch_array();    

$model = new Model();
   $myValue = &$model->show("com",$param);
     $view = new Index();     
     $view->display($myValue);      	
     	
     }
     
     
     
       function del($param){      
     //	 require('view/'.__FUNCTION__.'.php');   //加载视图 
$model = new Model();
   $myValue = $model->del("com",$param,"?{$_SERVER["QUERY_STRING"]}&a=index");   
  //   $view = new Index();     
//     $view->display($att1);      	
     	
     }
 }// End of the class DemoController
 // End of file democontroller.php
?>