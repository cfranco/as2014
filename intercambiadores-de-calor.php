<?php 
$marca = 'orbi';
$thisPage = 'productos';
$thisCategory = 'intercambiadores';
$titlePage = "Intercambiadores de Calor";
$description ="Venta de Intercambiadores de Calor";
$keywords ="Intercambiadores de calor";
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
                <div class="col-md-3"><a href="productos/bigs/04-orbi/intercambiadores-de-calor/intercambiador-placas.jpg" data-lightbox="image-1" data-title="intercambiador de Placas de Calor"><img src="productos/200x200/04-orbi/intercambiadores-de-calor/intercambiador-placas.jpg"><p>Intercambiadores de Placas de Calor</p></a></div> 
                <div class="col-md-3"><a href="productos/bigs/04-orbi/intercambiadores-de-calor/pasteurizador.jpg" data-lightbox="image-1" data-title="Pasteurizador"><img src="productos/200x200/04-orbi/intercambiadores-de-calor/pasteurizador.jpg"><p>Pasteurizador</p></a></div>   
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>