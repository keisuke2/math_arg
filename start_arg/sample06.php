<?php


$array=array(5,3,4,1);

//添字1番目のデータの大きさを調べる
if($array[0]>$array[1]){
	$w=$array[0];
	$array[0]=$array[1];
	$array[1]=$w;
}
print_r($array);//3,5,4,1

//添字2番目のデータの大きさを調べる
if($array[0]>$array[2]){
	$w=$array[0];
	$array[0]=$array[2];
	$array[2]=$w;
}
if($array[1]>$array[2]){
	$w=$array[1];
	$array[1]=$array[2];
	$array[2]=$w;
}
print_r($array);//3,4,5,1

//添字3番目のデータの大きさを調べる
if($array[0]>$array[3]){
	$w=$array[0];
	$array[0]=$array[3];
	$array[3]=$w;
}
if($array[1]>$array[3]){
	$w=$array[1];
	$array[1]=$array[3];
	$array[3]=$w;
}
if($array[2]>$array[3]){
	$w=$array[2];
	$array[2]=$array[3];
	$array[3]=$w;
}
print_r($array);//1,3,4,5



?>

