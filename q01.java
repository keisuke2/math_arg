//http://www1.bbiq.jp/takeharu/java74.html

/*
public class q01{


	public static void main(String[] args){
		System.out.println("Javaの世界へようこそ");
	}
}
*/

//import java.util.*;

public class q01{


	public static void main(String[] args){
		//System.out.println("Javaの世界へようこそ");

		int num =11;

		while(num<35){			
		String num_s = String.valueOf(num);//数値から文字列に変換
		StringBuffer bs = new StringBuffer(num_s);
		StringBuffer sb = bs;//new StringBuffer(num_s);//文字列をStringオブジェクトに変換
  		sb.reverse();//オブジェクト内の情報を変換する 
  		//参照しているため上手くいかない。sbはbsオブジェクトを参照しているため、sbの中身を反転させるとbsの値も変換されてしまう。
  		//元のオブジェクトには影響を与えないような工夫が必要

  		//親クラスを作る 
  		//子クラスを作る 
  		//子クラスの値を反転させる
  		//比較演算する。　同じオブジエクトを参照していることにはならないのか？
  		if(bs==sb){
  			System.out.println("文字列の並びを反転しました");
			System.out.println(num_r);
			break;

  		}
		/*	
			if(bs.equals(sb)){//文字列にされた数字と文字列の中身を反転させた数字を比較する
			System.out.println("文字列の並びを反転しました");
			System.out.println(num_r);
			//System.out.println(sb);
			break;
			}
		*/
			System.out.println(num_r);
			System.out.println(num_s);
			num +=2;
			
			
			
			//System.out.println(sb);
			//System.out.println("文字列の並びを反転しました");
		}
	}
}

 
/*
int num =12321;
String num_s = String.valueOf(num);//数値から文字列に変換
StringBuffer bs = new StringBuffer(num_s);
StringBuffer sb = bs;//文字列をStringオブジェクトに変換
//StringBuffer sb = new StringBuffer(num_s);//文字列をStringオブジェクトに変換
//StringBuffer bs = sb;
  sb.reverse();//オブジェクト内の情報を変換する

  if(bs.equals(sb)){
  System.out.println("文字列の並びを反転しました");
  System.out.println(sb);

  }
 
 }
}
*/

/*

1. オブジェクトの比較
オブジェクトの比較は、そのオブジェクトの参照が一致しているかを比較するため、同じ値であっても参照が異なる場合には true にはなりません。
http://www.okapiproject.com/java/java_ref/foundation/manual_06.htm
instanceof はオブジェクトの生成元となった型を評価するための演算子です。

*/


