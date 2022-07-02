<?php
    include 'connection.php';
    $error = '';
    if(isset($_POST['submit'])){
    if(empty($_POST['email'])||empty($_POST['password']))
    {
        $error = "Username or Password Invalid";
    }
    else
    {
        $email = $_POST['email'];
        $password= $_POST['password'];
        $sql ="SELECT * FROM `user` WHERE `email` = '$email' AND `pass` = '$password'";
        $result =mysqli_query($con,$sql);
        $row= mysqli_num_rows($result);
        if($row==1){
            sleep(2);
            $_SESSION['email'] = $email; 
            $_SESSION['password'] = $password;
            header('location:Home.php');
        }
        else{
            $error = "Username or Password Invalid";
        }

    }
}

?>