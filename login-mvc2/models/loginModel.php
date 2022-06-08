<?php
    require_once "conexion.php";
    class LoginModel extends Conexion{ 
        public function __construct(){
            $db = parent::conectar();
        }

        public registrar($usuario, $email, $contraseña){
            $consulta = "INSERT INTO usuarios(Username, Email, Pass) VALUES ('$usuario','$email','$values')";
            mysqli_query($db, $consulta);
        }   
    }
?>