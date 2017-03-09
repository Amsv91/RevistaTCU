<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../../Css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../../Css/estiloLibre.css"/>
        <!--Let browser know website is optimized for mobile-->

    </head>

    <body>

        <?php
        include_once '../../View/Basicos/Nav.php';
        ?>

        <!--Targeta para foto y contacto; Izquierdad-->
        <div class="row">
            <div class="col s12 m4 l3">
                
                <div class="card">

                    <div class="card-image">
                        <img src="../../Images/dog.jpg" style="width:100%">
                        <span class="card-title"><h4>Perros Cachoros</h4></span>
                    </div>

                    <div class="card-content">
                        <p><i class="material-icons">face</i> Encargado<p>
                        <p><i class="material-icons">room</i> Direccion<p>
                        <p><i class="material-icons">contact_mail</i> Correo<p>
                        <p><i class="material-icons">settings_phone</i> Telefono<p>

                    </div>

                    <div class="card-action">              
                        <h5><i class="material-icons">work</i>Proyectos</h5>

                        <a href="#">I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</a><br>
                        <a href="#">I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</a>
                    </div>

                </div>
            </div>      

            <!--Targeta para informacion; Derecha-->
            <div class="col s12 m8 l9">
                <div class="card">

                    <div class="card-content">
                        <h2><i class="medium material-icons">info</i> Patrocinador<h2>              

                                </div>

                                <div class="card-action">              
                                    <h5><i class="material-icons">turned_in_not</i>Proyecto</h5>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>

                                <div class="card-action">              
                                    <h5><i class="material-icons">query_builder</i>Historia</h5>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>

                                <div class="card-action">              
                                    <h5><i class="material-icons " >event</i>Agenda</h5>  
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>

                                </div>
                                </div>

                                <!--Targeta para informacion; Derecha_Abajo-->
                                <div class="col s12 m8 l9">
                                    <div class="card">

                                        <div class="card-content">
                                            <h2><i class="material-icons">folde_open</i> Galeria<h2> 

                                                    <!--Slider-->
                                                    <div class="slider">
                                                        <ul class="slides">
                                                            <li>
                                                                <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
                                                                <div class="caption center-align">
                                                                    <h3>Este baja el texto, centrado</h3>
                                                                    <h5 class="light grey-text text-lighten-3">ALGO va aquí</h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
                                                                <div class="caption left-align">
                                                                    <h3>Texto a la Izquierdad</h3>
                                                                    <h5 class="light grey-text text-lighten-3">ALGO va aquí</h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
                                                                <div class="caption right-align">
                                                                    <h3>Texto a la derecha</h3>
                                                                    <h5 class="light grey-text text-lighten-3">ALGO va aquí</h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                                                                <div class="caption center-align">
                                                                    <h3>Este baja el texto, centrado</h3>
                                                                    <h5 class="light grey-text text-lighten-3">ALGO va aquí</h5>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div><!--fin Slider-->            

                                                    </div> <!--div class="card-content"-->
                                                    </div>
                                                    </div>
                                                    <!--FIN DEL DIV CONTEnedor-->
                                                    </div>

                                                    <!--Importar materialize.js-->

                                                    </body>

                                                    <!--footer adhesivo-->
                                                    <footer class="page-footer teal">
                                                        <div class="container teal">
                                                            <div class="row">
                                                                <div class="col l6 s12">
                                                                    <h5 class="white-text">Acerca de</h5>
                                                                    <p class="grey-text text-lighten-4">
                                                                        Somos una página meramente informativa 
                                                                        con la intención de llevarles los acontecimientos mas reciente de nuestras 
                                                                        comunidades de Siquirres, Guácimo y Pococí.</p>
                                                                </div>
                                                                <div class="col l4 offset-l2 s12">
                                                                    <h5 class="white-text">Siguenos en</h5>
                                                                    <ul>
                                                                        <li><a class="grey-text text-lighten-3 " href="#"><img class="right" src="Images/facebook.png" style="height: 30px"></a></li>
                                                                        <li><a class="grey-text text-lighten-3" href="#"><img class="right"  src="Images/twitter.png"  style="height: 30px"></a></li>
                                                                        <li><a class="grey-text text-lighten-3" href="#"></a></li>
                                                                        <li><a class="grey-text text-lighten-3" href="#"></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="footer-copyright">
                                                            <div class="container right-align">
                                                                © 2014 Copyright Text
                                                            </div>
        </div>
     </footer>
                                                    <!--falta arreglar footer y galeria-->
</html>