<?php 
$marca = 'inpro';
$thisPage = 'productos';
$thisCategory = 'sellos-contacto';
$titlePage = "Sellos No Contacto";
$description ="Fabricamos y reparamos Sellos No Contacto.";
$keywords ="sellos mecanicos, sellos laberinto, No Contacto, chumaceras";
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
                <div class="col-md-3"><a href="productos/bigs/02-inpro-seal/sellos-de-no-contacto/air-mizer-acero-inoxidable-2.jpg" data-lightbox="image-1" data-title="Anillo Aterrizador de Corriente"><img src="productos/200x200/02-inpro-seal/sellos-de-no-contacto/air-mizer-acero-inoxidable-2.jpg"><p>Sello de Laberinto</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/02-inpro-seal/sellos-de-no-contacto/air-mizer-acero-inoxidable.jpg" data-lightbox="image-1" data-title="Anillo Aterrizador de Corriente con Sello de Laberinto"><img src="productos/200x200/02-inpro-seal/sellos-de-no-contacto/air-mizer-acero-inoxidable.jpg"><p>Sello laberinto con Corte</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/02-inpro-seal/sellos-de-no-contacto/air-mizer-bronce.jpg" data-lightbox="image-1" data-title="Aterrizadores de Corriente"><img src="productos/200x200/02-inpro-seal/sellos-de-no-contacto/air-mizer-bronce.jpg"><p>Sello Laberinto Proteccion Corriente</p></a></div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>