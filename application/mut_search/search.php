<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>北大软微日程管理系统</title>
    <meta name="description" content="北大软微日程管理系统">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">       
                    <li class="menu-title">日程查询统计</li><!-- /.menu-title -->
                    <li class="menu-item-has-children active">
                        <a href="index.php"> <i class="menu-icon fa fa-search-plus"></i>日程查询</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#"> <i class="menu-icon fa fa-bar-chart-o"></i>日程统计 </a>
                    </li> 

                    <li class="menu-title">日程管理配置</li><!-- /.menu-title -->
                    <li class="menu-item-has-children">
                        <a href="time.html"> <i class="menu-icon fa fa-calendar"></i>时间段管理</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="area.html"> <i class="menu-icon fa ti-location-pin"></i>地点管理 </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="thing.html"> <i class="menu-icon fa fa-book"></i>事项管理</a>
                    </li>
                     <li class="menu-item-has-children">
                        <a href="#"> <i class="menu-icon fa fa-folder-open-o"></i>白名单管理 </a>
                    </li>                     
                     <li class="menu-item-has-children">
                        <a href="#"> <i class="menu-icon fa fa-arrows"></i> 
                        设置可维护日程范围</a>
                    </li>     
                     <li class="menu-item-has-children">
                        <a href="#"> <i class="menu-icon fa fa-calendar-o"></i> 
                        配置工作日</a>
                    </li> 
                     <li class="menu-item-has-children">
                        <a href="#"> <i class="menu-icon fa fa-square-o"></i> 
                        缺省日程维护</a>                         

                    <li class="menu-title">用户管理</li><!-- /.menu-title -->
                    <li class="menu-item-has-children">
                        <a href="user_base.html"> <i class="menu-icon fa fa-user"></i>基础管理 </a>
                    </li> 
                     <li class="menu-item-has-children">
                        <a href="#"> <i class="menu-icon fa fa-building-o"></i>部门管理 </a>
                    </li>  
                     <li class="menu-item-has-children">
                        <a href="#"> <i class="menu-icon fa fa-lemon-o"></i>职务管理 </a>
                    </li>                                             

                    <li class="menu-title">管理员管理</li> 
                     <li class="menu-item-has-children">
                        <a href="#"> <i class="menu-icon fa fa-group"></i>基础管理 </a>
                    </li>                      
                     <li class="menu-item-has-children">
                        <a href="#"> <i class="menu-icon fa fa-credit-card"></i>角色管理 </a>
                    </li>                                           
                     <li class="menu-item-has-children">
                        <a href="#"> <i class="menu-icon fa fa-sitemap"></i>权限管理 </a>
                    </li>                     

                    <li class="menu-title">日志管理</li><!-- /.menu-title -->
                    <li class="menu-item-has-children">
                        <a href="log.html"> <i class="menu-icon fa fa-search"></i>日志查询</a>
                    </li>    

                    <li class="menu-title">消息管理</li><!-- /.menu-title -->
                    <li class="menu-item-has-children">
                        <a href="log.html"> <i class="menu-icon fa fa-comment-o"></i>消息模板</a>
                    </li>                                 
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="index.html"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="page-login.html"><i class="fa fa-power-off"></i>退出</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <div class="animated fadeIn">                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                 <h4 class="box-title">所有日程
                                 </h4>
                                <form action="search.php" method="post">
				多人查询(<b>请使用空格隔开</b>):&nbsp;&nbsp;&nbsp; 
                                <input type="text" name="word" />
                                <input type="submit" value="查询"/>
                                </form>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats">
                                    <table id="bootstrap-data-table" class="table">
                                        <thead>
                                            <tr>
                                                <th class="serial">序号</th>
                                                <th>姓名</th>
                                                <th>身份</th>
                                                <th>时间</th>
                                                <th>地点</th>
                                                <th>事项</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include("active.php");
					    mysqli_set_charset($con,"utf8");
                                            $names = explode(" ",$_POST['word']);
					    $nameids = array();
                                            foreach ($names as $name) {
                                                $sql = "select id from user_info where name = '".$_POST['word']."'";
                                                $res = mysqli_query($con,$sql);
                                                if (mysqli_num_rows($res) > 0) {
							$row = mysqli_fetch_assoc($res);
							array_push($nameids,$row['id']);
                                                } 
                                            }
					    foreach ($nameids as $nameid) {
                                                $sql = "select id,name,position,time,place,item from (select a.id,b.name as name,c.name as position,d.name as time,e.name as place,f.name as item, b.id as userid from schedule_info a left join user_info b on a.user_id = b.id left join user_position c on b.position_id = c.id left join schedule_time d on a.time_id = d.id left join schedule_place e on a.place_id = e.id left join schedule_item f on a.item_id = f.id) as buffer where userid = ".$nameid;
                                                $res = mysqli_query($con,$sql);
                                                if (mysqli_num_rows($res) > 0) {
					            while($row = mysqli_fetch_assoc($res)) {
					            $table = '<tr><td class="serial">'.$row['id'].'</td><td>  <span class="product">'.$row['name'].'</span> </td><td>  <span class="product">'.$row['position'].'</span> </td><td>  <span class="product">'.$row['time'].'</span> </td><td>  <span class="product">'.$row['place'].'</span> </td><td> <span class="product">'.$row['item'].'</span> </td></tr>';
                                                    }
                                                } 
                                            }
                                            echo($table);
                                            ?>                                                                            
                                        </tbody>                                   
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>                                       
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019 SSPKU Admin. 友情链接 <a href="http://www.ss.pku.edu.cn/" target="_blank" title="北京大学软件与微电子学院">北京大学软件与微电子学院</a> 
                    </div>
                    <div class="col-sm-6 text-right"> Designed by SunJiajing
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>
</body>
</html>
