from FiguraGeometrica import FiguraGeometrico

class Quadrado(FiguraGeometrico):
    def dados(self,lado):
        self.lado = float(input('Digite o lado do seu quadrado:'))
    def calculaArea(self):
        self.resultado = self.lado*self.lado
    def exibirResultado(self):
        print(self.resultado)