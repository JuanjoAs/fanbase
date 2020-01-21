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
        <h2>Administrar Juegos</h2>
      </div>
      <div class="justify-content-center">
        <ul class="recomendaciones-list">
          <?php
          $recomendaciones = RecomendacionObj::recuperarTodosJuegos();
          ?>
          <?php
          $i = -1;
          foreach ($recomendaciones as $recomendacion) {
            $i++;
          ?>
            <li class="border">
              <div id="juegos<?php echo $i; ?>">
                <div class="row">
                  <div class="col-lg-9">
                    <span class="mt-3"><?php echo $recomendacion->nombre; ?></span>
                  </div>
                  <div class="col-lg-3">
                    <button class="btn btn-success m-2">Editar</button>
                    <button class="btn btn-danger m-2">Borrar</button>
                  </div>
                </div>
              </div>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
        <div class="section-header">
          <h2>Administrar Series</h2>
        </div>
        <div class="justify-content-center">
        <ul class="recomendaciones-list">
          <?php
          $recomendaciones = RecomendacionObj::recuperarTodosSeries();
          ?>
          <?php
          $i = -1;
          foreach ($recomendaciones as $recomendacion) {
            $i++;
          ?>
            <li class="border">
              <div id="juegos<?php echo $i; ?>">
                <div class="row">
                  <div class="col-lg-9">
                    <span class="mt-3"><?php echo $recomendacion->nombre; ?></span>
                  </div>
                  <div class="col-lg-3">
                    <button class="btn btn-success m-2">Editar</button>
                    <button class="btn btn-danger m-2">Borrar</button>
                  </div>
                </div>
              </div>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>

    </section>

  </main>

  <?php include("includes/footer.php"); ?>
</body>

</html>