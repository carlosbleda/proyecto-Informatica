<?php
include_once './data/conect.php';

class ProductoDB extends Conexion {
    public function CargarProductos( $nombre, $descripcion, $marca, $stock, $imagen,$categoria, $precio,$proveedor,$descuento ) {
        $conect = $this->conect();
        $sql = "INSERT INTO productos(nombre,email,apellido,pass,fecha_nac,cedula)
VALUES('$nombre','$descripcion','$marca','$stock','$imagen','$categoria','$precio','$proveedor','$descuento')";

        if ( $conect->query( $sql ) ) {

            echo 'Nuevo registro creado con éxito';
        } else {
            echo 'Error: ' . $sql . '<br>' . $conect->error;
        }
        $this->Disconnect();
    }

}
