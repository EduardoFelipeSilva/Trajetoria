<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangulo</title>
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
    <div class="col-md-12" id="tri">
    <h1> Triangulos</h1>
    <p>A classificação de um triângulo é uma maneira de categorizá-lo. Todos os triângulos possuem três lados e três ângulos, mas dependendo das características desses lados, podemos identificar diferentes tipos de triângulo.
    classificar um triângulo pelos lados dele: considerando os aspectos sobre os lados do triângulo. O triângulo pode ser equilátero, isósceles ou escaleno.</p>
    <form action="triangulo.php" method ="get">
        <p>Primeiro Valor: <input type="text" name="primeiro"/></p>
        <p>Segundo valor: <input type="text" name="segundo"/></p>
        <p>Terceiro valor: <input type="text" name="terceiro"/></p>

        <input type="submit" value = "Cadastrar"/>
    </div>
    <div class="col-md-8" id="triresult">
    <?php

       

if(isset($_GET['primeiro'])){
    $primeiro= ($_GET['primeiro']);     
}else{
    return false;
}

if(isset($_GET['segundo'])){
    $segundo =  ($_GET['segundo']); 
}else{
    return false;
}
if(isset($_GET['terceiro'])){
    $terceiro =  ($_GET['terceiro']); 
}else{
    return false;
}

    if ($primeiro != $segundo && $primeiro != $terceiro){
        echo "o Triangulo é Escaleno ja que todos os lados são diferentes";
        echo  '<img src="img/escaleno.png" width="200px">';
    } else if ($primeiro == $segundo && $primeiro == $terceiro){
        echo "O triangulo é Equilatero ja que pelo menos 2 lados são iguais";
        echo  '<img src="img/equilatero.png" width="200px">';
    } else {
        echo "O triangulo é Isóceles ja que todos todos os lados são iguais";
        echo  '<img src="img/isoceles.png" width="200px">';
    }
    

 
    ?>
    </div>
  </div>
</div>

    

        
       

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>