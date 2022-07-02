<?php
    session_start();
   include 'forgetpassServer.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="css/Forgetpass.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   

</head>
<body>
      
    <!-- nav start -->
    <div class="logo">
            <a href="Dashboard.php"><img src="img/logo.png"></a>
    </div>
    <nav> 
       <ul>
            <li><a href="Login.php">Log In</a></li>
       </ul>
    </nav>
    <!-- nev end-->
       
        <div class="card card-container">
            
            <form class="signup-form" method="post">
                <h4 >Forget Password</h4>
                <div class="form-group">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" id="inputEmail" class="form-control" name="email" 
                      placeholder="Enter email address" required autofocus>
                </div>

                <div class="form-group">
                    <level><b>Last blood donate date</b></level> 
                    <input type="date" id="lastdonate" class="form-control" name="LDdate"
                    autocomplete="off"placeholder="Enter Last Donate Date" required autofocus>
                </div>

                <div class="form-group">
                <input class="form-control" type="password" name="password" id="password"
                  autocomplete="off" placeholder="Enter a new password" required autofocus>
                </div>
                <span id="error" class="error"><?php echo $error; ?></span>

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit">Submit</button>
            </form>
        </div>
   
     

</body>
</html>

<!-- 
<?php

echo "Hello";

?> -->