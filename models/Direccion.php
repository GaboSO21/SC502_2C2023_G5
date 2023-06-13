<?php

class Direccion {

    private $db;
    private $direcciones;

    public function __construct(){

        $this->db = new Conectar();
        $this->direcciones = array();

    }

    public function get_direcciones(){

        $sql = "SELECT * FROM Direccion";
        $resultado = $this->db->con->query($sql);
    
        while ($row = $resultado->fetch_assoc()) {
            $this->direcciones[] = $row;
        }

        return $this->direcciones;
        
    }

}

?>
