<?php
//10000番目の素数を求めてください
/*
    $repeat=10000;
    for ($i=2; $i<=$repeat; $i++) {
        $isPrime = true;
        for ($k=2; $k<$i; $k++) {
            // 割り切れた数が存在したらアウト
            if ($i % $k === 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            $primeLists[] = $i;
        }
    }
    */

//10の素数を求める = 3 5 7 
//1万回くり返す
//判定
//1とその数自身以外のどのような自然数でも割り切れなければその数を配列に格納する
//10000番目の値を求める

$sosu=10;//最大の番号
$n=1//現在の数
while($n<$sosu){
    $n +=1//5を調べる 
    //2~$5より小さい数を配列に入れる。2,3,4,
   // $range[]=$n-1;//1,2,3,4
    //上の配列で5が割り切れるか一つずつ確認する 
    for($i=2;$k<$n-1;$i++){// 2-(現在の数-1)で割り切れるか確認する。割り切れたらループを抜ける
        if($i%$k==0){
            break;
        }else{
            $m+=1
        }
        $i +=1;
    }
}

print_r($i);