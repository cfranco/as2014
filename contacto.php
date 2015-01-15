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


                <form id="defaultForm" method="post" class="form-horizontal mt30" action="target.php">

                    <div class="form-group col-sm-6">
                        <label class="col-sm-12 control-label">Nombre Completo:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre y Apellido" />
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <label class="col-sm-12 control-label">Correo Electrónico:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <label class="col-sm-12 control-label">Teléfono:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <label class="col-sm-12 control-label">Ciudad:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>


                    <div class="form-group col-sm-6">
                        <label class="col-sm-12 control-label">Estado, Región ó Provincia:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <label class="col-sm-12 control-label">País:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
    				    <label class="col-xs-3 control-label">Mensaje:</label>
    				    <div class="col-xs-12">
    				        <textarea class="form-control" name="content" rows="5"></textarea>
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


<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                row: '.col-sm-4',
                validators: {
                    notEmpty: {
                        message: 'The first name is required'
                    }
                }
            },
            lastName: {
                row: '.col-sm-4',
                validators: {
                    notEmpty: {
                        message: 'The last name is required'
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: 'You must agree with the terms and conditions'
                    }
                }
            }
        }
    });
});
</script>

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
<?php include 'footer.php' ?>



