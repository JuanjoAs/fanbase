<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navbar.php");?>


<main>
  <!--==========================
    Index
  ============================-->
  <section class="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">DONDE SE INFORMAN<br><span>LOS FANS</span> DE VERDAD</h1>

      <p class="mb-4 pb-0">Tu web de información referente</p>

      <button type="button" class="btn play-btn mb-4" data-toggle="modal" data-target="#exampleModalCenter"><span class="d-none">PLAY</span></button>      
      <a href="./nosotros.php" class="about-btn scrollto">Sobre nosotros</a>
    </div>
  </section>
   <!--==========================
      Extra index
    ============================-->
    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Sobre Fanbase</h2>
            <p>En Fanbase encontrarás los fans más aférrimos para informarse y compartir su conocimiento. Los foros cada vez son menos usados y hay menos sitios web donde informarse de nuestras series y juegos favoritos. En recomendaciones puedes encontrar los mejores ;). Únete como editor para añadir más.</p>
          </div>
          <div class="col-lg-3">
            <h3>¿Para quién es?</h3>
            <p>La web líder donde se reúnen los fans más aférrimos para informarse y compartir su conocimiento.</p>
          </div>
          <div class="col-lg-3">
            <h3>¿Por qué?</h3>
            <p>Los foros cada vez son menos usados y hay menos sitios web donde informarse de nuestras series y juegos favoritos.</p>
          </div>
        </div>
      </div>
    </section>
</main>

<!-- Modal Video -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">FanBase: Tu web referente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="video-container" id="video-container">
          <!-- Video -->
          <video id="video" class="video-fluid">
            <source src="assets/videos/amanecer.webm" type="video/webm">
            <source src="assets/videos/amanecer.mp4" type="video/mp4">
            <p>
              Tu navegador no soporta video HTML5.
              <a href="assets/videos/amanecer.mp4">Descargalo</a>
            </p>
          </video>
          <!-- Video Controls -->
          <div id="video-controls" class="video-controls"><label hidden for="seek-bar"><span hidden>barra deslizante</span></label><label hidden for="volume-bar"><span hidden>barra volumen</span></label>
            <button type="button" class="btn btn-primary" id="play-pause" class="play">Reproducir</button>
            <input type="range" class="seek-bar" id="seek-bar" alt="Barra deslizador reproductor" value="0">
            <button type="button" class="btn-primary" id="mute"><span hidden>boton mutear</span><i class="fas fa-volume-mute"></i></button>
            <input type="range" class="volume-bar" id="volume-bar" min="0" max="1" step="0.1" value="1">
            <button type="button" class="full-screen fas fa-expand" id="full-screen"><span hidden>boton pantalla completa</span></button>
          </div>
        </div>

        <script src="assets/js/script-video.js"></script>
      </div>
 
    </div>
  </div>
</div>


<?php include("includes/footer.php"); ?>
</body>
</html>