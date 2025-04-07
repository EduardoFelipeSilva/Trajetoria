from FiguraGeometrica import FiguraGeometrico

class Circulo(FiguraGeometrico):
    def dados(self,circunferencia):
        self.circunferencia = float(input('Digite a circunferencia do circulo'))

    def calculaArea(self):
        pi = 3.14
        self.resultado = self.circunferencia * pi
    def exibirResultado(self):
            print(self.resultado)