<?php
    class LoginController{
        public function __construct(){
            require_once "models/loginModel.php";
            $model = new LoginModel();
        }

        public function iniciarSesion(){
            require_once "views/inicio/index.php";
        }

        public function registrarse(){
            require_once "views/inicio/index.php";
            if(isset($_POST["submit"])){
                $usuario = $_POST["user"];
                $email = $_POST["email"];
                $pass = $_POST["pass"];
                $this->model->registrar($usuario, $email, $pass);
            }
        }
    }
?>