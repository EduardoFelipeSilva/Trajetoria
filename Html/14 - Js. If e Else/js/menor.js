var n = prompt ("digite o primeiro numero");
var n2 = prompt ("digite o segundo numero");

if (n < n2 ) {
document.write ("<p>","O maior numero é :",  n2);
document.write ("<p>","E o menor numero é :",  n);
}

else if (n2 <n) {
    document.write ("<p>","O maior numero é :",  n);
    document.write ("<p>","E o menor numero é :",  n2);
}

else {
    document.write ("<p>","Ambos os numeros sao iguais");
}
