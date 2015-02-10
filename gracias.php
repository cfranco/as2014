<?php
	$name = $_POST['name'];
	$email_user = $_POST['email_user'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$comments = $_POST['comments'];


$asunto = 'Solicitud de Contacto  de: ' . $name . '.';
$codigohtml = '

<html>
<head>
<title>E-mail WTC</title>
</head>
<body>
<table>
	<tr>
		<td width="30%"><b>Nombre:</b></td>
		<td width="70%">'.$name.'</td>
	</tr>
	<tr>
		<td width="30%"><b>E-Mail:</b></td>
		<td width="70%">'.$email_user.'</td>
	</tr>
	<tr>
		<td width="30%"><b>Tel&eacute;fono:</b></td>
		<td width="70%">'.$phone.'</td>
	</tr>
	<tr>
		<td width="30%"><b>Ciudad:</b></td>
		<td width="70%">'.$city.'</td>
	</tr>
	<tr>
		<td width="30%"><b>Estado:</b></td>
		<td width="70%">'.$state.'</td>
	</tr>
	<tr>
		<td width="30%"><b>Estado:</b></td>
		<td width="70%">'.$country.'</td>
	</tr>
	<tr>
		<td width="30%"><b>Mensaje:</b></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="2"><br/><br/>'.$comments.'</td>
	</tr>
</table>
</body>
';
	
         $address = "cfranco@centerweb.com.mx";
         $headers = "From: $email_user" . PHP_EOL;
		 $headers .= "Reply-To: $email_user" . PHP_EOL;
		 $headers .= "MIME-Version: 1.0" . PHP_EOL;
		 $headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
		 $headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

mail($address,$asunto,$codigohtml,$headers);
?>

<?php include 'header.php';?>
<?php include 'menu.php';?>



<!-- Inicia contenido de la página
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="section border-bottom">
		<div class="container text-center">
			<h1>¡Gracias!</h1>
			<p>Tu mensaje se ha enviado con éxito.</p>
		</div>
	</div>
    <div class="container">
       
    	<div class="col-sm-8 col-md-offset-2 mt50 mb50">
            <img class="col-sm-6 left img-responsive" src="images/ejemplo.jpg">
            <div class="col-sm-6 right">
            	<h4 class="mt40">¡Gracias por tu mensaje!</h4>
                <p>Pronto nos comunicaremos contigo, mientras tanto te invitamos a seguir navegando en nuestro sitio web.</p>
			</div>
        </div>

    </div>
<?php include 'footer.php' ?>