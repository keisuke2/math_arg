public class Main {
	public static void main(String[] args) {
		SubA subA = new SubA();
		A a = subA;

		if(subA.field2.reverse()==a.field){//比較できた！
			System.out.println(subA.field); // SubA
		}
		System.out.println(subA.field2); // SubA
		System.out.println(a.field); // A ← SubAになってほしい

		//値が同じなのにだめ　because参照しているオブジェクトがことなるから
		//子クラスのなかで反転させてしまえばどうなのか？
		//いや関係ない。親と子で今値は同じなのにできていないから。
		//違う。それは作り方にもんだいがあるから。親に影響
		//親クラスに影響あり。オブジェクト同士を比べるのは難しいのかもしれない
		//問題　比較演算は同一のオブジェクトからでしかできず　子クラスを変更すると親クラスも変えてしまう




		//明日はreverse関数をString型でできないかどうかしらべてみる
	}
}