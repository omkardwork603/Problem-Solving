<!-- largest number -->
<!-- second largest number -->
 <!-- third largest number -->



 <?php
 
$arr = [1000, 3000, 4000, 5000, 600];

for($i = 0; isset($arr[$i]); $i++){
   for($j = $i + 1; isset($arr[$j]); $j++){
      if($arr[$i] > $arr[$j]){
         $temp = $arr[$i];
         $arr[$i] = $arr[$j];
         $arr[$j] = $temp;
      }
   }
}



   echo "largest number: ". $arr[4] . "<br>";


 ?>

 <!-- 2 second largest number -->

 
 <?php
 
$arr = [1000, 3000, 4000, 5000, 600];

for($i = 0; isset($arr[$i]); $i++){
   for($j = $i + 1; isset($arr[$j]); $j++){
      if($arr[$i] > $arr[$j]){
         $temp = $arr[$i];
         $arr[$i] = $arr[$j];
         $arr[$j] = $temp;
      }
   }
}



   echo " Second largest number: ". $arr[3] . "<br>";


 ?>

 <!-- 3 third largest number -->

 
 <?php
 
$arr = [1000, 3000, 4000, 5000, 600];

for($i = 0; isset($arr[$i]); $i++){
   for($j = $i + 1; isset($arr[$j]); $j++){
      if($arr[$i] > $arr[$j]){
         $temp = $arr[$i];
         $arr[$i] = $arr[$j];
         $arr[$j] = $temp;
      }
   }
}



   echo " Third largest number: ". $arr[2];


 ?>