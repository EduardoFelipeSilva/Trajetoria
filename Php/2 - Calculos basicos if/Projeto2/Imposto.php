<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imposto</title>
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
    <div class="col-md-12" id="imposto">
    <h1> Imposto </h1>
    <p>Precisa de ajuda com o calculo de seu imposto? Adicione a taxa  de lucro para realizar o calculo: </p>
    
    <form action="Imposto.php" method ="get">
        <p>taxa: <input type="text" name="taxa"/></p>
        <p>valor: <input type="text" name="valor"/></p>

        <input type="submit" value = "Calcular"/>
    </div>
    <div class="col-md-8" id="impostoresult">
      

    <?php

if(isset($_GET['taxa'])){
    $taxa=  ($_GET['taxa']); 
}else{
    return false;
}

if(isset($_GET['valor'])){
    $valor =  ($_GET['valor']); 
}else{
    return false;
}
if(isset($_GET['taxa']) && isset ($_GET['valor'])){
$conta = ($valor * $taxa)/100;
$venda = $valor + $conta;
echo "Sua taxa de lucro será: ";
echo "$venda";
} else {
    return false;
} 
echo '<img src="img/resultado.jpg" width="400px">'
?>
    </div>
  </div>
</div>

        
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

