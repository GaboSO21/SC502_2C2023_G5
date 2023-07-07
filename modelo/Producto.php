<?php
class Producto {

    private $Modelo;
    private $db;
    private $datos;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=aura_botanica', 'root', '');
        $this->Modelo = array();
    }

    public function mostrar() {
        $consulta = 'SELECT Producto.*, TipoProducto.nombre as "TipoNombre", TipoProducto.descripcion as "TipoDesc" FROM Producto 
                    JOIN TipoProducto ON Producto.idTipoProducto = TipoProducto.idTipoProducto;';
        $resultado = $this->db->query($consulta);
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->datos[]=$filas;
        }
        return $this->datos;
    }

    public function mostrarTipos() {
        $consulta = 'SELECT * FROM TipoProducto;';
        $resultado = $this->db->query($consulta);
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->datos[]=$filas;
        }
        return $this->datos;
    }

    public function insertar($data) {
        $consulta = "INSERT INTO Producto VALUES (null,".$data.");";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
    
    public function insertarTipo($data) {
        $consulta = "INSERT INTO TipoProducto VALUES (null,".$data.");";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function actualizar($data, $idProducto) {
        $consulta = "UPDATE Producto SET ".$data." WHERE idProducto=".$idProducto.";";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function actualizarStock($data, $idProducto) {
        $consulta = 'UPDATE Producto SET stock=(stock+'.$data.') WHERE idProducto='.$idProducto.';';
        $resultado= $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminar($idProducto) {
        $consulta = "DELETE FROM Producto WHERE idProducto=".$idProducto.";";
        $resultado = $this->db->query($consulta);
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
}




