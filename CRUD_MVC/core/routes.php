<?php
    function cargarControlador($controlador){
        $nombreControlador = ucwords($controlador."Controller");
        $archivoControlador = ucwords("controllers/".$controlador."Controller.php");
        if(!is_file($archivoControlador)){
            $archivoControlador = "controllers/".CONTROLADOR_PRINCIPAL."Controller.php";
        }
        require_once $archivoControlador;
        $control = new $nombreControlador();
        return $control;
    }
    function cargarAccion($controller, $accion){
        if(isset($accion) && method_exists($controller, $accion)){
            $controller->$accion();
        }
        else{
            $controller->ACCION_PRINCIPAL();
        }
    }
?>