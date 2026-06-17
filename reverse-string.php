<!-- Reverse string -->


 <?php
 
 $str = "Hello";
$rev = "";

 $i = 0;

 while(isset($str[$i])){
    $i++;
 }


 for($j = $i - 1; $j >= 0; $j--){
    $rev .= $str[$j];
 }

 echo $rev;
 ?>