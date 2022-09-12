<?php
include_once './data/conect.php';

class usuarioDB extends Conexion {
    public function CargarUser( $nombre, $email, $apellido, $pass,$fecha_nac, $cedula ) {
        $conect = $this->conect();
        $sql = "INSERT INTO persona(nombre,email,apellido,pass,fecha_nac,cedula)
VALUES('$nombre','$email','$apellido','$pass','$fecha_nac','$cedula')";

        if ( $conect->query( $sql ) ) {

            echo 'Nuevo registro creado con éxito';
        } else {
            echo 'Error: ' . $sql . '<br>' . $conect->error;
        }
        $this->Disconnect();
    }

}
