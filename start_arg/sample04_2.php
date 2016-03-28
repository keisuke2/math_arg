<?php 
/*単純選択法のアルゴリズムを用いて並び変えを行う*/

$num=array(12,13,11,14,10);
//1週目　添字0-4までの最小値を探索する
$min=$num[0];
for($i=1;$i<count($num);$i++){
	if($num[$i]<$min){
		$min=$num[$i];
		$min_i= $i;
	}
}
//先頭の値と入れ替える
$w=$num[0];
$num[0]=$num[$min_i];
$num[$min_i]=$w;

//2週目 添字1-4内で最小値を調べる
$min=$num[1];
for($i=2;$i<count($num);$i++){
	if($num[$i]<$min){
		$min=$num[$i];
		$min_i= $i;
	}
}
//先頭の値と入れ替える
$w=$num[1];
$num[1]=$num[$min_i];
$num[$min_i]=$w;
//3週目　添字2-4内で最小値を調べる
$min=$num[2];
for($i=3;$i<count($num);$i++){
	if($num[$i]<$min){
		$min=$num[$i];
		$min_i= $i;
	}
}
//先頭の値と入れ替える
$w=$num[2];
$num[2]=$num[$min_i];
$num[$min_i]=$w;

//４周目 添字3-4内で最小値を調べる
$min=$num[3];
for($i=4;$i<count($num);$i++){
	if($num[$i]<$min){
		$min=$num[$i];
		$min_i= $i;
	}
}
//先頭の値と入れ替える
$w=$num[3];
$num[3]=$num[$min_i];
$num[$min_i]=$w;

 print_r($num);
 /*出力
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
