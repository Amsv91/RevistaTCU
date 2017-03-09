<?php

function getConnection(){
	
$hostname= '93.188.160.115';
$username='u130925522_tcu';
$password='tcu663';
$dbname='u130925522_tcure'; 

$conex_remota = $mysqli = new mysqli($hostname,$username, $password, $dbname) OR DIE ('No puedo conectarme a la base de datos local! Intentelo nuevamente.');  
$conex_remota;
return $conex_remota;
 }
?>