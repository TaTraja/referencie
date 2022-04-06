<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>APEX Future - Dashboard</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicon.ico">

    <!-- CSS ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-indigo.css">

</head>

<body class="skin-dark">

    <div class="main-wrapper">


        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="<?php echo base_url();?>">
                            <img src="<?php echo base_url();?>assets/images/logo/logo.png" alt="">
                            <img src="<?php echo base_url();?>assets/images/logo/logo-light.png" class="logo-light" alt="">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                    <!--Header Search-->
                                    <div class="col-auto">

<!--                                        <div class="header-search">

                                            <button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

                                            <div class="header-search-form">
                                                <form action="#">
                                                    <input type="text" placeholder="Search Here">
                                                    <button><i class="zmdi zmdi-search"></i></button>
                                                </form>
                                                <button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
                                            </div>

                                        </div>-->
                                    </div>

                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">

                                    <!--Language-->
                                    <li class="adomx-dropdown position-relative col-auto">
                                        <a class="toggle" href="#"><img class="lang-flag" src="<?php echo base_url();?>assets/images/flags/flag-1.jpg" alt=""><i class="zmdi zmdi-caret-down drop-arrow"></i></a>

                                        <!-- Dropdown -->
                                        <ul class="adomx-dropdown-menu dropdown-menu-language">
                                            <li><a href="#"><img src="<?php echo base_url();?>assets/images/flags/flag-1.jpg" alt=""> English</a></li>
                                            <li><a href="#"><img src="<?php echo base_url();?>assets/images/flags/flag-2.jpg" alt=""> Slovak</a></li>
                                            <li><a href="#"><img src="<?php echo base_url();?>assets/images/flags/flag-3.jpg" alt=""> Czech </a></li>
                                            
                                        </ul>

                                    </li>

                                    <!--Mail-->
<!--                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-email-open"></i><span class="badge"></span></a>

                                         Dropdown 
                                        <div class="adomx-dropdown-menu dropdown-menu-mail">
                                            <div class="head">
                                                <h4 class="title">You have 3 new mail.</h4>
                                            </div>
                                            <div class="body custom-scroll">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="<?php echo base_url();?>assets/images/avatar/avatar-2.jpg" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: New Account</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="<?php echo base_url();?>assets/images/avatar/avatar-1.jpg" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: Mail Support</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="<?php echo base_url();?>assets/images/avatar/avatar-2.jpg" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: Product inquiry</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="<?php echo base_url();?>assets/images/avatar/avatar-1.jpg" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: Mail Support</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>-->

                                    <!--Notification-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-notifications"></i><span class="badge"></span></a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-notifications">
                                            <div class="head">
                                                <h5 class="title">You have 1 new notification.</h5>
                                            </div>
                                            <div class="body custom-scroll">
                                                <ul>
<!--                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-notifications-none"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-block"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>-->
                                                    <li>
                                                        <a href="<?php echo base_url();?>">
                                                            <i class="zmdi zmdi-info-outline"></i>
                                                            <p>Your account was verified. Please, select from Products to continue.</p>
                                                            <span><?php echo date("h:i a");?>   Today</span>
                                                        </a>
                                                        <!--<button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>-->
                                                    </li>
<!--                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-shield-security"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-notifications-none"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-block"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-info-outline"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-shield-security"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>-->
                                                </ul>
                                            </div>
                                            <div class="footer">
                                                <a href="#" class="view-all">view all</a>
                                            </div>
                                        </div>

                                    </li>

                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <img src="<?php echo base_url();?>assets/images/avatar/avatar-1.jpg" alt="">
                                            <span class="status"></span>
                                            </span>
                                            <span class="name"><?php echo $user->username;?></span>
                                            
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#"><?php echo $user->username;?></a></h5>
                                                <a class="mail" href="#"><?php echo $user->email;?></a>
                                            </div>
                                            <div class="body">
<!--                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-account"></i>Profile</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-email-open"></i>Inbox</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-wallpaper"></i>Activity</a></li>
                                                </ul>-->
                                                <ul>
                                                    <!--<li><a href="#"><i class="zmdi zmdi-settings"></i>Setting</a></li>-->
                                                    <li><a href="<?php echo base_url();?>auth/logout"><i class="zmdi zmdi-lock-open"></i>Sing out</a></li>
                                                </ul>
<!--                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-paypal"></i>Payment</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-google-pages"></i>Invoice</a></li>
                                                </ul>-->
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->
        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                     <li><a href="<?php echo base_url();?>dashboard"><i class="ti-pie-chart"></i> <span>Dashboard</span></a></li>
                     <li class="has-sub-menu"><a href="#"><i class="ti-wallet"></i> <span>Finance</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="<?php echo base_url();?>finance/deposit"><span>Deposit</span></a></li>
                                <li><a href="<?php echo base_url();?>finance/withdrawal"><span>Withdrawal</span></a></li>
                            </ul>
                        </li>
                     <li class="has-sub-menu"><a href="<?php echo base_url();?>"><i class="ti-package"></i> <span>Products</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="<?php echo base_url();?>products/passive-safety"><span>Passive safety</span></a></li>
                                <li><a href="<?php echo base_url();?>products/hybrid"><span>Hybrid</span></a></li>
                                <!--<li><a href="<?php // echo base_url();?>/products/crypto_savings"><span>Crypto savings</span></a></li>-->
                                
                            </ul>
                        </li>
                        
                     <li class="has-sub-menu"><a href="#"><i class="ti-user"></i> <span>Account</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="verify"><span>Verify</span><?php if (intval($user->verified)) { ?> <span class="badge badge-outline badge-success">Verified</span><?php } ?></a></li>
                                <li><a href="reset_password"><span>Reset password</span></a></li>
                                <li><a href="settings_user"><span>Settings</span></a></li>
                                
                            </ul>
                        </li>
                        
                    <li class="has-sub-menu"><a href="#"><i class="ti-email"></i> <span>Support</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="contact_support"><span>Contact Support</span></a></li>
                                <li><a href="faq"><span>FAQ</span></a></li>
                            </ul>
                        </li>
                        
                        <li><a href="log_out"><i class="ti-power-off"></i> <span>Log out</span></a>
                        </li>
                        
                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->

        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Dashboard   </h3>
                    </div>
                </div><!-- Page Heading End -->

                <!-- Page Button Group Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-date-range">
                        <input type="text" class="form-control input-date-predefined">
                    </div>
                </div><!-- Page Button Group End -->

            </div><!-- Page Headings End -->

            <!-- Top Report Wrap Start -->
            <div class="row">
                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="top-report top-report-2">

                        <!-- Icon -->
                        <div class="icon"><img src="<?php echo base_url();?>assets/images/icons/cryptocurrency-top-sale-report-1.png" alt=""></div>

                        <!-- Head -->
                        <div class="head">
                            <h4>Passive Safety</h4>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h2>15,752.69</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 92%;"></div>
                            </div>
                            <p>Date: 01/01/2020-01/01/2021 </p>
                        </div>

                    </div>
                </div><!-- Top Report End -->

                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="top-report top-report-2">

                        <!-- Icon -->
                        <div class="icon"><img src="<?php echo base_url();?>assets/images/icons/cryptocurrency-top-sale-report-2.png" alt=""></div>

                        <!-- Head -->
                        <div class="head">
                            <h4>Hybrid</h4>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h2>7,400.00</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 69%;"></div>
                            </div>
                            <p>ETH (USD) = $149.25 (-12.24%)</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->

                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="top-report top-report-2">

                        <!-- Icon -->
                        <div class="icon"><img src="<?php echo base_url();?>assets/images/icons/cryptocurrency-top-sale-report-3.png" alt=""></div>

                        <!-- Head -->
                        <div class="head">
                            <h4>Crypto savings</h4>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h2>5,000.00</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 88%;"></div>
                            </div>
                            <p>XRP (USD) = $0.4921 (-1.01%)</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->

                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="top-report top-report-2">

                        <!-- Icon -->
                        <div class="icon"><img src="<?php echo base_url();?>assets/images/icons/cryptocurrency-top-sale-report-4.png" alt=""></div>

                        <!-- Head -->
                        <div class="head">
                            <h4>Affiliate</h4>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h2>4,000.00</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 10%;"></div>
                            </div>
                            <p>XMR (USD) = $09.271 (+2.07%)</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->
            </div><!-- Top Report Wrap End -->

            <div class="row mbn-30">

                <!-- Revenue Statistics Chart Start -->
<!--                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Revenue Statistics</h4>
                        </div>
                        <div class="box-body">

                            <div class="chart-legends-1 row">
                                <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                                    <h5>Passive safety</h5>
                                    <h3 class="text-secondary">$15,752.00</h3>
                                </div>
                                <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                                    <h5>Hybrid</h5>
                                    <h3 class="text-primary">$7,400.00</h3>
                                </div>
                                <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                                    <h5>Crypto savings</h5>
                                    <h3 class="text-warning">5,000.00</h3>
                                </div>
                                <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                                    <h5>Affiliate</h5>
                                    <h3 class="text-info">4,000.00</h3>
                                </div>
                            </div>

                            <div class="chartjs-revenue-statistics-chart-2">
                                <canvas id="chartjs-revenue-statistics-chart-2"></canvas>
                            </div>

                        </div>
                    </div>
                </div>-->
                <!-- Revenue Statistics Chart End -->

<!--                 Top Selling Country Start 
                <div class="col-xlg-7 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Top Selling Country</h4>
                        </div>
                        <div class="box-body">
                            <div id="vmap-world-2" class="vmap vmap-world-2"></div>
                        </div>
                    </div>
                </div> Top Selling Country End 

                 Recent Transaction Start -->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Transaction History</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-selectable table-vertical-middle">

                                    <!-- Table Head Start -->
                                    <thead>
                                        <tr>
                                            
                                            <th><span>Date</span></th>
                                            <th><span>Type</span></th>
                                            <th><span>Amount</span></th>
                                            <th><span>Remaining</span></th>
                                            <th><span>Pricing</span></th>
                                            <th><span>USD</span></th>
                                            <th><span>Fees(%)</span></th>
                                            <th>Status</th>
                                           
                                        </tr>
                                    </thead><!-- Table Head End -->

                                    <!-- Table Body Start -->
                                    <tbody>
                                        <tr>
                                        
                                            <td><span>13 April 2019</span></td>
                                            <td><span>Sell</span></td>
                                            <td><span>7520.11</span></td>
                                            <td><span>0.1256</span></td>
                                            <td><span>1124.55</span></td>
                                            <td><span>7520.11</span></td>
                                            <td><span>89%</span></td>
                                            <td><span class="badge badge-success">Paid</span></td>
                                           
                                        </tr>
                                        
                                       
                                    </tbody><!-- Table Body End -->

                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- Recent Transaction End -->

            </div>

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2019 &copy; <a href="https://themeforest.net/user/codecarnival">Codecarnival</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="<?php echo base_url();?>assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="<?php echo base_url();?>assets/js/plugins/moment/moment.min.js"></script>

    <!--Daterange Picker-->
    <script src="<?php echo base_url();?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

    <!--Echarts-->
    <script src="<?php echo base_url();?>assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/chartjs/chartjs.active.js"></script>

    <!--VMap-->
    <script src="<?php echo base_url();?>assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/vmap/vmap.active.js"></script>

</body>

</html>
