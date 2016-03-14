
public class q01{
	public static void main(String[] args){
		int num =13;
		while(num<35){			
		String num_s = String.valueOf(num);//数値から文字列に変換
		StringBuffer bs = new StringBuffer(num_s);
		StringBuffer sb = new StringBuffer(num_s);//StringBufferを使い、reverse（）を使えるようにする。
		String bs2 = bs.toString();//文字列に変換する。
		String sb2 = sb.reverse().toString();//反転させ文字列に変換する
  		if(bs2.equals(sb2)){//文字列同士の比較に使える。
  			System.out.println("文字列の並びを反転しました");
			System.out.println(num);
			break;
  		}			
			num +=2;			
		}
	}
}


//http://log.nissuk.info/2012/03/java.html?m=1

//http://www.okapiproject.com/java/java_ref/foundation/manual_06.htm


/*

1. オブジェクトの比較
オブジェクトの比較は、そのオブジェクトの参照が一致しているかを比較するため、同じ値であっても参照が異なる場合には true にはなりません。
http://www.okapiproject.com/java/java_ref/foundation/manual_06.htm
instanceof はオブジェクトの生成元となった型を評価するための演算子です。

*/


