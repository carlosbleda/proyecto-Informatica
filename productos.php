<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Album example · Bootstrap</title>
    <script src="https://kit.fontawesome.com/3ebfebb6be.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
 
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
  
    </div>
  </div>
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
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
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
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
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
                    <button class="btn btn-primary" name='login' type="submit">Enviar formulario</button>
                    <a href="./login.php"> <input type="submit" class="btn btn-light" value="Logearse"></a>
                  </div>

                </form>
              </div>
            </div>
            <div class="col-md-5 ps-3 d-none d-md-block">
              <div class="form-right h-100 text-center pt-5" id="login">
                <i class="bi bi-bootstrap"></i>
                <h2 class="fs-1"></h2>


              </div>
              <p class="text-end text-secondary mt-3">© 2022 FisioShop, Inc. Todos los derechos reservados.</p>
            </div>
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


    if (isset($_POST['login'])) {
      $usuario = new Cliente();

      $usuario->login($_POST['correo'], $_POST['pass'], $_POST['nombre']);
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
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
                <button class="btn btn-primary" name="registro" id="mymodal" type="submit">Enviar formulario</button>
                <a href="./login.php"> <input type="button" class="btn btn-light" value="Logearse"></a>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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
          echo "<script>
     
  const myModal = document.getElementById('myModal')

  
  myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
  })
            </script>";
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
          header('location:login.php');
        }
      }

      ?>
    </div>



    </div>
    <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
</header>

<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
    <section class="jumbotron text-center">
    <div class="container">
        <a href="./index.php" class="btn btn-secondary my-2">Regresar</a>
    </div>
  </section>
    </p>
    <p></p>
    <p></p>
  </div>
</footer>
</body>
</html>