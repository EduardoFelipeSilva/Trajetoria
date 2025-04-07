import requests

link = f"https://economia.awesomeapi.com.br/all"

requisicao = requests.get(link)
dicRequisicao = requisicao.json()

dolar_brl = dicRequisicao['USD']['high']
peso_brl = dicRequisicao['ARS']['high']
eth_brl = dicRequisicao['ETH']['high']

print(f"Valor do dolar: {dolar_brl}")
print(f"Valor do peso Argentino: {peso_brl}")
print(f"Valor do Ethereun : {eth_brl}")