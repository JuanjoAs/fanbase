<?php
include("includes/a_config.php");
require_once 'Model/Recomendacion.php';
require_once 'Controller/RecomendacionController.php';
$PAGE_TITLE = "FanBase - Editar Recomendaciones";
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
  if(is_uploaded_file($_FILES['file']['tmp_name'])){
    $fich_unico=time()."-".$_FILES['file']['name'];
    $ruta="assets/img/recomendaciones/".$fich_unico;
    move_uploaded_file($_FILES['file']['tmp_name'], $ruta);
  }else{
    $ruta=$_REQUEST['imagen'];
  }
  if(recomendacionController::actualizarRecomendacion($_REQUEST['id'],$_REQUEST['nombre'],$_REQUEST['descripcion'],$ruta,$_REQUEST['tipo'],$_REQUEST['plataforma1'],$_REQUEST['plataforma2'],$_REQUEST['plataforma3'],$_REQUEST['plataforma4'],$_REQUEST['linkplataforma1'],$_REQUEST['linkplataforma2'],$_REQUEST['linkplataforma3'],$_REQUEST['linkplataforma4'])){
    header("Location:panelrecomendaciones.php?edit=success");
  }else{
    return false;
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
        <h2>Editar recomendación</h2>
      </div>
      <div class="justify-content-center">
      <form method="post" enctype="multipart/form-data">
        <?php
          $recomendacion=recomendacionController::recuperarRecomendacion($_REQUEST['btneditar']);
        ?>
        <input name="id" hidden type="text" class="form-control" value="<?php echo $recomendacion->id;?>">
        Nombre: <input name="nombre" type="text" class="form-control" value="<?php echo $recomendacion->nombre;?>">
        Descripción: <textarea rows="5" class="form-control" name="descripcion"><?php echo $recomendacion->descripcion;?></textarea>
        Imagen: <img class="d-block border cartelrecos" src="<?php echo $recomendacion->imagen;?>"><div><input type="file" name="file"></div>
        <input name="imagen" type="text" class="form-control" value="<?php echo $recomendacion->imagen;?>">
        Tipo:<select name="tipo" class="form-control"> 
        <option value="juego">Juego</option>
        <option value="seriepeli">Serie/Película</option>
        </select>
        Plataforma 1:<select name="plataforma1" class="form-control"> 
        <option value="">----</option>
        <option value="pc"<?php if($recomendacion->plataforma1=="pc"){echo "selected";}?>>PC</option>
        <option value="gog"<?php if($recomendacion->plataforma1=="gog"){echo "selected";}?>>GoG</option>
        <option value="steam"<?php if($recomendacion->plataforma1=="steam"){echo "selected";}?>>Steam</option>
        <option value="microsoft"<?php if($recomendacion->plataforma1=="microsoft"){echo "selected";}?>>Microsoft</option>
        <option value="google"<?php if($recomendacion->plataforma1=="google"){echo "selected";}?>>Google Play Store</option>
        <option value="apple"<?php if($recomendacion->plataforma1=="apple"){echo "selected";}?>>App Store Apple</option>
        <option value="imdb"<?php if($recomendacion->plataforma1=="imdb"){echo "selected";}?>>IMDB</option>
        </select>
        Plataforma 2:<select name="plataforma2" class="form-control"> 
        <option value="">----</option>
          <option value="pc"<?php if($recomendacion->plataforma2=="pc"){echo "selected";}?>>PC</option>
          <option value="gog"<?php if($recomendacion->plataforma2=="gog"){echo "selected";}?>>GoG</option>
          <option value="steam"<?php if($recomendacion->plataforma2=="steam"){echo "selected";}?>>Steam</option>
          <option value="microsoft"<?php if($recomendacion->plataforma2=="microsoft"){echo "selected";}?>>Microsoft</option>
          <option value="google"<?php if($recomendacion->plataforma2=="google"){echo "selected";}?>>Google Play Store</option>
          <option value="apple"<?php if($recomendacion->plataforma2=="apple"){echo "selected";}?>>App Store Apple</option>
          <option value="imdb"<?php if($recomendacion->plataforma2=="imdb"){echo "selected";}?>>IMDB</option>
        </select>
        Plataforma 3:<select name="plataforma3" class="form-control"> 
        <option value="">----</option>
          <option value="pc"<?php if($recomendacion->plataforma3=="pc"){echo "selected";}?>>PC</option>
          <option value="gog"<?php if($recomendacion->plataforma3=="gog"){echo "selected";}?>>GoG</option>
          <option value="steam"<?php if($recomendacion->plataforma3=="steam"){echo "selected";}?>>Steam</option>
          <option value="microsoft"<?php if($recomendacion->plataforma3=="microsoft"){echo "selected";}?>>Microsoft</option>
          <option value="google"<?php if($recomendacion->plataforma3=="google"){echo "selected";}?>>Google Play Store</option>
          <option value="apple"<?php if($recomendacion->plataforma3=="apple"){echo "selected";}?>>App Store Apple</option>
          <option value="imdb"<?php if($recomendacion->plataforma3=="imdb"){echo "selected";}?>>IMDB</option>
        </select>
        Plataforma 4:<select name="plataforma4" class="form-control"> 
        <option value="">----</option>
          <option value="pc"<?php if($recomendacion->plataforma4=="pc"){echo "selected";}?>>PC</option>
          <option value="gog"<?php if($recomendacion->plataforma4=="gog"){echo "selected";}?>>GoG</option>
          <option value="steam"<?php if($recomendacion->plataforma4=="steam"){echo "selected";}?>>Steam</option>
          <option value="microsoft"<?php if($recomendacion->plataforma4=="microsoft"){echo "selected";}?>>Microsoft</option>
          <option value="google"<?php if($recomendacion->plataforma4=="google"){echo "selected";}?>>Google Play Store</option>
          <option value="apple"<?php if($recomendacion->plataforma4=="apple"){echo "selected";}?>>App Store Apple</option>
          <option value="imdb"<?php if($recomendacion->plataforma4=="imdb"){echo "selected";}?>>IMDB</option>
        </select>
        Enlace plataforma 1: <input type="text" name="linkplataforma1" class="form-control" value="<?php echo $recomendacion->linkplataforma1;?>">
        Enlace plataforma 2: <input type="text" name="linkplataforma2" class="form-control" value="<?php echo $recomendacion->linkplataforma2;?>">
        Enlace plataforma 3: <input type="text" name="linkplataforma3" class="form-control" value="<?php echo $recomendacion->linkplataforma3;?>">
        Enlace plataforma 4: <input type="text" name="linkplataforma4" class="form-control" value="<?php echo $recomendacion->linkplataforma4;?>">
        <input type="submit" name="btnguardar" class="btn btn-success mb-4 mt-3 mr-2 align-middle" value="Guardar"><a href="panelrecomendaciones.php" class="btn btn-secondary mb-4 mt-3 align-middle">Atrás</a>
        </form>
      </div>
     

    </section>

  </main>

  <?php include("includes/footer.php"); ?>
</body>

</html>