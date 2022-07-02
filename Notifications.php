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
       $u_blood = $row['bloodgrp'];
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
    <title>Notification</title>
    <link rel="stylesheet" href="css/Notification.css">
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
        </ul>

        <ul class="xyz">
        <li><a href="#">Notifications</a></li></>
        </ul>
            
        <ul>
            <li><a href="HistoryUser.php">History</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
       </ul >
       <ul class="logout">
         <li><a href="#" id="logout-btn" onclick=logoutClicked>Log Out</a></li>
       </ul>
    </nav>
    <!-- nev end-->

    <div class="asdf">
            <p><b>Notifications</b></p>
    </div>

    
<div class="col-md-6">
    <table class="table">
            <thead>
                <tr>
                <th scope="col">Request ID</th>
                <th scope="col">User ID</th>
                <th scope="col">Patien Name</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'connection.php';
                    $sql ="SELECT * FROM `request`";
                    $result =mysqli_query($con,$sql);
                    if($result)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                            
                            $r_id = $row['r_id'];
                            $r_u_id =$row['u_id'];
                            $p_name = $row['p_name'];
                            $p_blood = $row['p_blood'];
                            $address = $row['p_address'];
                            
                            if($r_u_id != $u_id )
                                echo '<tr>
                                <th scope="row">'.$r_id.'</th>
                                <td>'.$r_u_id.'</td>
                                <td>'.$p_name.'</td>
                                <td>'.$p_blood.'</td>
                                <td>'.$address.'</td>
                                </tr>';
                        }
                    }
                     
                ?>
        </tbody>
    </table>
</div>
        
    
    <script type="text/javascript" src="js/logout.js"></script>
</body>
</html>