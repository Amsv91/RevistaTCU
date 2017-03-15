<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Domain/Institucion.php';
include_once '../Business/ControladoraInstitucion.php';

if(isset($_GET['metodo'])){
  $metodo =$_GET['metodo'] ;  
    
}
if(isset($_POST['metodo'])){
    
     $metodo =$_POST['metodo'];  
}

switch ($metodo) {
    case 'insertarInstituto':
            $nombre = trim($_POST['nombre']);  //asocia los name de los campos de las interfaces
            $cedula = $_POST['cedula'];
            $telefono= $_POST['telefono'];
            $encargado = $_POST['encargado'];
            $direccion = $_POST['direccion'];
            $mision = $_POST['mision'];
            $vision = $_POST['vision'];
            $canton = $_POST['canton'];
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $contrasena2 = $_POST['contrasena2'];

            $Instituto = new Institucion();
            $Instituto->setNombreInstitucion($nombre);
            $Instituto->setCedulaJuridica($cedula);
            $Instituto->setTelefono($telefono);
            $Instituto->setResponsable($encargado);
            $Instituto->setDireccion($direccion);
            $Instituto->setMision($mision);
            $Instituto->setVision($vision);
            $Instituto->setCodCanton($canton);
            $Instituto->setCorreo($correo);
            $Instituto->setContrasena($contrasena);

            
            $control = new ControladoraInstitucion();
            $control->insertarInstitucion($Instituto);
            
        break;
  default:
        echo "Error al ejecutar la accion";
        break;
}