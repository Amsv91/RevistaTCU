<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '/Data.php';


class DataInstitucion{
    var $mysqli;
    var $conexion;  // variable que almacenara la conexion a la DB

    //Funcion q realiza la conexion y la asigna a la variable $conexion        

    public function DataInstitucion() {
        $this->mysqli = new Data();
    }
    
    public function insertarInstitucion($Instituto) {

        $this->conexion = $this->mysqli->getConnection();
        $sentencia = $this->conexion->stmt_init();
        $sentencia->prepare("CALL paInsertarInstituto(?,?,?,?,?,?,?,?,?,?,?)");
        $sentencia->bind_param("ssssssssiss", $cedulaJuridicaI, $telefonoI, $nombreInstitucionI, $responsableI, $direccionI, $correoI, $descripcionI, $contrasenaI, $codCantonI, $misionI, $visionI);

        $Instituto = new Institucion();
        $cedulaJuridicaI = $Instituto->getCedulaJuridica();
        $telefonoI = $Instituto->getTelefono();
        $nombreInstitucionI = $Instituto->getNombreInstitucion();
        $responsableI = $Instituto->getResponsable();
        $direccionI = $Instituto->getDireccion();
        $correoI = $Instituto->getCorreo();
        $descripcionI = $Instituto->getDescripcion();
        $contrasenaI = $Instituto->getContrasena();
        $codCantonI = $Instituto->getCodCanton();
        $misionI= $Instituto->getMision();
        $visionI= $Instituto->getVision();

        $salida = $sentencia->execute(); //true o false
        $this->conexion->close();
        return $salida;
    }
}