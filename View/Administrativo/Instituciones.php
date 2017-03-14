<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--
    Created on : 14-mar-2017, 9:03:26
    Author     : Alpizar-Solis
-->


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" >
        <link href="../../Css/materialize.min.css" rel="stylesheet" />
        <link href="../../Css/Material.css" rel="stylesheet">
       
        <title></title>
    </head>
    <body>
        <?php
        include_once './Principal.php';
        ?> 
        <div class="contenedorPortal">
            <h1 class="center-align">Administrar Instituciones</h1>
        <br>
        <br>
        <a href="../Instituciones/NuevaInstitucion.php"  class="waves-effect waves-light btn right"><i class="material-icons left">add</i>Nueva Institución</a>
         <br>
         <br>
        <table class="striped">
        <thead>
          <tr>
              <th data-field="id">Cédula</th>
              <th data-field="nombre">Nombre</th>
              <th data-field="apellidos">Primer Apellido</th>
              <th data-field="apellidos">Segundo Apellido</th>
              <th data-field="correo">Correo</th>
              <th data-field="Editar">Editar</th>
              <th data-field="Eliminar">Eliminar</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>1 4582 0245</td>
            <td>Mirta</td>
            <td>Hernandez</td>
            <td>Varela</td>
            <td>varela@gmail.com</td>
            <td><img src="../../Images/editar.png" width="20px" height="20px"></td>
            <td><img src="../../Images/eliminar.png" width="20px" height="20px"></td>
          </tr>
          
        </tbody>
      </table>
        </div>
         
            
    </body>    
</html>