
public class q01{
	public static void main(String[] args){
		int num =11;
		while(true){
		String num_10 = String.valueOf(num);//数値から文字列に変換。
		String num_2 = Integer.toBinaryString(num);//2進数に変換
		String num_8 = Integer.toOctalString(num);

		StringBuffer num_sb_10 = new StringBuffer(num_10);//StringBufferを使い、reverse（）を使えるようにする。
		StringBuffer num_sb_2 = new StringBuffer(num_2);
		StringBuffer num_sb_8 = new StringBuffer(num_8);
		String num_r_10 = num_sb_10.reverse().toString();//反転させ文字列に変換する。
		String num_r_2 = num_sb_2.reverse().toString();
		String num_r_8 = num_sb_8.reverse().toString();

  		if(num_10.equals(num_r_10)&&num_2.equals(num_r_2)&&num_8.equals(num_r_8)){//文字列同士の比較に使える。
  			System.out.println("文字列の並びを反転しました");
			System.out.println(num);
			break;
  		}			
			num +=2;			
		}
	}
}

/*
1. オブジェクトの比較
オブジェクトの比較は、そのオブジェクトの参照が一致しているかを比較するため、同じ値であっても参照が異なる場合には true にはなりません。
文字列の場合.equalsを使えば文字列の値で比較することができる。

2. StringBuffer
スレッドセーフな可変の文字列。文字列バッファは String と似ていますが、変更できる点が異なります。
.reverseなど文字列の中身を変える必要があるときは、変更可能なStringBufferを浸かる


http://log.nissuk.info/2012/03/java.html?m=1
http://www.okapiproject.com/java/java_ref/foundation/manual_06.htm
*/
