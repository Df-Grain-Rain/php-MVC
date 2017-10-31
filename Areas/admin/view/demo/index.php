<?php
 // view/index.php
 class Index {
     public function display($output) {
         // ob_start();
         //echo $output;
         
         require "share/BackShare.php";
         
         
         
         
         ?>
         
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
<tr>
<td>链接</td>
<td>图片地址</td>
<td>标题</td>
<td>描述</td>
<td>内容</td>
<td>操作</td>
</tr>

<?php


date_default_timezone_set("PRC");
echo date("Y-m-d h:i:sa");
echo "<br>";

$attr =$output;
foreach($attr as $v)
{
   
    echo "<tr>
    <td>{$v[1]}</td>
    <td><img src='{$v[2]}' width=15%/></td>
    <td>{$v[3]}</td>
    <td>{$v[4]}</td>
    <td>{$v[5]}</td>
        
    <td>
       <a href='?A=admin&c=demo&a=del&para={$v[0]}'>删除</a>
       <a href='?A=admin&c=demo&a=edit&para={$v[0]}'>修改</a>
    </td>
    </tr>";
}
?>

</table>
<div><a href="?A=admin&c=demo&a=edit&para=0">添加数据</a></div>
<div><a href="?A=admin&c=demo&a=json&para=">查看json</a></div>
         
         
         <?php
     }
 }
 // End of index.php
?>