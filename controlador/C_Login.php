<?php

require_once "modelo/Usuario.php";

class C_Login {

    static function login(){
        session_start();
        require_once "vista/usuario/login.php";
        $usuario = new Usuario();
        if(!empty($_POST['loginSubmit'])){
            if(!empty($_POST['correo']) and !empty($_POST['contrasenna'])){
                $correo = $_POST['correo'];
                $contrasenna = $_POST['contrasenna'];
                $datos = $usuario->login($correo, $contrasenna);
                if (!empty($datos)) {
                    $_SESSION['id']=$datos[0][0]['idUsuario'];
                    $_SESSION['idRol']=$datos[0][0]['idRol'];
                    $_SESSION['contrasenna']=$datos[0][0]['contrasenna'];
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

    static function register() {
        require_once 'vista/usuario/page-user-register.php';
        if(!empty($_POST['registerSubmit'])) {
            if( !empty($_POST['nombre']) and !empty($_POST['primApellido']) and
                !empty($_POST['segApellido']) and !empty($_POST['cedula']) and
                !empty($_POST['contrasenna']) and !empty($_POST['senalesExactas']) and
                !empty($_POST['provincia']) and !empty($_POST['canton']) and
                !empty($_POST['distrito']) and !empty($_POST['codPostal']) and
                !empty($_POST['correo'])){

                $nombre = $_POST['nombre'];
                $primApellido = $_POST['primApellido'];
                $segApellido = $_POST['segApellido'];
                $cedula = $_POST['cedula'];
                $contrasenna = $_POST['contrasenna'];
                $senalesExactas = $_POST['senalesExactas'];
                $provincia = $_POST['provincia'];
                $canton = $_POST['canton'];
                $distrito = $_POST['distrito'];
                $codPostal = $_POST['codPostal'];
                $correo = $_POST['correo'];
                $idRol = 2;

                $usuario = new Usuario();

                $dataUsuario = "'".$nombre."', '".$primApellido."', '".$segApellido."', '".$cedula."', '".$contrasenna."', ".$idRol;
                $dataDireccion = "'".$provincia."', '".$canton."', '".$distrito."', ".$codPostal.", '".$senalesExactas."'";

                $registro = $usuario->register($correo, $dataUsuario, $dataDireccion);

                header("location:".user_login);

            } else {
                echo 'Campos vacios';
            }
        }
    }
}

?>
