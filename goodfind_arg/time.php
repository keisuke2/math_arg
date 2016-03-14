<?php

/*
問題1
秒数を「X時間X分X秒」に変換するプログラムを作成してください。!
!
例) 入力:3661 → 出力:1時間1分1秒!

ヒント　http://oshiete.goo.ne.jp/qa/4478972.html
*/

$time=3661;
$h=floor($time/3600);
$m=floor(($time-(3600*$h))/60);//全体の秒から時間を引く
$s=floor($time-(3600*$h)-(60*$m));//(全体の秒)ー(求めた値を秒にもどした合計)=残りの秒
echo $h;
echo "時間";
echo $m;
echo "分";
echo $s;
echo "秒";

?>