  <?php

//  $a[] = {35, 50, 50, 60, 50, 35}
$a = array( 35, 50, 50, 60, 50 ,35); 
 //echo  $a[0];  
 $c=asort($a);
echo $c;   
   
 $b=0; 
  if( $a[0]==$a[1]){
  	 $b=+1;  
  }   
  if( $a[ 1]==$a[2]){ 
  	$b=+1;
  } 
  if( $a[ 2]==$a[3]){
  	$b=+1; 
  }  
   if( $a[3]==$a[4]){
   	$b=+1;
  }    
   if( $a[4]==$a[5]){
   	$b =+1; 
  } 
   if($a[5]==$a[0]){
   	$b =+1; 
  }   
  echo $b;  
  ?>     
