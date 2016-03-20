<?php

//５番までの素数を求めよ
//$sosu=5;
//5番目までの数で割り切れないものを求める
$count=array(1,2,3,4,5);
$repeat=count($count);
/*
$count_range=range(2,$count[4]
var_dump($count_range);
*/
/*
foreach (range(2,5) as $key ) {

	$result=5%$key;
	echo $result; 
}
*/
    for($i=0;$i<$repeat;$i++){// iが割り切れるか求める
    	if($i!==0){//１じゃない場合
    			foreach (range(2,4) as $key ) {
			
					if(5%$key!==0){//割り切れないなら、割り切れない数を入れる 5
						$total[]=$key;
					}					
				}
			}
		  $i +=1; 
	} 
	print_r($total);


/*


    		if($count[$i]%range(2,3)==0){//2〜今調べている数より１つ小さい値の範囲($count[$i]-1)
    			$total2[]=$count[$i];
            	break;
       	 		}
       	 	else{//割り切れないならその値を配列に格納する
	          	$total[]=$count[$i];	          	
	        	}
	    	}    
	        $i +=1;     
	    }
	    //print_r($total);//1-5までの１以外の奇数を表示する
	    //print_r($total2);
	    */
?>