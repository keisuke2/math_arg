<?php 
//変数に値を入れる
//先頭の値とその次の値をとりだし変数に入れる   指定した数のものしかできない。変数の中の文字の長さに応じて取り出す値を指定する　or 一一番右の値と一番左の値など
//2つの変数を使い変数の値を反転させた値を作る
//条件を比較する
//一致したら値を出す。
$num=13;
/*$num_8=decbin($num);
echo $num_8;
*/

while(true){
//$numの模試数を求め変数$length_countに値を入れる
$length_count=strlen($num);
$left_10=substr($num, 0, 1);
$right_10=substr($num,$length_count-1,1);//$length_count-1 0からカウントされるため変数numの長さから-1する必要がある。

//２進数に変換
/*
$num_2=decbin($num);
$length_count_2=strlen($num_2);
$left_2=substr($num_2, 0, 1);//こっちは数を増やせるが、right 右から左に数えることができてない。そうするためにはやはり値の中身を反転させる必要がある。
$right_2=substr($num_2,$length_count_2-1,1);

//8進数に変換する
$num_8=decoct($num);
$length_count_8=strlen($num_8);
$left_8=substr($num_8, 0, 1);//一つじゃだめなんだ。ロジックがずれている。
$right_8=substr($num_8,$length_count_8-1,1);
*/

	if($left_10 == $right_10/*&&$left_2==$right_2&&$left_8==$right_8*/)
	{
		//print_r($num);
		echo $num;
		break;
	}
$num=$num+2;
}
echo $s; //33が出力される


?>
