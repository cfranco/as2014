<?php 
$marca = 'ampco';
$thisPage = 'productos';
$thisCategory = 'bombas-diafragma';
$titlePage = "Bombas de Diafragma";
$description ="Bombas de Diafragma AMPCO GRACO";
$keywords ="Bombas de diafragma, ampco, bombas sanitarias,graco";
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
                <div class="col-md-3"><a href="productos/bigs/03-ampco/bombas-de-diafragma/GRACO-01.jpg" data-lightbox="image-1" data-title="Bombas de Diafragma GRACO 01"><img src="productos/200x200/03-ampco/bombas-de-diafragma/GRACO-01.jpg"><p>Bombas de Diafragma GRACO 01</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/bombas-de-diafragma/GRACO-02.jpg" data-lightbox="image-1" data-title="Bombas de Diafragma GRACO 02"><img src="productos/200x200/03-ampco/bombas-de-diafragma/GRACO-02.jpg"><p>Bombas de Diafragma GRACO 02</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/bombas-de-diafragma/GRACO-03.jpg" data-lightbox="image-1" data-title="Bombas de Diafragma GRACO 03"><img src="productos/200x200/03-ampco/bombas-de-diafragma/GRACO-03.jpg"><p>Bombas de Diafragma GRACO 03</p></a></div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>