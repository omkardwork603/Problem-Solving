<!-- vowels -->


 <?php
 
$str = "vowels use";
$result = "";

for($i = 1; isset($str[$i]); $i++){
   $ch = $str[$i];

if($ch == "a" || $ch == "e" || $ch == "i" || $ch == "o" || $ch == "u"){
   $result++;
}

}
echo $result;
 ?>