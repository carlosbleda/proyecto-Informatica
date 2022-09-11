<?php
include'./data/userDB.php';
class Persona {
    private $nombre;
    private $apellido;
    private $cedula;
    private $email;
    private $pass;
    private $fecha_nac;
    private $tipo;
    private $status;

     function setnombre( $nombre ) {
       $this->nombre= $nombre ;
    }

    function getNombre() {
        return $this->nombre;
    }
 function setEmail( $email ) {
    $this->email=$email ;
    }
    
    public function getEmail() {
        return $this->email;
    }

     function setApellido( $apellido ) {
          $this->apellido=$apellido;
    }

    function getApellido() {
        return $this->apellido;
    }

     function setCedula( $cedula ) {
         $this->cedula =$cedula;
    }

     function getCedula() {
        return $this->cedula;
    }
     function setPass( $pass ) {
        $this->pass=$pass  ;
    }

     function getPass() {
        return $this->pass;
    }
    function setfecha( $fecha_nac ) {
        $this->fecha_nac=$fecha_nac  ;
    }

     function getfecha() {
        return $this->fecha_nac;
    }
    function setTipo( $tipo ) {
        $this->tipo= $tipo ;
     }
 
     function getTipo() {
         return $this->tipo;
     }
     public function cargarUsuario(){
        $user=new UserDB();
        $user->CargarUser($this->getNombre(),$this->getEmail(),$this->getApellido(),$this->getPass(),$this->getfecha(),$this->getCedula());
    }
    public function validacion($cedula,$email){
        $conect = new Conexion();
         $consulta= "SELECT * FROM persona WHERE cedula ='$cedula' AND email = '$email'";
        $resultado=mysqli_query($conect->conect(),$consulta);
        $fila=mysqli_num_rows($resultado);
        if($fila>0){
            header('location:index.php');
        }else{
            
            echo 'Debe ingresar un usuario y contraseña valido';
        }
       
    }
    public function login($usuario,$contraseña){
        $conect = new Conexion();
        $consulta = "SELECT * FROM persona WHERE email ='$usuario' AND pass = '$contraseña'";
        $resultado=mysqli_query($conect->conect(),$consulta);
        $fila=mysqli_num_rows($resultado);
            
            
        if($fila>0){
            header('location:index.php');
          
/*             session_start();
$_SESSION["usuario"]=; */
            }



        else{
            echo'<div class="modal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               
                </div>
              </div>
            </div>
          </div>';
            echo 'Debe ingresar un usuario y contraseña valido';
        }
    }
}

class Cliente extends Persona{

    private $telefono;
    private $calle;
    private $numero;
    private $esquina;
    
    
    
    public function setTelefono( $telefono ) {
        $telefono = $this->telefono;
    }
    
    public function getTelefono() {
        return $this->telefono;
    }
    
    public function setcalle( $calle ) {
        $calle = $this->calle;
    }
    
    public function getCalle() {
        return $this->calle;
    }
    
    public function setNumero( $numero ) {
        $numero = $this->numero;
    }
    
    public function getNumero() {
        return $this->esquina;
    }
    public function setEsquina( $esquina ) {
        $esquina = $this->esquina;
    }
    public function getEsquina() {
        return $this->esquina;
    }
    
    }