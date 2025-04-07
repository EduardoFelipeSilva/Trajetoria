<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  $nota1 = 10; 
  $nota2 = 5; 
  $media = ($nota1 + $nota2)/2; 
  
  echo "Sua média final é $media"; 
  echo '<br>';
  if ($media >=7){
    echo "Você está aprovado"
  ;} else {
    echo "Você está reprovado"
  ;}
  ?>
</body>
</html>