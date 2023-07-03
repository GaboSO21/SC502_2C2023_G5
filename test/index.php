<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once "config.php";
// var_dump($_SERVER['REQUEST_URI']);

$uri = $_SERVER['REQUEST_URI'];

switch ($uri){
    case '/test/':
        require 'vista/home.php';
        break;
    case str_contains($uri, '/test/admin/usuarios'):
        require 'controlador/C_Usuario.php';
        if(isset($_GET['m'])):
            if(method_exists('C_Usuario',$_GET['m'])):
                C_Usuario::{$_GET['m']}();
            endif;
        else:
        C_Usuario::mostrarUsuarios();
        endif;
        break;
    case str_contains($uri, '/test/admin/productos'):
        require 'controlador/C_Producto.php';
        if(isset($_GET['m'])):
            if(method_exists('C_Usuario',$_GET['m'])):
                C_Producto::{$_GET['m']}();
            endif;
        else:
        C_Producto::mostrarProductos();
        endif;
        break;
}
