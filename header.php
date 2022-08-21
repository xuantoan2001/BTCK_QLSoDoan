<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "Đăng nhập trước";
    header('location: ../login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="ThemeBucket">
        <link rel="shortcut icon" href="images/favicon.png">
        <title><?php echo $title ?></title>
        <!--Core CSS -->
        <link href="../public/bs3/css/bootstrap.min.css" rel="stylesheet">
        <link href="../public/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
        <link href="../public/css/bootstrap-reset.css" rel="stylesheet">
        <link href="../public/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="../public/js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
        <link href="../public/css/clndr.css" rel="stylesheet">
        <!--clock css-->
        <link href="../public/js/css3clock/css/style.css" rel="stylesheet">
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="../public/js/morris-chart/morris.css">
        <!-- Custom styles for this template -->
        <link href="../public/css/style.css" rel="stylesheet">
        <link href="../public/css/style-responsive.css" rel="stylesheet"/>
    </head>
    <body>
        <section id="container">
            <!--header start-->
            <header class="header fixed-top clearfix">
                <!--logo start-->
                <div class="brand" style="background-color: white">
                    <a href="index.php" class="logo">
                        <img src="../public/images/header-ute.png" alt="" style="max-width: 200px;max-height: 60px;display: block;margin: 0 auto;">
                    </a>
                    <div class="sidebar-toggle-box" style="margin-left: 15px">
                        <div class="fa fa-bars"></div>
                    </div>
                </div>
                <!--logo end-->

                <div class="top-nav clearfix">
                    <!--search & user info start-->
                    <ul class="nav pull-right top-menu">
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" src="../public/images/img-ava-9.jpg">
                                <span class="username">
                                    <?php echo $_SESSION['username']; ?>
                                </span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <li><a href="index.php?logout='1'"><i class="fa fa-key"></i> Đăng xuất</a></li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!--search & user info end-->
                </div>
            </header>
            <!--header end-->
            <!--sidebar start-->
            <aside>
                <div id="sidebar" class="nav-collapse">
                    <!-- sidebar menu start-->
                    <div class="leftside-navigation">
                        <ul class="sidebar-menu" id="nav-accordion">
                            <li>
                                <a class="active" href= "../trangchu/index.php">
                                    <i class="fa fa-home"></i>
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="../tracuusinhvien/index.php?page=1">
                                    <i class="fa fa-search"></i>
                                    <span>Tra cứu sinh viên</span>
                                </a>
                            </li>
                            <li>
                                <a href="../quanlysodoan/index.php?page=1">
                                    <i class="fa fa-book"></i>
                                    <span>Quản lý sổ đoàn</span>
                                </a>
                            </li>
                            <li>
                                <a  href="../thongke/index.php?page=1">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>Thống kê</span>
                                </a>
                            </li>
                        </ul>            
                    </div>
                    <!-- sidebar menu end-->
                </div>
            </aside>

            <!--alert start-->

