<?php

/*
最大公約数を求めるアルゴリズム
*/

$a=12;
$b=7;
$r=$a%$b;
while(true){	
	if($r==0){
		echo "最大公約数は";
		echo $b;
		break;

	}else{
		$a=$b;
		$b=$r;
		$r=$a%$b;
	}
}
?>