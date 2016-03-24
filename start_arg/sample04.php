<?php 
/*単純選択法のアルゴリズムを用いて並び変えを行う*/

$num=array(12,13,11,14,10);
for($i=0;$i<count($num)-1;$i++){
	$indexMin=$i;
	for($k=$i+1;$k<count($num);$k++){
		if($num[$k]<$num[$indexMin]){
			$indexMin=$k;
		}
	}
	$w=$num[$i];//先頭の値を格納しておく
	$num[$i]=$num[$indexMin];//最小値が入っている要素のデータを先頭の要素に代入する
	$num[$indexMin]=$w;


}
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
