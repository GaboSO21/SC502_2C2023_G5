<?php

require_once "modelo/Usuario.php";

class C_Usuario {

    static function mostrarUsuarios() {
        $modelo = new Usuario();
        $datos = $modelo->mostrar();
        require_once "vista/administrador/usuarios/page-usuarios.php";
    }

    static function agregarUsuario() {
        require_once "vista/administrador/usuarios/page-registro-usuarios.php";
    }

    static function guardarUsuario() {
        $nombre = $_REQUEST['nombre'];
        $primerApellido = $_REQUEST['primerApellido'];
        $segundoApellido = $_REQUEST['segundoApellido'];
        $cedula = $_REQUEST['cedula'];
        $correo = $_REQUEST['correo'];
        $contrasena = $_REQUEST['contrasena'];
        $idRol = 1;
        $data = "'".$nombre."', '".$primerApellido."', '".$segundoApellido."', '".$cedula."', '".$correo."', '".$contrasena."',".$idRol;
        $usuario = new Usuario();
        $dato = $usuario->insertar($data);
        header('location:'.admin_users);
    }

    static function actualizarUsuario() {
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

    static function eliminarUsuario() {
        $idUsuario = $_REQUEST['idUsuario'];
        $usuario = new Usuario();
        $dato = $usuario->eliminar($idUsuario);
        header('location:'.admin_users);
    }

}

?>








