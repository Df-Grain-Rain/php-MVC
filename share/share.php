
<?php	
//数据库配置文件	
	
//error_reporting(0);       //屏蔽错误提示
$server="localhost";
$acc="root";
$pwd="root";
$database="test";
//$tb="com";	
if (!isset($db)) {
$con = mysqli_connect($server,$acc,$pwd);
if (!$con)
{
  echo "server connect fail<br>";
}

$db = new MySQLi($server,$acc,$pwd,$database);
!mysqli_connect_error() or die("db connect fail");
}
$RTurl="/";



?>