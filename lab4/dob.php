<?php
if(isset($_REQUEST["submit"])){
    $day= (int)$_REQUEST["day"];
    $month=(int)$_REQUEST["month"];
    $year=(int)$_REQUEST["year"];

    if($day== "" && $month== ""&& $year== ""){
        echo"Date of birth can not be empty!!";
    }
    else if( 1<=$day && $day<=31 && 1<=$month && $month<=12 && 1953<=$year && $year <= 1998 ){
        echo "Your Date of Birth is : " .$day." " .$month. " " .$year  ;
    }
    else{
        echo"Must be valid numbers (dd: 1-31, mm:
1-12, yyyy: 1953-1998)";
    }
}
?>