<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Institucion{
    
    private $cedulaJuridica;
    private  $telefono;
    private  $nombreInstitucion;
    private  $responsable;
    private  $direccion;
    private  $correo;
    private  $descripcion;
    private  $contrasena;
    private  $codCanton;
    private  $mision;
    private  $vision;


    function __construct() {
        
    }

    function getCedulaJuridica() {
        return $this->cedulaJuridica;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getNombreInstitucion() {
        return $this->nombreInstitucion;
    }

    function getResponsable() {
        return $this->responsable;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    function getCodCanton() {
        return $this->codCanton;
    }

    function getMision() {
        return $this->mision;
    }

    function getVision() {
        return $this->vision;
    }

    function setCedulaJuridica($cedulaJuridica) {
        $this->cedulaJuridica = $cedulaJuridica;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setNombreInstitucion($nombreInstitucion) {
        $this->nombreInstitucion = $nombreInstitucion;
    }

    function setResponsable($responsable) {
        $this->responsable = $responsable;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    function setCodCanton($codCanton) {
        $this->codCanton = $codCanton;
    }

    function setMision($mision) {
        $this->mision = $mision;
    }

    function setVision($vision) {
        $this->vision = $vision;
    }


}