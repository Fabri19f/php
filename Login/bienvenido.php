<?php
    require_once "conexion.php";
    if(isset($_POST["sign"])){
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];
        $consulta = "SELECT * FROM usuarios WHERE Email LIKE '$mail' AND Pass LIKE '$pass'";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado -> fetch_array()){
            echo "Bienvenido ".$mail;
        }else{
            echo "No se encontro usuario";
        }
    }
?>