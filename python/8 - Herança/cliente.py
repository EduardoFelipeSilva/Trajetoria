from pessoaFisica import PessoaFisica

class Cliente(PessoaFisica):

    def __init__(self,cpf,nome,telefone,email,dataNascimento,pais,clienteDesde):
        super().__init__(cpf,nome,telefone,email,dataNascimento,pais)
        self.clienteDesde = clienteDesde

cliente1 = Cliente(25848485,'Eduardo',11968053053,'eduardo.ademir@gmail.com','27/04/1998','Brasil',2022)
cliente2 = Cliente(34358485,'Fernada',11968156053,'fernandaluiza@gmail.com','19/09/2004','Brasil',2022)


print(cliente1.getCpf(),cliente1.getNome(),cliente1.getTelefone(),cliente1.getEmail(),cliente1.getDataNascimento(),cliente1.getPais(),cliente1.clienteDesde)