<!-- 
      create.php
      创建数据库
      
      Created by dfer on 2017-10-23.
      Copyright 2017 dfer. All rights reserved.
 -->


<?php
 include "share/share.php";


   //admin
 $sql = "CREATE TABLE `df` 
(
Id int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(Id),
nm varchar(50) DEFAULT 'df' COMMENT '账号名',
pw varchar(50) DEFAULT 'df',
pic varchar(100) DEFAULT 'http://www.df315.top/upload/AdminPic/AdminPic_1706011702301411011.jpg'
)DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
";

//分栏
 $sql0 = "CREATE TABLE column1
(
Id int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(Id),
menu varchar(50),
title varchar(55),
content longtext
)DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
";
//记事本
 $sql1 = "CREATE TABLE notepad
(
Id int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(Id),
title varchar(50) COMMENT '标题',
content longtext COMMENT '内容',
time varchar(50)
)DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
";

   if ($db->query($sql) === TRUE&&$db->query($sql0) === TRUE&&$db->query($sql1) === TRUE)
   {   
   echo "Table created successfully";
   } else {   
   echo "创建数据表错误: " . $db->error;
   }
   $db->close();
   
?>