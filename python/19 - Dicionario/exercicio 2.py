import requests

link = f"http://api.tempo.com/index.php?api_lang=br&localidad=12996&affiliate_id=tk99un15usak&v=3.0"

requisicao = requests.get(link)
dicRequisicao = requisicao.json()


data = dicRequisicao['day']



print(f"Valor do dolar: {data}")
