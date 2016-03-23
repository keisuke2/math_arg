public class sample0_05{
		public static void main(String[] args){
			int [] array={12,13,11,14,10};
			int max=array[0];
			for(int i=1;i<array.length-1;i++){
				if(array[i]>max){
					max=array[i];
				}
			}
			System.out.println(max);
		}
}