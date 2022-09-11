<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3ebfebb6be.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
    <title>Document</title>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>
<style>
  #imgnav{
    width: 70px;
    height: 70px;  
    }
</style>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
 
    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="./img/Logo-Pagina-Web-Proyecto.png"
          height="50"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
 
    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="link-secondary me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a>
 
      <!-- Notifications -->
      <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fas fa-bell"></i>
  </a>
 
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
      <!-- Avatar -->
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user"></i>
          <?php
          include './objects/persona.php';
          $persona=new Persona();
          echo $persona->getNombre();
          if(isset($_SESSION["usuario"])){
            echo $_SESSION["usuario"];
          }



          ?>
 
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="login.php">Action</a></li>
            <li><a class="dropdown-item" href="register.php">Another action</a></li>
            <li><a class="dropdown-item" href="index.php"><?php session_destroy(); ?>CERRAR SESSION</a></li>
          </ul>
        </li>
      </ul>
    </div>
 
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<div id="carouselExampleCaptions w-75" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item active">
      <img src="http://placeimg.com/900/300/tech/grayscale" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item active">
      <img src="http://placeimg.com/900/300/tech/grayscale" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item active">
      <img src="http://placeimg.com/900/300/tech/grayscale" class="d-block w-100" alt="...">
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


<main role="main">
        <section class="jumbotron text-center">
            <div class="m-5">
                <h1></h1>
            </div>
        </section>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="categories.html" class="card mb-4 shadow-sm custom-card">
                            <img class="bd-placeholder-img card-img-top" src="img/micosep_clotrimazol.jpg">
                            <h3 class="m-3">Micosep Clotrimazol</h3>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="categories.html" class="card mb-4 shadow-sm custom-card">
                            <img class="bd-placeholder-img card-img-top" src="img/betacort_plus.jpg">
                            <h3 class="m-3">Betacort Plus</h3>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="categories.html" class="card mb-4 shadow-sm custom-card">
                            <img class="bd-placeholder-img card-img-top" src="img/innovanz.jpg">
                            <h3 class="m-3">Innovanz</h3>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="categories.html" class="card mb-4 shadow-sm custom-card">
                            <img class="bd-placeholder-img card-img-top" src="img/verruxane.jpg">
                            <h3 class="m-3">Verruxane</h3>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="categories.html" class="card mb-4 shadow-sm custom-card">
                            <img class="bd-placeholder-img card-img-top" src="img/fortilac.jpg">
                            <h3 class="m-3">Fortilac</h3>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="categories.html" class="card mb-4 shadow-sm custom-card">
                            <img class="bd-placeholder-img card-img-top" src="img/micosep_deo.jpg">
                            <h3 class="m-3">Microsep Deo</h3>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <a type="button" class="btn btn-light btn-lg btn-block" href="productos.php">MAS</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>