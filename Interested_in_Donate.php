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
        $name = $row['name'];
        $email = $row['email'];
        $age = $row['age'];
        $weigh = $row['weigh'];
        $LDdate = $row['lastdonate'];
        $bloodgrp= $row['bloodgrp'];
    }
    mysqli_close($con);
?>
<?php
    include 'connection.php';
    if(isset($_POST['submit']))
    {
        $weigh= $_POST['weigh'];
        $add= $_POST['add'];
       
        $sql ="INSERT INTO `donate`(`u_id`,`d_name`,`d_email`,`d_blood`,`last_d_date`,`age`,`weigh`,`address`) VALUES('$u_id','$name','$email','$bloodgrp','$LDdate','$age','$weigh','$add')";
        $d_result =mysqli_query($con,$sql);
        $_SESSION['d_result'] = $d_result;
        if($d_result)
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
    <title>Donate</title>
    <link rel="stylesheet" href="css/Interest_for_donate.css">
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
        <h4>Are you want to donate blood?</h4>
        <p>Please give your address and current weigh </p>
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
                <level><b>Last Donate Date</b>(MM/DD/YYYY)</level>
                <input type="text" id="lastdonate" class="form-control" name="LDdate"value="<?php echo $LDdate ?>"readonly>
            </div>

            <div class="form-group"> 
                <level><b>Weight</b></level>
                <input type="number" id="weigh" class="form-control" name="weigh" value="<?php echo $weigh ?>">
            </div>

            <div class="form-group">
                <level><b>Address</b></level>
                <input class="form-control" type="box" name="add" id="add" placeholder="Enter Address" autocomplete="off" required autofocus>
            </div>
            <button class="btn btn-lg btn-success" type="submit" name="submit">Submit</button>      
        </form>
    </div>
    
    <script type="text/javascript" src="js/logout.js"></script>
</body>
</html>