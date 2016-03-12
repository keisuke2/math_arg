<?php 

//変数に値を入れる
//先頭の値とその次の値をとりだし変数に入れる   指定した数のものしかできない。変数の中の文字の長さに応じて取り出す値を指定する　or 一一番右の値と一番左の値など
//2つの変数を使い変数の値を反転させた値を作る
//条件を比較する
//一致したら値を出す。

$num=13;
while(true){
//$numの模試数を求め変数$length_countに値を入れる
$length_count=strlen($num);
$left=substr($num, 0, 1);
$right=substr($num,$length_count-1,1);
	if($left == $right)
	{
		//print_r($num);
		echo $num;
		break;
	}
$num=$num+2;
}
echo $s; //33が出力される


?>
