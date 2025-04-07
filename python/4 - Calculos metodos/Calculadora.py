class CalculadoraBasica:
    #Soma

    def calculoSoma(self):
        self.n1 = int(input('Digite o 1º Numero:'))
        self.n2 = int(input('Digite o 2º Numero:'))
        self.resultado = (self.n1+self.n2)


    def exibirResultadoSoma(self):
        print(self.resultado)

    #Subtrair

    def calculoSubtrair(self):
        self.n1 = int(input('Digite o 1º Numero:'))
        self.n2 = int(input('Digite o 2º Numero:'))
        self.resultado = (self.n1-self.n2)


    def exibirResultadoSubtrair(self):
        print(self.resultado)

    #Divisao

    def calculoDividir(self):
        self.n1 = int(input('Digite o 1º Numero:'))
        self.n2 = int(input('Digite o 2º Numero:'))
        self.resultado = (self.n1/self.n2)


    def exibirResultadoDividir(self):
        print(self.resultado)

    #Multiplicar

    def calculoMultiplicar(self):
        self.n1 = int(input('Digite o 1º Numero:'))
        self.n2 = int(input('Digite o 2º Numero:'))
        self.resultado = (self.n1*self.n2)


    def exibirResultadoMultiplicar(self):
        print(self.resultado)
