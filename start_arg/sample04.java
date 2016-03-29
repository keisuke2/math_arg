import java.util.*;
public class sample04{
	public static void main(String[] args){
		int [] num={12,13,11,14,10};
		for(int $i=0;$i<num.length;$i++){
			int min=$i;
			for(int k=$i+1;k<num.length;k++){
				if(num[k]<num[min]){
					min=k;
				}
			}
		int w =num[$i];
		num[$i]=num[min];
		num[min]=w;
		}
		System.out.println(Arrays.toString(num));
		//[10, 11, 12, 13, 14]
	}
}