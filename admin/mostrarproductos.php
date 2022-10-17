<?php

require_once ('../objects/articulos.php'); 

if ($_POST) {
 if ($_POST['action'] == 'productos') {

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

     
 }
 if ($_POST['action'] == 'modificar_usuario') {

  $user=new Persona();
  $user->setnombre($_POST['nombre']);
  $user->setEmail($_POST['email']);
  $user->setApellido($_POST['apellido']);

  $user->setCedula($_POST['cedula']);
  $user->setfecha($_POST['fecha']);
  
$user->modificarUsuario();
 
}
 
 
}
?>
