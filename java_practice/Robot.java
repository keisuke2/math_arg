public class Robot{
	//名前
	private String name;


	//コンストラクタ：new演算子でインスタンスを作成すると、実際にはコンストラクタという特別なメソッドが呼ばれる。
	public Robot(String name){
		this.name=name;//引数nameの値をインスタンス変数にnameに代入する。
	}
	//挨拶をする
	public void sayHello(){
		System.out.println("こんにちは");
	}
	public String getName(){
		return name;
	}
}