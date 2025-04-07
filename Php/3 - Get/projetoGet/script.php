<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $observacao = $_POST['observacao'];
    $estados = $_POST['estados'];
     

    ?>
    <style>
    header{
      text-align: center;
      color: black;
    }
   
    h1{
       font-size: 35px;
    }
    section div{
       
        display: flex;
      flex-direction: row-reverse;
        justify-content: center;
        align-items: center;
    }
   
    section div figure{
        display: flex;
      align-items: start;
       justify-content: start;
        width: 10%;
    }
    body{
    background-color: rgb(170, 155, 206);
    display: grid;
    place-items: center;
    }
.dados{
        display: flex;
        gap: 10px;
        justify-content: center;
        font-size: 20px;
        background-color: rgb(201, 228, 206);
       width: 600px;
      height: 750px;
    }
    </style>
    </head>
<body>
<header>
        <?php  
        echo "<h1>Olá $nome</h1>";
        ?>
    </header>
  <section>
 
        <div>
            <h1>Meus Dados</h1>
          
        </div>
        <div class="dados">
            <?php
                echo "Genêro: $genero <br>" . "Data nascimento: $idade <br>" . "Email: $email <br>". "Estado: $estados <br>". "Observação: $observacao";
                if(isset($_POST{"interesses"})){
                    echo "<br> Os seus interesses são:<br>";
                    foreach($_POST["interesses"] as $interesses){
                        echo " - " .$interesses . "<br>"; 
                    }
                
                } ELSE {
                    echo "<br>" . "Voce é desinteressante";
                }

            ?>
        </div>
    
  </section>

</body>
</html>


