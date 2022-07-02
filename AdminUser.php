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

    if($_SESSION['d_result'])
    {
     echo '<script type="text/javascript">';
     echo ' alert("Deleted successfully")';
     echo '</script>';
     $d_result = false;
     $_SESSION['d_result'] = $d_result;
    }
    if($_SESSION['r_result'])
    {
     echo '<script type="text/javascript">';
     echo ' alert("Update successfully")';
     echo '</script>';
     $d_result = false;
     $_SESSION['r_result'] = $d_result;
    }
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
    <title>User List</title>
    <link rel="stylesheet" href="css/AdminUser.css">
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
        <ul>
         <li><a href="ManageReq.php">Manage Req.</a></li>
        </ul>
        <ul class="xyz">
        <li><a href="AdminUser.php">User</a></li>
       </ul >
       <ul class="logout">
       <li><a href="AdminProfile.php">Admin</a></li>
         <li><a href="#" id="logout-btn" onclick=logoutClicked>Log Out</a></li>
       </ul>
    </nav>
    
    <!-- nev end-->

    <div class="asdf">
            <p><b>User List</b></p>
    </div>
     
<div>
    <table class="table">
            <thead>
                <tr>
                <th scope="col">User ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Weigh</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Last Donate Date</th>
                <th scope="col">Oparetion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'connection.php';
                    $sql ="SELECT * FROM `user`";
                    $result =mysqli_query($con,$sql);
                    if($result)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                            
                            $id = $row['id'];
                            $name =$row['name'];
                            $email = $row['email'];
                            $age = $row['age'];
                            $weigh = $row['weigh'];
                            $bloodgrp = $row['bloodgrp'];
                            $LDdate = $row['lastdonate'];
                            if($u_id != $id )
                                echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$age.'</td>
                                <td>'.$weigh.'</td>
                                <td>'.$bloodgrp.'</td>
                                <td>'.$LDdate.'</td>
                                <td>
                                    <button class="btn btn-primary"><a href="AdminupdateUserServer.php?deleteid='.$id.'" class="text-light">Update</a></button>
                                    <button class="btn btn-danger"><a href="AdmindeleteUserServer.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                                </td>
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