<?php
   
   $con =new mysqli('localhost','root','','bloodbank') ;

   if(!$con)
   {
    die(mysqli_error($con));
   }
?>