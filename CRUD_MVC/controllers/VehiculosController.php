<?php
    class VehiculosController{
        

        public function __construct(){
            require_once "models/VehiculosModel.php";
        }

        public function index(){
            $vehiculos = new Vehiculos_model();
            $data["titulo"] = "Vehiculos";
            $data["vehiculos"] = $vehiculos->get_vehiculos();
            require_once "views/vehiculos/vehiculos.php";
        }

        public function nuevo(){
            require_once "views/vehiculos/formulario.php";
        }
        public function guardar(){
            $placa = $_POST["placa"];
            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $anio = $_POST["anio"];
            $color = $_POST["color"];

            $vehiculos = new Vehiculos_model();
            $vehiculos->insert_vehiculos($placa, $marca, $modelo, $anio, $color);
            $this->index();          
        }
    }
?>