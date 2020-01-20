<?php 
include("includes/a_config.php");
require_once 'Model/Recomendacion.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navbar.php");?>

<main class="container">

<!--==========================
      Juegos
    ============================-->
    <section class="recomendaciones wow fadeInUp">
        <div class="section-header">
          <h2>Juegos</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-12">
              <ul class="recomendaciones-list">
                <?php
                $recomendaciones=RecomendacionObj::recuperarTodosJuegos();
                ?>
                <?php
                $i=-1;
                foreach($recomendaciones as $recomendacion){
                  $i++;
                ?>
                <li class="border">
                  <a data-toggle="collapse" href="#juegos<?php echo $i;?>" class="collapsed"><?php echo $recomendacion->nombre; ?><i class="fa fa-minus-circle"></i></a>
                  <div id="juegos<?php echo $i;?>" class="collapse">
                    <div class="row">
                      <div class="col-lg-3">
                        <img class="border cartelrecos" src='<?php echo $recomendacion->imagen; ?>'>
                      </div>
                      <div class="col-lg-6">
                        <p>
                        <?php echo $recomendacion->descripcion; ?>
                        </p>
                      </div>
                      <div class="col-lg-3">
                        <div class="row storesbotones">
                         <?php
                          include 'includes/bbddbotones_stores.php';
                         ?>  
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php
                }
                ?>
                
              </ul>
          </div>
        </div>
    </section>

<!--==========================
      Series
    ============================-->
    <section class="recomendaciones wow fadeInUp">
        <div class="section-header">
          <h2>Películas y Series</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-12">
              <ul class="recomendaciones-list">
              <?php
                $recomendaciones=RecomendacionObj::recuperarTodosSeries();
                ?>
                <?php
                $i=-1;
                foreach($recomendaciones as $recomendacion){
                  $i++;
                ?>
                <li class="border">
                  <a data-toggle="collapse" href="#series<?php echo $i;?>" class="collapsed"><?php echo $recomendacion->nombre; ?><i class="fa fa-minus-circle"></i></a>
                  <div id="series<?php echo $i;?>" class="collapse">
                    <div class="row">
                      <div class="col-lg-3">
                        <img class="border cartelrecos" src='<?php echo $recomendacion->imagen; ?>'>
                      </div>
                      <div class="col-lg-6">
                        <p>
                        <?php echo $recomendacion->descripcion; ?>
                        </p>
                      </div>
                      <div class="col-lg-3">
                        <div class="row storesbotones">
                         <?php
                          include 'includes/bbddbotones_stores.php';
                         ?>  
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php
                }
                ?>
              </ul>
          </div>
        </div>
    </section>
</main>

<?php include("includes/footer.php");?>  
<script>
  // Primero de recomendaciones esta abierto
  $("#juegos0").collapse('show');
  $("#series0").collapse('show');
</script>
</body>
</html>