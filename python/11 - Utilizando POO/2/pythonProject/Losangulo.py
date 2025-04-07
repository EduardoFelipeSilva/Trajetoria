from FiguraGeometrica import FiguraGeometrico

class Losango(FiguraGeometrico):
    def dados(self,largura,altura):
        self.largura = float(input('Digite a largura do losangulo'))
        self.altura = float(input('Digite a altura do losangulo'))
    def calculaArea(self):
        self.resultado = (self.largura*self.altura)/2
    def exibirResultado(self):
        print(self.resultado)