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
        <link href="../../Css/materialize.min.css" rel="stylesheet" />
        <link href="../../Css/Material.css" rel="stylesheet">
       
        <title></title>
    </head>
    <body>
        
        <script>
            function redireccionando(str) {
                if (str == "") {
                    document.getElementById("contenido").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else { // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("contenido").innerHTML = this.responseText;
                    }
                }
                if(str=='Noticias'){
                    xmlhttp.open("GET", "Noticias.php", true);
                    xmlhttp.send();
                }
                else if(str=='Categorias'){
                    xmlhttp.open("GET", "Categorias.php", true);
                    xmlhttp.send();
                }
                else if(str=='Usuario'){
                    xmlhttp.open("GET", "Usuarios.php", true);
                    xmlhttp.send();
                }
                else if(str=='Cantones'){
                    xmlhttp.open("GET", "Cantones.php", true);
                    xmlhttp.send();
                }
                else if(str=='Documentos'){
                    xmlhttp.open("GET", "Documentos.php", true);
                    xmlhttp.send();
                }
                
                 else if(str=='NuevoUsuario'){
                    xmlhttp.open("GET", "/RevistaTCU/View/Usuarios/Nuevo.php", true);
                    xmlhttp.send();
                }
                
            }
        </script>
        
        <header style="background-color: yellow;">
            <nav class="top-nav teal clsNav">
                <div class="container">
                    <div class="nav-wrapper fixed">
                        <a class="page-title">PORTAL ADMINISTRATIVO</a>
                     <!--    <a href="#!"><i class="material-icons">home</i></a>  -->
                         
                     <!--   <li class="search">
                        <div class="search-wrapper card">
                            <input id="search">
                            <i class="material-icons"></i>
                            <div class="search-results"></div>
                        </div>
                    </li> -->
                    </div>
                </div>
                
                <ul id="nav-mobile" class="side-nav fixed teal" style="transform: translateX(0%);">
                    <section class="card-image ">
                    <img src="../../Images/dog.jpg" style="width:100%">
                        <span class="card-title center-align"><h4>Administrad@r</h4></span>
                        <span class="email center-align"><h6>admin@gmail.com</h6></span>
                    </section>
                    <div class="divider"></div>
                    <li class="bold">
                        <a  href="../../index.php" class="waves-effect waves-green"><i class="material-icons left">home</i>Principal</a>
                    </li>
                                        
                    <li class="bold">
                        <a href="Usuarios.php" class="waves-effect waves-light"><i class="material-icons left">perm_identity</i>Usuarios</a>
                    </li>
                    
                    <li class="bold">
                        <a href="Cantones.php" class="waves-effect waves-light"><i class="material-icons left">group_work</i>Cantones</a>
                    </li>
                    
                    <li class="bold">
                        <a href="Categorias.php" class="waves-effect waves-light"><i class="material-icons left">add</i>Categorias</a>
                    </li>
                    
                    <li class="bold">
                        <a href="Noticias.php" class="waves-effect waves-light"><i class="material-icons left">info</i>Noticias</a>
                    </li>
                    
                    <li class="bold">
                        <a href="#"  class="waves-effect waves-light"><i class="material-icons left">comment</i>Comentarios</a>
                    </li>
                    
                    <li class="bold">
                        <a href="Instituciones.php"  class="waves-effect waves-light"><i class="material-icons left">comment</i>Instituciones</a>
                    </li>
                    
                    <li class="bold">
                        <a href="Documentos.php"  class="waves-effect waves-light"><i class="material-icons left">note_add</i>Documentos</a>
                    </li>
                    
                    <li class="bold">
                        <a></a>
                    </li>
                    
                </ul>
                    
            </nav>
            
        </header>
        
    </body>    
</html>
