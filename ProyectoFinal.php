<?php $conexion = mysqli_connect("localhost", "root", "realp132413", "bd_casacultura"); ?> 
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sitio web para sentro cultural de mora">
    <meta name="keywords" content="Cultura,cassa,musica,cursos">
    <meta name="author" content="Edison David Alfaro Duarte">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="mobile.css">
    <link rel="stylesheet" href="galerias.css">
    <link rel="stylesheet" href="galeriaActivos.css">
    <link rel="stylesheet" href="galeriaCursos.css">
    <script src="https://kit.fontawesome.com/1a7b3b1445.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="Encabezado" class="HyFtamano">

        <div class="menu-wrap">
            <input type="checkbox" class="toggler">
            <div class="hamburger">
                <div></div>
            </div>
            <div class="menu">
                <div>
                    <div>
                        <nav>
                            <ul>
                                <li class="listaMenu"> <a href="#Inicio">Inicio</a> </li>
                                <li class="listaMenu"> <a href="#About">About</a> </li>
                                <li class="listaMenu"><a href="#Profesores">Profesores</a> </li>
                                <li class="listaMenu"><a href="#Estudiantes">Estudiantes</a></li>
                                <li class="listaMenu"><a href="#Cursos">Cursos</a></li>
                                <li class="listaMenu"><a href="#Activos">Activos</a></li>
                                <li class="listaMenu"><a href="#Contacto">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="cuerpo">
        <section id="Inicio" class="tamano">
            <div id="contenedorTitulo"></div>
        </section>
        <section id="About" class="tamano">
            <div class="fotoAbout">
                <img src="Imagenes/mora4.jpg" alt="">
            </div>
            <div class="contenidoAbout">
                <div id="parrafos">
                    <p>
                        El Desarrollo Cultural de Mora, inicia con la apertura de la Casa de la Cultura, la cual abrió
                        sus puertas el 11 de marzo del 2005, con alrededor de 300 estudiantes y 30 profesores dedicados
                        al Desarrollo cultural, arte e idiomas, los cuáles buscan atraer,
                        promover y contribuir permanentemente al desarrollo integral de la cultura en los habitantes del
                        Cantón de Mora.
                    </p>
                    <p>
                        Este centro, es un espacio comunal para la educación en las bellas artes, lenguas, ciencias y
                        otras actividades, que enaltecen el espíritu artístico y enriquecen la expresión cultural y la
                        recreación de esta localidad. Asimismo, promueve el desarrollo
                        de actividades creativas, tales como: Artes Escénicas en: teatro, danza, música y otros.
                    </p>
                    <p>
                        Su historia, indica que gracias a la visión y la creación del Departamento de Cultura en la
                        Municipalidad, y de la creación de la Asociación de Desarrollo Específica Pro-Rescate Histórico,
                        Arquitectónico y Cultural (ADERHAC), se ha logrado posicionar
                        a Mora, cómo un cantón ejemplar en el tema Cultural, esto gracias al convenio establecido entre
                        ambas partes, pues son los encargados de promover el Desarrollo Cultural en el cantón, lo cual
                        les permite trabajar en beneficio del
                        crecimiento integral de la cultura. La meta del Gobierno Local y de Aderhac, es el promover y
                        facilitar la participación de la comunidad en el aprendizaje, la enseñanza, la práctica y el
                        disfrute de las bellas artes.
                    </p>
                    <p>
                        Desde hace 12 años, el cantón de Mora ha disfrutado un crecimiento continuo en el desarrollo
                        humano y cultural, un cantón donde las personas pueden disfrutar de su derecho a la Cultura,
                        esto gracias a la oferta artística y cultural que se ofrece durante
                        el año, a mencionar:
                        <ul>
                            <li>Festivales</li>
                            <li>Conciertos</li>
                            <li>Recitales</li>
                            <li>Festejos y otros</li>
                        </ul>
                    </p>
                </div>

            </div>
        </section>
        <section id="Profesores" class="tamano">
            <div class="fotoProfes ">
                <div id="contenedorFotosProfesores" class="animacionProfesores"></div>
            </div>
            <div class="contenidoProfe">
                <div id="valorBusquedaProfesor" class="espacio">
                        <h2>Contamos con grandes profesionales en el ámbito musical</h2>
                        <h3>Algunos de nuestros profesores:</h3>
                </div>
                <div id="informacionProfesor" class="espacio">
                    
                    <?php
                    $sql = "SELECT nombre, apellido_1, apellido_2, numero_telefono, correo_electronico FROM profesor";
                    $rec = mysqli_query($conexion, $sql);
                    while ($row = mysqli_fetch_array($rec)) {
                        ?>
                            <li> Profesor: <?php echo $row['nombre']?> <?php echo $row['apellido_1']?> <?php echo $row['apellido_2']?>, Contacto: <?php echo $row['numero_telefono']?>,
                              Correo electrónico<?php echo $row['correo_electronico']?>
                            </li>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <section id="Estudiantes" class="tamano">
            <div class="fotoEstudiante">
                <div id="contenedorFotosEstudiante" class="animacionEstudiantes"></div>
                
            </div>
            <div class="informacionEstudiante">
                <div id="valorBusquedaEstudiante" class="espacio">
                <h2>Contamos con una alta variedad de cursos para toda la comunidad del cantón de Mora</h2>
                <h3>Parte de los cursos que ofrecemos a la comunidad son: </h3>
                </div>
                <div id="informaEstudiante" class="espacio">
                <?php
                    $sql = "SELECT nombre, maximo_cupos, minimo_cupo, dia  FROM curso";
                    $rec = mysqli_query($conexion, $sql);
                    while ($row = mysqli_fetch_array($rec)) {
                        ?>
                            <li> Curso de: <?php echo $row['nombre']?>, limite máximo  de alumnos: <?php echo $row['maximo_cupos']?>, mínimo  de alumnos: <?php echo $row['minimo_cupo']?> y
                             se imparte los días <?php echo $row['dia']?>
                             
                            </li>
                    <?php
                    }
                    ?>
                </div>
            </div>


        </section>

        <section id="Cursos" class="tamano">
            <h1>Cursos</h1>
            <div class="container">
                <div class="check-galery">
                    <input class="check-galery__input  check-1" id="check-1" name="galery-1" type="radio" checked>
                    <input class="check-galery__input  check-2" id="check-2" name="galery-1" type="radio">
                    <input class="check-galery__input  check-3" id="check-3" name="galery-1" type="radio">
                    <input class="check-galery__input  check-4" id="check-4" name="galery-1" type="radio">

                    <div class="check-galery__list-wrap">
                        <ul class="check-galery__list">
                            <li class="check-galery__item">

                                <img class="check-galery__pic" src="Imagenes/brandon-wilson-qzpzH2Nfmyk-unsplash.jpg"
                                    alt="ban-image">
                                <label class="descrip">Cursos de Guitarra Acústica</label>
                            </li>

                            <li class="check-galery__item">
                                <img class="check-galery__pic" src="Imagenes/dominik-scythe-MTO5SmPraX4-unsplash.jpg"
                                    alt="ban-image">
                                <label class="descrip">Cursos de Piano</label>
                            </li>

                            <li class="check-galery__item">
                                <img class="check-galery__pic"
                                    src="Imagenes/elijah-m-henderson-xgT3iQDIijU-unsplash.jpg" alt="ban-image">
                                <label class="descrip">Cursos de Violín</label>
                            </li>

                            <li class="check-galery__item">
                                <img class="check-galery__pic" src="Imagenes/freestocks-org-LoppUA_9F1w-unsplash.jpg"
                                    alt="ban-image">
                                <label class="descrip">Cursos de Guitarra Eléctrica</label>
                            </li>
                        </ul>
                    </div>

                    <div class="check-galery__arrow-group  arrow-group-1">
                        <label class="check-galery__arrow  check-galery__arrow--left" for="check-4"></label>
                        <label class="check-galery__arrow  check-galery__arrow--right" for="check-2"></label>
                    </div>

                    <div class="check-galery__arrow-group  arrow-group-2">
                        <label class="check-galery__arrow  check-galery__arrow--left" for="check-1"></label>
                        <label class="check-galery__arrow  check-galery__arrow--right" for="check-3"></label>
                    </div>

                    <div class="check-galery__arrow-group  arrow-group-3">
                        <label class="check-galery__arrow  check-galery__arrow--left" for="check-2"></label>
                        <label class="check-galery__arrow  check-galery__arrow--right" for="check-4"></label>
                    </div>

                    <div class="check-galery__arrow-group  arrow-group-4">
                        <label class="check-galery__arrow  check-galery__arrow--left" for="check-3"></label>
                        <label class="check-galery__arrow  check-galery__arrow--right" for="check-1"></label>
                    </div>

                    <div class="check-galery__dot-list">
                        <label class="check-galery__dot" for="check-1"></label>
                        <label class="check-galery__dot" for="check-2"></label>
                        <label class="check-galery__dot" for="check-3"></label>
                        <label class="check-galery__dot" for="check-4"></label>
                    </div>
                </div>
            </div>
        </section>

        <section id="Activos" class="tamano">
            <h1>Activos</h1>
            <div class="container">
                <div class="check-galery">
                    <input class="check-galery__input  check-5" id="check-5" name="galery-2" type="radio" checked>
                    <input class="check-galery__input  check-6" id="check-6" name="galery-2" type="radio">
                    <input class="check-galery__input  check-7" id="check-7" name="galery-2" type="radio">
                    <input class="check-galery__input  check-8" id="check-8" name="galery-2" type="radio">

                    <div class="check-galery__list-wrap">
                        <ul class="check-galery__list">
                            <li class="check-galery__item">

                                <img class="check-galery__pic" src="Imagenes/thomas-litangen-SP9HcRASMPE-unsplash.jpg"
                                    alt="ban-image">
                                <label class="descrip">Préstamo de Amplificadores</label>
                            </li>

                            <li class="check-galery__item">
                                <img class="check-galery__pic" src="Imagenes/kari-shea-1SAnrIxw5OY-unsplash.jpg"
                                    alt="ban-image">
                                <label class="descrip">Préstamo de Computadoras</label>
                            </li>

                            <li class="check-galery__item">
                                <img class="check-galery__pic" src="Imagenes/susan-mohr-pMCP8c8_xi4-unsplash.jpg"
                                    alt="ban-image">
                                <label class="descrip">Préstamo de Instrumentos Musicales </label>
                            </li>

                        </ul>
                    </div>

                    <div class="check-galery__arrow-group  arrow-group-5">
                        <label class="check-galery__arrow  check-galery__arrow--left" for="check-7"></label>
                        <label class="check-galery__arrow  check-galery__arrow--right" for="check-6"></label>
                    </div>

                    <div class="check-galery__arrow-group  arrow-group-6">
                        <label class="check-galery__arrow  check-galery__arrow--left" for="check-5"></label>
                        <label class="check-galery__arrow  check-galery__arrow--right" for="check-7"></label>
                    </div>

                    <div class="check-galery__arrow-group  arrow-group-7">
                        <label class="check-galery__arrow  check-galery__arrow--left" for="check-6"></label>
                        <label class="check-galery__arrow  check-galery__arrow--right" for="check-5"></label>
                    </div>

                    <div class="check-galery__dot-list">
                        <label class="check-galery__dot" for="check-5"></label>
                        <label class="check-galery__dot" for="check-6"></label>
                        <label class="check-galery__dot" for="check-7"></label>
                    </div>
                </div>
            </div>

        </section>
        <section id="Contacto" class="tamano">
            <div id="formularioCorreo" class="DivenSeccionContacto">
                <h1>Contacto</h1>
                <div id="contenedorFormulario">
                    <form id="formcontacto" method="post" action="formularioContactenos/index.php">
                        <label class="desplegarhaciaabao">Nombre:</label>
                        <input id="nombre" type="text" name="Nombre" value="" class="desplegarhaciaabao">
                        <label class="desplegarhaciaabao">Apellido:</label>
                        <input id="apellido" type="text" name="Apellido" value="" class="desplegarhaciaabao">
                        <label class="desplegarhaciaabao">Correo:</label>
                        <input id="correo" type="text" name="Correo" value="" class="desplegarhaciaabao">
                        <label class="desplegarhaciaabao">Numero de telefono:</label>
                        <input id="numtelefono" type="text" name="Telefono" value="" class="desplegarhaciaabao">
                        <label class="desplegarhaciaabao">Descripcion:</label>
                        <textarea name="Descripcion" id="descripcion" class="desplegarhaciaabao"></textarea>
                        <div id="contenedordebotn">
                            <input id="submitbuttom" type="submit" name="Send" value="Submit">
                        </div>
                    </form>
                </div>

            </div>
            <div id="mapa" class="DivenSeccionContacto">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.225754579497!2d-84.24334258458686!3d9.915146977208504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0ff16d8ca8fa7%3A0x82ed76e77fbb3858!2sCasa%20de%20la%20Cultura!5e0!3m2!1ses!2scr!4v1573416235052!5m2!1ses!2scr"
                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="">
                </iframe>
            </div>
        </section>
        <footer id="Pie" class="HyFtamano">
            <div id="contenido">
                <nav>
                    <ul>
                        <li>
                            <p>Tel. trab.: (506) 2249-3124</p>
                        </li>
                        <li>
                            <p>Correo electrónico: ccdemora@gmail.com</p>
                        </li>
                        <li>
                            <p>Correo electrónico alternativo: karina.zuniga@mora.go.crs</p>
                        </li>
                        <li>
                            <div>
                                <p class="contenedorIconos">Encuentre más en:</p>
                                <a href="https://www.facebook.com/CasaCulturaMora/?ref=br_rs"><i
                                        class="fab fa-facebook">
                                    </i></a>
                                <a class="cambiarcolor"
                                    href="https://www.youtube.com/channel/UCIm9gyNg1kmIUYpPsCregew"><i
                                        class="fab fa-youtube"></i></a>
                                <a id="btnInvisibleMenu" href="http://localhost/FormulariosCWEB/Menu.html">.</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>
    </div>
</body>

</html>