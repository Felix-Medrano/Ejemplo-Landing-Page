<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Landing Page de Muestra Por SckDev">
        <meta name="keywords" content="SckDev, Felix Medrano, Landing Page, Software, Freelance, Web, HTML5,CSS3,Javascript, Muestra"><!-- palabras clave para buscadores -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Meta para hacerlo escalable a celulares -->
        <title>
            Landing Page de Muestra Por SckDev
        </title>
        <!-- los link van en el mismo orden SIEMPRE -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css"><!-- Va antes que la los css propios -->
        <link rel="stylesheet" href="css/estilo.css">
        <script src="https://kit.fontawesome.com/d76853896d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="contenedor">
            <a href="index.html"><img src="img/logo.png" class="logo"></a>
            <nav >
                <a href="#Inicio" >Inicio</a>
                <a href="#Nosotros">Nosotros</a>
                <a href="#Servicios">Servicios</a>
                <a href="#Galeria">Galería</a>
                <a href="#Contacto">Contacto</a>
            </nav>
            <a href="#" class="hamb ">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </header>
    <main>
        <section id="Inicio">
            <img src="img/banner.png">
            <div class="bloqueInicio">
                <h1>Bienvenido a Landing Page de Muestra</h1>
                <p>Muestra de una Landing Page, se puede realizar a gusto y necesidades</p>
                <a href="#Nosotros" class="boton botonRojo">Ver más</a>
            </div>
        </section>
        <section id="Nosotros" class="seccion">
            <div class="contenedor">
                <p>Dedicados al desarrollo de tus necesidades</p>
            </div>
        </section>
        <section id="Servicios" class="seccion">
            <div class="contenedor">
                <div class="row">
                    <div class="columna columna33 columnaMobil100">
                        <div class="bloqueServicio">
                            <div class="bloqueImgServicio cuadradoPerfecto">
                                <img src="img/servicio1.jpg">
                            </div>
                            <div class="bloqueContenidoServicio">
                                <h3>Mantenimiento</h3>
                                <p>Mantenimiento a Pc de escritorio, Laptop, armado y cambio de hardware y software</p>
                                <a href="#" class="boton botonBlanco">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    <div class="columna columna33 columnaMobil100">
                        <div class="bloqueServicio">
                            <div class="bloqueImgServicio cuadradoPerfecto">
                                <img src="img/servicio2.png">
                            </div>
                            <div class="bloqueContenidoServicio">
                                <h3>Desarrollo web</h3>
                                <p>Landing Pages, Web en general</p>
                                <a href="#" class="boton botonBlanco">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    <div class="columna columna33 columnaMobil100">
                        <div class="bloqueServicio">
                            <div class="bloqueImgServicio cuadradoPerfecto">
                                <img src="img/servicio3.png">
                            </div>
                            <div class="bloqueContenidoServicio">
                                <h3>Desarrollo de Software</h3>
                                <p>Software a medida</p>
                                <a href="#" class="boton botonBlanco">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Galeria">
            <div class="contenedorFuild">
                <div class="row">
                    <div class="columna33 columnaMobil50">
                        <div class="cuadradoPerfecto">
                            <img src="img/img1.PNG">
                            <h4>Imagen de Muestra</h4>
                        </div>
                    </div>
                    <div class="columna33 columnaMobil50">
                        <div class="cuadradoPerfecto">
                            <img src="img/img2.png">
                            <h4>Imagen de Muestra</h4>
                        </div>
                    </div>
                    <div class="columna33 columnaMobil50">
                        <div class="cuadradoPerfecto">
                            <img src="img/img3.jpg">
                            <h4>Imagen de Muestra</h4>
                        </div>
                    </div>
                    <div class="columna33 columnaMobil50">
                        <div class="cuadradoPerfecto">
                            <img src="img/img4.jpg">
                            <h4>Imagen de Muestra</h4>
                        </div>
                    </div>
                    <div class="columna33 columnaMobil50">
                        <div class="cuadradoPerfecto">
                            <img src="img/img5.png">
                            <h4>Imagen de Muestra</h4>
                        </div>
                    </div>
                    <div class="columna33 columnaMobil50">
                        <div class="cuadradoPerfecto">
                            <img src="img/img6.jpg">
                            <h4>Imagen de Muestra</h4>                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Contacto" class="seccion">
            <div class="contenedor">
                <div class="row">
                    <div class="columna50 columnaMobil100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.63815218616!2d-101.4744788845543!3d26.91497668312667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868bce361821d591%3A0xa064015fb0e78d31!2sLas%20Tortugas%2032%2C%20Occidental%2C%2025640%20Frontera%2C%20Coah.!5e0!3m2!1ses!2smx!4v1612336704761!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="columna50 columnaMobil100">
                        <form action="index.php" class="centrar" method="POST">
                            <div class="formBlock">
                                <input type="text" name="nombre" class="formControl limpiar" placeholder="Nombre">
                            </div>
                            <div class="formBlock">
                                <input type="email" name="correo" class="formControl limpiar" placeholder="Correo">
                            </div>
                            <div class="formBlock">
                                <textarea name="mensaje" class="limpiar" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="formBlock ultimoBloque">
                                <input type="submit" class="boton botonNegro" value="Enviar">
                            </div>
                            <?php
                                if($_SERVER["REQUEST_METHOD"] == "POST")
                                {
                                    $nombre = $_POST["nombre"];
                                    $correo = $_POST["correo"];
                                    $asunto = "Contacto";
                                    $mensaje = $_POST["mensaje"];
                                    if(isset($nombre))
                                    {
                                        if(isset($correo))
                                        {
                                            if(isset($mensaje))
                                            {
                                                $para = "felix.d.medrano@gmail.com";
                                                $cuerpo = "De: ".$correo."\n\nMesnaje:\n".$mensaje;
                                                $pie = "From: ".$correo;
                                                mail($para,$asunto,$cuerpo,$pie);
                                            }
                                        }
                                    }
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor">
            <div class="row">
                <div class="columna columna25 columnaMobil100">
                    <img src="img/logo.png" class="logoFooter">
                    <p>Landing Page de Muestra Por SckDev</p>
                </div>
                <div class="columna columna25 columnaMobil100">
                    <h3>Temas Relacionados</h3>
                    <ul>
                        <li><a href="#">Tema 1</a></li>
                        <li><a href="#">Tema 2</a></li>
                        <li><a href="#">Tema 3</a></li>
                        <li><a href="#">Tema 4</a></li>
                    </ul>
                </div>
                <div class="columna columna25 columnaMobil100">
                    <h3>Datos de Contacto</h3>
                    <ul class="datosContacto">
                        <li><a href="mailto: felix.d.medrano@gmail.com"><h4>felix.d.medrano@gmail.com</h4></a></li>
                        <li><a href="https://wa.me/528662375915?text=Me%20interesa%20contactarte" target="_blank"><h4>+52 866-237-59-15</h4></a></li>
                        <li>Fontera, Coah.</li>
                    </ul>
                </div>
                <div class="columna columna25 columnaMobil100">
                    <h3>Redes Sociales</h3>
                    <ul class="redes">
                        <li>
                            <a href="https://wa.me/528662375915?text=Me%20interesa%20contactarte" target="_blank">
                                <i class="fab fa-whatsapp-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/felix-medrano-96a767176/" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="barraFooter">
            &copy; Derechos Reservados 2021
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/funciones.js"></script>
</body>
</html>