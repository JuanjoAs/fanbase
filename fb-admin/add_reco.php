<?php
include("../includes/a_config.php");
require_once $_SERVER['DOCUMENT_ROOT'].'/fanbase/Model/Recomendacion.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/fanbase/Controller/RecomendacionController.php';
$PAGE_TITLE = "FanBase - Añadir recomendacion";
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <?php
  include("../includes/head-tag-contents.php");
  if ($_SESSION['usuario']->rango != 'admin') {
    if ($_SESSION['usuario']->rango != 'editor') {
      header('Location: ./index.php');
    }
  }
  include("../includes/quilleditor.php");
  ?>

</head>
<?php
if (isset($_REQUEST['btnguardar'])) {
  if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    $fich_unico = time() . "-" . $_FILES['file']['name'];
    $ruta =  $_SERVER['DOCUMENT_ROOT']."/fanbase/assets/img/recomendaciones/" . $fich_unico;
    $rutaprint='/fanbase/assets/img/recomendaciones/'. $fich_unico;
    move_uploaded_file($_FILES['file']['tmp_name'], $ruta);
    if (recomendacionController::insertarRecomendacion($_REQUEST['nombre'], $_REQUEST['descripcion'], $rutaprint, $_REQUEST['tipo'], $_REQUEST['plataforma1'], $_REQUEST['plataforma2'], $_REQUEST['plataforma3'], $_REQUEST['plataforma4'], $_REQUEST['linkplataforma1'], $_REQUEST['linkplataforma2'], $_REQUEST['linkplataforma3'], $_REQUEST['linkplataforma4'])) {
      header("Location:panelrecomendaciones.php?addreco=success");
    }
  } else {
    return false;
  }
}
   include("../includes/navbar.php");

?>

<body>

  <main class="container">

    <!--==========================
      Backend recomendaciones
    ============================-->
    <section class="wow fadeInUp recomendaciones">
      <div class="section-header">
        <h2>Añadir recomendación</h2>
      </div>
      <div class="justify-content-center">
        <form method="post" enctype="multipart/form-data">
          Nombre: <input name="nombre" type="text" class="form-control" required>
          <textarea name="descripcion" id="descripcion" hidden></textarea>
          Descripción: <div id="editor" name="editor"></div>
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
            <div id="editor-container"></div>
          </div>
          Imagen: <div><input type="file" name="file" required></div>
          <input name="imagen" hidden type="text" class="form-control">
          Tipo:<select name="tipo" class="form-control">
            <option value="juego">Juego</option>
            <option value="seriepeli">Serie/Película</option>
          </select>
          Plataforma 1:<select name="plataforma1" class="form-control">
            <option value="">----</option>
            <option value="pc">PC</option>
            <option value="gog">GoG</option>
            <option value="steam">Steam</option>
            <option value="microsoft">Microsoft</option>
            <option value="google">Google Play Store</option>
            <option value="apple">App Store Apple</option>
            <option value="imdb">IMDB</option>
          </select>
          Plataforma 2:<select name="plataforma2" class="form-control">
            <option value="">----</option>
            <option value="pc">PC</option>
            <option value="gog">GoG</option>
            <option value="steam">>Steam</option>
            <option value="microsoft">Microsoft</option>
            <option value="google">>Google Play Store</option>
            <option value="apple">>App Store Apple</option>
            <option value="imdb">IMDB</option>
          </select>
          Plataforma 3:<select name="plataforma3" class="form-control">
            <option value="">----</option>
            <option value="pc">PC</option>
            <option value="gog">GoG</option>
            <option value="steam">Steam</option>
            <option value="microsoft">Microsoft</option>
            <option value="google">Google Play Store</option>
            <option value="apple">>App Store Apple</option>
            <option value="imdb">IMDB</option>
          </select>
          Plataforma 4:<select name="plataforma4" class="form-control">
            <option value="">----</option>
            <option value="pc">PC</option>
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
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/fanbase/includes/footer.php'; ?>

</html>