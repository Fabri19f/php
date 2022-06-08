<?php
    class Vehiculos_Model{
        private $db;
        private $vehiculos;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->vehiculos = array();
        }

        public function get_vehiculos(){
            $sql = "SELECT * FROM vehiculos";
            $result = $this->db->query($sql);
            while($row = $result->fetch_assoc()){
                $this->vehiculos[] = $row;
            }
            return $this->vehiculos;
        }

        public function insert_vehiculos($placa, $marca, $modelo, $anio, $color){
            $sql = "INSERT INTO vehiculos(Placa, Marca, Modelo, Anio, Color) VALUES ('$placa','$marca','$modelo','$anio','$color')";
            $result = $this->db->query($sql);
        }
    }
?>