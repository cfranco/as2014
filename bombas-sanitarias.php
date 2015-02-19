<?php 
$marca = 'ampco';
$thisPage = 'productos';
$thisCategory = 'bombas-sanitarias';
$titlePage = "Bombas Sanitarias";
$description ="Bombas Sanitarias AMPCO";
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
                <div class="col-md-3"><a href="productos/bigs/03-ampco/bombas-sanitarias/bomba-centrifuga-sanitaria.jpg" data-lightbox="image-1" data-title="Bomba Centrífuga Sanitaria"><img src="productos/200x200/03-ampco/bombas-sanitarias/bomba-centrifuga-sanitaria.jpg"><p>Bomba Centrifuga Sanitaria</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/bombas-sanitarias/bomba-centrifuga.jpg" data-lightbox="image-1" data-title="Bombas Centrifuga"><img src="productos/200x200/03-ampco/bombas-sanitarias/bomba-centrifuga.jpg"><p>Bomba Centrifuga</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/bombas-sanitarias/bomba-peristaltica.jpg" data-lightbox="image-1" data-title="Bomba Peristaltica"><img src="productos/200x200/03-ampco/bombas-sanitarias/bomba-peristaltica.jpg"><p>Bomba Peristaltica</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/bombas-sanitarias/desplazamiento-positivo.jpg" data-lightbox="image-1" data-title="Desplazamiento Positivo"><img src="productos/200x200/03-ampco/bombas-sanitarias/desplazamiento-positivo.jpg"><p>Desplazamiento positivo</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/bombas-sanitarias/lobulos.jpg" data-lightbox="image-1" data-title="Lóbulos"><img src="productos/200x200/03-ampco/bombas-sanitarias/lobulos.jpg"><p>Lóbulos</p></a></div>
                <div class="col-md-3"><a href="productos/bigs/03-ampco/bombas-sanitarias/zl-desplazamiento-positivo.jpg" data-lightbox="image-1" data-title="ZL Desplazamiento Positivo"><img src="productos/200x200/03-ampco/bombas-sanitarias/zl-desplazamiento-positivo.jpg"><p>Desplazamiento positivo</p></a></div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>