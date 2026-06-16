<?php

$num = 123;
$rem = 0; $sum = 0;

for($i = 2; $i <= strlen($num); $i++){
    $rem = $num % 10;
    $sum = $sum + $rem;
    $num = $num / 10;
}

echo "This is a number: " . $sum;
?>