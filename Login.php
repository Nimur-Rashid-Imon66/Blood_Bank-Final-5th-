<?php
session_start();
$d_result = $_SESSION['d_result'];
$r_result = $_SESSION['r_result'];
if($d_result)
{
    echo '<script type="text/javascript">';
    echo ' alert("Sign Up Completed...")';
    echo '</script>';
    $d_result = false;
    $_SESSION['d_result'] = $d_result;
}
if($r_result)
{
    echo '<script type="text/javascript">';
    echo ' alert("Password Reset Successfully...")';
    echo '</script>';
    $r_result = false;
    $_SESSION['r_result'] = $r_result;
}
$_SESSION['d_result'] = false;
$_SESSION['r_result'] = false;
?>

<?php
    include 'Loginserver.php';
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
    <title>Log In</title>
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script src="js/jquery-3.6.0.js"></script>
    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-ui.js"></script>  -->

</head>
<body>
      
    <!-- nav start -->
    <div class="logo">
            <a href="Dashboard.php"><img src="img/logo.png"></a>
    </div>
    <nav> 
       <ul>
            <li><a href="Registration.php">Sign Up</a></li>
       </ul>
    </nav>
    <!-- nev end-->
     
    <div class="container">
        <h3 >Log In</h3>
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <button class="btn btn-signin" type="submit" name="submit">Sign in</button>
            </form>

            <!-- Error message -->
            <span style="font-family:cursive; color:red;border-radius: 10px; background:#DFDDDC; text-align:center;"><?php echo $error; ?></span>
            <a href="Forgetpass.php" class="forgot-password">
              Forgot the password? 
            </a>
        </div>
    </div>/con
     <!-- /form -->
    
</body>
</html>


<!-- <?php
        $_SESSION['email'] = $email; 
        $_SESSION['password'] = $password;
    ?> -->