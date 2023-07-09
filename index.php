<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Funcion para realizar funcion del controlador otorgado
function revisarRequest($string, $controlador, $funcion) {
    if(isset($_POST['m'])):
        if(method_exists($string, $_POST['m'])):
            $controlador::{$_POST['m']}();
        endif;
    else:
    $controlador::$funcion();
    endif;
}

require_once "config.php";
$uri = $_SERVER['REQUEST_URI'];

// Enrutador - dependiendo de URL devuelve vistas y funciones
switch ($uri){
    case '/SC502_2C2023_G5/':
        require 'vista/home.php';
        break;
    case '/SC502_2C2023_G5/admin/usuarios':
        require 'controlador/C_Usuario.php';
        $controlador = new C_Usuario();
        $funcion = 'mostrarUsuarios';
        revisarRequest('C_Usuario', $controlador, $funcion);
        break;
    case '/SC502_2C2023_G5/admin/usuarios/nuevo':
        require 'controlador/C_Usuario.php';
        $controlador = new C_Usuario();
        $funcion = 'agregarUsuario';
        revisarRequest('C_Usuario', $controlador, $funcion);
        break;
    case str_contains($uri, '/SC502_2C2023_G5/admin/usuarios/eliminar'):
        require 'controlador/C_Usuario.php';
        C_Usuario::eliminarUsuario();
        break;
    case '/SC502_2C2023_G5/admin/productos':
        require 'controlador/C_Producto.php';
        $controlador = new C_Producto();
        $funcion = 'mostrarProductos';
        revisarRequest('C_Producto', $controlador, $funcion);
        break;
    case '/SC502_2C2023_G5/admin/productos/nuevo':
        require 'controlador/C_Producto.php';
        $controlador = new C_Producto();
        $funcion = 'agregarProducto';
        revisarRequest('C_Producto', $controlador, $funcion);
        break;
    case str_contains($uri, '/SC502_2C2023_G5/admin/productos/eliminar'):
        require 'controlador/C_Producto.php';
        C_Producto::eliminarProducto();
        break;
    case '/SC502_2C2023_G5/login':
        require 'controlador/C_Login.php';
        C_Login::login();
        break;
    case '/SC502_2C2023_G5/logout':
        require 'controlador/C_Login.php';
        C_Login::logout();
        break;
    case '/SC502_2C2023_G5/register':
        require 'controlador/C_Login.php';
        C_Login::register();
        break;
    case str_contains($uri, '/SC502_2C2023_G5/perfil'):
        require 'controlador/C_Usuario.php';
        $controlador = new C_Usuario();
        $funcion = 'verPerfil';
        revisarRequest('C_Usuario', $controlador, $funcion);
        break;

}
