<?php

// Find Missing Number

$arr = [1,2,3,5];

$expectedSum = 0;
$actualSum = 0;

$n = 5; // Last number should be 5

for($i=1; $i<=$n; $i++)
{
    $expectedSum += $i;
}

for($i=0; isset($arr[$i]); $i++)
{
    $actualSum += $arr[$i];
}

echo "Missing Number = ".($expectedSum - $actualSum);

?>