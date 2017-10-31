<?php
 // view/index.php
 class Index {
     public function display($output) {
         // ob_start();
    //print_r($output);
    //echo $output["pic"];
    require "share/BackShare.php";
    
 echo $head1;
         
         
 
         ?>
   
<?php echo $head2; ?>

 <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-3" onclick="location.href='@Url.Action("column2", "homepage" )'" style="cursor: pointer;">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-photo fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> 相册图片数 </span>
                                <h2 id="infoDayAmount" class="font-bold"> 1</h2>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-3" onclick="location.href='@Url.Action("column5", "homepage" )'" style="cursor: pointer;">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-music fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> 音乐数 </span>
                                <h2 id="infoMonthAmount" class="font-bold">2</h2>
                            </div>
                        </div>
                    </div>
                </div>


                

                <div class="col-sm-3" onclick="location.href='@Url.Action("column4", "homepage" )'" style="cursor: pointer;">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> 留言数 </span>
                                <h2 id="infoMonthAmount" class="font-bold">3</h2>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-3" onclick="location.href='@Url.Action("column6", "homepage" )'" style="cursor: pointer;">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-link fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> 链接数 </span>
                                <h2 id="infoMonthAmount" class="font-bold">4</h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

         
         <?php
         	echo $foot;
     }
 }
 // End of index.php
?>