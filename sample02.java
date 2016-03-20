import java.util.*;
public class sample02{
	public static void main(String[] args){
	int a[]={11,13,17,19,23,29,31};
	Arrays.sort(a);
	int head=0;
	int tail=6;
		while(true){
			if(head>tail){
				System.out.println("見つかりませんでした");
				break;
			}
			int center=(head+tail)/2;
			if(a[center]==17){
				System.out.println(a[center]);
				break;
			}
			if( a[center]<17){
				head=center+1;
			}else{
				tail=center-1;
			}
		}		
	}
}
