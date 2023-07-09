<?php
class Usuario {

    private $Modelo;
    private $db;
    private $datos;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=aura_botanica', 'root', '');
        $this->Modelo = array();
    }

    //--Funcion para controlador del login--
    public function login($correo, $contrasenna) {
        $consulta = "SELECT * FROM Usuario WHERE correo='".$correo."' AND contrasenna='".$contrasenna."';";
        $resultado = $this->db->query($consulta);
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->datos[]=$filas;
        }
        return $this->datos;
    }
    
    //--Funcion para agarrar usuario logueado--
    public function mostrarUsuarioLogueado($idUsuario) {
        $consulta = "SELECT * FROM Usuario JOIN Direccion ON Usuario.idUsuario = Direccion.idUsuario 
                    WHERE Usuario.idUsuario=".$idUsuario.";";
        $resultado = $this->db->query($consulta);
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->datos[]=$filas;
        }
        return $this->datos;
    }

    //--Funcion para actualizar direccion de usuario logueado--
    public function actualizarContrasenna($idUsuario, $contrasenna) {
        $consulta = "UPDATE Usuario SET contrasenna='".$contrasenna."' WHERE idUsuario=".$idUsuario.";";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    //--Funcion para actualizar direccion de usuario logueado--
    public function actualizarDireccion($data, $idUsuario) {
        $consulta = "UPDATE Direccion SET ".$data." WHERE idUsuario=".$idUsuario.";";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    //--Funcion para registrar 
    public function register($correo, $dataUsuario, $dataDireccion) {
        $consulta = "INSERT INTO Usuario (correo, nombre, primApellido, segApellido, cedula, contrasenna, idRol) VALUES ('".$correo."' ,".$dataUsuario.");";
        $resultado = $this->db->query($consulta);
        if($resultado) {

            $consultaDir = "INSERT INTO Direccion VALUES (null, ".$dataDireccion.", (SELECT idUsuario FROM Usuario WHERE correo='".$correo."'));";
            $resultadoDir = $this->db->query($consultaDir);
            if($resultadoDir) {
                return true;
            } else {
                return false;
            }

        } else {
            return false;
        }
    }

    //--Mostrar usuarios admin--
    public function mostrar() {
        $consulta = "SELECT * FROM Usuario;";
        $resultado = $this->db->query($consulta);
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->datos[]=$filas;
        }
        return $this->datos;
    }

    //--Insertar usuario admin--
    public function insertar($data) {
        $consulta = "INSERT INTO Usuario VALUES (null,".$data.");";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    //--Actualizar usuario admin--
    public function actualizar($data, $idUsuario) {
        $consulta = "UPDATE Usuario SET ".$data." WHERE idUsuario=".$idUsuario.";";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    //--Eliminar usuario admin--
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




