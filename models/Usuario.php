<?php

class Usuario {

    private $db;
    private $usuarios;

    public function __construct(){

        $this->db = new Conectar();
        $this->usuarios = array();

    }

    public function get_usuarios(){

        // $sql = "SELECT Usuario.*, Direccion.* FROM Usuario 
        //         INNER JOIN Direccion ON Usuario.idDir = Direccion.idDireccion";
        // $sql = "SELECT * FROM usuario";

        // $resultado = $this->db->con->query($sql);
    
        // while ($row = $resultado->fetch_assoc()) {
        //     $this->usuarios[] = $row;
        // }

        // return $this->usuarios;

        $usuario=mysqli_query("SELECT * FROM usuario");
        $resultado= mysqli_query($con,$usuario);

        while ($row = mysqli_fetch_assoc($resultado)) {
            $this->usuarios[] = $row;
        }
    }
}

?>
