repeat = 10

while index<repeat:
	n +=1
	isPrime = True
	for p in range(2,n):
		if n%p==0:
			isPrime = False
			break
		if isPrime:
			index +=1
print (n)