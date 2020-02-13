<?php
include("../includes/a_config.php");
require_once $_SERVER['DOCUMENT_ROOT'].'/fanbase/Model/Recomendacion.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/fanbase/Controller/RecomendacionController.php';
$PAGE_TITLE = "FanBase - Editar Recomendaciones";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php 
  include("../includes/head-tag-contents.php"); 
      if ($_SESSION['usuario']->rango!='admin'){
        if ($_SESSION['usuario']->rango!='editor'){
          header('Location: ./index.php');
        }
      }
      include("../includes/quilleditor.php");

  ?>

</head>
<?php
if(isset($_REQUEST['btnguardar'])){
  if(is_uploaded_file($_FILES['file']['tmp_name'])){
    $fich_unico=time()."-".$_FILES['file']['name'];
    $ruta=$_SERVER['DOCUMENT_ROOT']."/fanbase/assets/img/recomendaciones/".$fich_unico;
    $rutaprint='/fanbase/assets/img/recomendaciones/'. $fich_unico;
    move_uploaded_file($_FILES['file']['tmp_name'], $ruta);
  }else{
    $ruta=$_REQUEST['imagen'];
  }
  if(recomendacionController::actualizarRecomendacion($_REQUEST['id'],$_REQUEST['nombre'],$_REQUEST['descripcion'],$rutaprint,$_REQUEST['tipo'],$_REQUEST['plataforma1'],$_REQUEST['plataforma2'],$_REQUEST['plataforma3'],$_REQUEST['plataforma4'],$_REQUEST['linkplataforma1'],$_REQUEST['linkplataforma2'],$_REQUEST['linkplataforma3'],$_REQUEST['linkplataforma4'])){
    header("Location:panelrecomendaciones?edit=success");
  }else{
    return false;
  }
}

?>
<body>

  <?php include("../includes/navbar.php"); 
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
        Descripción: 
        <div id="standalone-container">
            <div id="toolbar-container">
              <span class="ql-formats">
                <select class="ql-font">
                  <option value="roboto" selected>Roboto</option>
                  <option value="permanentmarker">Permanent Marker</option>
                </select>
                </select> </span>
              <span class="ql-formats">
                <button class="ql-bold"></button>
                <button class="ql-italic"></button>
                <button class="ql-underline"></button>
                <button class="ql-strike"></button>
              </span>
              <span class="ql-formats">
                <select class="ql-color"></select>
                <select class="ql-background"></select>
              </span>
              <span class="ql-formats">
                <button class="ql-script" value="sub"></button>
                <button class="ql-script" value="super"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-header" value="1"></button>
                <button class="ql-header" value="2"></button>
                <button class="ql-blockquote"></button>
                <button class="ql-code-block"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-list" value="ordered"></button>
                <button class="ql-list" value="bullet"></button>
                <button class="ql-indent" value="-1"></button>
                <button class="ql-indent" value="+1"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-direction" value="rtl"></button>
                <select class="ql-align"></select>
              </span>
              <span class="ql-formats">
                <button class="ql-link"></button>
                <button class="ql-image"></button>
                <button class="ql-video"></button>
                <button class="ql-formula"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-clean"></button>
              </span>
            </div>
            <div id="editor-container"><?php echo $recomendacion->descripcion;?></div>
          </div>
        Imagen: <img class="d-block border cartelrecos" src="/fanbase/<?php echo $recomendacion->imagen;?>"><div><input type="file" name="file"></div>
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
</body>
<script>
  var Font = Quill.import('formats/font');
// We do not add Aref Ruqaa since it is the default
Font.whitelist = ['mirza','permanentmarker',  'roboto'];
Quill.register(Font, true);


  var quill = new Quill('#editor-container', {
    modules: {
      formula: true,
      syntax: true,
      toolbar: '#toolbar-container'
    },
    placeholder: 'Descripción',
    theme: 'snow'
  });

  function guardarDesc(textoarea) {
    $("textarea[name='descripcion']").val(textoarea);
  }
  quill.on('text-change', function(delta, oldDelta, source) {
    if (source == 'api') {
      guardarDesc(quill.root.innerHTML);
    } else if (source == 'user') {
      guardarDesc(quill.root.innerHTML);

    }
  });
</script>
  <?php include("../includes/footer.php"); ?>

</html>