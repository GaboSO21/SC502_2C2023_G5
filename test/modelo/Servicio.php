<?php
class Servicio {
    //---VARIABLES---
    private $Modelo;
    private $db;
    private $datos;

    //---CONSTRUCTOR---
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=aura_botanica', 'root', '');
        $this->Modelo = array();
    }

    //----------------------------FUNCIONES TIPOS-------------------------------------
    public function mostrarTipos(){
        $consulta = 'SELECT * FROM TipoServicio;';
        $resultado = $this->db->query($consulta);
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->datos[]=$filas;
        }
        return $this->datos;
    }

    public function insertarTipo($data) {
        $consulta = "INSERT INTO TipoServicio VALUES (null,".$data.");";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function actualizarTipo($data, $idTipoServicio) {
        $consulta = "UPDATE TipoServicio SET ".$data." WHERE idTipoServicio=".$idTipoServicio.";";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminarTipo($idTipoServicio){
        $consulta = "DELETE FROM TipoServicio WHERE idTipoServicio=".$idTipoServicio.";";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    
    //----------------------------FUNCIONES SERVICIOS-------------------------------------
    public function mostrar() {
        $consulta = 'SELECT * FROM Servicio.*, TipoServicio.nombre as "TipoNombre", TipoServicio.descripcion as "TipoDesc" FROM Servicio
                    JOIN TipoServicio ON Servicio.idTipoServicio = TipoServicio.idTipoServicio;';
        $resultado = $this->db->query($consulta);
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->datos[]=$filas;
        }
        return $this->datos;
    }
    
    public function insertarServicio($data) {
        $consulta = "INSERT INTO Servicio VALUES (null,".$data.");";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function actualizarServicio($data, $idServicio) {
        $consulta = "UPDATE Servicio SET ".$data." WHERE idServicio=".$idServicio.";";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminarServicio($idServicio){
        $consulta = "DELETE FROM Servicio WHERE idServicio=".$idServicio.";";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

}//fin class
?>