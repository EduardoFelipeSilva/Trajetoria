nota1, nota2, nota3, nota4 = map(float, input().split())
soma = (nota1*2) + (nota2*3) + (nota3*4) + (nota4*1)
media = soma/(2+3+4+1)
if(media<5.0):
    print('Media:',round(media,1))
    print('Aluno reprovado.')
elif (media <=6.9):
    print('Media:',round(media,1))
    print('Aluno em exame.')
    notaExame= float(input())
    print('Nota do exame:',notaExame)
    mediaFinal=(media+notaExame)/2
    if(mediaFinal>=5):
        print('Aluno aprovado.')
        print('Media final:', round(mediaFinal,1))
    else:
        print('Aluno reprovado.')
        print('Media final:',round(mediaFinal,1))
else:
    print('Media:',round(media,1))
    print('Aluno aprovado.')
