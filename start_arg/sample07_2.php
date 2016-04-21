<?php
/*
クイックソート
*/

$array=array(5,4,7,6,8,3,1,2,9);

$left=0;
$right=8;
$i=$left+1;//4
$k=count($array)-1;
//echo $k;
while($i<$k)
{
while(true){
	if($array[$left]>$array[$i]&&$right>$i){
	$i=$i+1;
	
	}else{
		break;
	}
}
while(true){
	if($array[$k]>$array[$left]&&$k>$left){
	$k=$k-1;
	
	}else{
		break;
	}
}
	if($i<$k){
	$w=$array[$i];//7
	$array[$i]=$array[$k];//2
	$array[$k]=$w;//7
	}
}
$w=$array[$left];
$array[$left]=$array[$k];
$array[$k]=$w;
print_r($array);
/*
Array
(
    [0] => 3
    [1] => 4
    [2] => 2
    [3] => 1
    [4] => 5
    [5] => 8
    [6] => 6
    [7] => 7
    [8] => 9
)
*/

//0-k(3)まででクイックソートを行う

$finish=$k;
$left=0;
$right=$k-1;
echo $right;
$i=$left+1;//4
$k=$right;
//echo $k;
while($i<$k)
{
while(true){
	if($array[$left]>$array[$i]&&$right>$i){
	$i=$i+1;
	
	}else{
		break;
	}
}
while(true){
	if($array[$k]>$array[$left]&&$k>$left){
	$k=$k-1;
	
	}else{
		break;
	}
}
	if($i<$k){
	$w=$array[$i];//7
	$array[$i]=$array[$k];//2
	$array[$k]=$w;//7
	}
}
$w=$array[$left];
$array[$left]=$array[$k];
$array[$k]=$w;
print_r($array);

//0-5まで処理終了

//5以上でクイックソートを行う


$left=$finish+1;
$right=count($array)-1;
echo $right;
$i=$left+1;//4
$k=$right;
//echo $k;
while($i<$k)
{
while(true){
	if($array[$left]>$array[$i]&&$right>$i){
	$i=$i+1;
	
	}else{
		break;
	}
}
while(true){
	if($array[$k]>$array[$left]&&$k>$left){
	$k=$k-1;
	
	}else{
		break;
	}
}
	if($i<$k){
	$w=$array[$i];//7
	$array[$i]=$array[$k];//2
	$array[$k]=$w;//7
	}
}
$w=$array[$left];
$array[$left]=$array[$k];
$array[$k]=$w;
print_r($array);

//２回目終了
/*
3回目開始


*/

$finish=$k;
$left=0;
$right=$k-1;
echo $right;
$i=$left+1;//4
$k=$right;
//echo $k;
while($i<$k)
{
while(true){
	if($array[$left]>$array[$i]&&$right>$i){
	$i=$i+1;
	
	}else{
		break;
	}
}
while(true){
	if($array[$k]>$array[$left]&&$k>$left){
	$k=$k-1;
	
	}else{
		break;
	}
}
	if($i<$k){
	$w=$array[$i];//7
	$array[$i]=$array[$k];//2
	$array[$k]=$w;//7
	}
}
$w=$array[$left];
$array[$left]=$array[$k];
$array[$k]=$w;
print_r($array);

//0-5まで処理終了


$left=$finish+1;
$right=count($array)-1;
echo $right;
$i=$left+1;//4
$k=$right;
//echo $k;
while($i<$k)
{
while(true){
	if($array[$left]>$array[$i]&&$right>$i){
	$i=$i+1;
	
	}else{
		break;
	}
}
while(true){
	if($array[$k]>$array[$left]&&$k>$left){
	$k=$k-1;
	
	}else{
		break;
	}
}
	if($i<$k){
	$w=$array[$i];//7
	$array[$i]=$array[$k];//2
	$array[$k]=$w;//7
	}
}
$w=$array[$left];
$array[$left]=$array[$k];
$array[$k]=$w;
print_r($array);







?>