<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  $peso = 70; 
  $altura = 1.70; 
  $imc = $peso/($altura*$altura); 
  
  if ($imc < 18.5){
    echo "Seu imc é:$imc";
    echo '<br>';
    echo "Excesso de magreza"
  ;} else if ($imc < 25){
    echo "Seu imc é:$imc";
    echo '<br>';
    echo "Peso normal"
  ;} else if ($imc < 30){
    echo "Seu imc é:$imc";
    echo '<br>';
    echo "Excesso de peso"
  ;} else if ($imc < 35){
    echo "Seu imc é:$imc";
    echo '<br>';
    echo "Obsidade grau 1"
  ;} else if ($imc < 40){
    echo "Seu imc é:$imc";
    echo '<br>';
    echo "Obsidade grau 2"
  ;} else {
    echo "Seu imc é:$imc";
    echo '<br>';
    echo "Obsidade grau 3"
  ;}
  ?>
</body>
</html> 