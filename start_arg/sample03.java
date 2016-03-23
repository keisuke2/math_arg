public class sample03{
	public static void main(String[] args){
		int[] arrayD={35, 50, 50, 60, 50 ,35};
		//int[] num = new int[]{35, 50, 50, 60, 50 ,35};
		int[] arrayH;
		arrayH = new int[11];

		for(int i=0;i<arrayD.length-1;i++){
			int k=arrayD[i]%11;
			while(true){
				if(arrayH[k]==0){
					arrayH[k]=arrayD[i];
					break;
				}else{
					k=(k+1)%11;
				}
			}
		}
		//System.out.println(arrayH);
	int x=36;
	int k=x%11;
	while(true){
			if(arrayH[k]==x){
			System.out.println("格納場所は");
			System.out.println(k);
			System.out.println("番目");
			break;
			}else{
				k=(k+1)%11;	//もう一度次の要素が空いていないか確かめる	
			}
		}
		}
}