<?php 
	$thisPage = 'contacto'
?>

<?php include 'header.php';?>
<?php include 'menu.php';?>

<!-- Inicia contenido de la página
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

	<div class="section border-bottom">
		<div class="container text-center">
			<h1>Contacto</h1>
			<p>Contacta a American Seal, los especialistas en sellos mecánicos.</br>Llena y envía los datos del siguiente formulario de contacto. </p>
		</div>
	</div>
    <div class="container">
        <div class="col-md-8 border-right pv40">
        	<h2>Contacto Directo</h2>
        	<!-- inicia Formulairo -->


                <form id="defaultForm" method="post" class="form-horizontal mt30" action="gracias.php">

                    <div class="form-group col-sm-6">
                        <label class="col-sm-12 control-label">Nombre Completo:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="name" />
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <label class="col-sm-12 control-label">Correo Electrónico:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="email_user" />
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <label class="col-sm-12 control-label">Teléfono:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="phone" />
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <label class="col-sm-12 control-label">Ciudad:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="city" />
                        </div>
                    </div>


                    <div class="form-group col-sm-6">
                        <label class="col-sm-12 control-label">Estado, Región ó Provincia:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="state" />
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <label class="col-sm-12 control-label">País:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="country" />
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
    				    <label class="col-xs-3 control-label">Mensaje:</label>
    				    <div class="col-xs-12">
    				        <textarea class="form-control" name="comments" rows="5"></textarea>
    				    </div>
    				</div>

                    
                    <!-- Captcha -->
                    <div class="form-group col-sm-4">
                        <label class="col-sm-6 control-label" id="captchaOperation"></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="captcha" />
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="agree" value="agree" /> Agree with the terms and conditions
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-sm-2">
                        <div class="col-sm-12 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Enviar Datos</button>
                        </div>
                    </div>
                </form>


        	<!-- Termina formulario -->
        </div>
        <div class="col-md-4">
        	<h2 class="mt50">Datos de Contacto</h2>
        	<h4>Matriz </br>Monterrey, Nuevo León</h4>
        	<p>Calle Cedral #222, </br>Colonia Mitras Centro, </br>Monterrey, Nuevo León, México.</br>C.P. 64000</p>
        	<p><b>LADA sin costo:</b>	 01 800 838 7990</p> 
        	<p><b>Teléfonos:</b></br>+52 (81) 1453 0241</br>+52 (81) 1366 0620</p>
        	<p><b>Correo electrónico:</b></br>atc@americanseal.com.mx</br>ventas@americanseal.com.mx</p>
        </div>
    </div>

<script type="text/javascript" src="assets/js/form-validate.js"></script>
<?php include 'footer.php' ?>



