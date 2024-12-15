<?php 
if(!isset($_SESSION['status'])){
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    Welcome !!
    <br>
    <a href="logout.php">Log OUT</a>
</body>
</html>