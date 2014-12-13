<?php include 'header.php';?>
<?php include 'menu.php';?>



<!-- Inicia contenido de la página
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">
        <!-- Inicia Sidebar de Productos -->
        <div class="col-md-3">
        	<h4>Productos</h4>
        	<span>por Categoría</span>
        	<ul>
				<li><a href="">Anillo Aterrizador de Corriente</a></li>
				<li><a href="">Anillos para Turbinas</a></li>
				<li><a href="">Bombas de Diafragma</a></li>
				<li><a href="">Bombas Sanitarias</a></li>
				<li><a href="">Empaques</a></li>
				<li><a href="">Empaquetaduras</a></li>
				<li><a href="">Intercambiadores de Calor</a></li>
				<li><a href="">Láminas Libres de Asbesto</a></li>
				<li><a href="">Mantenimiento</a></li>
				<li><a href="">Placas</a></li>
				<li><a href="">Productos de Fibra de Vidrio</a></li>
				<li><a href="">Productos de Grafito</a></li>
				<li><a href="">Protección de Rodamientos</a></li>
				<li><a href="">Sellos de No Contacto</a></li>
				<li><a href="">Sellos Mecánicos</a></li>
				<li><a href="">Sistema de Limpieza de Tanque</a></li>
        	</ul>
        </div>
        <!-- Termina Sidebar de Productos -->

        <!-- Inicia caja de marcas -->
        <div class="col-md-9">
        	<div class="col-md-3">
        		<img src="images/brand-inproseal.jpg">
        	</div>
        	<div class="col-md-9">
        		<h2>Lander Ring Power</h2>
        		<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
        	</div>
        </div>
        <!-- Termina caja de marcas -->

        <div class="col-md-9">
        	<!-- Inicia Paginador -->
        	<div class="col-md-12 border-bottom paginador">
        		<div class="col-md-3">
        			16 productos
        		</div>
        		<div class="col-md-6 text-center">
        			aqui va el paginador
        		</div>
        		<div class="col-md-3">
        			Mostrar xx productos
        		</div>
        	</div>
			<!-- Termina paginador -->


			<div class="col-md-12 text-center products-image">
        		<div class="col-md-3">
        			<a data-toggle="lightbox" href="#demoLightbox">
        				<img src="images/producto-dumy.jpg">
        				<p>Aterrizador De Corriente</p>
        			</a>
        		</div>
        		<div id="demoLightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
					<div class='lightbox-content'>
						<img src="image.png">
						<div class="lightbox-caption"><p>Your caption here</p></div>
					</div>
				</div>

        	</div>
			<!-- Inicia Paginador -->
        	<div class="col-md-12 border-top paginador">
        		<div class="col-md-3">
        			16 productos
        		</div>
        		<div class="col-md-6 text-center">
        			aqui va el paginador
        		</div>
        		<div class="col-md-3">
        			Mostrar xx productos
        		</div>
        	</div>
			<!-- Termina paginador -->
        </div>


    </div>
<?php include 'footer.php' ?>