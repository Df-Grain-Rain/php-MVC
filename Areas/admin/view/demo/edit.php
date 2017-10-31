<?php
 // view/index.php
 

 class Index {
    
     public function display($output) {
         // ob_start();
             include "share/share.php";
             require "share/BackShare.php";
        // echo $output;
        
        $s=new Model();
        
       //  $output = isset($output)?$output:&$s->DefineArr(7);
     
        ?>
        
        
      
        <form  method="post">
    <div>链接：<input type="text" name="data[redirecturl]" value="<?php echo isset($output[1])?$output[1]:'' ?>" /></div>
    <div>图片地址：<input type="text" name="data[mainimg]" value="<?php echo isset($output[2])?$output[2]:'' ?>" /></div>   
    <div>标题：<input type="text" name="data[title]" value="<?php echo isset($output[3])?$output[3]:''?>"/></div>
     <div>描述：<input type="text" name="data[description]" value="<?php echo isset($output[4])?$output[4]:'' ?>"/></div>
      <div>内容：<input type="text" name="data[content]" value="<?php echo isset($output[5])?$output[5]:'' ?>"/></div>
       <div class="col-sm-11">链接网页：
                                   
                                    <textarea name="data[html]" value=""><?php echo isset($output[6])?$output[6]:'' ?></textarea>
                            </div>
    <div><input type="submit" name="submit" value="修改数据" /></div>
</form>
        
        <?php


 	

    	
if(isset($_POST['submit'])){
$users = $_POST['data'];

$myValue = &$s->update("com",$users,$output!=null?$output[0]:0,"?{$_SERVER["QUERY_STRING"]}&a=index");
echo "<script>alert('{$myValue}')</script>";

}else{
	echo 'have no submit';
}
//      		if(!isset($_POST["title"])){
//	echo 'please write';die();
//}
//$c1= $_POST["imgUrl"];
//$c2 = $_POST["title"];
//$c3 = $_POST["info"];
//$c4 = $_POST["avatar"];
//$c5 = $_POST["uName"];
//$c6 = $_POST["isVideo"];
//$c7 = $_POST["videoUrl"];
//$c8 = $_POST["browse"];
//$c9 = $_POST["like"];
//$c10 = $_POST["comment"];
//$c11 = $_POST["time"];
//
//
//
//
//$sql = "update `$tb` set imgUrl='{$c1}',title='{$c2}',info='{$c3}',avatar='{$c4}',uName='{$c5}',isVideo='{$c6}',videoUrl='{$c7}',browse='{$c8}',`like`='{$c9}',comment='{$c10}',time='{$c11}' where id='{$code}'";
//
//$r = $db->query($sql);
//if($r)
//{
//  header("location:{$RTurl}");
//}
//else
//{
//  echo "修改失败！";
//}
        	
        	
        	
     }
 }
 // End of index.php
 

?>

