<?php

$string = "Programming";

$vowels = 0;
$consonants = 0;

$string = strtolower($string);

for($i=0; $i<strlen($string); $i++)
{
    $char = $string[$i];

    if($char>='a' && $char<='z')
    {
        if($char=='a' || $char=='e' || $char=='i' || $char=='o' || $char=='u')
        {
            $vowels++;
        }
        else
        {
            $consonants++;
        }
    }
}

echo "Vowels = ".$vowels."<br>";
echo "Consonants = ".$consonants;

?>