<?php
include("includes/a_config.php");
require_once 'Model/Recomendacion.php';
$PAGE_TITLE = "FanBase - Backend Recomendaciones";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php 
  include("includes/head-tag-contents.php"); 
      if ($_SESSION['usuario']->rango!='admin'){
        if ($_SESSION['usuario']->rango!='editor'){
          header('Location: ./index.php');
        }
      }
  ?>
</head>

<body>

  <?php include("includes/navbar.php"); 
  ?>

  <main class="container">

    <!--==========================
      Backend recomendaciones
    ============================-->
    <section class="wow fadeInUp recomendaciones">
      <div class="section-header">
        <h2>Editar recomendación</h2>
      </div>
      <div class="justify-content-center">
        <?php
        echo $_REQUEST['btneditar'];
        ?>
      </div>
     

    </section>

  </main>

  <?php include("includes/footer.php"); ?>
</body>

</html>