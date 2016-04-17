<?php
/*
単純挿入法
挿入したいデータは別に変数を用意して代入しておく
変数のデータを整列済みデータと順番に比較していく
変数のデータより小さいデータが見つかったら、その後ろの要素に変数のデータを代入する。
*/
$array=array(5,3,4,1,2);
$x=$array[1];
if($array[0]>$array[1]){
	$array[1]=$array[0];
	$array[0]=$x;
}
/*
print_r($array);
Array
(
    [0] => 3
    [1] => 5
    [2] => 4
    [3] => 1
    [4] => 2
)
*/
$x=$array[2];
if($array[1]>$array[2]){
	$array[2]=$array[1];//{3,5,5,1,2}
	$array[1]=$x;//{3,4,5,1,2}
}
$x=$array[1];
if($array[0]>$x){
	$array[1]=$array[0];
	$array[0]=$x;//{3,4,5,1,2}
}
/*
print_r($array);
Array
(
    [0] => 3
    [1] => 4
    [2] => 5
    [3] => 1
    [4] => 2
)
*/
$x=$array[3];//1
if($array[2]>$array[3]){
	$array[3]=$array[2];//{3,4,5,5,2}
	$array[2]=$x;//{3,4,1,5,2}
}
$x=$array[2];//1
if($array[1]>$x){
	$array[2]=$array[1];//{3,4,4,5,2}
	$array[1]=$x;//{3,1,4,5,2}
}
$x=$array[1];//1
if($array[0]>$x){
	$array[1]=$array[0];//{3,3,4,5,2}
	$array[0]=$x;//{1,3,4,5,2}
}
/*
print_r($array);
Array
(
    [0] => 1
    [1] => 3
    [2] => 4
    [3] => 5
    [4] => 2
)
*/
$x=$array[4];//2
if($array[3]>$array[4]){
	$array[4]=$array[3];//{1,3,4,5,5}
	$array[3]=$x;//{1,3,4,2,5}
}
$x=$array[3];//2
if($array[2]>$x){
	$array[3]=$array[2];//{1,3,4,4,5}
	$array[2]=$x;//{1,3,2,4,5}
}
$x=$array[2];//2
if($array[1]>$x){
	$array[2]=$array[1];//{1,3,3,4,5}
	$array[1]=$x;//{1,2,3,4,5}
}
$x=$array[1];//2
if($array[0]>$x){
	$array[1]=$array[0];//{1,2,3,4,5}
	$array[0]=$x;//{1,2,3,4,5}
}
print_r($array);
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
*/
?>