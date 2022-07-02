<?php
  session_start();
  $_SESSION['email'] = false;
  $_SESSION['password'] = false;
  $_SESSION['d_result'] = false;
  $_SESSION['r_result'] = false;
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
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/Dashboard.css">
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
            <li><a href="Registration.php">Sign Up</a></li>
       </ul>
    </nav>
    <!-- nev end-->

    <div id="outer">
        <div id="Animation-slide">
            <img src="img/donar5.jpg">
            <img src="img/donar6.jpg">
            <img src="img/donar7.jpg">
            <img src="img/donar8.jpg">
        </div>
    </div>
    <div class="motivation">
        <h1> Give Blood Save Life</h1>
    </div>
    <br>
   <!-- <h1>Give Blood Save Life</h1> -->
</body>
</html>

<!-- 
<?php

echo "Hello";

?> -->