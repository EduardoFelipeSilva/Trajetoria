from Calculadora import CalculadoraBasica

operacao = int(input("digite a operação que você quer fazer 1 Soma, 2 Subtrair, 3 Dividir e 4 Multplicar"))
match operacao:
    case 1:
        soma = CalculadoraBasica()
        soma.calculoSoma()
        soma.exibirResultadoSoma()


    case 2:
        subtrarir = CalculadoraBasica()
        subtrarir.calculoSubtrair()
        subtrarir.exibirResultadoSubtrair()

    case 3:
        dividir = CalculadoraBasica()
        dividir.calculoDividir()
        dividir.exibirResultadoDividir()

    case 4:
        multiplicar = CalculadoraBasica()
        multiplicar.calculoMultiplicar()
        multiplicar.exibirResultadoMultiplicar()


