
<?php
	
	
//主页	
$A='admin';
$c='home';
$a='index';
 //index.php
 //get Area
 $A_str =isset($_GET['A'])?$_GET['A']:$A;
 // get runtime controller prefix
 $c_str =isset($_GET['c'])?$_GET['c']:$c;
 // the full name of controller
 $c_name = $c_str.'controller';
 // the path of controller
 $c_path ='Areas/'.$A_str.'/controller/'.$c_name.'.php';
 // get runtime action
 $method =isset($_GET['a'])?$_GET['a']:$a;
 // get runtime parameter
 $param = isset($_GET['para'])?$_GET['para']:'Df';
 // load controller file
 require($c_path);
 // instantiate controller
 $controller = new $c_name;
 // run the controller  method
 $controller->$method($param);
 // End of index.php
 
 
?>