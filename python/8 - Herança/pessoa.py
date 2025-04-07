class Pessoa:

    def __init__(self,nome,idade,peso):
        self.__nome = nome
        self.__idade = idade
        self.__peso = peso

    def cadastrarPessoa(self):
        self.__nome = input('Digite seu nome: ')
        self.__idade = int(input('Digite sua idade: '))
        self.__peso = float(input('Digite seu peso:'))

    def exibirPessoa(self):
        print(self.__nome, self.__idade, self.__peso)

    #def setNome(self, nome):
        #self.__nome = nome

    def getNome(self):
        return self.__nome

    @property
    def nome(self):
        return self.__nome

    @nome.setter
    def nome(self, nome):
        self.__nome = nome

    @property
    def idade(self):
        return self.__idade

    @idade.setter
    def idade(self, idade):
        self.__idade = idade
