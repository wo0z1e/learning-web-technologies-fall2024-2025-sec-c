<?php
    session_start();
    if(isset($_REQUEST['submit'])){
    
        $username = $_POST['username'];
        $password = $_REQUEST['password'];
       

        if( empty($username) || empty($password)){
            echo "username/password! can't be empty";

        }
   
    }

?>