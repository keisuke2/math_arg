#問題3
#10000番目の素数を求めてください
#素数そすう( Prime number)とは…
#1より大きい自然数で、1とその数自身以外のどのような自然数でも割り切れない数。1とその数以外、正の約数がない数。
repeat = 10
while index < repeat:#9回繰り返す。 indexは現在素数かどうか調べている数
	n +=1#１週するたびに素数の値を増やす
	isPrime = True
	for p in range(2,n):#値が2〜nまでの安易の値  n(素数) p(=2~現在確認中の素数いないの数 )
		if n%p==0:#素数が2-素数以内の数で割り切れるか確認
			isPrime = False
			break
		if isPrime:
			index +=1#
print (n)#素数の値を出力