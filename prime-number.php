<!-- prime number -->



 <?php
 $num = 11;
 $flag = 0;

for($i = 2; $i < $num; $i++){
    if($num % $i == 0){
        $flag = 1;
        break;
    }
}


if($flag == 0){
    echo "This is a prime number";
}else{
    echo "This is a not prime number";
}
 ?>
