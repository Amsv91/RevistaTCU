
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--
    Created on : 17-feb-2017, 20:03:26
    Author     : Alpizar-Solis
-->

<html>
    <header>
        <meta charset="UTF-8">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="../../Css/materialize.min.css" >
        <link href="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css" rel="stylesheet" /> <!--Css de login -->
       
        
    </header>
    <body>

         <!-- Estructura de Dropdown Cantones-->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Pococí</a></li>
            <li class="divider"></li>
            <li><a href="#!">Siquirres</a></li>
            <li class="divider"></li>
            <li><a href="#!">Guácimo</a></li>
        </ul>
         
         <!-- Estructura de Dropdown Noticias-->
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">Politica</a></li>
            <li class="divider"></li>
            <li><a href="#!">Ecólogia</a></li>
            <li class="divider"></li>
            <li><a href="#!">Desarrollo</a></li>
        </ul>
         
        <!-- navbar -->
        <nav>
            <div class="nav-wrapper light-green darken-3">
                <a href="#!" class="brand-logo">Noticiero Eco</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down light-green darken-3">
                    <li><a href="/RevistaTCU/index.php"><i class="material-icons">home</i></a></li>
                     <li><a href="#">Eventos</a></li>
                    <li><a href="#">Documentos</a></li>
                    <li><a href="#">Directorio</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Noticias<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Cantones<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a id="login" href="#">Iniciar Sesión</a></li>
                </ul>
                
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="/RevistaTCU/index.php"><i class="material-icons">home</i></a></li>
                    <li><a href="#">Noticias</a></li>
                    <li><a href="#">Recursos</a></li>
                    <li><a href="#">Directorio</a></li>
                </ul>
                
            </div>
        </nav>

        
        <div id="login-form" class="webui-popover-content">
            <form action="../RevistaTCU/Business/Login.php?metodo=login" method="POST">
            <div class="input-field">
                <input type="email" name="correo" placeholder="Correo" required>
            </div>
            <div class="input-field">
                <input type="password" name="password" placeholder="Contrasenia" required>
            </div>
            <button class="btn waves-effect waves-light" type="submit">Ingresar 
            </button>
        </form>
    </div>
        
         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
         <script src="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js"></script> <!--JS de login -->
         
         <script type="text/javascript" src="../../JS/materialize.min.js"></script>
         <script type="text/javascript" src="../../JS/slider.js"></script>
      
       <script>
            $(document).ready(function () {
                //  $(".dropdown-button").dropdown();
                $('#login').webuiPopover({url:'#login-form'});
               $(".button-collapse").sideNav();
            });

        </script>
    </body>
</html>
