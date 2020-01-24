<?php
include("includes/a_config.php");
require_once 'Model/Recomendacion.php';
require_once 'Controller/RecomendacionController.php';
$PAGE_TITLE = "FanBase - Añadir recomendacion";
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
  <script type="text/javascript" src="assets/js/nicedit/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
</head>
<?php
if(isset($_REQUEST['btnguardar'])){
  if(recomendacionController::insertarRecomendacion($_REQUEST['nombre'],$_REQUEST['descripcion'],$_REQUEST['imagen'],$_REQUEST['tipo'],$_REQUEST['plataforma1'],$_REQUEST['plataforma2'],$_REQUEST['plataforma3'],$_REQUEST['plataforma4'],$_REQUEST['linkplataforma1'],$_REQUEST['linkplataforma2'],$_REQUEST['linkplataforma3'],$_REQUEST['linkplataforma4'])){
    header("Location:panelrecomendaciones.php?addreco=success");
  }
}

?>
<body>

  <?php include("includes/navbar.php"); 
  ?>

  <main class="container">

    <!--==========================
      Backend recomendaciones
    ============================-->
    <section class="wow fadeInUp recomendaciones">
      <div class="section-header">
        <h2>Añadir recomendación</h2>
      </div>
      <div class="justify-content-center">
      <form method="post">
 
        <input name="id" hidden type="text" class="form-control">
        Nombre: <input name="nombre" type="text" class="form-control">
        Descripción: <textarea rows="5" class="form-control" name="descripcion"></textarea>
        Imagen: <img class="d-block border cartelrecos" src="">
        <input name="imagen" hidden type="text" class="form-control">
        Tipo:<select name="tipo" class="form-control"> 
        <option value="juego">Juego</option>
        <option value="seriepeli">Serie/Película</option>
        </select>
        Plataforma 1:<select name="plataforma1" class="form-control"> 
        <option value="">----</option>
        <option value="pc">PC</option>
        <option value="gog">>GoG</option>
        <option value="steam">Steam</option>
        <option value="microsoft">>Microsoft</option>
        <option value="google">Google Play Store</option>
        <option value="apple">App Store Apple</option>
        <option value="imdb">IMDB</option>
        </select>
        Plataforma 2:<select name="plataforma2" class="form-control"> 
        <option value="">----</option>
          <option value="pc">>PC</option>
          <option value="gog">GoG</option>
          <option value="steam">>Steam</option>
          <option value="microsoft">>Microsoft</option>
          <option value="google">>Google Play Store</option>
          <option value="apple">>App Store Apple</option>
          <option value="imdb">IMDB</option>
        </select>
        Plataforma 3:<select name="plataforma3" class="form-control"> 
        <option value="">----</option>
          <option value="pc">>PC</option>
          <option value="gog">GoG</option>
          <option value="steam">Steam</option>
          <option value="microsoft">Microsoft</option>
          <option value="google">Google Play Store</option>
          <option value="apple">>App Store Apple</option>
          <option value="imdb">IMDB</option>
        </select>
        Plataforma 4:<select name="plataforma4" class="form-control"> 
        <option value="">----</option>
          <option value="pc">>PC</option>
          <option value="gog">GoG</option>
          <option value="steam">Steam</option>
          <option value="microsoft">Microsoft</option>
          <option value="google">Google Play Store</option>
          <option value="apple">>App Store Apple</option>
          <option value="imdb">IMDB</option>
        </select>
        Enlace plataforma 1: <input type="text" name="linkplataforma1" class="form-control" value="">
        Enlace plataforma 2: <input type="text" name="linkplataforma2" class="form-control" value="">
        Enlace plataforma 3: <input type="text" name="linkplataforma3" class="form-control" value="">
        Enlace plataforma 4: <input type="text" name="linkplataforma4" class="form-control" value="">
        <input type="submit" name="btnguardar" class="btn btn-success mb-4 mt-3 mr-2 align-middle" value="Guardar"><a href="panelrecomendaciones.php" class="btn btn-secondary mb-4 mt-3 align-middle">Atrás</a>
        </form>
      </div>
     

    </section>

  </main>

  <?php include("includes/footer.php"); ?>
</body>

</html>