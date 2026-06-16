<?php

// swap number with 3 and withou 3 variable

$a = 10;
$b = 20;
$c = $a;
$a = $b;
$b = $c;


echo "<h3>This is a number third variable</h3>";

echo "This is number before swap a = 10 and b  = 20 <br><br>";



echo "This is number after swap a = " . $a . " and  b = " . $b . "<br><br><br>";




// 2
echo "<h3>This is a number without third variable</h3>";

$a = 10;
$b = 20;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "<br><br>This is number before swap a = 10 and b  = 20 ";


echo "<br><br>This is number after swap a = " . $a . " and  b = " . $b;

?>