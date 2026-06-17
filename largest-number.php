<!-- largest number -->


 <?php
 
$arr = [10, 323, 878, 343, 23232];
$largest = $arr[0];

for($i = 0; $i < count($arr); $i++){
if($arr[$i] < $largest){
   $largest = $arr[$i];
}
}

echo $largest;


 ?>