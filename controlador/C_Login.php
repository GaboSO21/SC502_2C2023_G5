<?php

session_start();
require_once "modelo/Usuario.php";

class C_Login {

    static function login(){
        require_once "vista/usuario/login.php";
        $usuario = new Usuario();
        if(!empty($_POST['loginSubmit'])){
            if(!empty($_POST['correo']) and !empty($_POST['contrasenna'])){
                $correo = $_POST['correo'];
                $contrasenna = $_POST['contrasenna'];
                $datos = $usuario->login($correo, $contrasenna);
                if (!empty($datos)) {
                    $_SESSION['id']=$datos[0][0]['idUsuario'];
                    $_SESSION['correo']=$datos[0][0]['correo'];
                    $_SESSION['rol']=$datos[0][0]['idRol'];
                    header("location:".urlsite);
                } else {
                    echo 'Datos invalidos.';
                }
            } else {
                echo 'Campos vacios.';
            }
        }
    }

    static function logout() {
        session_destroy();
        header('location:'.user_login);
    }
}

?>
