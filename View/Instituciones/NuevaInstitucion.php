<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--
    Created on : 14-03-2017, 8:43:26
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
        
          <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
           <script type="text/javascript" src="../../JS/materialize.min.js"></script>
           <script type="text/javascript" src="../../JS/validaciones.js"></script>
        <title></title>
    </head>
    <body>
        <?php
        include_once '../Administrativo/Principal.php';
        ?> 
        <div class="contenedorPortal">


            <h2 class="center">Registro de Instituciones</h2>
            <br>
            <div class="card">
                <div class="card-title"></div>
                <div class="card-content">
                    <div class="row ">
                        <form class="col s12 " method="post" action="../../Business/RouterInstituto.php?metodo=insertarInstituto">
                            <div class="row">
                                
                                <div class="input-field  col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" name="nombre" class="validate" >
                                    <label for="icon_prefix">Nombre Institución: </label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" name="cedula" class="validate" >
                                    <label for="icon_prefix">Cédula Juridica:</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" name="telefono" class="validate" onkeypress="return soloNumeros(event, this)" maxlength="8" required>
                                    <label for="icon_prefix">Télefono Institución:</label>
                                </div>

                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" name="encargado" class="validate" onkeypress="return soloLetras(event, this)" required>
                                    <label for="icon_telephone">Encargado:</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" name="direccion" class="validate">
                                    <label for="icon_telephone">Dirección:</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" name="mision" class="validate" onkeypress="return soloLetras(event, this)" required>
                                    <label for="icon_telephone">Misión:</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" name="vision" class="validate" onkeypress="return soloLetras(event, this)" required>
                                    <label for="icon_telephone">Visión:</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" name="canton" class="validate">
                                    <label for="icon_telephone">Cantón:</label>
                                </div>
                                <br>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="text" name="correo" class="validate">
                                    <label for="icon_prefix">Correo</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="text" name="contrasena" class="validate">
                                    <label for="icon_prefix">Contraseña</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="text" name="contrasena2" class="validate">
                                    <label for="icon_prefix">Confirmar Contraseña</label>
                                </div>
                                <div class= "col s12">
                                    <button type="submit" class="btn teal right">Registrar</button> 
                                    <button type="" class="btn teal left">Borrar</button> 
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>




    </body>    
</html>
