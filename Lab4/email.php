<?php
if (isset($_REQUEST["submit"])) {
    $email = $_REQUEST["email"];
    $atpos="";
    $dotpos="";
    $isvalid=false;
    if (empty($email)) {
        echo "Email can Not be empty!!";
    } else if (!ctype_lower($email[0])) {
        echo "Invalid entry!!";
    } else {
        for ($i = 0; $i < strlen($email); $i++) {
            $char = $email[$i];
            $isvalid = false;
            if ($char == "@") {
                $atpos = $i;
            }
            if ($char == ".") {
                $dotpos = $i;
            }
            if (ctype_lower($char) || $char == "@" || $char == "." || !is_nan($char)) {
                if ($atpos < $dotpos) {
                    $isvalid = true;
                }
            } 
            elseif($atpos > $dotpos){
                echo"Incorrect format!!";
            } else {
                echo "@ or . is missing .!!";
            }
        }
    }

    if ($isvalid == true) {
        echo "Your Email is " . $email;
    }
}
