<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel ="icon" href="img/matematica.jpg"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">

  </head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../Projeto2/index.php">Tabuada</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Projeto2/imc.php">Imc</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="..//Projeto2/Imposto.php">Imposto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Projeto2/maior.php" >Maior</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Projeto2/Triangulo.php" >Triangulo</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">
  <div class="row">
    <div class="col-md-12" id="imc">
    <h1> IMC </h1>
    <p>IMC é o acrônimo para Índice de Massa Corporal que serve para avaliar o peso do indivíduo em relação à sua altura e assim indicar se está dentro do peso ideal, acima ou abaixo do peso desejado.</p>
    
    <form action="imc.php" method ="get">
        <p>Peso: <input type="text" name="peso" placeholder="50"/></p>
        <p>Altura: <input type="text" name="altura" placeholder="1.63"/></p>

        <input type="submit" value = "Enviar"/>
    </div>
    <div class="col-md-6" id="imcresult">
    <?php

       

if(isset($_GET['peso'])){
    $peso=  floatval($_GET['peso']);     
}else{
    return false;
}

if(isset($_GET['altura'])){
    $altura =  floatval($_GET['altura']); 
}else{
    return false;
}

    $imc = $peso/($altura*$altura);

    $imcFormat = number_format($imc,2);
    

   if ($imc < 18.5){
    echo "Seu imc é:$imcFormat";
    echo '<br>';
    echo  '<img src="img/abaixo.png">';
  ;} else if ($imc < 25){
    echo "Seu imc é:$imcFormat";
    echo '<br>';
    echo  '<img src="IMG/normal.png" >';
  ;} else if ($imc < 30){
    echo "Seu imc é:$imcFormat";
    echo '<br>';
    echo  '<img src="IMG/sobrepeso.png" >';
  ;} else if ($imc < 35){
    echo "Seu imc é:$imcFormat";
    echo '<br>';
    echo  '<img src="IMG/grau1.png" >';
  ;} else if ($imc < 40){
    echo "Seu imc é:$imcFormat";
    echo '<br>';
    echo  '<img src="IMG/grau2.png">';
  ;} else {
    echo "Seu imc é:$imcFormat";
    echo '<br>';
    echo  '<img src="IMG/grau3.png" >';
  ;}
    ?>
    </div>
  </div>
</div>

        
       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

