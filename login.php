<?php
include './data/conect.php';?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<script src = 'https://kit.fontawesome.com/3ebfebb6be.js' crossorigin = 'anonymous'></script>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel = 'stylesheet' integrity = 'sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin = 'anonymous'>
<script src = 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js' integrity = 'sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk' crossorigin = 'anonymous'></script>
<script src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js' integrity = 'sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK' crossorigin = 'anonymous'></script>
<script src = './Boostrap/js/bootstrap.bundle.min.js'></script>

<link rel = 'stylesheet' href = './style.css'>
</head>
<body>

<div class = 'd-flex w-25 pt-5 mx-auto'>

</form>
</div>

<div class = 'container'>
<div class = 'row' id = 'divcentral'>
<div class = 'col-lg-10 offset-lg-1'>

<div class = 'bg-white shadow rounded'>
<div class = 'row'>

<div class = 'col-md-7 pe-0'>
<div class = 'form-left h-100 py-5 px-5'>
<form action = '' class = 'row g-3 needs-validation' method = 'post' novalidate>

<div class = 'form-group '>

<div class = 'input-group mb-3'>
<span class = 'input-group-text' > <i class = 'fa-solid fa-user'></i></span>
<input type = 'email' name = 'user' class = 'form-control' placeholder = 'Ingrese su correo' aria-label = 'Usuario' aria-describedby = 'basic-addon1' required>
<div class = 'valid-feedback'>
El correo es valido.
</div>
<div class = 'invalid-feedback'>
Debe ingresar un Correo.
</div>
</div>

<div class = 'input-group mb-3'>
<span class = 'input-group-text'> <i class = 'fa-solid fa-key'></i></span>
<input type = 'password' class = 'form-control' name = 'pass' placeholder = 'Ingrese su contraseña Contraseña' aria-label = 'Contraseña' aria-describedby = 'basic-addon1' required>
<div class = 'valid-feedback'>
La contraseña es valida.
</div>
<div class = 'invalid-feedback'>
Debe ingresar una Contraseña.
</div>
</div>
<button class = 'btn btn-primary' type = 'submit'>ACCEDER</button>
</div>

</form>
</div>
</div>
<div class = 'col-md-5 ps-3 d-none d-md-block'>
<div class = 'form-right h-100 text-center pt-5' id = 'fondologo'>
<i class = 'bi bi-bootstrap'></i>
<h2 class = 'fs-1'></h2>

</div>
<p class = 'text-end text-secondary mt-3'>© 2022 FisioShop, Inc. Todos los derechos reservados.</p>
</div>
</div>
</div>

</div>

</div>

</div>
<?php


if ( isset( $_POST[ 'registro' ] ) ) {
    $conect = new Conexion();
$consulta = "SELECT * FROM persona WHERE email =".$_POST[ 'user' ]." AND pass = ".$_POST[ 'pass' ]."";
$resultado=mysqli_query($conect->conect(),$consulta);
$fila=mysqli_num_rows($resultado);
    header('location:login.php');
    
if($fila>0){
 
}else{
    echo 'error';
}

  



}



?>

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
      
          </script>";
?>


 

 



</body>
</html>