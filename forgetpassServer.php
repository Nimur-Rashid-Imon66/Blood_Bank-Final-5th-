<?php
    include 'connection.php';
    $error = '';
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password= $_POST['password'];
        $LDdate = $_POST['LDdate'];

        //Updating
        $sql ="UPDATE `user` SET `pass`='$password' WHERE `email`='$email' AND `lastdonate`='$LDdate'";
        $result =mysqli_query($con,$sql);
        
        //Checking it is successful or not
        $sql ="SELECT * FROM `user` WHERE `email` = '$email' AND `pass` = '$password'";
        $result =mysqli_query($con,$sql);
        $row= mysqli_num_rows($result);
       
        if($row==1)
        {
            $_SESSION['r_result'] = $result;
        }
        if($row==1){
            sleep(1);
            header('location:Login.php');
        }
        else{
            $error = "Filed to reset password";
        }

    }

?>