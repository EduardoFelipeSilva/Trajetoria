numero = []
for i in range (1,11):
    listaValores=(int(input('Digite os seus valores aqui')))
    numero.append(listaValores)
total = sum(numero)
media = total/len(numero)
print(media)
