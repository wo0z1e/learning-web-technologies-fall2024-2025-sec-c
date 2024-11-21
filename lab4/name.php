<?php
if(isset($_REQUEST["submit"])) {   

$name = $_REQUEST["name"];

if($name== null || empty($name)){
    echo"Name cannot be empty!!";
}elseif(str_word_count($name)< 2){
 echo "Name should at least be 2 words !!";
 }
 
 elseif(ctype_alpha($name[0]) ){
    echo "Your Name is ".$name ;
 }
 else{
    echo "Invalid!! <br>
    A. Cannot be empty <br>
B. Contains at least two words <br>
C. Must start with a letter <br>
D. Can contain a-z, A-Z, period, dash only";
 }
}
else{
    header("location:name.html");
}
?>