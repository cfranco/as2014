<?php 
$marca = 'ampco';
$thisPage = 'productos';
$thisCategory = 'accesorios';
$titlePage = "Accesorios";
$description ="Accesorios GRACO";
$keywords ="accesorios, ampco, graco";
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
                <div class="col-md-3"><a href="productos/bigs/03-ampco/accesorios/agitador.jpg" data-lightbox="image-1" data-title="Agitador AMPCO"><img src="productos/200x200/03-ampco/accesorios/agitador.jpg"><p>Agitador AMPCO</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/accesorios/agitadores-y-mezcladores.jpg" data-lightbox="image-1" data-title="Agitadores y Mezcladores AMPCO"><img src="productos/200x200/03-ampco/accesorios/agitadores-y-mezcladores.jpg"><p>Agitadores y Mezcladores</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/accesorios/descarga-de-contenedores.jpg" data-lightbox="image-1" data-title="Descarga de Contenedores"><img src="productos/200x200/03-ampco/accesorios/descarga-de-contenedores.jpg"><p>Descarga de Contenedores</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/accesorios/mezclador.jpg" data-lightbox="image-1" data-title="Mezclador"><img src="productos/200x200/03-ampco/accesorios/Mezclador.jpg"><p>Mezclador AMPCO</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/accesorios/refacciones.jpg" data-lightbox="image-1" data-title="Refacciones AMPCO"><img src="productos/200x200/03-ampco/accesorios/refacciones.jpg"><p>Refacciones AMPCO</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/accesorios/smt-tuberia.jpg" data-lightbox="image-1" data-title="SMT Tubería"><img src="productos/200x200/03-ampco/accesorios/smt-tuberia.jpg"><p>SMT Tubería</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/accesorios/smt-valvula.jpg" data-lightbox="image-1" data-title="SMT Válvula"><img src="productos/200x200/03-ampco/accesorios/smt-valvula.jpg"><p>SMT Válvulas</p></a></div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>