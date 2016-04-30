per_day   = dict()  #初期化　からのdictを作る
user = []　#からの配列を作る。
for payment_log in PaymentLog.all()[:SAMPLING_NUM]:#１０回繰り返す。
    payment_log = filter_values_for_print(payment_log)
    price= payment_log['price']
    per_day["price"] = per_day.get("price", 0) + price #priceの初期値にどんどんpriceを足していく。=
    print per_day["price"] #売上の合計が表示される    
    user_id = payment_log['user_id']
    user += [user_id] #カッコをつけ得ないとバラバラの表示になる。
    print per_day["price"] /len(user)