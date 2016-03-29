<?php
/*線形探索法のアルゴリズムを用いて数字の5を求める*/
$a=array(4,2,3,5,1);
for($i=0;$i<count($a)-1;$i++){
	if($a[$i]==5){
		echo $a[$i];
		echo "探索終了";
		break;
	}
}
?>