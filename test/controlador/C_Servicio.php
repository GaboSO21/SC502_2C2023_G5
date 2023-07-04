<?php

require_once "modelo/Servicio.php";

class C_Producto{

    //---------------------------------FUNCIONES TIPOPRODUCTOS-------------------------------------

    static function mostrarTipos(){
        $modelo = new Servicio();
        $datos = $modelo->mostrarTipos();
        require_once "vista/administrador/servicios/page-servicios.php";
    }

    static function agregarTipoServicio(){
        //---DATOS
        $nombre = $_REQUEST['txt_nombreCategoria'];
        $descripcion = $_REQUEST['txt_descripcionCategoria'];
        //---DATA JUNTA
        $data = "'".$nombre."', '".$descripcion."'";
        //---MODELO 
        $servicio = new Servicio();
        //SE MANDA A LLAMAR LA FUNCION INSERTAR TIPO
        $dato = $servicio->insertarTipo($data);
        //SE REDIRECCIONA A LA PAGINA SERVICIOS ADD
        header('location:'.admin_services_add);
    }

    //---------------------------------FUNCIONES TIPOPRODUCTOS-------------------------------------

    static function mostrarServicios(){
        $modelo = new Servicio();
        $datos = $modelo->mostrar();
        require_once "vista/administrador/servicios/page-servicios.php";
    }

    static function agregarServicios(){
        $modelo = new Servicio();
        $datos = $modelo->mostrarTipos();
        require_once "vista/administrador/servicios/page-registro-servicios.php";
    }

    static function guardarServicio(){
        $nombre = $_REQUEST['txt_nomServicio'];
        $descripcion = $_REQUEST['descripcion'];
        $precio = $_REQUEST['precio'];
        $idTipoServicio = $_REQUEST['idTipoServicio'];
        $data = "'".$nombre."', '".$descripcion."', ".$precio.", ".$idTipoServicio;
        $servicio = new Servicio();
        $dato = $servicio->insertarServicio($data);
        header('location:'.admin_services);
    }




}//fin class

?>