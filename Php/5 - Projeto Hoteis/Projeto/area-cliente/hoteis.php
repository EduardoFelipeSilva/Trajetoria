<?php
require_once '../dao/HotelDao.php';
$hoteis = HotelDao::selectAll();

// $hoteiscidade = HotelDao::selectCidade();
// $hoteisquarto = HotelDao::selectQuarto();



?>

  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- navbar -->
    
    <?php
    require_once "../componentes/navbar.php";
    ?>  
   


    <div id="opcao" class="container text-center">
      <div class="row">
        <div class="col">
         
    <select class="form-select" aria-label="Default select example">
      <option selected>Para onde você vai?</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
        </div>
        <div class="col">
    
          <select class="form-select" aria-label="Default select example">
            <option selected>Data de check</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col">
     
    <select class="form-select" aria-label="Default select example">
      <option selected>Quem vai?</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
        </div>

        <div class="col">
    

            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
          </form>
              </div>
      </div>
    </div>




    <div id="card" class="container text-center">
      <div class="row">
    <?php foreach($hoteis as $hotel) { ?>
        <div class="col-md-4">
              <div class="card">
                <img src="../img/hoteis cliente/hotel1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?=$hotel[3]?></h5>
                  <p class="card-text"><?=$hotel[6]?></p>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Ver Mais informaçoes
                </button>

                 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">

                        <h1 class="modal-title fs-5" id="exampleModalLabel">Informaçoes sobre o hotel <?=$hotel[2]?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="informaçoes hotel">
                        <h1 id="nomeH"><?=$hotel[2]?> </h1>
                        <h1 id="estadoH"><?=$hotel[1]?> </h1>
                        <h1 id="cidadeH"><?=$hotel[3]?> </h1>
                        <h1 id="qtquartoH"><?=$hotel[4]?> </h1>
                        <h1 id="descH"><?=$hotel[5]?> </h1>
                        <h1 id="precoH"><?=$hotel[6]?> </h1>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Agendar reserva</button>

                      </div>
                    </div>
                  </div>
                </div>

                </div>

            </div>
            
          </div>
                                  <?php } ?>


  <!-- <div class="row">
    <div class="col">
      <div class="card">
        <img src="../img/hoteis cliente/hotel10.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Marabaia</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ver disponibilidades
        </button>
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Reservar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Finalizar</button>
              </div>
            </div>
          </div>
        </div>
    
        </div>
    </div>
  </div>

  
    
        </div>
    </div>
  </div>  -->


  <?php
    require_once "../componentes/footer.php";
    ?>  
  
  </body>
</html>