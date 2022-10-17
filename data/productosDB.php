<?php
require_once(realpath(dirname(__FILE__).'./conect.php'));

class ProductoDB extends Conexion
{
    public function CargarProductos($nombre, $descripcion, $marca, $stock, $imagen, $categoria, $precio, $proveedor, $descuento)
    {
        $conect = $this->conect();
        $sql = "INSERT INTO productos(nombre,descripcion,marca,stock,imagen,categoria,precio,id_proveedor,descuento) 
VALUES('$nombre','$descripcion','$marca','$stock','$imagen','$categoria','$precio','$proveedor','$descuento')";

        if ($conect->query($sql)) {

            echo 'Nuevo registro creado con éxito';
        } else {
            echo "('Error: ' . $sql . '<br>' . $conect->error";
        }
        $this->Disconnect();
    }
    public function MostrarProductos()
    {
        $conect = new Conexion();

        $consulta = "SELECT * FROM productos";
        $resultado = mysqli_query($conect->conect(), $consulta);
        if ($resultado->num_rows > 0) {
           
                $listaProductos[] = new Producto();
    
                while ($row = $resultado->fetch_assoc()) {
                    $p = new Producto();
                    $p->setnombre($row['nombre']);
                    $p->setprecio($row['precio']);
                    $p->setimagen($row['imagen']);
                    $p->setcategoria($row['categoria']);
                    $p->setstock($row['stock']);
    
    
                    $listaProductos[] = $p;
                    $json=json_encode($listaProductos);

                }
                return $listaProductos;
            } else {
    
                return null;
            }
            
            }
            public function ModificarProductos($id,$nombre, $descripcion, $marca, $stock, $imagen, $categoria, $precio, $proveedor, $descuento)
            {
                $conect = $this->conect();
                $sql ="UPDATE productos SET  nombre = '$nombre', descripcion = '$descripcion', marca = '$marca', stock = '$stock', imagen='$imagen', categoria = '$categoria', precio = '$precio' WHERE id_producto = '$id'";

                if ($conect->query($sql)) {
        
                    echo 'Nuevo registro creado con éxito';
                } else {
                    echo "'Error: ' . $sql . '<br>' . $conect->error";
                }
                $this->Disconnect();
            }
            function eliminarProductos($id)
 { $conect=new Conexion();
   
     $sql = "DELETE FROM productos WHERE id_producto='$id' ";
    
    
    
     if (mysqli_query($conect->conect(), $sql)) {
    
        echo 'Nuevo registro creado con éxito';
    } else {
    
        echo 'Error: ' . $sql . '<br>' . $conect->error;
    }
   $conect->Disconnect();
 }
        }
    

