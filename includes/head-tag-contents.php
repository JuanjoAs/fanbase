<title><?php require_once 'Model/Usuario.php';
print $PAGE_TITLE;session_start();
?></title>

<?php if ($CURRENT_PAGE == "Index") { ?>
	<meta name="description" content="Bienvenido a Fanbase. Donde se informan los fans de verdad." />
	<meta name="keywords" content="fanbase, videojuegos, series" /> 
<?php } ?>

<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

  <!-- Fontawesome Icons -->
  <script src="https://kit.fontawesome.com/33a002ef8f.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/resume.css" rel="stylesheet">
<!-- JQuery scripts -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

