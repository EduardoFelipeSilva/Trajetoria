from pessoaFisica import PessoaFisica

class Funcionario(PessoaFisica):

    def __init__(self,cpf,nome,telefone,email,dataNascimento,pais,registro,carteiraTrabalho,pis):
        super().__init__(cpf,nome,telefone,email,dataNascimento,pais)
        self.registro = registro
        self.carteiraTrabalho = carteiraTrabalho
        self.pis = pis

funcionario1 = Funcionario(25848485,'Eduardo',11968053053,'eduardo.ademir@gmail.com','27/04/1998','Brasil',202225151,81188181,515124)
funcioanrio2 = Funcionario(34358485,'Fernada',11968156053,'fernandaluiza@gmail.com','19/09/2004','Brasil',20225454,24455645,24515)


print(funcionario1.getCpf(),funcionario1.getNome(),funcionario1.getTelefone(),funcionario1.getEmail(),funcionario1.getDataNascimento(),funcionario1.getPais(),funcionario1.registro,funcionario1.carteiraTrabalho,funcionario1.pis)

