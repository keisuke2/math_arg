<?php
/*for 文で書いた箇所での繰り返し処理をさらにfor文で書き換える*/
$num=array(5,3,4,1);
for($k=-1;$k<count($num)-2;$k++){//kの値が要素数-3までの間処理を繰り替えす。
	for($i=count($num)-2;$i>$k;$i--){
		$min=$i+1;//3
		if($num[$i]<$num[$min]){
		$min=$i;
		}
		$w=$num[$i];
		$num[$i]=$num[$min];
		$num[$min]=$w;
	}
}
print_r($num);
/*
print_r($num);
Array
(
    [0] => 1
    [1] => 3
    [2] => 4
    [3] => 5
)
*/
?>