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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
          <img src="./img/Logo-Pagina-Web-Proyecto.png" height="50" alt="MDB Logo" loading="lazy" />
        </a>
    <a class="navbar-brand" href="#">ADMIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
           <button class="btn btn-outline-success m-2" type="button" id="usuario">USUARIO</button>
        </li>
        <li class="nav-item">
           <button class="btn btn-outline-success m-2" type="buttton" id='productos'>PRODUCTOS</button>
        </li>
        <li class="nav-item">
           <button class="btn btn-outline-success m-2" type="buttton" id='proveedores'>PROVEEDORES</button>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Nombre de Usuario" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

  <div class=" d-flex justify-content-center w-75 ">
  <table class="table">
    <thead>
   
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">APELLIDO</th>
        <th scope="col">CORREO</th>
        <th scope="col">Editar/eliminar</th>
      </tr>
    </thead>
    <tbody id="tablauser">
      
       </tbody>
     </table>
     </div>
<div id="modal">

</div>
<div id="articulos"></div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="./js/user.js"></script>
      <script src="./js/productos.js"></script>
</body>

</html>