<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--
    Created on : 23-feb-2017, 20:03:26
    Author     : Alpizar-Solis
-->

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" >

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <link href="../../Css/materialize.min.css" rel="stylesheet" />
        <link href="../../Css/Material.css" rel="stylesheet">
        <script type="text/javascript" src="JS/materialize.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../Css/dataTables.materialize.css">
        <title></title>
    </head>
    <body>
        <h1>Administrador de Usuarios</h1>
        <br>
        <br>
        <br>
        <div class="contenedor">
            <div class="card focus s3 m3">
                <div class="input-field s3 m3">
                    <input id="search" type="search">
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                </div>
            </div>

            <a href="#" onclick="redireccionando('NuevoUsuario');" class="waves-effect waves-light btn right"><i class="material-icons left">add</i>Nuevo Usuario</a>
            <br>
            <br>
            <table id="example"class="striped ">
                <thead>
                    <tr>
                        <th data-field="id">Cedula</th>
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
                    <tr>
                        <td>1 4582 0245</td>
                        <td>Mirta</td>
                        <td>Hernandez</td>
                        <td>Varela</td>
                        <td>varela@gmail.com</td>
                        <td><img src="../../Images/editar.png" width="20px" height="20px"></td>
                        <td><img src="../../Images/eliminar.png" width="20px" height="20px"></td>
                    </tr>
                    <tr>
                        <td>1 4582 0245</td>
                        <td>Mirta</td>
                        <td>Hernandez</td>
                        <td>Varela</td>
                        <td>varela@gmail.com</td>
                        <td><img src="../../Images/editar.png" width="20px" height="20px"></td>
                        <td><img src="../../Images/eliminar.png" width="20px" height="20px"></td>
                    </tr>
                    <tr>
                        <td>1 4582 0245</td>
                        <td>Mirta</td>
                        <td>Hernandez</td>
                        <td>Varela</td>
                        <td>varela@gmail.com</td>
                        <td><img src="../../Images/editar.png" width="20px" height="20px"></td>
                        <td><img src="../../Images/eliminar.png" width="20px" height="20px"></td>
                    </tr>
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


        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="../../JS/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../../JS/dataTables.materialize.js"></script>
        <script type="text/javascript" src="../../JS/materialize.min.js"></script>

        <script type="text/javascript">
            var table = $('#example').DataTable({});
            $('select').material_select();
        </script>
    </body>    
</html>
