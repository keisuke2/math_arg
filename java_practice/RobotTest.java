public class RobotTest{
	public static void main(String[] args){
		/*
		Robot r1=new Robot("ロボット太郎");
		System.out.println( "名前"+r1.getName());
		r1.sayHello();
		*/
		SuperRobot r2;
		r2=new SuperRobot("天才ロボット");
		System.out.println("名前"+r2.getName());
		r2.sayHello();
		r2.sayGoodbye();
	}
}