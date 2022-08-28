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
</head>
<body>
<style>
  #imgnav{
    width: 70px;
    height: 70px;  
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img id="imgnav" class="img-fluid" src="img/Logo-Pagina-Web-Proyecto.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"> 
          <a class="nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Productos</a></li>
            <li><a class="dropdown-item" href="#"></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <form class="d-flex justify-content-center">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

        <button class="btn btn-outline-success" type="submit">Search</button>
        <a href=""><button><i class="fa-regular fa-cart-shopping"></i></button></a>
      </form>
      </ul>
    
    </div>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
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
                            <img class="bd-placeholder-img card-img-top" src="img/cat1.jpg">
                            <h3 class="m-3">Producto1</h3>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="categories.html" class="card mb-4 shadow-sm custom-card">
                            <img class="bd-placeholder-img card-img-top" src="img/cat2.jpg">
                            <h3 class="m-3">producto 2</h3>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="categories.html" class="card mb-4 shadow-sm custom-card">
                            <img class="bd-placeholder-img card-img-top" src="img/cat3.jpg">
                            <h3 class="m-3">Producto 3</h3>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="categories.html" class="card mb-4 shadow-sm custom-card">
                            <img class="bd-placeholder-img card-img-top" src="img/cat4.jpg">
                            <h3 class="m-3">Producto 3</h3>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="categories.html" class="card mb-4 shadow-sm custom-card">
                            <img class="bd-placeholder-img card-img-top" src="img/cat5.jpg">
                            <h3 class="m-3">Producto 3</h3>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="categories.html" class="card mb-4 shadow-sm custom-card">
                            <img class="bd-placeholder-img card-img-top" src="img/cat6.jpg">
                            <h3 class="m-3">Producto 4</h3>
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <a type="button" class="btn btn-light btn-lg btn-block" href="categories.html">Ver todas</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>