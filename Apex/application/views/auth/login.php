<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

//Append identity and password arrays with design elements
$identity['class'] = "form-control";
$identity['placeholder'] = lang('login_identity_label');
$identity['autofocus'] = 'true';

$password['class'] = "form-control";
$password['placeholder'] = lang('login_password_label');

?>

<!doctype html>
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
    <style>
        
        /*Login & Resister BG*/
.login-register-bg {
  background-image: url(<?php echo base_url();?>assets/images/bg/login/<?php echo rand(1,9);?>.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  min-height: 100vh;
  height: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
        
    </style>
</head>

<body class="skin-dark">

    <div class="main-wrapper">

        <!-- Content Body Start -->
        <div class="content-body m-0 p-0">

            <div class="login-register-wrap">
                <div class="row">

                    <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                        <div class="login-register-form-wrap">

                            <div class="content">
                              
                                <h1><?php echo lang('login_heading');?></h1>
                                <p><?php echo lang('login_subheading');?></p>
                                <p id="infoMessage"><?php echo $message;?></p>
                            </div>

                            <div class="login-register-form">
                               <?php echo form_open("auth/login");?>
                                    <div class="row">
                                        
                                   
                                        
                                        <div class="col-12 mb-20"><?php echo form_input($identity);?></div>
                                        <div class="col-12 mb-20"><?php echo form_input($password);?></div>
                                        <div class="col-12 mb-20">
                                            <label for="remember" class="adomx-checkbox-2">
                                                
                                                  <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                                                <i class="icon"></i> <?php echo lang('login_remember_label', 'remember');?></label>
                                              
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-between">
                                                <div class="col-auto mb-15"><a href="#">Forgot Password?</a></div>
                                                <div class="col-auto mb-15">Dont have account? <a href="<?php echo base_url();?>auth/register">Create Now.</a></div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-10"><button class="button button-primary button-outline"><?php echo lang('login_submit_btn');?></button></div>
                                    </div>
                                </form>
                               
                            </div>
                        </div>
                    </div>

                    <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                        <div class="content">
                            <h1>Sign in</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- Content Body End -->

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

</body>

</html>
