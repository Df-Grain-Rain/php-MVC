<?php
 // view/index.php
 class Index {
     public function display($output) {
         // ob_start();
    //print_r($output);
    //echo $output["pic"];
    require "share/IconShare.php";
    
 echo $head1;
         
         
 
         ?>

   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Df后台管理系统</title>
    <meta name="keywords" content="管理后台">
    <meta name="description" content="管理后台">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/css_js/AdminFrame/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/css_js/AdminFrame/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/css_js/AdminFrame/css/style.css?v=4.1.0" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if (window.top !== window.self) { window.top.location = window.location; }</script>
<?php echo $head2; ?>


<body class="gray-bg">
    <div class="middle-box text-center loginscreen">
        <div>
            <div>
                <h1 class="logo-name">login</h1>
            </div>
            <h3>Df后台管理系统</h3>
          <form method="post">      
                <div class="text-left m-t">
                    <div class="form-group">
                      <input autocomplete="off" class="form-control" data-val="true" data-val-required="账号不能为空" id="nm" name="data[nm]" placeholder="用户名" size="32" type="text" value="">
                      	<span class="field-validation-error" data-valmsg-for="nm" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                      <input autocomplete="off" class="form-control" data-val="true" data-val-required="密码不能为空" id="pw" name="data[pw]" placeholder="密码" size="32" type="password">
                      	<span class="field-validation-error" data-valmsg-for="pw" data-valmsg-replace="true"></span>
                    </div>
                    <button type="submit"  name="submit"  class="btn btn-primary full-width">登 录</button>
                    <p class="text-muted text-right m-r none">
                        <a href="login.html#"><small>忘记密码了？</small></a>
                    </p>
                </div>
          </form>
        </div>
    </div>


    <!-- jQuery Validation-->
    <script src="/css_js/jQuery Validation/jquery.validate.min.js"></script>
    <script src="/css_js/jQuery Validation/jquery.validate.unobtrusive.js"></script>
</body>



         
         <?php
         	echo $foot;
         	
         	
 if(isset($_POST['submit'])){ 	
$users = $_POST['data'];

$model = new Model();
$myValue = &$model->show("df",1);
if($myValue["pw"]==$users["pw"])
{
$model->SetSession($model->data["ses"],$myValue["pw"],"admin/home/index");
}
else{
echo "<script>$('#pw').next().html('请输入正确的账号和密码')</script>";
}
}
     }
 }
 // End of index.php
?>