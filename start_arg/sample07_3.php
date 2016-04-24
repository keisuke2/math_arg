<?php
/*
クイックソートを用いてボールの並び変えを行う。
left:並べ替え範囲の戦闘要素の添字を入れる変数。
right:並べ替え範囲の末尾要素の添字を入れる変数。
i:基準値よりも大きい要素を探すための編すう
k:基準値より小さい要素を探すための変数
w:データ交換用の変数hennsuu
*/
$array=array(5,4,7,6,8,3,1,2,9);
$left=0;
$right=8;
$i=$left+1;//4
$k=$right;
//クイックソートを関数にする
function QuickSort($array,$left,$right,$i,$k){
	global $k;//処理が実行されるごとに書き換える。
	global $array;
	//echo $k;
	while($i<$k)
	{
	while(true){
		if($array[$left]>$array[$i]&&$right>$i){
		$i=$i+1;	
		}else{
			break;
		}
	}
	while(true){
		if($array[$k]>$array[$left]&&$k>$left){
		$k=$k-1;
		
		}else{
			break;
		}
	}
		if($i<$k){
		$w=$array[$i];//7
		$array[$i]=$array[$k];//2
		$array[$k]=$w;//7
		}
	}
	$w=$array[$left];
	$array[$left]=$array[$k];
	$array[$k]=$w;
	print_r($array);
}
QuickSort($array,$left,$right,$i,$k);//クイックソート1順目
//２周目開始
//添字0-3まででクイックソートを行う
$finish=$k;//4
$left=0;
$right=$k-1;//3 
$i=$left+1;//4
$k=$right;
print_r ($array);
QuickSort($array,$left,$right,$i,$k);

//添字5-8で処理を行う
$left=$finish+1;//5
$right=count($array)-1;//8
$i=$left+1;//6
$k=$right;//8
QuickSort($array,$left,$right,$i,$k);

//3週目開始
//添字0-1
$left=0;
$right=$k-1;
echo $right;
$i=$left+1;//1
$k=$right;//
QuickSort($array,$left,$right,$i,$k);
//添字5-6
$left=$finish+1;
$right=count($array)-1;
$i=$left+1;//4
$k=$right;
QuickSort($array,$left,$right,$i,$k);
/*
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 7
    [7] => 8
    [8] => 9
)
*/
?>