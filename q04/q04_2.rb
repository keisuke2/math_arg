
#こんな風に修正して#
def cutbar(m, n, current) 
  if current >= n then
    ret = 0 
  elsif current < m then
    ret = 1 + cutbar(m, n, current * 2) 
  else
    ret = 1 + cutbar(m, n, current + m) 
  end
  p [ret, m, n, current]
  ret
end
puts cutbar(3, 20, 1)
#//codepad.org/YkFy2jDg#実行してみます#
