<?php 
$marca = 'sepco';
$thisPage = 'productos';
$thisCategory = 'teflon';
$titlePage = "Láminas Libres de Asbesto";
$description ="Venta y reparación de Láminas Libres de Asbesto.";
$keywords ="laminas de no asbesto, libres de asbesto";
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

			<div id="page-content" class="row border-bottom pb50 mt50 products-image" >
        		
                <div class="col-md-3"><a href="productos/bigs/01-sepco/05-cinta-ptfe-expandible/01-cinta-ptfe-expandible.jpg" data-lightbox="image-1" data-title="Nombre del  producto"><img src="productos/200x200/01-sepco/05-cinta-ptfe-expandible/01-cinta-ptfe-expandible.jpg"><p>Cinta PTFE Expandible</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/01-sepco/05-cinta-ptfe-expandible/02-cinta-ptfe-expandible.jpg" data-lightbox="image-1" data-title="Nombre del  producto"><img src="productos/200x200/01-sepco/05-cinta-ptfe-expandible/02-cinta-ptfe-expandible.jpg"><p>Cinta PTFE Expandible</p></a></div>
            </div>
			
        </div>
    </div>
</div>
<?php include 'footer.php' ?>