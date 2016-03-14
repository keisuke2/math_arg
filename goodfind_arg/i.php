<?php

$n=1;
$i=0;
$repeat=10;
while($i<$repeat)
{
	$n+=1;
	$isPrime= true;
	for($p=2;$p<$n;$p++)
	{
		if($p*$p>$n){
			break;
		}
		 if($n%$p==0){
		 	$isPrime=false;
		 	break;
		 }
	}
	if($isPrime==true)
	{
		$i+=1;
	}
}
echo $n;
?>