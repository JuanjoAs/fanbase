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
      Backend recomendaciones
    ============================-->
    <section class="wow fadeInUp recomendaciones">
        <div class="section-header">
          <h2>Administrar Juegos</h2>
        </div>
        <div class="justify-content-center">
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
                    <div id="juegos<?php echo $i;?>">
                      <div class="row">
                        <div class="col-lg-8">
                          <a class="mt-3"><?php echo $recomendacion->nombre; ?></a>                
                        </div>
                        <div class="col-lg-2">
                        <button class="btn btn-primary mt-2 mb-2">Editar</button>
                        </div>
                        <div class="col-lg-2">
                          <div class="row">
                            <button class="btn btn-danger m-2">Borrar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                <?php
                }
                ?>
                
              </ul>
        <div class="section-header">
          <h2>Administrar Series</h2>
        </div>
        <div class="justify-content-center">
        <div class="row border">
          <div class="col-lg-9">
            Nombre serie
          </div>
          <div class="col-lg-3">
            <button class="btn btn-primary">Editar</button>
            <button class="btn btn-danger">Borrar</button>
          </div>
        </div>
        </div>
    </section>

</main>

<?php include("includes/footer.php");?>  
</body>
</html>