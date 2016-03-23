<?php

/*ハッシュ探索法でボールを探す
12のボールが格納されているところを探す*/
$arrayD=array(12,25,36,20,30,8,42);
$data[0]=0;
$arrayH=array_pad($data,11,0);

for($i=0;$i<count($arrayD);$i++){
	$k=$arrayD[$i]%11;
	while(true){
		if($arrayH[$k]==0){
		$arrayH[$k]=$arrayD[$i];
		break;
		}else{
			$k=($k+1)%11;	//もう一度次の要素が空いていないか確かめる	
		}
	}
}
print_r($arrayH);
//１２が格納されている要素を探索する
$x=36;
$k=$x%11;
while(true){
		if($arrayH[$k]==$x){
		echo "格納場所は".$k."番目の要素です";
		break;
		}else{
			$k=($k+1)%11;	//もう一度次の要素が空いていないか確かめる	
		}
	}
?>