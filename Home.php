<?php

// include 'Home.php';
session_start();
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$d_result = $_SESSION['d_result'];
$r_result = $_SESSION['r_result'];

if($d_result)
{
    echo '<script type="text/javascript">';
    echo ' alert("Donate Request submit successfully")';
    echo '</script>';
    $d_result = false;
    $_SESSION['d_result'] = $d_result;
}
if($r_result)
{
    echo '<script type="text/javascript">';
    echo ' alert("Request for blood submit successfully")';
    echo '</script>';
    $r_result = false;
    $_SESSION['r_result'] = $r_result;
}

if($email=="nimur@gmail.com")
{
    header('location:ManageReq.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript"> 
        function preback(){window.history.forward();}
        setTimeout("preback()",0);
        window.onunload = function(){null};
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/Home.css">
    
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"> -->
    <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
</head>
<body>
      
    <!-- nav start -->
    <div class="logo">
            <a href="Home.php"><img src="img/logo.png"></a>
    </div>
    <nav> 
        <ul class="Home">
            <li><a href="#" >Home</a></li>
        </ul>
       <ul class="rest">
            <li><a href="Profile.php">Profile</a></li>
            <li><a href="Notifications.php">Notifications</a></li></>
            <li><a href="HistoryUser.php">History</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
       </ul >
       <ul class="logout">
         <li><a href="#" id="logout-btn" onclick=logoutClicked>Log Out</a></li>
       </ul>
    </nav>
    
    <!-- nev end-->

    <div class="card">
        <ul>
            <li><a href="Interested_in_Donate.php">Interseted for Donate</a></li>
            <li><a href="Request.php">Request for Blood</a></li>
        </ul>
    </div>
    
    <script type="text/javascript" src="js/logout.js"></script>
</body>
</html>


<!-- <?php
   if(isset($_POST['logout-btn'])){
     alert("Hello");
   } 
?>-->