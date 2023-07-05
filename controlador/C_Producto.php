<?php

require_once "modelo/Producto.php";

class C_Producto {

    static function mostrarProductos() {
        $modelo = new Producto();
        $datos = $modelo->mostrar();
        require_once "vista/administrador/productos/page-productos.php";
    }

    static function agregarProducto() {
        $modelo = new Producto();
        $datos = $modelo->mostrarTipos();
        require_once "vista/administrador/productos/page-registro-productos.php";
    }

    static function guardarProducto() {
        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];
        $stock = $_REQUEST['stock'];
        $estatus = 1;
        $precio = $_REQUEST['precio'];
        $idTipoProducto = $_REQUEST['idTipoProducto'];
        $data = "'".$nombre."', '".$descripcion."', ".$stock.", ".$estatus.", ".$precio.", ".$idTipoProducto;
        $producto = new Producto();
        $dato = $producto->insertar($data);
        header('location:'.admin_products);
    }

    static function guardarTipoProducto() {
        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];
        $data = "'".$nombre."', '".$descripcion."'";
        $producto = new Producto();
        $dato = $producto->insertarTipo($data);
        header('location:'.admin_products_add);
    }

    static function actualizarProducto() {
        $idProducto = $_REQUEST['idProducto'];
        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];
        $precio = $_REQUEST['precio'];
        $estatus = $_REQUEST['estatus'];
        $data = "nombre='".$nombre."', descripcion='".$descripcion."', precio=".$precio.", estatus=".$estatus;
        $producto = new Producto();
        $dato = $producto->actualizar($data,$idProducto);
        header('location:'.admin_products);
    }

    static function agregarStock() {
        $idProducto = $_REQUEST['idProducto'];
        $stock = $_REQUEST['stock'];
        $data = $stock;
        $producto = new Producto();
        $dato = $producto->actualizarStock($data,$idProducto);
        header('location:'.admin_products);
    }

    
    static function eliminarProducto() {
        $idProducto = $_REQUEST['idProducto'];
        $producto = new Producto();
        $dato = $producto->eliminar($idProducto);
        header('location:'.admin_products);
    }

}

?>








