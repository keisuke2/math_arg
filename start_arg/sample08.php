<?php
/*
素数を求めるアルゴリズム
*/


$array=array(1,1,1,1,1,1,1,1,1,1,1);


//1以上添字が割り切れるか確認する

//各要素を２の倍数で割る
//各要素を3の倍数でwaru 

for($i=2;$i<100/2;$i++){
	$array[2*$i]=0;
}

for($i=3;$i<100/3;$i++){
	$array[3*$i]=0;
}

print_r($array);

?>