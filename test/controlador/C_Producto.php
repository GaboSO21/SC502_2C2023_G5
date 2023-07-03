<?php

require_once "modelo/Producto.php";

class C_Producto {

    static function mostrarProductos() {
        $modelo = new Producto();
        $datos = $modelo->mostrar();
        require_once "vista/administrador/productos/page-productos.php";
    }

    static function agregarProducto() {
        require_once "vista/administrador/productos/page-productos.php";
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

    static function actualizarProducto() {
        $idUsuario = $_REQUEST['idUsuario'];
        $nombre = $_REQUEST['nombre'];
        $primerApellido = $_REQUEST['primerApellido'];
        $segundoApellido = $_REQUEST['segundoApellido'];
        $cedula = $_REQUEST['cedula'];
        $correo = $_REQUEST['correo'];
        $contrasena = $_REQUEST['contrasena'];
        $idRol = $_REQUEST['idRol'];
        $data = "nombre='".$nombre."', primApellido='".$primerApellido."', segApellido='".$segundoApellido."', cedula='".$cedula."', correo='".$correo."', contrasenna='".$contrasena."', idRol=".$idRol;
        $usuario = new Usuario();
        $dato = $usuario->actualizar($data,$idUsuario);
        header('location:'.admin_users);
    }

    static function eliminarProducto() {
        $idUsuario = $_REQUEST['idUsuario'];
        $usuario = new Usuario();
        $dato = $usuario->eliminar($idUsuario);
        header('location:'.admin_users);
    }

}

?>








