<?php
    class Conexion{
    public static function conectar(){
        return mysqli_connect("localhost", "root", "", "loginphp");
    }
}

?>