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
                <p>para se manter conectado conosco, faça login com suas informações pessoais</p>
              
            </div>
        </section>
        <section class="section-form">
            <div class="container-screen">
                <h2>Entrar</h2>
                <div class="redes">
                    <div>
                        <img src="img/facebook.png" alt="">
                        <img src="img/google.png" alt="">
                    </div>
                    <span>use seu e-mail para Entrar</span>
                </div>
                <div>
                    <form action="#">
                        <input type="email" name="" id="" placeholder="ex:eduardo@gmail.com">
                        <input type="password" name="" id="" placeholder="Senha">
                            <a class="esqSenha" href="#">Esqueci a senha</a>
                        <input type="submit" value="Entrar">
                        <button class="btn-cadastrar"  type="submit"><a class="nav-link active" aria-current="page" href="../area-cliente/cadastrarUsuario.php">Cadastrar</button>
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