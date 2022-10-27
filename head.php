<?php 
session_start();
ob_start();

if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
    echo "<script> alert('Oop!, you need to login');window.location='index'; </script>";
}else{
    include 'auth/conn.php';
    $ufullname = $_SESSION['name'];
    $uid = $_SESSION['uid'];
    $uemail = $_SESSION['email'];
    $ufname = $_SESSION['fnam'];
    $ulname = $_SESSION['lnam'];
    $urole = $_SESSION['role'];
    ($_SESSION['active'] ==1) ? $umode='Active':$umode='Awaiting Approval';

    $actWallet = dbConnect()->prepare('SELECT user_balance FROM user_account WHERE user_email=?');
    $actWallet->execute([$uemail]); $actfet = $actWallet->fetch();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Webpixels">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>:: BigBucket :: Home</title>

<link rel="stylesheet" href="assets/vendor/themify-icons/themify-icons.css">
<link rel="stylesheet" href="assets/vendor/fontawesome/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/vendor/charts-c3/plugin.css"/>
<link rel="stylesheet" href="assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css"/>
<link rel="stylesheet" href="assets/css/main.css" type="text/css">
</head>
<body class="theme-indigo">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="assets/images/brand/icon_black.svg" width="48" height="48" alt="ArrOw"></div>
        <p>Please wait...</p>
    </div>
</div>

<nav class="navbar custom-navbar navbar-expand-lg py-2">
    <div class="container-fluid px-0">
        <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-align-left"></i></a>
        <a href="index.html" class="navbar-brand"><img src="assets/images/brand/icon.svg" alt="BigBucket" /> <strong>Big</strong> Bucket</a>
        <div id="navbar_main">
            <ul class="navbar-nav mr-auto hidden-xs">
                <li class="nav-item page-header">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item hidden-xs">
                    <form class="form-inline main_search">
                        <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
                    </form>
                </li>
              <!--   <li class="nav-item"><a class="nav-link nav-link-icon" href="javascript:void(0);"><i class="fa fa-cogs"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0">
                        <div class="py-3 px-3">
                            <h5 class="heading h6 mb-0">Notifications <span class="badge badge-pill badge-primary text-uppercase float-right">3</span></h5>
                        </div>
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                <div class="list-group-img"><span class="avatar bg-purple">JD</span></div>
                                <div class="list-group-content">
                                    <div class="list-group-heading">Johnyy Depp <small>10:05 PM</small></div>
                                    <p class="text-sm">Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                                </div>
                            </a>
                        </div>
                        <div class="py-3 text-center">
                            <a href="javascript:void(0);" class="link link-sm link--style-3">View all notifications</a>
                        </div>
                    </div>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">User menu</h6>
                       <!--  <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-user text-primary"></i>My Profile</a>
                        <a class="dropdown-item" href="javascript:void(0);"><span class="float-right badge badge-success">$50K</span><i class="fa fa-briefcase text-primary"></i>My Balance</a>
                        <a class="dropdown-item" href="javascript:void(0);"><span class="float-right badge badge-warning">4</span><i class="fa fa-envelope text-primary"></i>Inbox</a>
                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-cog text-primary"></i>Settings</a>
                        <div class="dropdown-divider" role="presentation"></div> -->
                        <a class="dropdown-item" href="signout"><i class="fa fa-sign-out text-primary"></i>Sign out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="main_content" id="main-content">

    <div class="left_sidebar">
        <nav class="sidebar">
            <div class="user-info">
                <div class="image"><a href="javascript:void(0);"><img src="assets/images/user.png" alt="User"></a></div>
                <div class="detail mt-3">
                    <h5 class="mb-0"><?php echo $ufullname ?></h5>
                    <small><?php echo $uemail ?></small> <br>    
                    <?php if($urole==3)
                        {       
                        echo '        
                    <small> Account Balance: 
                        <span class="badge bg-primary text-white p-3"> N<?php echo number_format($actfet[user_balance]) </span>'; } ?>
                    </small>
                </div>
                <div class="social">
                    <a href="javascript:void(0);" title="facebook"><i class="ti-twitter-alt"></i></a>
                    <a href="javascript:void(0);" title="twitter"><i class="ti-linkedin"></i></a>
                    <a href="javascript:void(0);" title="instagram"><i class="ti-facebook"></i></a>
                </div>
            </div>
            <ul id="main-menu" class="metismenu">
                <li class="g_heading">Main</li>
                <li class="active"><a href="<?php if($urole==1){echo 'admin-dashboard';}elseif($urole==2){echo 'user_dashboard';}else{echo 'user_dashboard';} ?>"><i class="ti-home"></i><span>Dashboard</span></a></li>
                <?php if( $urole==1){?><li><a href="staffs"><i class="ti-vector"></i><span>Staffs</span></a></li><?php } ?>
                <?php if( $urole==1 || $urole==2){?><li><a href="users"><i class="ti-calendar"></i><span>User</span></a></li><?php } ?>
                <li class="g_heading">Application</li>
                
                <li><a href="cash_deposit"><i class="ti-notepad"></i><span>Deposit</span></a></li>
                <li><a href="cash_withdrawal"><i class="ti-email"></i><span>Withdrawal</span></a></li>
                <li><a href="cash_transfer"><i class="ti-comments"></i><span>Cash Transfer</span></a></li>
               <!--  <li><a href="app-contact.html"><i class="ti-id-badge"></i><span>Contact List</span></a></li>
                <li><a href="widgets.html"><i class="ti-widget"></i><span>Widgets</span></a></li> -->

                <li class="g_heading">Records</li>
                <?php if( $urole==1 || $urole==2){?>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-pie-chart"></i><span>Transactions</span></a>
                    <ul>
                        <li><a href="transaction_report">transaction_report</a></li>
                        <!-- <li><a href="chartsjs.html">Withdrawal</a></li> -->
                        li
                    </ul>
                </li><?php } ?>
               <!--  <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-view-list"></i><span>Tables</span></a>
                    <ul>
                        <li><a href="table-basic.html">Table Example</a></li>
                    </ul>
                </li> -->
               <!--  <li class="g_heading">Extra</li>
                <li class="open-top">
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-clipboard"></i><span>Pages</span></a>
                    <ul>
                        <li><a href="page-empty.html">Empty page</a></li>
                        <li><a href="page-pricing.html">Pricing cards</a>
                    </ul>
                </li>
                <li><a href="docs/introduction.html"><i class="ti-file"></i><span>Documentation</span></a></li> -->
            </ul>            
        </nav>
    </div>
