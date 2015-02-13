<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php if (empty($description)){ echo "Fabricación, instalación y reparación de Sellos Mecánicos, empaques y algo mas." ;} echo "$description"; ?>">
    <meta name="keywords" content="<?php if (empty($keywords)){ echo "Sellos" ;} echo "$keywords"; ?>">
    <meta name="author" content="www.centerweb.com.mx">
    <link rel="icon" href="images/favicon.ico">

    <title><?php if (empty($titlePage)){ echo "Sellos y Empaques Industriales" ;} echo "$titlePage"; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/my-app.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:100italic,100,300italic,300,400italic,400,500italic,500,700italic,700,900italic,900" rel="stylesheet" type="text/css">

    <!-- Include FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/fontawesome/4.1.0/css/font-awesome.min.css" />

    <!-- BootstrapValidator CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- BootstrapValidator JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="assets/validate/custom-validate.js"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Custom styles for this template -->
    <link href="assets/carousel.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

<?php if ($thisPage == 'contacto') { ?>

    <!-- Assets para formulario de contacto
    ================================== -->
    <link rel="stylesheet" href="assets/validator/dist/css/formValidation.css"/>

    <script type="text/javascript" src="assets/validator/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/validator/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/validator/dist/js/formValidation.js"></script>
    <script type="text/javascript" src="assets/validator/dist/js/framework/bootstrap.js"></script>
        
<?php } elseif ($thisPage == 'productos') { ?>

    <!-- Assets para lightbox
    ================================== -->
    <link href="assets/lightbox/css/lightbox.css" rel="stylesheet" />
    <script src="assets/lightbox/js/jquery-1.11.0.min.js"></script>
    <script src="assets/lightbox/js/lightbox.min.js"></script>
    
    <!-- Assets para paginador de items
    ================================== -->
    <script type="text/javascript" src="assets/js/jquery.quick.pagination.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#page-content").quickPagination({pagerLocation:"both",pageSize:"12"});
        });
    </script>

<?php } ?>

</head>
<body>