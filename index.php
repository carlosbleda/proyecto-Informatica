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
        <a class="navbar-brand mt-2 mt-lg-0" href="">
          <img src="./img/Logo-Pagina-Web-Proyecto.png" height="50" alt="MDB Logo" loading="lazy" />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./productos.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categorias</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="link-secondary me-2" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>

        <!-- Notifications -->

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">
          Iniciar Sesion
        </button>

        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
            
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">


                <form action="" class="row g-3 needs-validation" method="post" novalidate>


                  <div class="form-group ">



                    <div class="input-group mb-3">
                      <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                      <input type="email" name="correo" class="form-control" placeholder="Ingrese su correo" aria-label="Usuario" aria-describedby="basic-addon1" required>
                      <div class="valid-feedback">
                        El correo es valido.
                      </div>
                      <div class="invalid-feedback">
                        Debe ingresar un Correo.
                      </div>
                    </div>

                    <div class="input-group mb-3">
                      <span class="input-group-text"> <i class="fa-solid fa-key"></i></span>
                      <input type="password" class="form-control" name="pass" placeholder="Ingrese su contraseña Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" required>
                      <div class="valid-feedback">
                        La contraseña es valida.
                      </div>
                      <div class="invalid-feedback">
                        Debe ingresar una Contraseña.
                      </div>
                    </div>
                    <button class="btn btn-primary" name='login' type="submit">Acceder</button>
                    <a href="./login.php"> <input type="submit" class="btn btn-light" value="Cerrar"></a>
                  </div>

                </form>
              </div>
            </div>
            
          </div>
        </div>

    


    <?php echo "<script>
     
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
include'./objects/persona.php';

    if (isset($_POST['login'])) {
      $usuario = new Cliente();

      $usuario->login($_POST['correo'], $_POST['pass']);
    } ?>
    </div>
   
    </div>
    </div>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registro">
      Crear Cuenta
    </button>

    <!-- Modal -->
    <div class="modal fade" id="registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" class="row g-3 needs-validation" method="post" novalidate>

              <div class="form-group ">

                <div class="input-group mb-3 col-3">
                  <span class="input-group-text" id="basic-addon1"> <i class="fa-solid fa-clipboard-user"></i></span>
                  <input type="text" name="nombre" class="form-control" placeholder="Ingrese su Nombre" required>

                  <div class="valid-feedback">
                    El Nombre es valido.
                  </div>
                  <div class="invalid-feedback">
                    Debe ingresar un Nombre.
                  </div>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text"> <i class="fa-solid fa-clipboard-user"></i></span>
                  <input type="text" name="apellido" class="form-control" placeholder="Ingrese su Apellido" aria-label="Apellido" aria-describedby="basic-addon1" required>
                  <div class="valid-feedback">
                    El Apellido es valido.
                  </div>
                  <div class="invalid-feedback">
                    Debe ingresar un Apellido.
                  </div>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                  <input type="email" name="correo" class="form-control" placeholder="Ingrese su correo" aria-label="Usuario" aria-describedby="basic-addon1" required>
                  <div class="valid-feedback">
                    El correo es valido.
                  </div>
                  <div class="invalid-feedback">
                    Debe ingresar un Correo.
                  </div>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text"> <i class="fa-solid fa-key"></i></span>
                  <input type="password" class="form-control" name="pass" placeholder="Ingrese su contraseña Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" required>
                  <div class="valid-feedback">
                    La contraseña es valida.
                  </div>
                  <div class="invalid-feedback">
                    Debe ingresar una Contraseña.
                  </div>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text"> <i class="fa-solid fa-address-card"></i></span>
                  <input type="number" name="cedula" class="form-control" placeholder="Ingrese su C.I" aria-label="C.I" aria-describedby="basic-addon1" maxlength="8" required>
                  <div class="valid-feedback">
                    El documento es valido.
                  </div>
                  <div class="invalid-feedback">
                    Debe ingresar un Documento.
                  </div>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text"> <i class="fa-solid fa-calendar-days"></i></span>
                  <input type="date" name="fecha_nac" class="form-control" placeholder="Ingrese su Fecha de nacimiento" aria-label="C.I" aria-describedby="basic-addon1" required>
                  <div class="valid-feedback">
                    La Fecha de Nacimieno es valida.
                  </div>
                  <div class="invalid-feedback">
                    Debe ingresar una Fecha De Nacimiento Valida.
                  </div>
                </div>
                <button class="btn btn-primary" name="registro" id="mymodal" type="submit">Registrarse</button>
                <a href="./login.php"> <input type="button" class="btn btn-light" value="Logearse"></a>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Crear Cuenta</button>
          </div>
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

      include './objects/persona.php';
      if (isset($_POST['registro'])) {
        if (empty($_POST['nombre']) && empty($_POST['apellido']) && empty($_POST['correo']) && empty($_POST['pass']) && empty($_POST['cedula']) && empty($_POST['fecha_nac'])) {
         
        } else {
          $user = new Persona();
          $user->setnombre($_POST['nombre']);
          $user->setEmail($_POST['correo']);
          $user->setApellido($_POST['apellido']);
          $user->setPass($_POST['pass']);
          $user->setCedula($_POST['cedula']);
          $user->setfecha($_POST['fecha_nac']);
          $user->setTipo(1);
          $user->cargarUsuario();
          $user->login($_POST['cedula'], $_POST['email'], $_POST['nombre']);

        }
      }

      ?>
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
        <img src="./img/banner1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/baston3patas.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item ">
        <img src="" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
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