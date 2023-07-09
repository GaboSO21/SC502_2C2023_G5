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
        header('location:'.user_admin);
    }

    static function eliminarUsuario() {
        $idUsuario = $_REQUEST['idUsuario'];
        $usuario = new Usuario();
        $dato = $usuario->eliminar($idUsuario);
        header('location:'.admin_users);
    }

    static function verPerfil() {
        session_start();
        if(empty($_SESSION['id'])){
            header('location:'.user_login);
        } else {
            $idUsuario = $_SESSION['id'];
            $usuario = new Usuario();
            $datos = $usuario->mostrarUsuarioLogueado($idUsuario);
            $datosUsuario = $datos[0][0];
            require_once 'vista/usuario/page-perfil-usuario.php';
        }
    }

    static function actualizarPerfil() {
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
        header('location:'.user_profile);
    }

    static function actualizarDireccion() {
        $idUsuario = $_REQUEST['idUsuario'];
        $provincia = $_REQUEST['provincia'];
        $distrito = $_REQUEST['distrito'];
        $senalesExactas = $_REQUEST['senalesExactas'];
        $canton = $_REQUEST['canton'];
        $codPostal = $_REQUEST['codPostal'];
        $data = "provincia='".$provincia."', distrito='".$distrito."', senalesExactas='".$senalesExactas."', canton='".$canton."', codPostal=".$codPostal." ";
        $usuario = new Usuario();
        $dato = $usuario->actualizarDireccion($data,$idUsuario);
        header('location:'.user_profile);
    }

    static function cambiarContrasenna() {
        session_start();
        $idUsuario = $_REQUEST['idUsuario'];
        $contrasenna = $_REQUEST['contrasena'];
        $nuevacontra = $_REQUEST['nuevacontra'];
        $confirmacontra = $_REQUEST['confirmacontra'];
        $usuario = new Usuario();
        if(($contrasenna == $_SESSION['contrasenna']) and
           ($nuevacontra == $confirmacontra)){
            $dato = $usuario->actualizarContrasenna($idUsuario, $nuevacontra);
            header('location:'.user_profile);
        } else {
            header('location:'.user_profile);
            echo 'Datos erroneos.';
        }
    }

}

?>








