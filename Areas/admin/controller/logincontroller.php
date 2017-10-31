<?php
require "share/share.php";
require('model/model.php'); 
 define("__ROOT__",dirname(__FILE__));
 // controller/democontroller.php
 class loginController
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
     
   function index($param){   
require(__ROOT__.'/../view/'.str_replace('Controller','',__CLASS__) .'/'.__FUNCTION__.'.php');    
   $model = new Model();
   $myValue = &$model->show("df",1);
   
	
   if($myValue["pw"]==$model->ReadSession($model->data["ses"]))
{
   header("location:{$model->SplitUrl('admin/home/index')}");    
}
     $view = new Index();     
     $view->display($myValue);     
   }    
    
    
 }// End of the class DemoController
 // End of file democontroller.php
?>