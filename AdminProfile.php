<?php
    session_start();
    include 'connection.php';
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $sql ="SELECT * FROM `user` WHERE `email` = '$email' AND `pass` = '$password'";
    $result =mysqli_query($con,$sql);
    if($result)
    {
        $row= mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $age = $row['age'];
        $weigh = $row['weigh'];
        $LDdate = $row['lastdonate'];
        $bloodgrp= $row['bloodgrp'];
        $password = $row['pass'];
    }
?>

<?php
    if(isset($_POST['update']))
    {
        $age=$_POST['age'];
        $weigh= $_POST['weigh'];
        $LDdate= $_POST['LDdate'];
        $password = $_POST['password'];
       
        $sql ="UPDATE `user` SET `age`='$age',`weigh`='$weigh',`lastdonate`='$LDdate',`pass`='$password' WHERE `email` = '$email'";
        $result =mysqli_query($con,$sql);
        if($result)
        {
            $_SESSION['password'] = $password;
            echo '<script type="text/javascript">';
            echo ' alert("Profile update successfully!!!")';
            echo '</script>';
        }
        else
        {
            die(mysqli_error($con));
        }
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
    <title>Admin Profile</title>
    <link rel="stylesheet" href="css/AdminProfile.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
      
    <!-- nav start -->
    <div class="logo">
            <a href="Home.php"><img src="img/logo.png"></a>
    </div>
    <nav> 
        <ul class="xyz">
            <li><a href="#">Profile</a></li>
        </ul>
        <ul >
             <li><a href="ManageReq.php">Manage Req.</a></li></>
            <li><a href="AdminUser.php">User</a></li>
       </ul >
       <ul class="logout">
       <li><a href="#">Admin</a></li>
         <li><a href="#" id="logout-btn" onclick=logoutClicked>Log Out</a></li>
       </ul>
    </nav>
    
    <!-- nev end-->
    <div class="container col-md-6">
         
        <form class="signup-form" method="post">
        <h3>Admin Profile</h3>
            <div class="form-group">
                <level><b>Name</b></level>
                <input type="text" id="name" class="form-control" name="name" value="<?php echo $name ?>" readonly>
            </div>
            <div class="form-group">
                <level><b>Email</b></level>
                <input type="email" id="inputEmail" class="form-control" name="email"value="<?php echo $email ?>"readonly>
            </div>
            
            <div class="form-group">
                <level><b>Blood Group</b></level>
                <input class="form-control" type="text" name="bloodgrp" id="bloodgrp" value="<?php echo $bloodgrp ?>"readonly>
            </div>

            <div class="form-group">
                <level><b>Age</b></level>
                <input type="number" id="age" class="form-control" name="age" value="<?php echo $age ?>">
            </div>
            <div class="form-group"> 
                <level><b>Weight</b></level>
                <input type="number" id="weigh" class="form-control" name="weigh" value="<?php echo $weigh ?>">
            </div>
            
            <div class="form-group"> 
                <level><b>Last Donate Date</b>(MM/DD/YYYY)</level>
                <input type="text" id="lastdonate" class="form-control" name="LDdate"value="<?php echo $LDdate ?>">
            </div>

            <div class="form-group">
                <level><b>Password</b></level>
                <input class="form-control" type="text" name="password" id="password" value="<?php echo $password ?>">
            </div>
            <button class="btn btn-lg btn-success" type="update" name="update">Update</button>      
        </form>
    </div>
    
    <script type="text/javascript" src="js/logout.js"></script>


</body>
</html>