<?php 
if(isset($_REQUEST["submit"]) ){
    if(!isset($_REQUEST["bloodgrp"])){
        echo"At least one of them must be selected.";
    }
    elseif($_REQUEST["bloodgrp"]===""){
        echo"At least one of them must be selected.";
    }
    else{
        echo"Your gender is " .$_REQUEST["bloodgrp"] ;
    }
}
?>