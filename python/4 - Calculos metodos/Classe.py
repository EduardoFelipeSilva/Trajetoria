class Pessoa:

    def cadastrarPessoa(self):
        self.nome = input('Digite seu nome: ')
        self.idade = int(input('Digite sua idade: '))
        self.peso = float(input('Digite seu peso:'))

    def exibirPessoa(self):
        print(self.nome, self.idade, self.peso)


