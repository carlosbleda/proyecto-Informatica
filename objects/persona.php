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
     public function cargarUsuario(){
        $user=new UserDB();
        $user->CargarUser($this->getNombre(),$this->getEmail(),$this->getApellido(),$this->getPass(),$this->getfecha(),$this->getCedula());
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