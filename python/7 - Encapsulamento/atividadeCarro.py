class Carro:
    def __init__(self, nome, cor, modelo, ano):
        self.__nome = nome
        self.cor = cor
        self.modelo = modelo
        self.ano = ano

    def setNome(self, nome):
        self.__nome = nome

    def setCor(self, cor):
        self.cor = cor

    def setModelo(self, modelo):
        self.modelo = modelo

    def setAno(self, ano):
        self.ano = ano

    def getNome(self):
        return self.__nome

    def getCor(self):
        return self.cor

    def getModelo(self):
        return self.modelo

    def getAno(self):
        return self.ano