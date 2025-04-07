numero = int(input("digite o numero"))
for i in range(1, 1001):
    par = i%2
    if (par != 0):
     print(i)
     if i == numero: break


