<?php
include("includes/a_config.php");
require_once 'Model/Recomendacion.php';
require_once 'Controller/RecomendacionController.php';
$PAGE_TITLE = "FanBase - Administrar Recomendaciones";
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

  <?php 
  include("includes/navbar.php"); 
  if(isset($_REQUEST['btnborrar'])){
    if(recomendacionController::borrarRecomendacion($_REQUEST['btnborrar'])){
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Borrrado',
                text: 'Recomendación borrada correctamente.',
            });
        </script>
        <?php
    }

  }
  if(isset($_GET['edit'])){
      if($_GET['edit']=="success"){
          ?>
          <script>
          Swal.fire(
              'Actualizado!',
              'Recomendación actualizada correctamente.',
              'success'
          );
          </script>
        <?php
      }
  }
  if(isset($_GET['addreco'])){
    if($_GET['addreco']=="success"){
        ?>
        <script>
        Swal.fire(
            'Añadida!',
            'Recomendación añadida correctamente.',
            'success'
        );
        </script>
      <?php
    }
}
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
          $recomendaciones = recomendacionController::recuperarTodosJuegos();
          ?>
          <?php
          foreach ($recomendaciones as $recomendacion) {
          ?>
            <li class="border">
              <div id="juegos">
                <div class="row">
                  <div class="col-lg-9">
                    <span class="mt-3"><?php echo $recomendacion->nombre; ?></span>
                  </div>
                  <div class="col-lg-3">
                    <form class="d-inline" method="POST" action="editarrecos.php"><button name="btneditar" class="btn btn-success m-2" value="<?php echo $recomendacion->id;?>">Editar</button></form>
                    <form class="d-inline" method="POST"><button name="btnborrar" class="btn btn-danger m-2" value="<?php echo $recomendacion->id;?>">Borrar</button></form>
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
          $recomendaciones = recomendacionController::recuperarTodosSeries();
          ?>
          <?php
          foreach ($recomendaciones as $recomendacion) {
          ?>
            <li class="border">
              <div id="seriepelis">
                <div class="row">
                  <div class="col-lg-9">
                    <span class="mt-3"><?php echo $recomendacion->nombre; ?></span>
                  </div>
                  <div class="col-lg-3">
                    <form class="d-inline" method="POST" action="editarrecos.php"><button name="btneditar" class="btn btn-success m-2" value="<?php echo $recomendacion->id;?>">Editar</button></form>
                    <form class="d-inline" method="POST"><button name="btnborrar" class="btn btn-danger m-2" value="<?php echo $recomendacion->id;?>">Borrar</button></form>
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