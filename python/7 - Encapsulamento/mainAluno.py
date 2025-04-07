from atividadeAluno import Aluno

a1 = Aluno ('Eduardo',25,180250,'Sãço Paulo','D.S.','2º','Rosanggela','13h20','eduardo.ademir@gmail.com',968053053)
print(a1.getNome())
print(a1.getIdade())
print(a1.getRm())
print(a1.getCidade())
print(a1.getCurso())
print(a1.getModulo())
print(a1.getCoorCurso())
print(a1.getHorarioCurso())
print(a1.getEmail())
print(a1.getTelefone())

a2 = Aluno (input("Escreva seu nome"),
            input("Escreva sua idade"),
            input("Escreva seu rm"),
            input("Escreva sua cidade"),
            input("Escreva seu curso"),
            input("Escreva seu Modulo"),
            input("Escreva quem é seu coordenador de curso"),
            input("Escreva seu horario de entrada"),
            input("Escreva seu email"),
            input("Escreva seu telefone"))
print(a2.getNome())
print(a2.getIdade())
print(a2.getRm())
print(a2.getCidade())
print(a2.getCurso())
print(a2.getModulo())
print(a2.getCoorCurso())
print(a2.getHorarioCurso())
print(a2.getEmail())
print(a2.getTelefone())




