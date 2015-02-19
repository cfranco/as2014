<?php 
$marca = 'inpro';
$thisPage = 'productos';
$thisCategory = 'anillo-turbinas';
$titlePage = "Anillos para Turbinas";
$description ="Fabricamos Anillos para Turbinas de alto rendimiento.";
$keywords ="anillos para turbinas, anillos, industriales";

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

        <div class="col-md-9">

			<div id="page-content" class="row border-bottom pb50 products-image" >
        		
                <div class="col-md-3"><a href="productos/bigs/02-inpro-seal/anillos-para-turbinas/protectores-para-turbinas.jpg" data-lightbox="image-1" data-title="Nombre del  producto"><img src="productos/200x200/02-inpro-seal/anillos-para-turbinas/protectores-para-turbinas.jpg"><p>Protectores para turbinas</p></a></div>
            </div>
			
        </div>
    </div>
</div>
<?php include 'footer.php' ?>