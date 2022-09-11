<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/3ebfebb6be.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

  <title>
    Registro
  </title>

  <link rel="stylesheet" href="./style.css">
</head>

<body>

  <div class="d-flex w-25 pt-5 mx-auto">



    </form>
  </div>


  <div class="container">
    <div class="row" id="divcentral">
      <div class="col-lg-10 offset-lg-1">

        <div class="bg-white shadow rounded">
          <div class="row">

            <div class="col-md-7 pe-0">
              <div class="form-left h-100 py-5 px-5">
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
            </div>
            <div class="col-md-5 ps-3 d-none d-md-block">
              <div class="form-right h-100 text-center pt-5" id="fondologo">
                <i class="bi bi-bootstrap"></i>
                <h2 class="fs-1"></h2>


              </div>

              <p class="text-end text-secondary mt-3">© 2022 FisioShop, Inc. Todos los derechos reservados.</p>
            </div>
          </div>
        </div>

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
      $user->validacion($_POST['cedula'], $_POST['email']);
      header('location:login.php');
    }
  }

  ?>
</body>

</html>