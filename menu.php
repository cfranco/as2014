

<!-- Inicia Menú
================================================== -->
    <div class="navbar-wrapper ">
        <div class="row head-top">
            <div class="container">
                <span>01 800 838 7990 - ventas@americanseal.com.mx</span>
            </div>
        </div>

        <div class="container">

            <nav class="navbar  navbar-static-top" role="navigation">

                <div class="container pad00">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                            <a class="navbar-brand" href="index.php">
                                <img class="img-responsive col-md-8 pad00" src="assets/img/logo.jpg">
                            </a>

                        
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav right mt15">
                            <li <?php if ($thisPage == 'productos') { echo 'class="active"';} ?>><a href="productos.php">Productos</a></li>
                            <li <?php if ($thisPage == 'servicios') { echo 'class="active"';} ?>><a href="servicios.php">Servicios</a></li>
                            <li <?php if ($thisPage == 'sucursales') { echo 'class="active"';} ?>><a href="sucursales.php">Sucursales</a></li>
                            <li <?php if ($thisPage == 'nosotros') { echo 'class="active"';} ?>><a href="nosotros.php">Nosotros</a></li>
                            <li <?php if ($thisPage == 'contacto') { echo 'class="active"';} ?>><a href="contacto.php">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>
<!-- Termina Menú prinicipal
================================================== -->

    <div class="row bg-beige border-top border-bottom">
        <div class="container">     
            <div id="top-productos" class="navbar-collapse collapse pad00">
                <ul class="nav navbar-nav">
                    <li class="first"><a href="">SEPCO</a></li>
                    <li <?php if ($marca=='inpro') { echo 'class="active"';} ?>><a href="">INPROSEAL</a></li>
                    <li <?php if ($marca=='orbi') { echo 'class="active"';} ?>><a href="">ORBI INEGNIERÍA</a></li>
                    <li <?php if ($marca=='ampco') { echo 'class="active"';} ?>><a href="">AMPCO PUMPS</a></li>
                    <li <?php if ($marca=='promos') { echo 'class="active"';} ?>><a href="">PROMOCIONES</a></li>
                </ul>
            </div>
        </div>
    </div>



