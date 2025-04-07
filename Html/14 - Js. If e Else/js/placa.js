var placa = prompt ("Digite o ultimo numero de sua placa de carro");
 
switch (placa) {
    case '1':
    case '2':
        document.write ("<p>","Segunda-feira");
        break;
    case '3':
    case '4':
        document.write ("<p>","Terça-feira");
        break;
    case '5':
    case '6':
        document.write ("<p>","Quarta-feira");
        break;
    case '7':
    case '8':
        document.write ("<p>","Quinta-feira");
        break;
    case '9':
    case '0':
        document.write ("<p>","Sexta-feira");
        break;
    default : 
        document.write ("<p>","Dia invalido");
        break;   
}
