<?php
require_once(realpath(dirname(__FILE__) . './conect.php'));

class usuarioDB extends Conexion
{
    public function CargarUser($nombre, $email, $apellido, $tipo, $pass, $fecha_nac, $cedula)
    {
        $conect = $this->conect();
        $sql = "INSERT INTO persona(nombre,email,apellido,tipo,pass,fecha_nac,cedula)
VALUES('$nombre','$email','$apellido','$tipo','$pass','$fecha_nac','$cedula')";

        if ($conect->query($sql)) {

            echo 'Nuevo registro creado con éxito';
        } else {

            echo 'Error: ' . $sql . '<br>' . $conect->error;
        }
        $this->Disconnect();
    }
     public function mostrarUsuario()
    {
        $conect = new Conexion();

        $consulta = "SELECT * FROM persona";
        $resultado = mysqli_query($conect->conect(), $consulta);
        if ($resultado->num_rows > 0) {
           
                $listausuario[] = new Persona();
    
                while ($row = $resultado->fetch_assoc()) {
                
    
    
                    $listausuario[] = $row;
                  
                
                }
                $json=json_encode($listausuario,JSON_UNESCAPED_UNICODE);
                print_r($json);
                return $json;
            } else {
    
                return null;
            }
            
            } 
            function Modificarusuario($nombre, $email, $apellido, $fecha_nac, $cedula)
            {
                $conect = $this->conect();
                $sql = "UPDATE persona SET nombre = '$nombre', email = '$email', apellido = '$apellido', fecha_nac = '$fecha_nac' ,cedula='$cedula' WHERE cedula=$cedula";
        
                if ($conect->query($sql)==true) {
           
                    echo 'Nuevo registro creado con éxito';
                } else {
                
                    echo 'Error: ' . $sql . '<br>' . $conect->error;
                }
                
                $this->Disconnect();
            }
    function eliminarusuario($id,$estado)
 { $conect=new Conexion();
   
     $sql =  $sql = "UPDATE persona SET estado = '$estado' where id_persona=$id";

    
    
    
     if (mysqli_query($conect->conect(), $sql)) {
    
        echo 'Nuevo registro creado con éxito';
    } else {
    
        echo 'Error: ' . $sql . '<br>' . $conect->error;
    }
   $conect->Disconnect();
 }
}
