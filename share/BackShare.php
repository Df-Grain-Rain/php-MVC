<?php	
//后台分页面	
	$head1='
	<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link href="/css_js/AdminFrame/css/bootstrap.min.css?v=3.3.6" rel="stylesheet" />
    <link href="/css_js/AdminFrame/css/font-awesome.css?v=4.4.0" rel="stylesheet" /> ';
 $head2='
     <link href="/css_js/AdminFrame/css/style.css?v=4.1.0" rel="stylesheet" />
    <script src="/css_js/AdminFrame/js/jquery.min.js?v=2.1.4"></script>

</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content">
';


$foot='</div>
    <!-- 全局js -->
    <script src="/css_js/AdminFrame/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- 自定义js -->
    <script src="/css_js/AdminFrame/js/content.js?v=1.0.0"></script>  
</body>
</html>';
  function index(){   
$model = new Model();
$myValue = &$model->show("df",1);
Session_Start();
if(!isset($_SESSION["df-pw"])){
	header("location:?A=admin&c=login");    
}
 else  if($myValue["pw"]!=$_SESSION["df-pw"])
       header("location:?A=admin&c=login");    
   }  

index();


   

?>