<?php

$arr = [10, 20, 30, 40, 50];

$search = 30;

$found = false;

for($i = 0; isset($arr[$i]); $i++)
{
    if($arr[$i] == $search)
    {
        $found = true;
        break;
    }
}

if($found)
{
    echo "Found";
}
else
{
    echo "Not Found";
}

?>