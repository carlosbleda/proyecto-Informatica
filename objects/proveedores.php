<?php
require_once('./data/proveedoresDB.php');

class Proveedores
{
    private $id;
    private $nombre;
    private $calle;
    private $email;
    private $numero;
    private $esquina;
    
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
    function setnumero($numero)
    {
        $this->numero = $numero;
    }

    public function getnumero()
    {
        return $this->numero;
    }

    function setcalle($calle)
    {
        $this->calle = $calle;
    }

    function getcalle()
    {
        return $this->calle;
    }

    function setemail($email)
    {
        $this->email = $email;
    }

    function getemail()
    {
        return $this->email;
    }
    function setesquina($esquina)
    {
        $this->esquina = $esquina;
    }

    function getesquina()
    {
        return $this->esquina;
    }
    function cargarproveedor(){
        $proveedores = new ProveedoresDB();
        $proveedores->Cargarproveedores($this->getid(),$this->getnombre(), $this->getcalle(), $this->getemail(), $this->getnumero(),$this->getesquina());
    }  function modificarproveedor(){
        $proveedores = new ProveedoresDB();
        $proveedores->ModificarProveedores($this->getnombre(), $this->getcalle(), $this->getemail(), $this->getnumero(),$this->getesquina());
    }
    function eliminarproveedor(){
        $proveedores = new ProveedoresDB();
        $proveedores->eliminarProveedores($this->getid(),$this->getnombre(), $this->getcalle(), $this->getemail(), $this->getnumero(),$this->getesquina());
    }
       
    }

