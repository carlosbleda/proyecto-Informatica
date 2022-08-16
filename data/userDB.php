<?php
include_once "./data/conect.php";
class UserDB extends Conexion{
public function CargarUser($nombre,$apellido,$cedula,$pass){
$conect=$this->conect();
$sql="INSERT INTO persona(nombre,apellido,cedula,pass)
VALUES('$nombre','$apellido','$cedula','$pass')";

if ($conect->query($sql)) {


    echo "Nuevo registro creado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conect->error;
}
$this->Disconnect();
}


}

?>