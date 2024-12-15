<?php
session_start();

if (isset($_REQUEST["submit"])) {
    $username = $_REQUEST["username"];
    $pass = $_REQUEST["pass"];
    $user = $_SESSION['user'];
    $usercheck = $user['username'];
    //var_dump($user);
    $passcheck = $user['pass'];

    if (empty($username) || empty($pass)) {
        header('location: login.php');
    } else if ($usercheck == $username && $passcheck == $pass) {
        echo "Login Succesful . <br> Redicrecting....";
        $_SESSION['status'] = true;
        header('location: home.php');
    }
}
