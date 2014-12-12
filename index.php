
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/my-app.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:100italic,100,300italic,300,400italic,400,500italic,500,700italic,700,900italic,900" rel="stylesheet" type="text/css">



    <!-- Include FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/fontawesome/4.1.0/css/font-awesome.min.css" />

    <!-- BootstrapValidator CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- BootstrapValidator JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="assets/validate/custom-validate.js"></script>



    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Custom styles for this template -->
    <link href="assets/carousel.css" rel="stylesheet">
</head>
<body>
<!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
        <div class="row head-top">
            <div class="container">
                <span>ventas@americanseal.com.mx</span>
                <span>01 800 838 7990</span>
            </div>
        </div>

        <div class="container">

            <nav class="navbar  navbar-static-top" role="navigation">

                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="assets/img/logo.jpg">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav right">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>


<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="banners/banner-01.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>
                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="banners/banner-01.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="banners/banner-01.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->

<!-- Inicia Call to Action de llamada
    ================================================== -->

    <div class="row bg-azul">
        <div class="container text-white">
            <div class="col-lg-2">
                <h6>Recibe asesoría sin costo</h6>
                <p>Ingresa tu número de teléfono y un consultor te contactará.</p>
            </div>
            <div class="col-lg-8">



                <form id="formContrata">
                    <div class="col-lg-5">
                        <label>Nombre Completo:</label>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" name="nombre" />
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-5">
                        <label>Teléfono / Celular:</label>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="tel" class="form-control" name="celular" />
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="terminos" value="Acepto los tÃ©rminos" /> Es Celular
                            </label>
                        </div>
                    </div>    
                    <button type="submit" class="btn btn-default col-xs-6-offset-3">Enviar</button>
                
                </form>






            </div>
             <div class="col-lg-2">
                <span>01800 838 7990</span>
                <span>ventas@americanseal.com.mx</span>
            </div>

        </div>
    </div>
<!-- Wrap the rest of the page in another container to center all the content. -->



<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Conoce y selecciona tus productos</h1>
                <p>Manejamos productos para diferentes industrias: Petróleo, gas, generación de energía, entre otras. </p>
            </div>
            <div class="col-lg-3">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>SEPCO</h2>
                <ul>
                    <li>Sellos Mecánicos</li>
                    <li>Empaquetaduras</li>
                    <li>Láminas Libres de Asbesto</li>
                    <li>Productos de Grafito</li>
                    <li>Productos de Fibra de Vidrio</li>
                </ul>
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>INPRO SEAL</h2>
                <ul>
                    <li>Protección de Rodamientos</li>
                    <li>Sellos de No Contacto</li>
                    <li>Anillo Aterrizador de Corriente</li>
                    <li>Anillos para Turbinas</li>
                </ul>
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>ORBI INGENIERÍA</h2>
                <ul>
                    <li>Intercambiadores de Calor</li>
                    <li>Empaques</li>
                    <li>Placas</li>
                    <li>Mantenimiento</li>
                </ul>
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>AMPCO PUMPS</h2>
                <ul>
                    <li>Bombas Sanitarias</li>
                    <li>Bombas de Diafragma</li>
                    <li>Sistema de Limpieza de Tanque</li>
                </ul>
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-12 text-center">
                <h1>Servicios de ingeniería y consultoría</h1>
                <p>Trabajamos en estrecha colaboración con nuestros clientes para innovar soluciones a la medida.</p>
            </div>
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <div class="col-lg-3">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Instalación</h3>
                </div>
                <div class="col-lg-3">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Instalación</h3>
                </div>
                <div class="col-lg-3">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Instalación</h3>
                </div>
                <div class="col-lg-3">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h3>Instalación</h3>
                </div>
            </div>

        </div><!-- /.row -->
    </div>
    <div class="container ">
        <div class="col-lg-12 text-center">
            <h1>Experiencia y Productos Certificados </h1>
            <p><b>Comprobable:</b>  Nuestros productos cuentan con certificado de calidad.</p>
        </div>
        <div class="col-lg-4">
            <p>En American Seal estamos comprometidos con la calidad de cada uno de nuestros productos, así como con la satisfacción de los clientes, sobresaliendo del resto de la competencia. </p>
        </div>
        <div class="col-lg-8">
            <img class=" col-lg-3" src="http://americanseal.com.mx/wp-content/uploads/2011/10/sellos-mecanicos-certificado.jpeg">

            <img class=" col-lg-3" src="http://americanseal.com.mx/wp-content/uploads/2011/10/sellos-mecanicos-certificado.jpeg">

            <img class=" col-lg-3" src="http://americanseal.com.mx/wp-content/uploads/2011/10/sellos-mecanicos-certificado.jpeg">

            <img class=" col-lg-3" src="http://americanseal.com.mx/wp-content/uploads/2011/10/sellos-mecanicos-certificado.jpeg">
        </div>

    </div>
    <div class="row">
        <div class="container text-center">
            <h1>¿Por qué elegir American Seal?</h1>

            <div class="col-lg-4 ">
                <h2>DISPONIBILIDAD</h2>
                <p>Llámanos a tu sucursal más cercana y descubre los beneficios que tenemos para tí.</br>¡Es un placer hacer negocios contigo!</p>
                <a href="#">
                    <img src="">
                    Argentina
                </a>
                <a href="#">
                    <img src="">
                    Mexico
                </a>
            </div>

            <div class="col-lg-4 ">
                <h2>RECURSOS TÉCNICOS</h2>
                <p>Consulta las guías de soporte disponibles relacionadas con tu producto.</p>
                <a href="#">
                    <img src="">
                    Videos
                </a>
                <a href="#">
                    <img src="">
                    Catálogos
                </a>
                <a href="#">
                    <img src="">
                    Folletos
                </a>
                <a href="#">
                    <img src="">
                    Hoja de Datos
                </a>
            </div>

            <div class="col-lg-4 ">
                <h2>Aceptamos pagos con tarjeta</h2>
                <p>Paga desde la comodidad de tu casa y oficina. Aceptamos tarjetas Visa y Mastercard.</p>
                <a href="#">
                    <img src="">
                    Argentina
                </a>
                <a href="#">
                    <img src="">
                    Mexico
                </a>
            </div>



        </div>
    </div>


        <!-- FOOTER -->
        <footer>
            <div class="row bg-atencion text-white">
                <div class="container pv20">
                    <span class="col-lg-3 atencion">Atención a clientes:</span>
                    <p class="col-lg-9 left">En México: 01 800 838 7990   ·   +52 (81) 1453 0241   ·   +52 (81) 1366 0620   ·   ventas@americanseal.com.mx</p>
                </div>
            </div>

            <div class="row">
                <div class="container pv35">
                    <div class="col-lg-7 no-gutters">
                        <ul class="col-lg-3 no-gutters">
                            <li class="title-foot">Productos</li>
                            <li>Content</li>
                            <li>Content</li>
                            <li>Content</li>
                            <li>Content</li>
                            <li>Content</li>
                        </ul>

                        <ul class="col-lg-3 no-gutters">
                            <li class="title-foot">Servicios</li>
                            <li>Content</li>
                            <li>Content</li>
                            <li>Content</li>
                            <li>Content</li>
                            <li>Content</li>
                        </ul>
                        
                        <ul class="col-lg-3 no-gutters">
                            <li class="title-foot">Recursos</li>
                            <li>Content</li>
                            <li>Content</li>
                            <li>Content</li>
                            <li>Content</li>
                            <li>Content</li>
                        </ul>

                        <ul class="col-lg-3 no-gutters">
                            <li class="title-foot">Nuestra Empresa</li>
                            <li>Content</li>
                            <li>Content</li>
                            <li>Content</li>
                            <li>Content</li>
                            <li>Content</li>
                        </ul>
                    </div>

                    <div class="col-lg-5">
                        <img class="left col-lg-2" src="assets/img/testimonial.jpg">
                        <p class="right col-lg-10">“Tools like Help Scout enable us to execute the kind of one-on-one customer service we’re looking for. It’s the kind of product that is taking our business to a different level.”</p>
                    </div>
                </div>
            </div>

            <div class="row bg-beige">
                <div class="container pv20">
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                        <img src="assets/img/logos-fotter.jpg">
                    </div>
                </div>
            </div>

        </footer>



<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
