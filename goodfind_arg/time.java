public class time{
	public static void main(String[] args){
		int time=3661;
		int h=time/3600;
		int m=(time-(3600*h))/60;
		int s=(time-(3600*h)-(60*m));
		System.out.println(h+"時間"+m+"分"+s+"秒");
	}
}