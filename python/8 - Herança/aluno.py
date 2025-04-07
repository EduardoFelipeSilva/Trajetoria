from pessoa import Pessoa

class Aluno(Pessoa):

    def __init__(self,nome,idade,peso,rm):
        super().__init__(nome,idade,peso)
        self.rm = rm

a1 = Aluno('Maria',12,23,'rm11')


print(a1.nome , a1.idade)