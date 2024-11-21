<?php 
if(isset($_REQUEST["submit"]) ){
    if(!isset($_REQUEST["gender"])){
        echo"At least one of them must be selected.";
    }
    else{
        echo"Your gender is " .$_REQUEST["gender"] ;
    }
}
?>