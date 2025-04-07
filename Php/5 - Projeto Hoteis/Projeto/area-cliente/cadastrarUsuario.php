<body class="p-3 m-0 border-0 bd-example m-0 border-0">

    
    <!-- navbar -->
    
  <?php
  require_once "../componentes/navbar.php";
  ?>  
      <link rel="stylesheet" href="../css/telaLogin.css">

  <body>

  <main>
        <section class="section-cadastrar">
         
            <div>
                <h1>Bem vindo a Home Stay!</h1>
                <p>Para se manter conectado conosco, faça um cadastro com suas informações pessoais</p>
              
            </div>
        </section>
        <section class="section-form">
            <div class="container-screen">
                <h2>Cadastrar</h2>
                <div class="redes">
                    <div>
                        <img src="img/facebook.png" alt="">
                        <img src="img/google.png" alt="">
                    </div>
                    <span>Use seus dados para cadastrar um novo usuario</span>
                </div>
                <div>
                    <form method="post" action="../area-admin/usuario/controller.php" >
                        <input type="text" name="nome"  placeholder="Digite seu nome">
                        <input type="text" name="cpf" placeholder="Digite seu CPF">
                        <input type="email" name="email"  placeholder="Digite seu Email">
                        <input type="text" name="endereco"  placeholder="Digite seu endereço">
                        <input type="text" name="nascimento"  placeholder="Data de nascimento">
                        <input type="text" name="contato"  placeholder="Digite seu contato">
                        <input type="password" name="senha" placeholder="Digite uma senha">
                        <div class=" text-end p-3">
                  <input type="submit" class=" btn btn-success" value="Salvar" name="acao">
                </div>
      
                    </form>
                </div>
            </div>
        </section>
    </main>



    <?php
    require_once "../componentes/footer.php";
    ?>  
  
  </body>
</html>