var nome = prompt ("Digite o nome do funcionario");
var salario = prompt ("Digite o salario atual do funcionario");
if (salario <= 1500) {
var aumento = salario*0.20; 
var novoSalario = parseInt(salario) + aumento; 
console.log("<p>", "Nome do funcionario é", nome, "<p>","O antigo salario era",salario, "<p>","A faixa de reajusto é 20%","<p>","O novo salario sera",novoSalario);
document.write ("<p>","Nome do funcionario é :", nome);
document.write ("<p>","O antigo salario era:", salario);
document.write ("<p>","A faixa de reajusto é 20%:");
document.write ("<p>","O novo salario sera :", novoSalario);
}
else {
var aumento = salario*0.10; 
var novoSalario = parseInt(salario) + aumento; 
console.log("<p>", "Nome do funcionario é", nome, "<p>","O antigo salario era",salario, "<p>","A faixa de reajusto é 10%","<p>","O novo salario sera",novoSalario);
document.write ("<p>","Nome do funcionario é: ", nome);
document.write ("<p>","O antigo salario era: ", salario);
document.write ("<p>","A faixa de reajusto é 10%: ");
document.write ("<p>","O novo salario sera: ", novoSalario);
}
