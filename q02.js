
/*
1000~9999のうち、上記の条件を満たす数を求める*/
var op =["+","-","*","/",""];//opにセットする
for(i =1000; i<10000; i++){//
	var c =String(i);//文字列に変換
		//console.log(c);
		//console.log(op.length);
	for(j=0; j<op.length;j++){//op.length=5  j=0,1,2,3,4
		for(k=0; k<op.length;k++){// k=0,1,2,3,4
			//console.log(k);
			for(l=0; l<op.length;l++){//l=0,1,2,3,4
				/*
				console.log(op[0]); +
				console.log(op[1]); -
				console.log(op[2]); *
				console.log(op[3]); /
				console.log(op[4]);   なにもない。演算子を入れずにつなげる 例　0*1 01　
				*/
				//文字列をぶんかいして、数字の間に+,-,*,/を挿入していく処理
				val = c.charAt(3)+op[j]+c.charAt(2)+op[k]+c.charAt(1)+op[l]+c.charAt(0);
				val1 = c.charAt(3)+c.charAt(2)+c.charAt(1)+op[l]+c.charAt(0);
				//console.log(val1);
				//console.log(i);
				console.log(val);
				console.log(val.length);
				if(val.length>4){
					if(i==eval(val)){//eval関数　演算子を無視してくれる。
						console.log(val +"="+i);//演算子の値と　その時のi　の値を出力する。
					}
				}
			}	
		}
	}
}

/*
アルゴリズム
1000-9999までの数をつくる
４桁目のためのループ演算子を作る
3桁目のためのループ演算子を作る
2桁目のためのループ演算子を作る
*　桁数の大きいのから順に挿入していくため4桁めから作る
けたごとに分解し、作った演算子を代入しval変数に入れる
答えが左から読んでも右から読んでも同じ数なら出力する
*/