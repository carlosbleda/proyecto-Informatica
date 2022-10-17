<?php
require_once ('../objects/persona.php'); 
if ($_POST['action'] == 'modificar_usuario') {
  $conect=new Conexion();
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$apellido=$_POST['apellido'];
$fecha_nac=$_POST['fecha'];
$cedula=$_POST['cedula'];
 $sql = "UPDATE persona SET nombre = '$nombre', email = '$email', apellido = '$apellido', fecha_nac = '$fecha_nac',cedula='$cedula'";



 if (mysqli_query($conect->conect(), $sql)) {

    echo 'Nuevo registro creado con éxito';
} else {

    echo 'Error: ' . $sql . '<br>' . $conect->error;
}
$this->Disconnect();
}?>