<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $baseDatos = "LoginPhp";
    $conexion = mysqli_connect($servidor,$usuario,$password,$baseDatos);
    if($conexion){
       // echo "Conectado";
    }
    else{
        // echo "Error en la conexión";
    }
?>