public class sample01{

	public static void main(String[] args){
		int a[]={4,2,3,5,1};

		for(int i=0;i<a.length-1;i++){

			if(a[i]==5){
				System.out.println(a[i]);
				System.out.println("探索終了");
			}
		}
	}
}