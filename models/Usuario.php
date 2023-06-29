<?php

class Usuario {

    private $db;
    private $usuarios;

    public function __construct(){

        $this->db = new PDO('mysql:host=localhost;dbname=aura_botanica','root','');
        $this->usuarios = array();

    }

    public function obtenerUsuarios(){
        $consulta="SELECT * FROM Usuarios;";
        $resultado=$this->db->query($consulta);
        while($filas = $resultado->fetchAll(PDO::FETCH_ASSOC)){
            $this->usuarios[]=$filas;
        }

        return $this->usuarios;
    }

    public function agregarUsuario($data){
        $consulta = "INSERT INTO aura_botanica.Usuario VALUES (".$data .")";
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function actualizarUsuario($data, $condicion){
        $consulta="UPDATE auta_botanica.Usuario SET ".$data." WHERE idUsuario=".$condicion;
        $resultado=$this->db->query($consulta);
        if($resultado){
            return true;
        } else {
            return false;
        }
    }

    public function eliminarUsuario($condicion){
        $consulta="DELETE FROM aura_botanica.Usaurio WHERE idUsuario=".$condicion;
        $resultado=$this->db->query($consulta);
        if($resultado){
            return true;
        } else {
            return false;
        }
    }
}

?>
