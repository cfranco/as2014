<?php 
$marca = 'inpro';
$thisPage = 'productos';
$thisCategory = 'proteccion-rodamientos';
$titlePage = "Protección de Rodamientos";
$description ="Fabricamos protectores de rodamientos para chumaceras.";
$keywords ="proteccion, protector, rodamientos,chumaceras";
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
                <div class="col-md-3"><a href="productos/bigs/02-inpro-seal/proteccion-de-rodamientos/protector-de-chumaceras.jpg" data-lightbox="image-1" data-title="Anillo Aterrizador de Corriente"><img src="productos/200x200/02-inpro-seal/proteccion-de-rodamientos/protector-de-chumaceras.jpg"><p>Protector de Chumaceras</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/02-inpro-seal/proteccion-de-rodamientos/protector-de-rodamientos-y-chumaceras.jpg" data-lightbox="image-1" data-title="Anillo Aterrizador de Corriente con Sello de Laberinto"><img src="productos/200x200/02-inpro-seal/proteccion-de-rodamientos/protector-de-rodamientos-y-chumaceras.jpg"><p>Protector de Rodamientos y Chumaceras</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/02-inpro-seal/proteccion-de-rodamientos/protector-de-rodamientos.jpg" data-lightbox="image-1" data-title="Aterrizadores de Corriente"><img src="productos/200x200/02-inpro-seal/proteccion-de-rodamientos/protector-de-rodamientos.jpg"><p>Protector de rodamientos</p></a></div>
            </div>
			
        </div>
    </div>
</div>
<?php include 'footer.php' ?>