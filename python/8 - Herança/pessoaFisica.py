class PessoaFisica:

    def __init__(self, cpf,nome,telefone,email,dataNascimento,pais):
        self.__cpf = cpf
        self.__nome = nome
        self.__telefone = telefone
        self.__email = email
        self.__dataNascimento = dataNascimento
        self.__pais = pais

    def cadastrarPessoa(self):
        self.__cpf = input('Digite seu cpf: ')
        self.__nome = input('Digite seu nome: ')
        self.__telefone = input('Digite seu telefone: ')
        self.__email = input('Digite seu email: ')
        self.__dataNascimento = input('Digite sua data de nascimento: ')
        self.__pais = input('Digite seu pais: ')

    def exibirPessoa(self):
        print(self.__cpf,self.__nome, self.__telefone, self.__email,self.__dataNascimento,self.__pais)

    def setCpf(self, cpf):
        self.__cpf = cpf

    def getCpf(self):
        return self.__cpf

    def setNome(self, nome):
        self.__nome = nome

    def getNome(self):
        return self.__nome

    def setTelefone(self, telefone):
        self.__telefone = telefone

    def getTelefone(self):
        return self.__telefone

    def setEmail(self, email):
        self.__email = email

    def getEmail(self):
        return self.__email

    def setDataNascimento(self, dataNascimento):
        self.__dataNascimento = dataNascimento

    def getDataNascimento(self):
        return self.__dataNascimento

    def setPais(self, pais):
        self.__pais = pais

    def getPais(self):
        return self.__pais
