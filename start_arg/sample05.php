<?php
$num=array(5,3,4) ;
$min=2;//暫定最初値
if($num[1]<$num[$min]){
	$min=1;
}
$w=$num[1];
$num[1]=$num[$min];
$num[$min]=$w;
/*print_r($num); 
Array
(
    [0] => 5
    [1] => 3
    [2] => 4
)
*/
$min=1;//暫定最初値
if($num[0]<$num[$min]){
	$min=0;
}
$w=$num[0];
$num[0]=$num[$min];
$num[$min]=$w;
/*
print_r($num);
Array
(
    [0] => 3　確定
    [1] => 5
    [2] => 4
)
*/
$min=2;//暫定最初値
if($num[1]<$num[$min]){
	$min=1;
}
$w=$num[1];
$num[1]=$num[$min];
$num[$min]=$w;
/*
print_r($num);
Array
(
    [0] => 3
    [1] => 4
    [2] => 5
)
*/
?>