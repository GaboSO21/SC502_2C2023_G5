<?php
class Usuario {

    private $Modelo;
    private $db;
    private $datos;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=aura_botanica', 'root', '');
        $this->Modelo = array();
    }

    public function mostrar() {
        $consulta = "SELECT * FROM Usuario;";
        $resultado = $this->db->query($consulta);
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->datos[]=$filas;
        }
        return $this->datos;
    }

    public function insertar($data) {
        $consulta = "INSERT INTO Usuario VALUES (null,".$data.");";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    public function actualizar($data, $idUsuario) {
        $consulta = "UPDATE Usuario SET ".$data." WHERE idUsuario=".$idUsuario.";";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminar($idUsuario) {
        $consulta = "DELETE FROM Usuario WHERE idUsuario=".$idUsuario.";";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
}




