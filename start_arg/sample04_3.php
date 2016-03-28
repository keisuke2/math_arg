<?php 
/*単純選択法のアルゴリズムを用いて並び変えを行う*/

$num=array(12,13,11,14,10);
//1週目　添字0-4までの最小値を探索する
for($k=0;$k<count($num);$k++){
	$min=$k;
	for($i=$k+1;$i<count($num);$i++){
		if($num[$i]<$num[$min]){
			$min=$i;
		}
	}
	//先頭の値と入れ替える
	$w=$num[$k];
	$num[$k]=$num[$min];
	$num[$min]=$w;
}
print_r($num);
/*
Array
(
    [0] => 10
    [1] => 11
    [2] => 12
    [3] => 13
    [4] => 14
)
*/
?>