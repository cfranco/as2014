<?php 
$marca = 'orbi';
$thisPage = 'productos';
$thisCategory = 'mantenimiento-centro';
$titlePage = "Servicios de Mantenimiento | Centro de Sevicio";
$description ="Centro de Servicio de Mantenimiento a Bombas industriales, intercambiadores.";
$keywords ="Mantenimiento, intercambiadores de calor, bombas, industriales";
?>

<?php include 'header.php';?>
<?php include 'menu.php';?>

<!-- Inicia contenido de la página
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="row">
    <div class="container">
        <!-- Inicia Sidebar de Productos -->
        <?php include 'sidebar-products.php'; ?>
        <!-- Termina Sidebar de Productos -->

        <!-- Inicia caja de marcas -->
        <?php include 'marca-head.php'; ?>
        <!-- Termina caja de marcas -->

        <div class="col-md-9 mt50">
            <div id="page-content" class="row border-bottom pb50 products-image" >
                <div class="col-md-3"><a href="productos/bigs/04-orbi/mantenimiento/centro-de-servicio/antes-y-despues.jpg" data-lightbox="image-1" data-title="Antes y Después"><img src="productos/200x200/04-orbi/mantenimiento/centro-de-servicio/antes-y-despues.jpg"><p>Antes y Después</p></a></div> 
                <div class="col-md-3"><a href="productos/bigs/04-orbi/mantenimiento/centro-de-servicio/diagnostico.jpg" data-lightbox="image-1" data-title="Diagnóstico"><img src="productos/200x200/04-orbi/mantenimiento/centro-de-servicio/diagnostico.jpg"><p>Diagnóstico</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/04-orbi/mantenimiento/centro-de-servicio/limpieza-con-acidos.jpg" data-lightbox="image-1" data-title="Limpieza con Acidos"><img src="productos/200x200/04-orbi/mantenimiento/centro-de-servicio/limpieza-con-acidos.jpg"><p>Limpieza con Acidos</p></a></div> 
                <div class="col-md-3"><a href="productos/bigs/04-orbi/mantenimiento/centro-de-servicio/liquidos-penetrantes-02.jpg" data-lightbox="image-1" data-title="Liquidos Penetrantes"><img src="productos/200x200/04-orbi/mantenimiento/centro-de-servicio/liquidos-penetrantes-02.jpg"><p>Liquidos Penetrantes</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/04-orbi/mantenimiento/centro-de-servicio/liquidos-penetrantes-03.jpg" data-lightbox="image-1" data-title="liquidos Penetrantes"><img src="productos/200x200/04-orbi/mantenimiento/centro-de-servicio/liquidos-penetrantes-03.jpg"><p>Liquidos Penetrantes</p></a></div> 
                <div class="col-md-3"><a href="productos/bigs/04-orbi/mantenimiento/centro-de-servicio/liquidos-penetrantes.jpg" data-lightbox="image-1" data-title="Liquidos Penetrantes"><img src="productos/200x200/04-orbi/mantenimiento/centro-de-servicio/liquidos-penetrantes.jpg"><p>Liquidos Penetrantes</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/04-orbi/mantenimiento/centro-de-servicio/rehabilitacion.jpg" data-lightbox="image-1" data-title="Rehabilitación"><img src="productos/200x200/04-orbi/mantenimiento/centro-de-servicio/rehabilitacion.jpg"><p>Rehabilitación</p></a></div> 
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>