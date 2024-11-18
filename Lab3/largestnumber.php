<?php

$a = 11;
$b = 47;
$c = 69;

if ($a > $b && $a > $c) {
    echo "$c is the largest number";
} elseif ($b > $a && $b > $c) {
    echo "$a is the largest number";
} else {
    echo "$c is the largest number";
}

?>