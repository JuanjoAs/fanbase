<?php 
include("includes/a_config.php");
require_once 'Objetos/RecomendacionesObj.php';

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
      Backend usuarios
    ============================-->
    <section class="recomendaciones wow fadeInUp">
        <div class="section-header">
          <h2>Administrar Usuarios</h2>
        </div>
        <div class="row justify-content-center">
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