pares = []
for i in range (1,11):
    numero=(int(input('Digite os seus valores aqui')))
    if numero % 2 ==0:
        pares.append(numero)
soma = sum(pares)
print(soma)
