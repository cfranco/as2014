<?php 
$marca = 'inpro';
$thisPage = 'productos';
$thisCategory = 'sellos-laberinto';
$titlePage = "Sellos Laberinto";
$description ="Fabricamos y reparamos Sellos Laberinto.";
$keywords ="sellos mecanicos, sellos laberinto, chumaceras";
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
                <div class="col-md-3"><a href="productos/bigs/02-inpro-seal/sellos-de-laberinto/sello-de-laberinto.jpg" data-lightbox="image-1" data-title="Anillo Aterrizador de Corriente"><img src="productos/200x200/02-inpro-seal/sellos-de-laberinto/sello-de-laberinto.jpg"><p>Sello de Laberinto</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/02-inpro-seal/sellos-de-laberinto/sello-laberinto-con-corte.jpg" data-lightbox="image-1" data-title="Anillo Aterrizador de Corriente con Sello de Laberinto"><img src="productos/200x200/02-inpro-seal/sellos-de-laberinto/sello-laberinto-con-corte.jpg"><p>Sello laberinto con Corte</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/02-inpro-seal/sellos-de-laberinto/sello-laberinto-proteccion-corriente.jpg" data-lightbox="image-1" data-title="Aterrizadores de Corriente"><img src="productos/200x200/02-inpro-seal/sellos-de-laberinto/sello-laberinto-proteccion-corriente.jpg"><p>Sello Laberinto Proteccion Corriente</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/02-inpro-seal/sellos-de-laberinto/sellos-de-laberinto.jpg" data-lightbox="image-1" data-title="Aterrizadores de Corriente"><img src="productos/200x200/02-inpro-seal/sellos-de-laberinto/sellos-de-laberinto.jpg"><p>Sellos de Laberinto</p></a></div>
            </div>
			
        </div>
    </div>
</div>
<?php include 'footer.php' ?>