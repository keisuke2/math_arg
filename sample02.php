<?php
/*二分探索法のアルゴリズム
17を探索する*/

//小さい順に並べかえる
//配列の半分で分ける
//中心の数字が前後の値より大きいか小さいか調べる。
//17が含まれている値の中止を求める
//中心の数によって求められる。


$a=array(11,13,17,19,29,23,31);//7つの要素


//大小で並びかえる。小さい順になれべかえる。
//(11,13,17,19,23,29,31)
asort($a);
//print_r($a);
//２つの数字の真ん中をもとめる
$head=0;//添え字の先頭の値
$tail=6;//添え字の末尾の値 count($a)-1

while(true){
	if($head>$tail){
		echo "見つかりませんでした";
		break;
	}
	$center=($head+$tail)/2;//3
	$center=floor($center);//少数の場合は切り捨てる

	if($a[$center]==17){//もし中心の値が17だった場合処理終了
	echo $a[$center];
	break;
	}
	if($a[$center]<17){//中心の値が17より大きいか小さいかを比較する。
		$head=$center+1;//17は今調べた値より後ろだとわかる。　戦闘の値を中心より1つ後ろの値にする。
	}else{
		$tail=$center-1;//$tail=2
	}

}
	
//echo $a[$center];
 ?>