<?php
Session_start();
if (isset($_REQUEST["submit"])) {
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];

    if(empty($username)||empty($email)|| empty($pass)){
    header("location: registration.php");
        
    }
    else{
        $user=['username'=>$username,'email'=>$email,'pass'=>$pass];
        $_SESSION["user"]=$user;
        echo "user created";
        sleep(1);
        header('location:login.php');
    }
} else {
    header('location: registration.php');
}
