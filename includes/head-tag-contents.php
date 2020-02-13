<title><?php require_once $_SERVER['DOCUMENT_ROOT'] . '/fanbase/Model/Usuario.php';

        print $PAGE_TITLE;
        session_start();
        ?></title>

<?php if ($CURRENT_PAGE == "Index") { ?>
  <meta name="description" content="Bienvenido a Fanbase. Donde se informan los fans de verdad." />
  <meta name="keywords" content="fanbase, videojuegos, series" />
<?php } ?>

<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<!-- Favicons -->
<link href="/fanbase/assets/img/favicon.png" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

<!-- Fontawesome Icons -->
<script src="https://kit.fontawesome.com/33a002ef8f.js" crossorigin="anonymous"></script>

<!-- Bootstrap CSS File -->
<link href="/fanbase/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="/fanbase/lib/animate/animate.min.css" rel="stylesheet">
<link href="/fanbase/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="/fanbase/assets/css/resume.css" rel="stylesheet">
<!-- JQuery scripts -->
<script src="/fanbase/lib/jquery/jquery.min.js"></script>
<script src="/fanbase/lib/jquery/jquery-migrate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Small modal -->
<?php if (!isset($_COOKIE['avisoNews'])) { 

?>

<div id="popRecomendaciones" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">Nuevas recomendaciones</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Los profesionales de FANBASE tienen nuevas recomendaciones para tí, ¡NO PIERDAS TIEMPO Y VE A VERLAS!
      </div>
      <div class="modal-footer justify-content-center text-center">
      <?php 
      include_once $_SERVER['DOCUMENT_ROOT'].'/fanbase/Controller/RecomendacionController.php';
    
      echo " <a href='recomendaciones'> <img src='".(recomendacionController::recuperarUltimaRecomendacion())->imagen."' width='80%' alt='Ultima recomendación'></a>";
      setcookie('avisoNews','true',time()+2592000000,'/');
      ?>
      </div>
    </div>
  </div>
</div>

<?php
}

?>