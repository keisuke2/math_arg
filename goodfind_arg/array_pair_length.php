  <?php
/*
  問題2
新しい家に引っ越したので、お友達を招待したいと思っています。!
いくつか箸を持っているので、そこから何人まで呼べるかを計算した
いです。!
すべての箸の長さを入力するので、同じ長さの箸のペアが最大どれぐ
らいできるかを計算してください。!
例) 入力: [35, 50, 50, 60, 50, 35] → 出力: 2!
*/
$a = array( 35, 50, 50, 60, 50 ,35); 
//値の小さい要素を先頭にする
asort($a);
 $b=0; 
//値によって順番は変えられるがキーは変えられないので先頭の値を取り出し変数に格納する
 $c[] = array_shift($a);
 $c[] = array_shift($a);
 $c[] = array_shift($a);
 $c[] = array_shift($a);
 $c[] = array_shift($a);
 $c[] = array_shift($a);
//var_dump($c);
for($i=0;$i<count($c);$i++ ){
  if($c[$i]==$c[$i+1]){
     $b+=1; 
  }
  if($c[$i]==$c[$i+2]){
    $b-=1; 
  }
} 
echo $b;

 /*

OR 
 $a = array( 35, 50, 50, 60, 50 ,35); 
//値の小さい要素を先頭にする
asort($a);
 $b=0; 
//値によって順番は変えられるがキーは変えられないので先頭の値を取り出し変数に格納する
 $a_0 = array_shift($a);
 $a_1 = array_shift($a);
 $a_2 = array_shift($a);
 $a_3 = array_shift($a);
 $a_4 = array_shift($a);
 $a_5 = array_shift($a);
*/
//左から順にペアを確かめる
 /*
if($a_0==$a_1){
  	 $b+=1;  
}   
if($a_1==$a_2){ 
  	$b+=1;
} 
if($a_2==$a_3){
  	$b+=1; 
}  
if($a_3==$a_4){
   	$b+=1;
}    
if($a_4==$a_5){
   	$b+=1; 
} 
//重複を防ぐ
if($a_0==$a_2){
     $b-=1;  
  } 
if($a_1==$a_3){
     $b-=1;  
  } 
if($a_2==$a_4){
     $b-=1;  
  } 
if($a_3==$a_5){
     $b-=1;  
  } 
if($a_4==$a_6){
     $b-=1;  
  } 

echo $b;//2
*/  
?>     
