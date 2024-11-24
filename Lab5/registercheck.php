<?php
    session_start();
    if(isset($_POST['submit'])){
    
        $nickname = $_POST['nickname'];
        $username= $_POST['username'];
        $password = $_POST['password'];
       

        if(empty($username) || empty($password)){
            
            echo'Username Pass cannot be empty' ; 

        }else{
            $user = array("name"=> $nickname, "username"=>$username, "pass"=>$password);
            $_SESSION['user'] = $user;
            echo"User Created";
            //sleep(2);
            header('location: login.html');
          
           
        }
            

   
}

?>