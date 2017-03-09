<?php

class ControlLogin {

    function __construct() {
        
    }

    function InicioSesion($correo, $contrasenia) {

        if ($correo == 'admin@gmail.com') {
            if ($contrasenia == '1234') {
                header('Location: ../View/Administrativo/Principal.php');
            }
        } else
        if ($correo == 'usuario@gmail.com') {
            if ($contrasenia == '1234') {
                header('Location: ../View/Usuarios/Principal.php');
            }
        } else {
            echo 'Error al ingresar';
        }
    }

}

?>