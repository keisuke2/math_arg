
public class q01{


	public static void main(String[] args){
		//System.out.println("Javaの世界へようこそ");

		int num =11;

		while(num<35){			
		String num_s = String.valueOf(num);//数値から文字列に変換
		StringBuffer bs = new StringBuffer(num_s);
		StringBuffer sb = bs;// 子クラスをつくり継承を行う。親クラスには影響しない
  		sb.reverse();//オブジェクト内の情報を変換する 
  		if(bs==sb){//親クラスと子クラスで比較をしてみる
  			System.out.println("文字列の並びを反転しました");
			System.out.println(num_r);
			break;

  		}
			System.out.println(num_r);
			System.out.println(num_s);
			num +=2;
			
		}
	}
}
//整数をつくる
//クラスをつくって整数値を渡す
//値を変換して返す
//継承して子クラスを作り、値を渡す。
//値を反転 reverseして返す
//親クラスで返した値と子クラスで返した値を比較する

public class A {
	public String field = "A";
}
public class SubA extends A {
	public String field = "SubA";
}
public class Main {
	public static void main(String[] args) {
		SubA subA = new SubA();
		A a = subA;

		System.out.println(subA.field); // SubA
		System.out.println(a.field); // A ← SubAになってほしい
	}
}

//http://log.nissuk.info/2012/03/java.html?m=1
