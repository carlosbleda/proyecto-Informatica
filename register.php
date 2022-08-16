<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3ebfebb6be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Boostrap/css/bootstrap.min.css">
    <script src="./Boostrap/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="./diseño.css">
</head>
<body>
    <?php
    include'./objects/persona.php';
    ?>
<img src="img/fisiosho.png" alt="" id="logo">  
    <form action="" method="POST">
    <h1>Registrate</h1>
 <div class="form-group">
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"> <i class="fa-solid fa-user"></i></span>
  <input type="text" name="nombre" class="form-control" placeholder="Ingrese su Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
</div>
 <br>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"> <i class="fa-solid fa-key"></i></span>
  <input type="text" name="apellido" class="form-control" placeholder="Ingrese su Apellido" aria-label="Apellido" aria-describedby="basic-addon1">
</div>
<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"> <i class="fa-solid fa-key"></i></span>
  <input type="text" name="usuario" class="form-control" placeholder="Ingrese su Usuario" aria-label="Usuario" aria-describedby="basic-addon1">
</div>
<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"> <i class="fa-solid fa-key"></i></span>
  <input type="password" class="form-control" placeholder="Ingrese su contraseña Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1">
</div>
    <br>
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"> <i class="fa-solid fa-key"></i></span>
  <input type="number" class="form-control" placeholder="Ingrese su C.I" aria-label="C.I" aria-describedby="basic-addon1">
</div>

   <input type="submit" value="registrarse" name="registro">
   <br>
   </div>
    <a href="./login.php"> <input type="button" value="Logearse"></a>
    </form>
    <?php
 if (isset($_POST['registro'])) {
 $user=new Cliente;
 $user->setNombre($_POST['nombre']);
 $user->setNombre($_POST['nombre']);
 $user->setNombre($_POST['nombre']);
 $user->cargarUsuario();
 echo 'Su nombre es'.$user->getNombre();

 }
      ?>
</body>
</html>