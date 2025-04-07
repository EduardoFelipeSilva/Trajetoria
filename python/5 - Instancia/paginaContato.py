class contato:

    def cadastrarContato(self):
        print('Seu nome(obrigatório)')
        self.nomeContato = input()
        print('Seu e-mail(obrigatório)')
        self.emailContato = input()

    def assuntoContato(self):
        print('Assunto')
        self.assuntoContato = input()

    def mensagemContato(self):
        print('Sua mensagem')
        self.mensagemContato = input()

        print('ENVIAR')
