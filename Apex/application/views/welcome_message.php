<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adomx - Responsive Bootstrap 4 Admin Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

</head>

<body class="skin-dark">

    <div class="main-wrapper">


        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="index.html">
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

                                        <div class="header-search">

                                            <button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

                                            <div class="header-search-form">
                                                <form action="#">
                                                    <input type="text" placeholder="Search Here">
                                                    <button><i class="zmdi zmdi-search"></i></button>
                                                </form>
                                                <button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
                                            </div>

                                        </div>
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
                                            <li><a href="#"><img src="<?php echo base_url();?>assets/images/flags/flag-2.jpg" alt=""> Japanese</a></li>
                                            <li><a href="#"><img src="<?php echo base_url();?>assets/images/flags/flag-3.jpg" alt=""> Spanish </a></li>
                                            <li><a href="#"><img src="<?php echo base_url();?>assets/images/flags/flag-4.jpg" alt=""> Germany</a></li>
                                        </ul>

                                    </li>

                                    <!--Mail-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-email-open"></i><span class="badge"></span></a>

                                        <!-- Dropdown -->
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

                                    </li>

                                    <!--Notification-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-notifications"></i><span class="badge"></span></a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-notifications">
                                            <div class="head">
                                                <h5 class="title">You have 4 new notification.</h5>
                                            </div>
                                            <div class="body custom-scroll">
                                                <ul>
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
                                                    </li>
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
                                            <span class="name">Madison Howard</span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#">Madison Howard</a></h5>
                                                <a class="mail" href="#">mailnam@mail.com</a>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-account"></i>Profile</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-email-open"></i>Inbox</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-wallpaper"></i>Activity</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-settings"></i>Setting</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-lock-open"></i>Sing out</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-paypal"></i>Payment</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-google-pages"></i>Invoice</a></li>
                                                </ul>
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
                        <li class="has-sub-menu"><a href="#"><i class="ti-home"></i> <span>Dashboard</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="index.html"><span>E-commerce (Default)</span></a></li>
                                <li><a href="index-crypto.html"><span>Cryptocurrency</span></a></li>
                            </ul>
                        </li>
                        <li><a href="widgets.html"><i class="ti-palette"></i> <span>Widgets</span></a></li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>Basic Elements</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="elements-alerts.html"><span>Alerts</span></a></li>
                                <li><a href="elements-accordions.html"><span>Accordions</span></a></li>
                                <li><a href="elements-avatar.html"><span>Avatar</span></a></li>
                                <li><a href="elements-badge.html"><span>Badge</span></a></li>
                                <li><a href="elements-buttons.html"><span>Buttons</span></a></li>
                                <li><a href="elements-carousel.html"><span>Carousel</span></a></li>
                                <li><a href="elements-dropdown.html"><span>Dropdown</span></a></li>
                                <li><a href="elements-list-group.html"><span>List Group</span></a></li>
                                <li><a href="elements-media.html"><span>Media</span></a></li>
                                <li><a href="elements-modal.html"><span>Modal</span></a></li>
                                <li><a href="elements-pagination.html"><span>Pagination</span></a></li>
                                <li><a href="elements-progress.html"><span>Progress Bar</span></a></li>
                                <li><a href="elements-spinners.html"><span>Spinners</span></a></li>
                                <li><a href="elements-tabs.html"><span>Tabs</span></a></li>
                                <li><a href="elements-tooltip.html"><span>Tooltip</span></a></li>
                                <li><a href="elements-typography.html"><span>Typography</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-crown"></i> <span>Advance Elements</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="elements-clipboard.html"><span>Clipboard</span></a></li>
                                <li><a href="elements-fullcalendar.html"><span>Full Calendar</span></a></li>
                                <li><a href="elements-media-player.html"><span>Media Player</span></a></li>
                                <li><a href="elements-sortable.html"><span>Sortable (Drag&Drop)</span></a></li>
                                <li><a href="elements-toastr.html"><span>Toastr</span></a></li>
                                <li><a href="elements-rating.html"><span>Rating</span></a></li>
                                <li><a href="elements-sweetalert.html"><span>Sweet Alert</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-stamp"></i> <span>Icons</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="icons-cryptocurrency.html"><span>Cryptocurrency</span></a></li>
                                <li><a href="icons-fontawesome.html"><span>Font Awesome</span></a></li>
                                <li><a href="icons-material.html"><span>Material Icon</span></a></li>
                                <li><a href="icons-themify.html"><span>Themify Icon</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-notepad"></i> <span>Forms</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="form-basic-elements.html"><span>Basic Elements</span></a></li>
                                <li><a href="form-checkbox.html"><span>Checkbox</span></a></li>
                                <li><a href="form-date-mask.html"><span>Date & Mask</span></a></li>
                                <li><a href="form-editor.html"><span>Editor</span></a></li>
                                <li><a href="form-file-upload.html"><span>File Upload</span></a></li>
                                <li><a href="form-layout.html"><span>Layout</span></a></li>
                                <li><a href="form-radio.html"><span>Radio</span></a></li>
                                <li><a href="form-range-slider.html"><span>Range Slider</span></a></li>
                                <li><a href="form-selects.html"><span>Selects</span></a></li>
                                <li><a href="form-switchers.html"><span>Switchers</span></a></li>
                                <li><a href="form-wizard.html"><span>Wizard</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-layout"></i> <span>Table</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="table-basic.html"><span>Basic</span></a></li>
                                <li><a href="table-data-table.html"><span>Data Table</span></a></li>
                                <li><a href="table-footable.html"><span>Footable</span></a></li>
                                <li><a href="table-jsgrid.html"><span>Jsgrid</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-pie-chart"></i> <span>Charts</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="chart-chartjs.html"><span>ChartJs</span></a></li>
                                <li><a href="chart-echarts.html"><span>Echarts</span></a></li>
                                <li><a href="chart-google.html"><span>Google Chart</span></a></li>
                                <li><a href="chart-morris.html"><span>Morris  Chart</span></a></li>
                                <li><a href="chart-sparkline.html"><span>Sparkline  Chart</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-map"></i> <span>Maps</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="map-vector.html"><span>Vector Map</span></a></li>
                                <li><a href="map-google.html"><span>Google Map</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-shopping-cart"></i> <span>E-commerce</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="add-product.html"><span>Add Product</span></a></li>
                                <li><a href="edit-product.html"><span>Edit Product</span></a></li>
                                <li><a href="invoice-list.html"><span>Invoice List</span></a></li>
                                <li><a href="invoice-details.html"><span>Invoice Details</span></a></li>
                                <li><a href="order-list.html"><span>Order List</span></a></li>
                                <li><a href="order-details.html"><span>Order Details</span></a></li>
                                <li><a href="manage-products.html"><span>Manage Products</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-gift"></i> <span>Apps</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="chat.html"><span>Chat</span></a></li>
                                <li><a href="mail.html"><span>Mail</span></a></li>
                                <li><a href="single-mail.html"><span>Single Mail</span></a></li>
                                <li><a href="todo-list.html"><span>Todo List</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-lock"></i> <span>Authentication</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="login.html"><span>login</span></a></li>
                                <li><a href="register.html"><span>register</span></a></li>
                                <li><a href="author-profile.html"><span>Profile</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-layers"></i> <span>Pages</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="blank.html"><span>Blank</span></a></li>
                                <li><a href="timeline.html"><span>Timeline</span></a></li>
                                <li><a href="pricing.html"><span>Pricing</span></a></li>
                                <li><a href="error-1.html"><span>error-1</span></a></li>
                                <li><a href="error-2.html"><span>error-2</span></a></li>
                            </ul>
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
                        <h3>Dashboard <span>/ Cryptocurrency</span></h3>
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
                            <h4>Bitcoin Rate</h4>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h2>15,752.00</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 92%;"></div>
                            </div>
                            <p>BTC (USD) = $6,316.88 (-0.54%)</p>
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
                            <h4>Ethereum Rate</h4>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h2>7,400.00</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 98%;"></div>
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
                            <h4>Ripple Rate</h4>
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
                            <h4>Monero Rate</h4>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h2>4,000.00</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 76%;"></div>
                            </div>
                            <p>XMR (USD) = $09.271 (+2.07%)</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->
            </div><!-- Top Report Wrap End -->

            <div class="row mbn-30">

                <!-- Revenue Statistics Chart Start -->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Revenue Statistics</h4>
                        </div>
                        <div class="box-body">

                            <div class="chart-legends-1 row">
                                <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                                    <h5>Bitcoin</h5>
                                    <h3 class="text-secondary">$15,752.00</h3>
                                </div>
                                <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                                    <h5>Ethereum</h5>
                                    <h3 class="text-primary">$7,400.00</h3>
                                </div>
                                <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                                    <h5>Ripple</h5>
                                    <h3 class="text-warning">5,000.00</h3>
                                </div>
                                <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                                    <h5>Monero</h5>
                                    <h3 class="text-info">4,000.00</h3>
                                </div>
                            </div>

                            <div class="chartjs-revenue-statistics-chart-2">
                                <canvas id="chartjs-revenue-statistics-chart-2"></canvas>
                            </div>

                        </div>
                    </div>
                </div><!-- Revenue Statistics Chart End -->

                <!-- Market Trends Chart Start -->
                <div class="col-xlg-4 col-lg-6 col-md-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Market Trends</h4>
                        </div>
                        <div class="box-body">
                            <span class="h5 m-0">Report of Currency</span>
                            <h3 class="mb-20">Dashboard Report</h3>

                            <div class="chartjs-market-trends-chart-2">
                                <canvas id="chartjs-market-trends-chart-2"></canvas>
                            </div>
                        </div>
                    </div>
                </div><!-- Market Trends Chart End -->

                <!-- Analytics Chart Start -->
                <div class="col-xlg-4 col-lg-6 col-md-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Analytics</h4>
                        </div>
                        <div class="box-body">
                            <span class="h5 m-0">Report of Currency</span>
                            <h3 class="mb-20">Dashboard Report</h3>

                            <div class="chartjs-analytics-chart">
                                <canvas id="chartjs-analytics-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div><!-- Analytics Chart End -->

                <!-- Graph Chart Start -->
                <div class="col-xlg-4 col-lg-6 col-md-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Graph</h4>
                        </div>
                        <div class="box-body">
                            <span class="h5 m-0">Rate/usd</span>
                            <h3 class="mb-20">Currency Conversion</h3>

                            <div class="chartjs-graph-chart">
                                <canvas id="chartjs-graph-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div><!-- Graph Chart End -->

                <!-- News & Updates Start -->
                <div class="col-xlg-5 col-lg-6 col-12 mb-30">
                    <!-- News & Updates Wrap Start -->
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">News & Updates</h4>
                        </div>
                        <div class="box-body">
                            <!-- News & Updates Inner Start -->
                            <div class="news-update-inner">

                                <!-- News Item -->
                                <div class="news-item">

                                    <!-- Content -->
                                    <div class="content">
                                        <!-- Category -->
                                        <div class="categories">
                                            <a href="#" class="new">New</a>
                                            <a href="#" class="product">Product</a>
                                        </div>
                                        <!-- Title -->
                                        <h4 class="title"><a href="#">Sed do eiusmod tempor incididunt ut labore. Lorem Ipsum is simplydummy text of the printing and typesetting industry.</a></h4>
                                        <!-- Meta -->
                                        <ul class="meta">
                                            <li><i class="zmdi zmdi-time"></i>10 Houre ago</li>
                                            <li>By: <a href="#">Howard</a></li>
                                        </ul>
                                    </div>

                                </div>

                                <!-- News Item -->
                                <div class="news-item">

                                    <!-- Content -->
                                    <div class="content">
                                        <!-- Category -->
                                        <div class="categories">
                                            <a href="#" class="support">Support</a>
                                        </div>
                                        <!-- Title -->
                                        <h4 class="title"><a href="#">Sed do eiusmod tempor labore. Lorem Ipsum is simplydummy text of the printing and.</a></h4>
                                        <!-- Meta -->
                                        <ul class="meta">
                                            <li><i class="zmdi zmdi-time"></i>10 Houre ago</li>
                                            <li>By: <a href="#">Aaron</a></li>
                                        </ul>
                                    </div>

                                </div>

                                <!-- News Item -->
                                <div class="news-item">

                                    <!-- Content -->
                                    <div class="content">
                                        <!-- Category -->
                                        <div class="categories">
                                            <a href="#" class="refund">Refund</a>
                                        </div>
                                        <!-- Title -->
                                        <h4 class="title"><a href="#">Sed do eiusmod typesetting industry. Lorem Ipsum is simplydummy text of the printing and typesetting industry.</a></h4>
                                        <!-- Meta -->
                                        <ul class="meta">
                                            <li><i class="zmdi zmdi-time"></i>10 Houre ago</li>
                                            <li>By: <a href="#">Dylan</a></li>
                                        </ul>
                                    </div>

                                </div>

                            </div><!-- News & Updates Inner End -->
                        </div>
                    </div><!-- News & Updates Wrap End -->
                </div><!-- News & Updates End -->

                <!-- Top Selling Country Start -->
                <div class="col-xlg-7 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Top Selling Country</h4>
                        </div>
                        <div class="box-body">
                            <div id="vmap-world-2" class="vmap vmap-world-2"></div>
                        </div>
                    </div>
                </div><!-- Top Selling Country End -->

                <!-- Recent Transaction Start -->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Recent Transaction</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-selectable table-vertical-middle">

                                    <!-- Table Head Start -->
                                    <thead>
                                        <tr>
                                            <th><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></th>
                                            <th><span>Date</span></th>
                                            <th><span>Type</span></th>
                                            <th><span>Amount</span></th>
                                            <th><span>Remaining</span></th>
                                            <th><span>Pricing</span></th>
                                            <th><span>USD</span></th>
                                            <th><span>Fees(%)</span></th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead><!-- Table Head End -->

                                    <!-- Table Body Start -->
                                    <tbody>
                                        <tr>
                                            <td><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                            <td><span>13 April 2019</span></td>
                                            <td><span>Sell</span></td>
                                            <td><span>7520.11</span></td>
                                            <td><span>0.1256</span></td>
                                            <td><span>1124.55</span></td>
                                            <td><span>7520.11</span></td>
                                            <td><span>89%</span></td>
                                            <td><span class="badge badge-success">Paid</span></td>
                                            <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                            <td><span>01 May 2019</span></td>
                                            <td><span>Due</span></td>
                                            <td><span>8533.00</span></td>
                                            <td><span>0.2254</span></td>
                                            <td><span>1254.33</span></td>
                                            <td><span>8533.00</span></td>
                                            <td><span>50%</span></td>
                                            <td><span class="badge badge-warning">Due</span></td>
                                            <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                        </tr>
                                        <tr class="selected">
                                            <td><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                            <td><span>17 May 2019</span></td>
                                            <td><span>Sell</span></td>
                                            <td><span>5533.00</span></td>
                                            <td><span>0.2366</span></td>
                                            <td><span>3255.22</span></td>
                                            <td><span>6533.00</span></td>
                                            <td><span>64%</span></td>
                                            <td><span class="badge badge-success">Paid</span></td>
                                            <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                            <td><span>21 May 2019</span></td>
                                            <td><span>Sell</span></td>
                                            <td><span>9322.22</span></td>
                                            <td><span>0.7786</span></td>
                                            <td><span>3266.96</span></td>
                                            <td><span>9322.22</span></td>
                                            <td><span>55%</span></td>
                                            <td><span class="badge badge-danger">Reject</span></td>
                                            <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
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