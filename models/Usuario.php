<?php

class Usuario {

    private $db;
    private $usuarios;

    public function __construct(){

        $this->db = new Conectar();
        $this->usuarios = array();

    }

    public function get_usuarios(){

        $sql = "SELECT Usuario.*, Direccion.* FROM Usuario 
                INNER JOIN Direccion ON Usuario.idDir = Direccion.idDireccion";
        $resultado = $this->db->con->query($sql);
    
        while ($row = $resultado->fetch_assoc()) {
            $this->usuarios[] = $row;
        }

        return $this->direcciones;
        
    }

}

?>
