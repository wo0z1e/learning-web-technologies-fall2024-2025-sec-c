<?php

$array = [200, 57, 89, 14, 109];
$a = 89;
$bool=false;

for($i=0;$i<5;$i++){
    if($array[$i]==$a){
        echo" $a  found"; 
        $bool=true;
    }
    
}
if($bool=false)
{
    echo "404 The Element Not Found";
}
?>