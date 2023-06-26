<?php
    require('../models/Usuario.php');

    class UsuarioController{
        private $usuarioModel;

        public function __construct() {
            $this->usuarioModel = new UsuarioModel();
        }
    
        public function mostrarUsuarios() {
            $usuarios = $this->usuarioModel->obtenerUsuarios();
            include '../views/administrador/usuarios/page-usuarios.php';
        }
    
        public function agregarUsuario($datosUsuario) {
            // Validar y procesar los datos del formulario
            $this->usuarioModel->agregarUsuario(/* datos del formulario */);
            // Redireccionar a la vista de usuarios
        }
    
        public function actualizarUsuario($idUsuario, $datosUsuario) {
            // Validar y procesar los datos del formulario
            $this->usuarioModel->actualizarUsuario($idUsuario, /* datos del formulario */);
            // Redireccionar a la vista de usuarios
        }
    
        public function eliminarUsuario($idUsuario) {
            $this->usuarioModel->eliminarUsuario($idUsuario);
            // Redireccionar a la vista de usuarios
        }

    }
    $controller = new UsuarioController();
    $controller->mostrarUsuarios();
    // $con = new Conectar();

    // $usuarios = $con->getUsuarios();

    // require('views/administrador/usuarios/page-usuarios.php');
?>