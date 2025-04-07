from FiguraGeometrica import FiguraGeometrico

class Retangulo(FiguraGeometrico):
    def dados(self,base,altura):
        self.base = float(input('Digite a base do retangulo'))
        self.altura = float(input('Digite a altura do ratangulo'))
    def calculaArea (self):
        self.resultado = self.base * self.altura
    def exibirResultado(self):
        print(self.resultado)
