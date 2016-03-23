<?php

/*合計値を計算するアルゴリズム*/

$num=array(12,13,11,14,10);

$sum=0;
for($i=0;$i<count($num);$i++){
	$sum=$sum+$num[$i];
}

print_r($sum);//60
?>