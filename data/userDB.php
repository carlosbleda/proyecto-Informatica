<?php
include_once "./conect.php";
class UserDB extends Conexion{
public function CargarUser($nombre,$apellido,$cedula,$email,$telefono,$calle,$numero,$esquina,$pass){
$conect=$this->conect();
$sql="INSERT INTO persona,cliente('persona.nombre,persona.apellido,persona.cedula,persona.pass,cliente.calle,cliente.email,cliente.esquina,cliente.numero')VALUES('$nombre,$apellido,$cedula,$pass,$calle,$email,$email,$esquina,$numero')";

if ($conect->query($sql)) {


    echo "Nuevo registro creado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conect->error;
}
$this->Disconnect();
}


}

?>