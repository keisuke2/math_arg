<?php
/*
if文で書いた処理をfor文で書き直す
*/
$num=array(5,3,4,1) ;
for($i=count($num)-2;$i>-1;$i--){//$i=2,1,0
	$min=$i+1;//3s
	if($num[$i]<$num[$min]){
	$min=$i;
	}
	$w=$num[$i];
	$num[$i]=$num[$min];
	$num[$min]=$w;
}
/*
print_r($num);
Array
(
    [0] => 3
    [1] => 5
    [2] => 4
)
*/
for($i=count($num)-2;$i>0;$i--){//$i=2,1
	$min=$i+1;//2
	if($num[$i]<$num[$min]){
	$min=$i;
	}
	$w=$num[$i];
	$num[$i]=$num[$min];
	$num[$min]=$w;
}
print_r($num);
/*
Array
(
    [0] => 3
    [1] => 4
    [2] => 5
)
*/
for($i=count($num)-2;$i>1;$i--){//$i=2
	$min=$i+1;//2
	if($num[$i]<$num[$min]){
	$min=$i;
	}
	$w=$num[$i];
	$num[$i]=$num[$min];
	$num[$min]=$w;
}
print_r($num);
?>