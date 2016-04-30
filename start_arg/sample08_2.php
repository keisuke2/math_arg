<?php
/*
素数を求めるアルゴリズム
*/
$array=array(1,1,1,1,1,1,1,1,1,1,1);
for($k=2;$k*$k<=100;$k++){
	if($array[$k]==1){
		for($i=$k;$i<100/$k;$i++){
		$array[$k*$i]=0;
		}
	}	
}
echo "素数は";
for($i=2;$i<=100;$i++){
	if($array[$i]==1){
	echo $i;
	echo ",";

	}
}
echo "です。";
?>