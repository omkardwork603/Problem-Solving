<?php

$arr = [-10, 20, -30, 40, 50, -5];

$positive = 0;
$negative = 0;

for($i = 0; isset($arr[$i]); $i++)
{
    if($arr[$i] >= 0)
    {
        $positive++;
    }
    else
    {
        $negative++;
    }
}

echo "Positive : ".$positive."<br>";
echo "Negative : ".$negative;

?>