<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../Data/DataInstitucion.php';

class ControladoraInstitucion{
    
    var $data;
    function __construct() {
        $this->data = new DataInstitucion();
    }

    function insertarInstitucion($instituto){
        echo 'LLEgo a controladora';
        $this->data->insertarInstitucion($instituto);
    }
}
