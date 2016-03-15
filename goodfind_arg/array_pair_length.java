import java.util.*;
public class array_pair_length{
	public static void main(String[] args){
		int[] num={35, 50, 50, 60, 50 ,35};
		//int[] num = new int[]{35, 50, 50, 60, 50 ,35};
		Arrays.sort(num);//反転させる
		int b =0;
		for(int i = 0;i < num.length;i++){
			if(i<4){
				if(num[i]==num[i+1]){//配列の配列は、最初に大きさを宣言(※1)しますがその大きさを超えた場所を操作しようとするとエラーになる。
				b++;
				}
			}
			if(i<3){//４以上だと配列の大きさを超えてエラーが出る。		
				if(num[i]==num[i+2]){//ペアの重複を防ぐ
				b--;
				}
			}			
		}
		System.out.println(b);
	}
}
/*
■配列の値を小さい順にする
Arrays.sort(); 配列の値はきれいに小さいものから順番に並べ替えられて表示されます
Arraysはjava.utilパッケージにありますので、これをimportするのを忘れないように。
http://allabout.co.jp/gm/gc/80595/

■　配列は大きさをこえてはいけない。
エラーメッセージ
Exception in thread "main" java.lang.ArrayIndexOutOfBoundsException: 6
	at array_pair_length.main(array_pair_length.java:13)

http://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q1066987630