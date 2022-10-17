<?php
require_once (realpath(dirname(__FILE__).'./conect.php'));

class ProveedoresDB extends Conexion
{
 function CargarProveedores($nombre,$calle, $email, $numero, $esquina)
 {
     $conect = $this->conect();
     $sql = "INSERT INTO proveedores (nombre,calle, email, numero, esquina) 
VALUES('$nombre','$calle','$email','$numero','$esquina')";

     if ($conect->query($sql)) {

         echo 'Nuevo registro creado con éxito';
     } else {
         echo "('Error: ' . $sql . '<br>' . $conect->error)";
     }
     $this->Disconnect();
 }
function ModificarProveedores($nombre,$calle, $email, $numero, $esquina)
 { $conect=new Conexion();
   
     $sql = "UPDATE proveedores SET nombre = '$nombre', email = '$email', calle = '$calle', numero = '$numero',esquina='$esquina'where nombre='$nombre'";
    
    
    
     if (mysqli_query($conect->conect(), $sql)) {
    
        echo 'Nuevo registro creado con éxito';
    } else {
    
        echo 'Error: ' . $sql . '<br>' . $conect->error;
    }
   $conect->Disconnect();
 }
 function eliminarProveedores($id)
 { $conect=new Conexion();
   
     $sql = "DELETE FROM proveedores WHERE id_proveedor='$id' ";
    
    
    
     if (mysqli_query($conect->conect(), $sql)) {
    
        echo 'Nuevo registro creado con éxito';
    } else {
    
        echo 'Error: ' . $sql . '<br>' . $conect->error;
    }
   $conect->Disconnect();
 }
}
?>