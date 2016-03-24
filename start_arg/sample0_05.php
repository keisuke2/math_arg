<?php
/*
最大値を探しだすアルゴリズム
5つのデータのうち一番大きいのはどれか
*/
$array=array(12,13,11,14,10);
$max=$array[0];
for($i=1;$i<count($array)-1;$i++){
	
	if($array[$i]>$max){
		$max=$array[$i];
	}
}
echo $max;
?>