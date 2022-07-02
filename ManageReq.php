<?php
   session_start();
   include 'connection.php';
   $email = $_SESSION['email'];
   $password = $_SESSION['password'];
   if($_SESSION['d_result'])
   {
    echo '<script type="text/javascript">';
    echo ' alert("Resquest Deleted successfully")';
    echo '</script>';
    $d_result = false;
    $_SESSION['d_result'] = $d_result;
   }
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
    <title>History</title>
    <link rel="stylesheet" href="css/HistoryUser.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
      
    <!-- nav start -->
    <div class="logo">
            <a href="Home.php"><img src="img/logo.png"></a>
    </div>
    <nav> 
        <ul class="abc">
            <li><a href="AdminProfile.php">Profile</a></li>
        </ul>
        <ul class="xyz">
             <li><a href="#">Manage Req.</a></li></>
       </ul >
       <ul>
            <li><a href="AdminUser.php">User</a></li>
       </ul>
       <ul class="logout">
       <li><a href="AdminProfile.php">Admin</a></li>
         <li><a href="#" id="logout-btn" onclick=logoutClicked>Log Out</a></li>
       </ul>
    </nav>
    <!-- nev end-->

    <div class="asdf">
            <p><b>History of all kind of Requests</b></p>
    </div>

    
<div class="tbl">
    <table class="table">
            <thead>
                <tr>
                <th scope="col">Delete this request?</th>
                <th scope="col">Request ID</th>
                <th scope="col">Type</th>
                <th scope="col">Patien/Donater Name</th>
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
                            
                           
                                echo '<tr>
                                <td><button class="btn btn-danger"><a href="deleteReq.php?deleteid='.$r_id.'" class="text-light">Delete</a></button></td>
                                <th scope="row">'.$r_id.'</th>
                                <td>Request</td>
                                <td>'.$p_name.' (Patien)</td>
                                <td>'.$p_blood.'</td>
                                <td>'.$address.'</td>
                                </tr>';
                    }
                }
                     
                ?>
                <?php
                    $sql ="SELECT * FROM `donate`";
                    $result =mysqli_query($con,$sql);
                    if($result)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                            
                            $r_id = $row['d_id'];
                            $r_u_id = $row['u_id'];
                            $d_name = $row['d_name'];
                            $d_blood = $row['d_blood'];
                            $address = $row['address'];
                            
                           
                                echo '<tr>
                                <td><button class="btn btn-danger"><a href="deleteInst.php?deleteid='.$r_id.'" class="text-light">Delete</a></button></td>
                                <th scope="row">'.$r_id.'</th>
                                <td>Interested</td>
                                <td>'.$d_name.' (Donater)</td>
                                <td>'.$d_blood.'</td>
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