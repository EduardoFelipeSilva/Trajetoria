var aniversario = prompt ("Digite o Mês de seu aniversario");
 
switch (aniversario) {
    case '3':
    case '4':
    case '5':
        document.write ("<p>","Outono");
        break;
    case '6':
    case '7':
    case '8':
        document.write ("<p>","Inverno");
        break;
    case '9':
    case '10':
    case '11':
        document.write ("<p>","Primavera");
        break;
    case '12':
    case '1':
    case '2':
        document.write ("<p>","Verão");
        break;
    default : 
        document.write ("<p>","Mês invalido");
        break;   
}
