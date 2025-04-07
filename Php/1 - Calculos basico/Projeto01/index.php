<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
  $num1 = 5; 
  $num2 = 5; 
  $cont = 0; 

  echo 'Soma';
  echo '<br>';
  $operacao = $num1 + $num2;
  echo  $operacao; 
  echo '<br>';
  echo 'Subtracao';
  echo '<br>';
  $operacao = $num1 - $num2; 
  echo $operacao;
  echo '<br>'; 
  echo 'Multiplicacao';
  echo '<br>';
  $operacao = $num1 * $num2; 
  echo $operacao; 
  echo '<br>';
  echo 'Divisao';
  echo '<br>';
  $operacao = $num1 / $num2; 
  echo $operacao; 
  echo '<br>';
  echo 'Resto';
  echo '<br>';
  $operecao = $num1 % $num2; 
  echo $operacao; 
  echo '<br>';
  echo 'Potencia';
  echo '<br>';
  $operacao = $num1 ** $num2; 
  echo $operacao; 

  ?>
    
</body>
</html>