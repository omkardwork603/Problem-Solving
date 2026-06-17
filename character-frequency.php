<!-- character frequerncy -->


 <?php
 
$str = "vowels use";

for($i = 0; isset($str[$i]); $i++){
   $count = 0;
   for($j = 0; isset($str[$j]); $j++){
      if($str[$i] == $str[$j]){
         $count++;
      }
   }
   echo $str[$i]. "=". $count . "<br>";
}
 ?>
