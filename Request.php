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
        $u_id = $row['id'];
    }
    if(isset($_POST['submit']))
    {
        $p_name= $_POST['name'];
        $p_blood= $_POST['bloodgrp'];
        $add= $_POST['add'];
       
        $sql ="INSERT INTO `request`(`u_id`,`p_name`,`p_blood`,`p_address`) VALUES('$u_id','$p_name',' $p_blood','$add')";
        $r_result =mysqli_query($con,$sql);
        $_SESSION['r_result'] = $r_result;
        if($r_result)
        {
            sleep(2);
            header('location:Home.php');
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
    <title>Request</title>
    <link rel="stylesheet" href="css/Request.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
      
    <!-- nav start -->
    <div class="logo">
            <a href="Home.php"><img src="img/logo.png"></a>
    </div>
    <nav> 
        <ul>
            <li><a href="Home.php" >Home</a></li>
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
    <div class="container col-md-6">
         
        <form class="signup-form" method="post">
        <h4>Request For Blood</h4>
        <p>Please give your address and Blood Group you needed </p>
            <div class="form-group">
                <level><b>Patient name</b></level>
                <input type="text" id="name" class="form-control" name="name" placeholder="Enter patient name" autocomplete="off" required autofocus>
            </div>
            
            <div class="form-group">
                <level><b>Blood Group</b></level>
                <input class="form-control" type="text" name="bloodgrp" id="bloodgrp" placeholder="Enter Blood Group you needed" required autofocus>
            </div>

            <div class="form-group">
                <level><b>Address</b></level>
                <input class="form-control" type="box" name="add" id="add" placeholder="Enter Address"  required autofocus>
            </div>
            <button class="btn btn-lg btn-success" type="submit" name="submit">Submit</button>      
        </form>
    </div>
    
    <script type="text/javascript" src="js/logout.js"></script>
</body>
</html>