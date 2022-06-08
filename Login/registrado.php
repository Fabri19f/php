<?php
    require_once "conexion.php";
    if(isset($_POST["sign_in"])){
        $user = trim($_POST["user"]);
        $mail = trim($_POST["mail"]);
        $pass = trim($_POST["pass"]);
        $conf_pass = trim($_POST["conf_pass"]);
        if($pass == $conf_pass){
            $consulta_val = "SELECT * FROM usuarios WHERE Username LIKE '$user'";
            $resultado_val = mysqli_query($conexion,$consulta_val);

            $consulta_val2 = "SELECT * FROM usuarios WHERE Email LIKE '$mail'";
            $resultado_val2 = mysqli_query($conexion,$consulta_val2);
            
            if($resultado_val -> fetch_array()){
                echo "El usuario ya esta en uso";
            }
            elseif($resultado_val2 -> fetch_array()){
                echo "El email ya esta en uso";
            }
            else{ 
                $consulta_introducir = "INSERT into usuarios(Username, Email, Pass) values ('$user','$mail','$pass')";
                $resultado_introducir = mysqli_query($conexion,$consulta_introducir);
                if($resultado_introducir){
                    echo "Resgistrado Exitosamente";
                }
                else{
                    echo "Error al registrar";
                }
            }
        }else{
            echo "Las contraseñas no coinciden";
        }
    }
?>