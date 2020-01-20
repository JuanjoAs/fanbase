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

<main class="container mainpadding">

<!--==========================
      Backend recomendaciones
    ============================-->
    <section class="wow fadeInUp">
        <div class="section-header">
          <h2>Administrar Recomendaciones</h2>
        </div>
        <div class="justify-content-center">
        <div class="row border">
          <div class="col-lg-9">
            Nombre reco
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