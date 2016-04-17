import java.util.*;
public class sample05{
	public static void main(String[] args){
		int array[]={5,3,4,1};
		for(int k=0;k<array.length;k++){
			for(int i=3;i>k;i--){
				if(array[i-1]>array[i]){
					int w=array[i-1];
					array[i-1]=array[i];
					array[i]=w;
				}
			}
		}
		System.out.println(Arrays.toString(array));
	} 
}