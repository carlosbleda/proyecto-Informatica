<?php
include_once './objects/articulos.php';

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

                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-list"></i> Stock
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#agregar_P">Agregar Producto</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modificar_producto">Modificar Producto</a></li>
                            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#eliminar_producto">Eliminar Productos</a></li>
                        </ul>
                    </li>
                </ul>

              
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-list"></i> Proveedores
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#agregar_Proveedor">Agregar Proveedor</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modificar_Proveedor">Modificar Proveedor</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#eliminar_proveedor">Eliminar Proveedor</a></li>
                            </ul>
                        </li>
                    </ul>
                
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-list"></i> Usuarios
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#agregar_Proveedor">Agregar Usuario</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#registro">Modificar Usuario</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#eliminaruser">Eliminar Usuario</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
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
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                                <?php
                              

                                if (isset($_SESSION['nombre'])) {
                                    echo $_SESSION['nombre'];
                                } else {
                                    echo 'invitado';
                                }

                                ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#login">Acceder</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#registro">Crear Cuenta</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>


            </div>


            <div class="modal fade" id="agregar_Proveedor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Agregar Proveedor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre Del Proveedor
                                    <input type="text" class="form-control" name="nombre" placeholder=""></label>
                            </div>
                        
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">email</label>
                            <input type="email" class="form-control" name="email" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">calle</label>
                            <input type="text" class="form-control" name="calle" placeholder="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">numero <i class="fa-solid fa-clipboard-list"></i></label>
                                <input type="text" class="form-control" name="numero">
                            </div>
                           
                            <div class="form-group col-md-6">
                                <label for="inputZip">esquina</label>
                                <input type="number" class="form-control" name="esquina">
                            </div>
                            
                        </div>
                     
                        <button type="submit" class="btn btn-primary" name="agregar_proveedor">Agregar Producto</button>

                    </form>
                </div>
            </div>
            <?php
            include_once "./objects/proveedores.php";
            if (isset($_POST['agregar_proveedor'])) {
                $proveedor = new Proveedores();
                $proveedor->setnombre($_POST['nombre']);
                $proveedor->setcalle($_POST['calle']);
                $proveedor->setemail($_POST['email']);
                $proveedor->setnumero($_POST['numero']);
                $proveedor->setesquina($_POST['esquina']);
                $proveedor->cargarproveedor();
            }

            ?>         
        </div>
        </div>
        <div class="modal fade" id="modificar_Proveedor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Modificar Proveedores</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                        <div class="form-row">
                        
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre Del Proveedor
                                    <input type="text" class="form-control" name="nombre_p" placeholder=""></label>
                                   
                                </div>
                                <button type="button" id="buscar" class="btn btn-outline-primary">Primary</button>
                        </div>
                        <div id="txt"></div>
                        <div class="form-group">
                            <label for="inputAddress">email</label>
                            <input type="email" class="form-control" name="email_P" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">calle</label>
                            <input type="text" class="form-control" name="calle_P" placeholder="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">numero <i class="fa-solid fa-clipboard-list"></i></label>
                                <input type="text" class="form-control" name="numero_P">
                            </div>
                           
                            <div class="form-group col-md-6">
                                <label for="inputZip">esquina</label>
                                <input type="number" class="form-control" name="esquina_P">
                            </div>
                            
                        </div>
                     
                        <button type="submit" class="btn btn-primary" name="modificar_Proveedor">Agregar Producto</button>
                        <?php
            include_once "./objects/proveedores.php";
        
            if (isset($_POST['modificar_Proveedor'])) {
                $proveedor = new Proveedores();
                
                $proveedor->setnombre($_POST['nombre_p']);
                $proveedor->setcalle($_POST['calle_P']);
                $proveedor->setemail($_POST['email_P']);
                $proveedor->setnumero($_POST['numero_P']);
                $proveedor->setesquina($_POST['esquina_P']);
                $proveedor->modificarproveedor();
            }

            ?>         
                    </form>
                </div>
            </div>
            
        </div>
        </div>
        <div class="modal fade" id="eliminar_producto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Eliminar Proveedores</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                        <div class="form-row">
                        
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">id producto
                                    <input type="text" class="form-control" name="id" placeholder=""></label>
                                   
                                </div>
                               
                        </div>
                        
                     
                        <button type="submit" class="btn btn-primary" name="eliminar_producto">eliminar Producto</button>
                        <?php
            include_once "./objects/persona.php";
        
            if (isset($_POST['eliminar_producto'])) {
                $producto = new Producto();
                
                $producto->setid($_POST['id']);

                $producto->eliminarProducto();
            }

            ?>         
                    </form>
                </div>
            </div>
            
        </div>
        </div>
        <div class="modal fade" id="eliminar_proveedor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Eliminar Proveedores</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                        <div class="form-row">
                        
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">id Proveedor
                                    <input type="text" class="form-control" name="id" placeholder=""></label>
                                   
                                </div>
                               
                        </div>
                        
                     
                        <button type="submit" class="btn btn-primary" name="eliminar_producto">eliminar Producto</button>
                        <?php
            include_once "./objects/persona.php";
        
            if (isset($_POST['eliminar_producto'])) {
                $producto = new Proveedores();
                
                $producto->setid($_POST['id']);

                $producto->eliminarproveedor();
            }

            ?>         
                    </form>
                </div>
            </div>
            
        </div>
        </div>
        <div class="modal fade" id="eliminar_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Eliminar Proveedores</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                        <div class="form-row">
                        
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">id producto
                                    <input type="text" class="form-control" name="id" placeholder=""></label>
                                   
                                </div>
                               
                        </div>
                        
                     
                        <button type="submit" class="btn btn-primary" name="eliminar_producto">eliminar Producto</button>
                        <?php
            include_once "./objects/persona.php";
        
            if (isset($_POST['eliminar_user'])) {
                $proveedor = new Producto();
                
                $proveedor->setid($_POST['id']);

                $proveedor->eliminarProducto();
            }

            ?>         
                    </form>
                </div>
            </div>
            
        </div>
        </div>
        <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <div class="modal fade" id="agregar_P" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Agregar Producto Al Stock</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre Del Producto
                                    <input type="text" class="form-control" name="nombre_P" placeholder=""></label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                                <textarea class="form-control" name="descripcion" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Marca</label>
                            <input type="text" class="form-control" name="marca" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Cantidad</label>
                            <input type="number" class="form-control" name="cantidad" placeholder="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">categoria <i class="fa-solid fa-clipboard-list"></i></label>
                                <input type="text" class="form-control" id="inputCity" name="categoria">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Imagen</label>
                                <label for="formFile" class="form-label">Subir imagen</label>
                                <input class="form-control" type="file" name="imagen">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip">Precio</label>
                                <input type="number" class="form-control" name="precio">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip">Proveedor</label>
                                <input type="text" class="form-control" name="proveedor">
                            </div>
                        </div>
                        <div class="form-group">

                        </div>
                        <button type="submit" class="btn btn-primary" name="agregar_producto">Agregar Producto</button>

                    </form>
                </div>
            </div>
            <?php
            if (isset($_POST['agregar_producto'])) {
                $producto = new Producto();
                $producto->setnombre($_POST['nombre_P']);
                $producto->setdescripcion($_POST['descripcion']);
                $producto->setmarca($_POST['marca']);
                $producto->setstock($_POST['cantidad']);
                $producto->setimagen(addslashes(file_get_contents($_FILES['imagen']['tmp_name'])));
                $producto->setcategoria($_POST['categoria']);
                $producto->setprecio($_POST['precio']);
                $producto->setproveedor($_POST['proveedor']);
                $producto->cargarProducto();
            }


            ?>
        </div>
    </div>
   
    <div class="modal fade" id="modificar_producto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Agregar Producto Al Stock</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                        <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="inputEmail4">Id Producto
                                    <input type="text" class="form-control" name="id" placeholder=""></label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre Del Producto
                                    <input type="text" class="form-control" name="nombre_P" placeholder=""></label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                                <textarea class="form-control" name="descripcion" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Marca</label>
                            <input type="text" class="form-control" name="marca" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Cantidad</label>
                            <input type="number" class="form-control" name="cantidad" placeholder="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">categoria <i class="fa-solid fa-clipboard-list"></i></label>
                                <input type="text" class="form-control" id="inputCity" name="categoria">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Imagen</label>
                                <label for="formFile" class="form-label">Subir imagen</label>
                                <input class="form-control" type="file" name="imagen">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip">Precio</label>
                                <input type="number" class="form-control" name="precio">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip">Proveedor</label>
                                <input type="text" class="form-control" name="proveedor">
                            </div>
                        </div>
                        <div class="form-group">

                        </div>
                        <button type="submit" class="btn btn-primary" name="modificar_producto">Modificar Producto</button>

                    </form>
                </div>
            </div>
            <?php
            if (isset($_POST['modificar_producto'])) {
                $producto = new Producto();
                $producto->setid($_POST['id']);
                $producto->setnombre($_POST['nombre_P']);
                $producto->setdescripcion($_POST['descripcion']);
                $producto->setmarca($_POST['marca']);
                $producto->setstock($_POST['cantidad']);
                $producto->setimagen(addslashes(file_get_contents($_FILES['imagen']['tmp_name'])));
                $producto->setcategoria($_POST['categoria']);
                $producto->setprecio($_POST['precio']);
                $producto->setproveedor($_POST['proveedor']);
                $producto->modificarProducto();
            }


            ?>
        </div>
    </div>
    

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
    <!-- Carousel wrapper -->
    <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
        <!-- Controls -->
        <div class="d-flex justify-content-center mb-4"> </div> <!-- Inner -->
        <div class="carousel-inner py-4">
            <!-- Single item -->
            <div class="modal fade" id="agregar_P" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Agregar Producto Al Stock</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre Del Producto
                                    <input type="text" class="form-control" name="nombre_P" placeholder=""></label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                                <textarea class="form-control" name="descripcion" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Marca</label>
                            <input type="text" class="form-control" name="marca" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Cantidad</label>
                            <input type="text" class="form-control" name="cantidad" placeholder="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">categoria <i class="fa-solid fa-clipboard-list"></i></label>
                                <input type="text" class="form-control" id="inputCity" name="categoria">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Imagen</label>
                                <label for="formFile" class="form-label">Subir imagen</label>
                                <input class="form-control" type="file" name="imagen">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip">Precio</label>
                                <input type="number" class="form-control" name="precio">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip">Proveedor</label>
                                <input type="text" class="form-control" name="proveedor">
                            </div>
                        </div>
                        <div class="form-group">

                        </div>
                        <button type="submit" class="btn btn-primary" name="modificar_producto">Modificar Producto</button>

                    </form>
                </div>
            </div>
            <?php
            if ($_POST['action'] == 'modificar_usuario') {
                $producto = new Producto();
                $producto->setnombre($_POST['nombre_P']);
                $producto->setdescripcion($_POST['descripcion']);
                $producto->setmarca($_POST['marca']);
                $producto->setstock($_POST['cantidad']);
                $producto->setimagen(addslashes(file_get_contents($_FILES['imagen']['tmp_name'])));
                $producto->setcategoria($_POST['categoria']);
                $producto->setprecio($_POST['precio']);
                $producto->setproveedor($_POST['proveedor']);
                $producto->modificarProducto();
            }


            ?>
        </div>
    </div>
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="card"> <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="Sunset Over the Sea" />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="card"> <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp" class="card-img-top" alt="Sunset over the Sea" />
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
                            <div class="card"> <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone" />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="card"> <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/185.webp" class="card-img-top" alt="Storm Clouds" />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="card"> <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/186.webp" class="card-img-top" alt="Hot Air Balloons" />
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
                            <div class="card"> <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/187.webp" class="card-img-top" alt="Peaks Against the Starry Sky" />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                            <div class="card"> <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/188.webp" class="card-img-top" alt="Bridge Over Water" />
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <a href="#!" class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                            <div class="card"> <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/189.webp" class="card-img-top" alt="Purbeck Heritage Coast" />
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="./js/user.js"></script>
</body>
</html>