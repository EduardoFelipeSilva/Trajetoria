
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    
      <!-- navbar -->
      
    <?php
    require_once "../componentes/navbar.php";
    ?>  
   
    <div id="carrosel">
    
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div id="foto" class="carousel-item active">
          <img src="../img/index cliente/hotel.png" >
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div id="foto" class="carousel-item">
          <img src="../img/index cliente/hotel.png" >
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div id="foto" class="carousel-item">
          <img src="../img/index cliente/hotel.png" >
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>




    <div id="card" class="container text-center">
      <div class="row">
        <div class="col">
          <div class="card text-bg-dark">
            <img src="../img/index cliente/santo.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Espirito Santo</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card text-bg-dark">
            <img src="../img/index cliente/minas.png" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Minas Gerais</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card text-bg-dark">
            <img src="../img/index cliente/curitiba.png" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Curitiba</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="card1" class="container text-center">
      <div class="row">
        <div class="col">
          <div class="card text-bg-dark">
            <img src="../img/index cliente/rio.png"class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Rio De Janeiro</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card text-bg-dark">
            <img src="../img/index cliente/salvador.png" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Salvador</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card text-bg-dark">
            <img src="../img/index cliente/maranhao.png" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">Maranhão</h5>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- footer -->

    <?php
    require_once "../componentes/footer.php";
    ?>  
  
  </body>
</html>