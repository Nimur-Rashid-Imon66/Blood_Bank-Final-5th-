<?php
    session_start();
   include 'connection.php';
   if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $weigh= $_POST['weigh'];
    $LDdate= $_POST['LDdate'];
    $bloodgrp= $_POST['bloodgrp'];
    $password= $_POST['password'];
    $con_password= $_POST['con_password'];

     if($password == $con_password)
     {
         $sql ="INSERT INTO `user`(`name`, `email`, `age`, `weigh`,`lastdonate`, `bloodgrp`, `pass`) VALUES('$name','$email','$age','$weigh','$LDdate','$bloodgrp','$password')";
         $result =mysqli_query($con,$sql);
         $_SESSION['d_result'] = $result;
         if($result)
         {
            sleep(2);
            header('location:Login.php');
         }
        else{
            die(mysqli_error($con));
        }
        
         
     }
     else 
     {
        echo '<script type="text/javascript">';
        echo ' alert("Password and Confirm Password not matched")';
        echo '</script>';
     }
   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/Registration.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
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
    
    <div class="container col-md-6">
         
        <form class="signup-form" method="post">
        <h3>Sign Up</h3>
            <div class="form-group">
                <input type="text" id="name" class="form-control" name="name"
                   autocomplete="off" placeholder="Enter Name" required autofocus>
            </div>
            <div class="form-group">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" name="email" 
                  autocomplete="off"  placeholder="Enter email address" required autofocus>
            </div>
            <div class="form-group">
                <input type="number" id="age" class="form-control" name="age"
                  autocomplete="off" placeholder="Enter your age" required autofocus>
            </div>
            <div class="form-group"> 
                <input type="number" id="weigh" class="form-control" name="weigh"
                  autocomplete="off" placeholder="Enter your weigh" required autofocus>
            </div>
            
            <div class="form-group">
                <level><b>Last blood donate date</b></level> 
                <input type="date" id="lastdonate" class="form-control" name="LDdate"
                  autocomplete="off"placeholder="Enter Last Donate Date" required autofocus>
            </div>
            
            <div class="form-group">
                <input class="form-control" type="text" name="bloodgrp" id="bloodgrp"
                  autocomplete="off" placeholder="Enter your blood group" required autofocus>
            </div>

            <div class="form-group">
                <input class="form-control" type="password" name="password" id="password"
                  autocomplete="off" placeholder="Enter a password" required autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="con_password" id="con_password"
                  autocomplete="off" placeholder="Enter confirm password" required autofocus>
            </div>
            <!-- <div class="form-group">
                <input class="form-control" type="file" name="propic" id="propic"
                  autocomplete="off" placeholder="Drop a Profile Picture" required autofocus>
            </div>       -->
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit">Sign in</button>
        </form>
    </div>

</body>
</html>

<!-- 
<?php

echo "Hello";

?> -->