<?php
$amount = 420.5;  

$vat = 0.15 * $amount;

$totalAmount = $amount + $vat;

echo "Actual Amount : $$amount<br> VAT : $$vat<br> Total Amount : $$totalAmount<br>";
?>