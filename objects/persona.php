<?php
require_once dirname(__DIR__) . "/data/userDB.php";

class Persona
{
    private $id;
    private $nombre;
    private $apellido;
    private $cedula;
    private $email;
    private $pass;
    private $fecha_nac;
    private $tipo;
    private $status;
    function setid($id)
    {
        $this->id = $id;
    }

    function getid()
    {
        return $this->id;
    }
    function setnombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getNombre()
    {
        return $this->nombre;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    function getApellido()
    {
        return $this->apellido;
    }

    function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    function getCedula()
    {
        return $this->cedula;
    }
    function setPass($pass)
    {
        $this->pass = $pass;
    }

    function getPass()
    {
        return $this->pass;
    }
    function setfecha($fecha_nac)
    {
        $this->fecha_nac = $fecha_nac;
    }

    function getfecha()
    {
        return $this->fecha_nac;
    }
    function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    function getTipo()
    {
        return $this->tipo;
    }
    function setstatus($status)
    {
        $this->status = $status;
    }

    function getstatus()
    {
        return $this->status;
    }
    public function cargarUsuario()
    {
        $user = new usuarioDB();
        $user->CargarUser($this->getNombre(), $this->getEmail(), $this->getApellido(), $this->getTipo(), md5($this->getPass()), $this->getfecha(), $this->getCedula());
    }
    public function modificarUsuario()
    {
        $user = new usuarioDB();
        $user->modificarUsuario($this->getNombre(), $this->getEmail(), $this->getApellido(), $this->getfecha(), $this->getCedula());
    }



    public function eliminarUsuario()
    {
        $user = new usuarioDB();
        $user->eliminarUsuario($this->getNombre(), $this->getEmail(), $this->getApellido(), $this->getTipo(), md5($this->getPass()), $this->getfecha(), $this->getCedula());
    }
    public function mostrarusuario()
    {
        $p = new usuarioDB();
        return $p->mostrarUsuario();
    }
    public function login($usuario, $contraseña)
    {
        $conect = new Conexion();


        $consulta = "SELECT * FROM persona WHERE email ='$usuario' AND pass = '$contraseña'";
        $resultado = mysqli_query($conect->conect(), $consulta);
        if ($resultado->num_rows > 0) {


            while ($row = $resultado->fetch_assoc()) {
                $user = $row['email'];
                $pass = $row['pass'];
                if ($row != 0) {
                    if ($row['tipo']=='0') {
                    echo 'admin';
                    }if($row['tipo']=='1'){
                    $nombre = $row['nombre'];
                    $_SESSION['nombre'] = $nombre;
                    print_r($_SESSION['nombre']);
                    $listauser[] = $row;
                }}
            }
        } else {
            print_r('usuario y contraseña incorrecto');
        }
    }
}






class Cliente extends Persona
{

    private $telefono;
    private $calle;
    private $numero;
    private $esquina;



    public function setTelefono($telefono)
    {
        $telefono = $this->telefono;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setcalle($calle)
    {
        $calle = $this->calle;
    }

    public function getCalle()
    {
        return $this->calle;
    }

    public function setNumero($numero)
    {
        $numero = $this->numero;
    }

    public function getNumero()
    {
        return $this->esquina;
    }
    public function setEsquina($esquina)
    {
        $esquina = $this->esquina;
    }
    public function getEsquina()
    {
        return $this->esquina;
    }
}
class Admin extends Persona
{
}
