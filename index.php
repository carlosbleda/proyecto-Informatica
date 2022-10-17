<?php
require_once(realpath(dirname(__FILE__).'./objects/persona.php'));
require_once ('./objects/articulos.php');
require_once ('./admin/login.php');

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

</head>

<body>
  <style>
    #imgnav {
      width: 70px;
      height: 70px;
    }
  </style>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
          <img src="./img/Logo-Pagina-Web-Proyecto.png" height="50" alt="MDB Logo" loading="lazy" />
        </a>
        <ul class="navbar-nav ">
          <li class="nav-item">
            <form class="form d-flex">
              <input class="form-control me-2" type="search" placeholder="Buscar Productos" aria-label="Search">
              <button class="btn btn-outline-success " type="submit">Buscar</button>
            </form>
          </li>
        </ul>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="./productos.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Alquiler</a>
          </li>
        </ul>

      
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="link-secondary me-2" href="#">
          <i class="fas fa-shopping-cart"></i>

        </a>

        <!-- Notifications -->
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="user">
                <i class="fa-solid fa-user"><?php  if (isset($_SESSION['nombre'])) { echo $_SESSION['nombre']; }?> </i>
                  
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" id="dropdown">
                <li><?php 
                    if (isset($_SESSION['nombre'])) {
                      echo '<a class="dropdown-item" id="acceder" href="index.php">Cerrar Sesion
                      </a></li>';
                      session_destroy();
                 
                    }else{
                      echo'   <a class="dropdown-item" id="acceder" data-bs-toggle="modal" data-bs-target="#login">Acceder
                  
                      <li><a class="dropdown-item" id="crear_cuenta" data-bs-toggle="modal" data-bs-target="#registro">Crear Cuenta</a></li>';
                    }
                    ?>
                    
                 
              </ul>
            </li>
          </ul>
        



        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">


                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <img src="./img/Logo-Pagina-Web-Proyecto.png" class="img-fluid w-25 rounded mx-auto d-block" alt="">
                </div>
                <form action="" class="row g-3 needs-validation" method="post" novalidate>


                  <div class="form-group ">



                    <div class="input-group mb-3">
                      <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                      <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingrese su correo" aria-label="Usuario" aria-describedby="basic-addon1" required>
                      <div  class="valid-feedback">
                        El correo es valido.
                      </div>
                      <div id="error" class="invalid-feedback">
                        Debe ingresar un Correo.
                      </div>
                    </div>

                    <div class="input-group mb-3">
                      <span class="input-group-text"> <i class="fa-solid fa-key"></i></span>
                      <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingrese su contraseña Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" required>
                      <div class="valid-feedback">
                        La contraseña es valida.
                      </div>
                      <div class="invalid-feedback">
                        Debe ingresar una Contraseña.
                      </div>
                    </div>
                    <button class="btn btn-primary" name='login' type="button" id="ingresar">Acceder</button>
                    <input type="button" class="btn btn-light" value="Cerrar" data-dismiss="modal">
                  </div>

                </form>
              </div>
            </div>

          </div>
        </div>

<div id='correcto'>

</div>


        
        <!--  -->
      </div>


    </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" class="row g-3 needs-validation" method="post" novalidate>
              <div class="text-center">
                <img src="./img/Logo-Pagina-Web-Proyecto.png" class="img-fluid w-25 rounded mx-auto d-block" alt="">
              </div>
              <div class="form-group ">

                <div class="input-group mb-3 col-3">
                  <span class="input-group-text" id="basic-addon1"> <i class="fa-solid fa-clipboard-user"></i></span>
                  <input type="text" id="nombre_r" class="form-control" placeholder="Ingrese su Nombre" required>

                  <div class="valid-feedback">
                    El Nombre es valido.
                  </div>
                  <div class="invalid-feedback">
                    Debe ingresar un Nombre.
                  </div>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text"> <i class="fa-solid fa-clipboard-user"></i></span>
                  <input type="text" id="apellido_r" class="form-control" placeholder="Ingrese su Apellido" aria-label="Apellido" aria-describedby="basic-addon1" required>
                  <div class="valid-feedback">
                    El Apellido es valido.
                  </div>
                  <div class="invalid-feedback">
                    Debe ingresar un Apellido.
                  </div>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                  <input type="email" id="correo_r" class="form-control" placeholder="Ingrese su correo" aria-label="Usuario" aria-describedby="basic-addon1" required>
                  <div class="valid-feedback">
                    El correo es valido.
                  </div>
                  <div class="invalid-feedback">
                    Debe ingresar un Correo.
                  </div>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text"> <i class="fa-solid fa-key"></i></span>
                  <input type="password" class="form-control" id="pass_r" placeholder="Ingrese su contraseña Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" required>
                  <div class="valid-feedback">
                    La contraseña es valida.
                  </div>
                  <div class="invalid-feedback">
                    Debe ingresar una Contraseña.
                  </div>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text"> <i class="fa-solid fa-address-card"></i></span>
                  <input type="number" id="cedula_r" class="form-control" placeholder="Ingrese su C.I" aria-label="C.I" aria-describedby="basic-addon1" maxlength="8" required>
                  <div class="valid-feedback">
                    El documento es valido.
                  </div>
                  <div class="invalid-feedback">
                    Debe ingresar un Documento.
                  </div>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text"> <i class="fa-solid fa-calendar-days"></i></span>
                  <input type="date" id="fecha_nac_r" class="form-control" placeholder="Ingrese su Fecha de nacimiento" aria-label="C.I" aria-describedby="basic-addon1" required>
                  <div class="valid-feedback">
                    La Fecha de Nacimieno es valida.
                  </div>
                  <div class="invalid-feedback">
                    Debe ingresar una Fecha De Nacimiento Valida.
                  </div>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" id="mymodal" type="button">Cerrar</button>
           <input type="button" class="btn btn-light" id="registrarse" value="Registrarse">
          </div>
          </form>
        </div>
      </div>
      <?php
      echo "<script>
     
(function () {
  'use strict'

  
  var forms = document.querySelectorAll('.needs-validation')


  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
      
          </script>"; ?>

      <?php

   


      ?>
    </div>
    </div>

    </div>
    </div>
    <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->


  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="./img/banner1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="./img/bannerdema.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="./img/bannermg.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Carousel wrapper -->
  <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
    <!-- Controls -->
    <div class="d-flex justify-content-center mb-4"> </div> <!-- Inner -->
    <div class="carousel-inner py-4">
      <!-- Single item -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card"> <img src="" class="card-img-top" alt="Waterfall" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
              <div class="card"> <img src="" class="card-img-top" alt="Sunset Over the Sea" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
              <div class="card"> <img src="" class="card-img-top" alt="Sunset over the Sea" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- Single item -->
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="card"> <img src="" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
              <div class="card"> <img src="" class="card-img-top" alt="Storm Clouds" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
              <div class="card"> <img src="" class="card-img-top" alt="Hot Air Balloons" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- Single item -->
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
              <div class="card"> <img src="" class="card-img-top" alt="Peaks Against the Starry Sky" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
              <div class="card"> <img src="" class="card-img-top" alt="Bridge Over Water" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
              <div class="card"> <img src="" class="card-img-top" alt="Purbeck Heritage Coast" />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- Carousel wrapper -->



  <main role="main">

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">


          <?php
          function CargarLista()
          {
            $p = new Producto();

            return  $p->mostrarProducto();
          } 
          $producto = CargarLista();
          if ($producto != null) {
            for ($i = 1; $i < count($producto); $i++) {
              if ($producto[$i]->getstock() == 0) {
              } else
                echo '<div class="col-md-3" id="' . $producto[$i]->getid() . '">';
              echo '<div class="card mb-4 shadow-sm">';
              echo '<h5 class="card-title">' . $producto[$i]->getnombre() . '</h5>';
              echo '<img class="card-img-top" src="data:image/jpg;base64,' . base64_encode($producto[$i]->getimagen()) . '" alt="Card image cap">';
              echo ' <div class="card-body">';
              echo '<p class="card-text">' . $producto[$i]->getdescripcion() . '</p>';
              echo '<div class="d-flex justify-content-between align-items-center">';
              echo ' <div class="btn-group">';
              echo ' <button type="button" class="btn btn-sm btn-outline-secondary">View</button>';
              echo '<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>';
              echo ' </div>';
              echo '<p>$' . $producto[$i]->getprecio() . ' </p>';
              echo '<small class="text-muted">' . $producto[$i]->getstock() . '</small>';
              echo ' </div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }

            echo "</table>";
          } else {
            echo " No hay Productos cargados cargados";
          }

          $producto = new Producto();
          $producto->mostrarProducto();

          ?>
        </div>
      </div>
    </div>
    </div>
    </div>

  </main>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="./js/login.js"></script>
</body>

</html>