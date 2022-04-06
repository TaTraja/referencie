<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>APEX Future [Verification successful] </title>
    <style>body{
    background-color: #161824;
    font-family: Arial, Helvetica, sans-serif;
}

.container{
  max-width: 680px;
  width: 100%;
  margin: auto;
}

.main{
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    color: white; 
}

.body h2{
    font-weight: 300;
    color: white;
}

.logo{
    width: 150px;
    padding: 5px 5px;
}

.header-img{
    max-width: 100% !important;
    height: auto !important;
    width: 100%;
}

a{
    text-decoration: underline; 
    color: #0c99d5; 
}


.body{
    padding: 20px;
    background-color: #202438;
    font-family: Geneva, Tahoma, Verdana, sans-serif; 
    font-size: 16px; 
    line-height: 22px; 
    color: white; 
}

button{
    background-color: #2e376b;
    border: none;
    color: white;
    border-radius: 2px;
    height: 50px;
    max-width: 250px;
   padding: 0px 30px;
    font-weight: 500;
    font-family: Geneva, Tahoma, Verdana, sans-serif; 
    font-size: 16px;
    margin: 10px 0px 30px 0px;
}

footer{
    padding-top: 50px;
    font-family: Geneva, Tahoma, Verdana, sans-serif; 
    font-size: 14px; 
    line-height: 18px; 
    color: #738597;
    text-align: center;
}

footer img{
    width: 100px;
    margin: 24px 0px;
}
</style>
</head>

<body>


    <main class="container">
        <div class="logo">
                <img src="assets\images\logo\logo-light.png" class="logo">
        </div>
        
        

        <div class="body">
            <h2>Verification successful</h2>
            
            <p> Dear <?php echo $user->username;?>,
            <br> Your account was verified.</p>
            <p>Do you want to continue to Dashboard?</p>
            <a href= 'dashboard'><button>Dashboard</button></a><br> 

            <i>Team APEX Future</i><br>
            <i>We are looking forward to work with you</i>
        </div>

    </main>

    <footer class="container">
        
        <p>You received this email because you are now registered on APEX Future as a member.</p>
    
        <p>You can also <a href="<?php echo base_url();?>auth/forgot_password">RESET YOUR PASSWORD</a> at anytime.</p>
        
        <div>
            <p>APEXFuture 2021</p>
            
        </div>

    </footer>

</div>

    
</body>

</html>