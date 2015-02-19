<?php 
$marca = 'ampco';
$thisPage = 'productos';
$thisCategory = 'sistema-limpieza';
$titlePage = "Sistema de Limpieza para Tanques";
$description ="Instalación de sistemas de limpieza para tanques.";
$keywords ="Sistema de limpieza para tanques";
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
                <div class="col-md-3"><a href="productos/bigs/03-ampco/limpieza-de-tanques/GAMA-JET.jpg"    data-lightbox="image-1" data-title="GAMA JET"><img src="productos/200x200/03-ampco/limpieza-de-tanques/GAMA-JET.jpg"><p>GAMA JET</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/limpieza-de-tanques/GAMA-JET-01.jpg" data-lightbox="image-1" data-title="GAMA JET"><img src="productos/200x200/03-ampco/limpieza-de-tanques/GAMA-JET-01.jpg"><p>GAMA JET 01</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/limpieza-de-tanques/GAMA-JET-02.jpg" data-lightbox="image-1" data-title="GAMA JET"><img src="productos/200x200/03-ampco/limpieza-de-tanques/GAMA-JET-02.jpg"><p>GAMA JET 02</p></a></div>            
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>