<?php
if (isset($_REQUEST["submit"])) {

    $name = $_REQUEST["name"];

    if (empty($name)) {
        echo "Name cannot be empty!!";
    } elseif (str_word_count($name) < 2) {
        echo "Name should at least be 2 words !!";
    } elseif (!ctype_alpha($name[0])) {
        echo "Your Name must start with Upper or lower class Alphabet !!";
    } else {
        for ($i = 0; $i < strlen($name); $i++) {
            $char = $name[$i];
            $isvalid=false;
            if (ctype_alpha($name) || $char == "." || $char == "-" || $char == " ") {
                $isvalid = true;
            }
        }
        if($isvalid){
            
            echo "Your Name is " .$name;
        }
        else{
            echo"Name can contain a-z, A-Z, period, dash only";
        }
    }
} else {
    header("location:name.html");
}
