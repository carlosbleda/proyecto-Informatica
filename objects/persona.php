<?php

class Persona {
    private $nombre;
    private $apellido;
    private $cedula;
    private $pass;
    private $tipo;
    private $status;

    public function setNombre( $nombre ) {
        $nombre = $this->nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setApellido( $apellido ) {
        $apellido = $this->apellido;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setCedula( $cedula ) {
        $cedula = $this->cedula;
    }

    public function getCedula() {
        return $this->cedula;
    }
    public function setPass( $pass ) {
        $pass = $this->pass;
    }

    public function getPass() {
        return $this->pass;
    }

}
class Cliente extends Persona{
private $email;
private $telefono;
private $calle;
private $numero;
private $esquina;


public function setEmail( $email ) {
    $email = $this->email;
}

public function getEmail() {
    return $this->email;
}
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