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
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="JS/materialize.min.js"></script>

        
        <link href="Css/materialize.min.css" rel="stylesheet" />
        <link href="Css/Slider.css" rel="stylesheet">
        <link href="Css/Material.css" rel="stylesheet">

        <title></title>
    </head>
    <body>
        <?php
        include_once './View/Basicos/Nav.php';
        ?>



        <!--  Modales de Vistas de Noticias -->
        <div id="modal1" class="modal bottom-sheet">
            <div class="modal-content">
                <h4>Modal Header</h4>
                <p>A bunch of text</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
            </div>
        </div>
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">Politica</a></li>
            <li class="divider"></li>
            <li><a href="#!">Ecólogia</a></li>
            <li class="divider"></li>
            <li><a href="#!">Desarrollo</a></li>
        </ul>
 <!-- <li><a class="dropdown-button" href="#!" data-activates="modal1">Noticias<i class="material-icons right">arrow_drop_down</i></a></li> -->
 

        <!-- El Slider principal de la página -->
        <div class="contenedorSlider">
            <div class="card">
                <div class="slider">
                    <figure>
                        <img class="md-12" src="Images/1.jpg" alt>
                        <img class="md-12" src="Images/2.jpg" alt>
                        <img class="md-12" src="Images/3.jpg" alt>
                        <img class="md-12" src="Images/4.jpg" alt>
                    </figure>
                </div>
            </div>
        </div>


        <!-- Esta seccion contiene las noticias y el cuadro de búsqueda avanzada-->
        <div class="contenedor">
            <div class="row">

                <!-- Cuadro de Busqueda Avanzada -->
                <div class="col s12 m4 l3">
                    <div class="card">
                        <h4 class="flow-text">Búsqueda Avanzada</h4>
                        <ul class="collapsible" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header"><span class="badge">3</span><i class="material-icons">room</i>Cantones</div>
                                <div class="collapsible-body">
                                    <form action="#">
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box" />
                                            <label for="filled-in-box">Pococi</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box2"  />
                                            <label for="filled-in-box2">Guácimo</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box3"/>
                                            <label for="filled-in-box3">Siquirres</label>
                                        </p>

                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><span class="badge">3</span><i class="material-icons">dns</i>Categorias</div>
                                <div class="collapsible-body">
                                    <form action="#">
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box4" />
                                            <label for="filled-in-box4">Ecología</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box5"  />
                                            <label for="filled-in-box5">Ambiental</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box6"/>
                                            <label for="filled-in-box6">Cultural</label>
                                        </p>

                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><span class="badge">3</span><i class="material-icons">description</i>Documentos</div>
                                <div class="collapsible-body">
                                    <form action="#">
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box7" />
                                            <label for="filled-in-box7">Ecología</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box8"  />
                                            <label for="filled-in-box8">Ambiental</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box9"/>
                                            <label for="filled-in-box9">Leyes</label>
                                        </p>

                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><span class="badge">3</span><i class="material-icons">library_books</i>Noticias</div>
                                <div class="collapsible-body">
                                    <form action="#">
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box10" />
                                            <label for="filled-in-box10">Mas populares</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box11"  />
                                            <label for="filled-in-box11">Mas vistas</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" class="filled-in" id="filled-in-box12"/>
                                            <label for="filled-in-box12">Recientes</label>
                                        </p>

                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>




                <!-- Inicio de las tarjetas de noticias que se encuentran en la derecha-->     

                <div class="col s12 m8 l9">

                    <div class="col  s4 m4">
                        <div class="card medium cyan lighten-3">
                            <div class="card-image">
                                <img src="Images/diadelatierra.jpg" >

                            </div>
                            <div class="card-content">
                                <span class="card-title">Huella Ecologica</span>
                                <p>Dia internacional de sembrar un árbol en tu comunicada. Ven y Apoyanos en esta nueva iniciativa</p>
                            </div>
                            <div class="card-action center">
                                <a href="View/Noticias/PrincipalNoticias.php"><img src="Images/charlar.png"></a>
                               <!-- <button data-target="modal1" class="btn">Modal</button> -->
                                <a class="modal-trigger " href="#modal1"><img src="Images/ojo.png"></a>
                                <a href="#"><img src="Images/participacion.png"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col  s4 m4">
                        <div class="card medium cyan lighten-3">
                            <div class="card-image">
                                <img src="Images/images2.png" style="height: 194px">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Fistas Tipicas</span>
                                <p>Las primeras fiestas cantonales del cantón, serán para el beneficio de la comunidad</p>
                            </div>
                            <div class="card-action center">
                                <a href="#"><img src="Images/charlar.png"></a>
                                <a class="modal-trigger" href="#modal1"><img src="Images/ojo.png"></a>
                                <a href="#"><img src="Images/participacion.png"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col  s4 m4">
                        <div class="card medium cyan lighten-3">
                            <div class="card-image">
                                <img src="Images/canas_2.jpg">

                            </div>
                            <div class="card-content">
                                <span class="card-title">Baile Tipico</span>
                                <p>Próximo baile el dia 24 de ábril del presente año. Se organizan las ASADAS de los cantones de Pococi, Guácimo y Siquirres.</p>
                            </div>
                            <div class="card-action center">
                                <a href="#"><img src="Images/charlar.png"></a>
                                <a href="#"><img src="Images/ojo.png"></a>
                                <a href="#"><img src="Images/participacion.png"></a>
                            </div>
                        </div>
                    </div>


                    <div class="col  s4 m4">
                        <div class="card medium cyan lighten-3">
                            <div class="card-image">
                                <img src="Images/canas_2.jpg">

                            </div>
                            <div class="card-content">
                                <span class="card-title">Baile Tipico</span>
                                <p>Próximo baile el dia 24 de ábril del presente año. Contáctanos.</p>
                            </div>
                            <div class="card-action center">
                                <a href="#"><img src="Images/charlar.png"></a>
                                <a href="#"><img src="Images/ojo.png"></a>
                                <a href="#"><img src="Images/participacion.png"></a>
                            </div>
                        </div>
                    </div>


                    <div class="col  s4 m4">
                        <div class="card medium cyan lighten-3">
                            <div class="card-image">
                                <img src="Images/canas_2.jpg">

                            </div>
                            <div class="card-content">
                                <span class="card-title">Baile Tipico</span>
                                <p>Próximo baile el dia 24 de ábril del presente año. Contáctanos.</p>
                            </div>
                            <div class="card-action center">
                                <a href="#"><img src="Images/charlar.png"></a>
                                <a href="#"><img src="Images/ojo.png"></a>
                                <a href="#"><img src="Images/participacion.png"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col  s4 m4">
                        <div class="card medium cyan lighten-3">
                            <div class="card-image">
                                <img src="Images/images2.png" style="height: 194px">

                            </div>
                            <div class="card-content">
                                <span class="card-title">Fiestas Culturales</span>
                                <p>Ven y Participa.</p>
                            </div>
                            <div class="card-action center">
                                <a href="#"><img src="Images/charlar.png"></a>
                                <a href="#"><img src="Images/ojo.png"></a>
                                <a href="#"><img src="Images/participacion.png"></a>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>  <!-- Fin del contenedor -->


        <!-- Paginación -->
        <!--
                <div class="row" style="width:560px; position: right;">
                 <div class="col s6 m12 l12" >
                    <h5>Siguiente Página</h5>
                       <ul class="pagination">
                          <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                          <li class="active"><a href="#!">1</a></li>
                          <li class="waves-effect"><a href="#!">2</a></li>
                          <li class="waves-effect"><a href="#!">3</a></li>
                          <li class="waves-effect"><a href="#!">4</a></li>
                          <li class="waves-effect"><a href="#!">5</a></li>
                          <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                       </ul>
                 </div>
              </div>  
        -->




        <!--  Espacioado -->
        <br>
        <br>

        <!--  Patrocinadores -->
        <div class="row">
            <h5 class="text-lighten-4 center-align">Patrocinadores</h5>
            <br>
            <br>
            <div class="col m2 center"><a href="/RevistaTCU/View/Patrocinadores/PrincipalPatrocinadores.php"><img src="Images/tcu.png"></a></div>
            <div class="col m2 center"><a href="View/Patrocinadores/PrincipalPatrocinadores.php"><img src="Images/ucr.png"></a></div>
            <div class="col m2  center"><a href="View/Patrocinadores/PrincipalPatrocinadores.php"><img src="Images/aya.png"></a></div>
            <div class="col m2 center"><a href="View/Patrocinadores/PrincipalPatrocinadores.php"><img src="Images/tcu.png"></a></div>
            <div class="col m2  center"><a href="View/Patrocinadores/PrincipalPatrocinadores.php"><img src="Images/ucr.png"></a></div>
            <div class="col m2 center"><a href="View/Patrocinadores/PrincipalPatrocinadores.php"><img src="Images/aya.png"></a></div>
        </div>



        <!-- Pie de pagina -->
        <footer class="page-footer teal">
            <div class="container teal">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Acerca de</h5>
                        <p class="grey-text text-lighten-4" style="text-align: justify">
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
                    © 2017 Copyright Text
                </div>
            </div>
        </footer>

        <script>
           /* $(document).ready(function () {
                //  $(".dropdown-button").dropdown();
                // $('.modal-trigger').leanModal();
                //$('.modal').modal();
                //$('#modal').modal('open');
                $('.modal').modal();
            });*/

        </script>
    </body>
</html>
