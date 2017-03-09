<?php

include_once './ControlLogin.php';
include_once '../Domain/Usuario.php';
/*$metodo='';
if(isset($_POST['metodo'])){
    $metodo = $_POST['metodo'];
}

echo 'MEtodo> '.$metodo;

switch ($metodo){
    case 'login':*/
        $usuario = new Usuario();
        $usuario->setContrasenia($_POST['password']);
        $usuario->setCorreo($_POST['correo']);
        
      
       $control = new ControlLogin();
        
       echo $control->InicioSesion($usuario->getCorreo(), $usuario->getContrasenia());
        
   //     break;
    
  //  default :
   //     break;
//}   

?>