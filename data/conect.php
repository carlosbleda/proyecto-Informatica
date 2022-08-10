<?php
class Conexion
{
    private $servidor='localhost';/* servidor de la base de datos */
    private $user='root';/* usuario  */
    private $password='';/* contraseña */
    private $bd='proyecto';/* nombre de la base de datos a conectar */
    private $con;/* conexion */
    public function conect(){/* funcion para conectar la base de datos */
        $this->con= new mysqli($this->servidor,$this->user,$this->password,$this->bd);/* le paso los datos a la conexion para que suceda la comunicacion entre la aplicacion y la BD */
if ($this->con->connect_error) {/* pregunta si en la conexion hubo error  */
    die('Ah ocurrido un error'. $this->con->connect_error);/* si hubo error se muersta un mensaje */
}else {/* si no hubo error  */
    return $this->con;/* realiza la conexion */
}
    }
    public function Disconnect()/* funcion para desconectar la base de datos */
    {
      $this->con->close();/* Cierra la conexion con la BD */
    }
}










?>