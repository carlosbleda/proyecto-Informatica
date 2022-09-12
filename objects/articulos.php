<?php
include './data/ProductosDB.php';
class Persona
{
    private $nombre;
    private $descripcion;
    private $marca;
    private $stock;
    private $imagen;
    private $categoria;
    private $precio;
    private $proveedor;
    private $descuento;

    function setnombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getNombre()
    {
        return $this->nombre;
    }
    function setdescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getdescripcion()
    {
        return $this->descripcion;
    }

    function setmarca($marca)
    {
        $this->marca = $marca;
    }

    function getmarca()
    {
        return $this->marca;
    }

    function setstock($stock)
    {
        $this->stock = $stock;
    }

    function getstock()
    {
        return $this->stock;
    }

    function setimagen($imagen)
    {
        $this->imagen = $imagen;
    }

    function getimagen()
    {
        return $this->imagen;
    }
    function setcategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    function getcategoria()
    {
        return $this->categoria;
    }
    function setprecio($precio)
    {
        $this->precio = $precio;
    }

    function getprecio()
    {
        return $this->precio;
    }
    function setproveedor($proveedor)
    {
        $this->proveedor = $proveedor;
    }

    function getproveedor()
    {
        return $this->proveedor;
    }
    function setdescuento($descuento)
    {
        $this->descuento = $descuento;
    }

    function getdescuento()
    {
        return $this->descuento;
    }
    public function cargarProducto()
    {
        $user = new ProductoDB();
        $user->CargarProductos($this->getNombre(), $this->getdescripcion(), $this->getmarca(), $this->getstock(), $this->getimagen(), $this->getcategoria(), $this->getprecio(), $this->getproveedor(), $this->getdescuento());
    }
}
