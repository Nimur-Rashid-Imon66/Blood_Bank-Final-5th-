<?php
   include 'connection.php';
   session_start();
   if(isset($_GET['deleteid'])){
       $id = $_GET['deleteid'];

       $sql = "DELETE FROM `user` WHERE id=$id";
       $result = mysqli_query($con,$sql);
       $_SESSION['d_result'] = $result;
       if($result)
       {
          header('location:AdminUser.php');
       }
       else
       {
        die(mysqli_error($con));
       }
   }


?>