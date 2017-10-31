<?php
 // view/index.php
 class Index {
     public function display($output) {
         // ob_start();
    //print_r($output);
    //echo $output["pic"];
    require "share/IconShare.php";
     $m=new Model();
 echo $head1;
         
         
 
         ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title>Df后台管理系统</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;/" />
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/css_js/AdminFrame/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/css_js/AdminFrame/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/css_js/AdminFrame/css/style.css?v=4.1.0" rel="stylesheet">

<script src="~/css_js/df.js"></script>
<script>
        refresh = function () {
            if (confirm("确定刷新服务器数据么")) {
           location.reload()
            }
        }
</script>
<?php echo $head2; ?>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">

    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close">
                <i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">

                <!--菜单开始-->
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <img alt="image" class="img-circle-" src="<?php echo $output["pic"] ?>" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs"><strong class="font-bold">df</strong> 【管理平台】</span>
                                    <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu  m-t-xs">
                                <li><a class="J_menuItem" href=""> 更换头像</a></li>
                                <li class="divider"></li>
                                <li><a class="J_menuItem" href="">修改密码</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo $m->SplitUrl("admin/home/ext") ?>">安全退出</a></li>
                            </ul>
                        </div>
                        <div class="logo-element"></div>
                    </li>
                    <!--菜单开始-->



                    <li>
                        <a href="<?php echo $m->SplitUrl("admin/demo/") ?>" class="J_menuItem">
                            <i class="fa fa-home"></i><span class="nav-label">首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $m->SplitUrl("admin/demo") ?>" class="J_menuItem">
                            <i class="fa fa-magic"></i><span class="nav-label">小程序后台</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-table"></i><span class="nav-label">主页菜单</span><span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="?A=admin&c=demo&a=index">菜单一（关于我）</a></li>
                            <li><a class="J_menuItem" href="?A=admin&c=demo&a=index">菜单二（相册）</a></li>
                            <li><a class="J_menuItem" href="?A=admin&c=demo&a=index">菜单三（Df的语录）</a></li>
                            <li><a class="J_menuItem" href="?A=admin&c=demo&a=index">菜单四（留言表）</a></li>
                            <li><a class="J_menuItem" href="?A=admin&c=demo&a=index">菜单五（音乐管理）</a></li>
                            <li><a class="J_menuItem" href="?A=admin&c=demo&a=index">菜单六（链接管理）</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="?A=admin&c=demo&a=index" class="J_menuItem">
                            <i class="fa fa-book"></i><span class="nav-label">记事本</span>
                        </a>
                    </li>
                 
                    <li>
                        <a onclick="refresh()" class="J_menuItem">
                            <i class="fa fa-book"></i><span class="nav-label">刷新数据</span>
                        </a>
                    </li>

                    <li>
                        <a href="?A=admin&c=demo&a=index" class="J_menuItem">
                            <i class="fa fa-book"></i><span class="nav-label">使用说明</span>
                        </a>
                    </li>
                   

                </ul>

                <!--菜单结束-->
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="#">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                        <ul class="nav navbar-top-links navbar-right">
                            <li class="hidden-xs">
                                <a href="/" target="_blank"><i class="fa fa fa-home"></i>站点首页</a>
                            </li>
                            <li class="hidden-xs">
                                <a href="javascript:history.back(-1);" data-index="0"><i class="fa fa fa-backward"></i>返回</a>
                            </li>

                            <li class="hidden-xs">
                                <a href="javascript:window.location.reload();" data-index="0"><i class="fa fa-refresh"></i>刷新</a>
                            </li>

                            <li class="dropdown  m-l-xl">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <i class="fa fa-envelope"></i> <span class="label label-warning">1</span>
                                </a>
                                <ul class="dropdown-menu dropdown-messages">

                                  
                                        <li class="m-t-xs">
                                            <div class="dropdown-messages-box">
                                             
                                                <div class="media-body ">
                                                    <small class="pull-right text-navy"></small>
                                                    <a href="http://www.df315.top" class="pull-left J_menuItem">
                                                        <strong></strong> Df最帅了
                                                    </a>
                                                    <br>
                                                  
                                                </div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                  

                                    <li>
                                        <div class="text-center link-block">
                                            <a class="J_menuItem" href="http://hb.qq.com/yc/">
                                                <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <i class="fa fa-bell"></i> <span class="label label-primary">1</span>
                                </a>
                                <ul class="dropdown-menu dropdown-alerts">
                                    <li>
                                        <a href="" class="J_menuItem">
                                            <div>
                                                <i class="fa fa-envelope fa-fw"></i> 有 2 条消息
                                                <span class="pull-right text-muted small">最近一个星期</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                             
                                    <li>
                                        <div class="text-center link-block">
                                            <a class="J_menuItem" href="">
                                                <strong>查看所有 </strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown hidden-xs">
                                <a class="right-sidebar-toggle" aria-expanded="false">
                                    <i class="fa fa-tasks"></i> 主题
                                </a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft">
                    <i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="@Url.Action("desktop")">起始页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight">
                    <i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">
                        关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive">
                            <a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll">
                            <a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther">
                            <a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="<?php echo $m->SplitUrl("admin/home/ext")?>" class="roll-nav roll-right J_tabExit"><i class="fa  fa-sign-out"></i> 退出</a>
            </div>
            <!--内嵌框架-->
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="?A=admin&c=home&a=desktop" frameborder="0" data-id="@Url.Action("desktop")"></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">
                    &copy; 2017-2020 <a href="http://www.df315.top/" target="_blank">www.df315.top</a>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
        <!--右侧边栏开始-->
        <div id="right-sidebar">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-3">
                    <li class="active">
                        <a data-toggle="tab" href="#tab-1">
                            <i class="fa fa-gear"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab-2">
                            <i class="fa fa-gear"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab-3">
                            <i class="fa fa-gear"></i>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="sidebar-title none">
                            <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                            <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                        </div>
                        <div class="skin-setttings">
                            <div class="title">主题设置</div>
                            <div class="setings-item">
                                <span>收起左侧菜单</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                                        <label class="onoffswitch-label" for="collapsemenu">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>固定顶部</span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                                        <label class="onoffswitch-label" for="fixednavbar">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>
                                    固定宽度
                                </span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                                        <label class="onoffswitch-label" for="boxedlayout">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="title">皮肤选择</div>
                            <div class="setings-item default-skin nb">
                                <span class="skin-name ">
                                    <a href="#" class="s-skin-0">
                                        默认皮肤
                                    </a>
                                </span>
                            </div>
                            <div class="setings-item blue-skin nb">
                                <span class="skin-name ">
                                    <a href="#" class="s-skin-1">
                                        蓝色主题
                                    </a>
                                </span>
                            </div>
                            <div class="setings-item yellow-skin nb">
                                <span class="skin-name ">
                                    <a href="#" class="s-skin-3">
                                        黄色/紫色主题
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> Df</h3>
                            <small><i class="fa fa-tim"></i> Df</small>
                        </div>

                        <div>

                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="~/css_js/AdminFrame/img/a1.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">

                                        Df
                                        <br>
                                        <small class="text-muted">今天 4:21</small>
                                    </div>
                                </a>
                            </div>·



                        </div>

                    </div>
                    <div id="tab-3" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-cube"></i> Df</h3>
                            <small><i class="fa fa-tim"></i> Df</small>
                        </div>

                        <ul class="sidebar-list">
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9小时以后</div>
                                    <h4>Df</h4> Df

                                    <div class="small">已完成： 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">项目截止： 4:00 - 2015.10.01</div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9小时以后</div>
                                    <h4>Df</h4> Df
                                    <div class="small">已完成： 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>



                        </ul>

                    </div>
                </div>

            </div>
        </div>
        <!--右侧边栏结束-->
    </div>

    <!-- 全局js -->
    <script src="/css_js/AdminFrame/js/jquery.min.js?v=2.1.4"></script>
    <script src="/css_js/AdminFrame/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- 插件js -->
    <script src="/css_js/AdminFrame/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/css_js/AdminFrame/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/css_js/AdminFrame/js/plugins/layer/layer.min.js"></script>
    <!-- 自定义js -->
    <script src="/css_js/AdminFrame/js/hplus.js?v=4.1.0"></script>
    <script src="/css_js/AdminFrame/js/contabs.js" type="text/javascript"></script>
</body>


         
         <?php
         	echo $foot;
     }
 }
 // End of index.php
?>