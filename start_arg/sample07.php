<?php

$array=array(5,4,7,6,8,3,1,2,9);

$left=$array[0];
$right=$array[8];
$i=$array[$left+1];
if($array[$i]<$array[$left]&&$i<$right){
$i=$i+1;
}


?>