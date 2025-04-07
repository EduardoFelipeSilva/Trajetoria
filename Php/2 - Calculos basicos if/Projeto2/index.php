<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel ="icon" href="IMG/matematica.jpg"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">

</head>
<body style="height: 100vh;">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" >
 
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
  <div class="row" id="tata">
    <div class="col-md-12" id="tabuada">
<h4> Tabuada </h4>
    <p>Em matemática, uma tabuada de multiplicar ou tabuada de multiplicação é uma tabela usada para definir uma operação de multiplicação de um sistema algébrico. 
    Há livros antigos que se referem à tabuada como tabuada de Pitágoras.</p>
    
      <form action="index.php" method ="get" id="tabuadaform">
          <p>Numero desejado: <input type="number" name="numero"/></p>
         
          <input type="submit" value = "Enviar"/>
    </div>
    <div class="col-md-3" id="tabuadaresult">
    <?php

$numero=0;

if(isset($_GET['numero'])){
  $numero = $_GET['numero'];
  for ($i = 0 ;$i <=10 ; $i++){
    
    $conta = $numero*$i;
   echo $numero. "x".$i. "=". "$conta<br>"; 
  
}
}
?>
    </div>
  </div>
</div>
</div>

            
    
    

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>