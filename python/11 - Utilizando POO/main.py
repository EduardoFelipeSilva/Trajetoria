from FiguraGeometrica import FiguraGeometrico
from Quadrado import Quadrado
from Circulo import Circulo
from Retangulo import Retangulo
from Losangulo import Losango

# Criando instâncias das classes
quadrado1 = Quadrado()
losango1 = Losango()
Retangulo1 = Retangulo()
Circulo1 = Circulo()

# Chamando o método falar em diferentes instâncias
quadrado1.dados(6)
quadrado1.calculaArea()
quadrado1.exibirResultado()

losango1.dados(30,40)
losango1.calculaArea()
losango1.exibirResultado()

Circulo1.dados(5)
Circulo1.calculaArea()
Circulo1.exibirResultado()


Retangulo1.dados(10,20)
Retangulo1.calculaArea()
Retangulo1.exibirResultado()




