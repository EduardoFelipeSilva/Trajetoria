class Aluno:
    def __init__(self,nome, idade,rm,cidade,curso,modulo,coordCurso,horarioCurso,email,telefone):
        self.__nome = nome
        self.idade = idade
        self.rm = rm
        self.cidade = cidade
        self.curso = curso
        self.modulo = modulo
        self.coordCurso = coordCurso
        self.horarioCurso = horarioCurso
        self.email = email
        self.telefone = telefone

    def setNome(self,nome):
        self.__nome = nome

    def setIdade(self,idade):
        self.idade = idade

    def setRm(self,rm):
        self.rm = rm

    def setCidade(self,cidade):
        self.cidade = cidade

    def setCurso(self,curso):
        self.curso = curso

    def setModulo(self,modulo):
        self.modulo = modulo

    def setCoorCurso(self,coordCurso):
        self.coordCurso = coordCurso

    def setHorarioCurso(self,horarioCurso):
        self.horarioCurso = horarioCurso

    def setEmail(self,email):
        self.email = email

    def setTelefone(self,telefone):
        self.telefone = telefone

    def getNome(self):
        return self.__nome

    def getIdade(self):
        return self.idade

    def getRm(self):
        return self.rm

    def getCidade(self):
        return self.cidade

    def getCurso(self):
        return self.curso

    def getModulo(self):
        return self.modulo

    def getCoorCurso(self):
        return self.coordCurso

    def getHorarioCurso(self):
        return self.horarioCurso

    def getEmail(self):
        return self.email

    def getTelefone(self):
        return self.telefone

