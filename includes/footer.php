<footer class="footer bg-secondary text-white p-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-6">
        <img src="assets/img/logo.png" class="logo" alt="Logo Fanbase">
        <p>
          Donde se informan los fans de verdad
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4 class="text-white border-bottom border-primary pb-2">Enlaces de utilidad</h4>
        <ul>
          <li><i class="fas fa-angle-right"></i> <a href="index.php">Inicio</a></li>
          <li><i class="fas fa-angle-right"></i> <a href="juegos.php">Juegos</a></li>
          <li><i class="fas fa-angle-right"></i> <a href="trailers.php">Tráilers</a></li>
          <li><i class="fas fa-angle-right"></i> <a href="#">Zona Interactiva</a></li>
          <li><i class="fas fa-angle-right"></i> <a href="recomendaciones.php">Recomendaciones</a></li>
          <li>
            <ul>
              <li><i class="fas fa-angle-right"></i> <a href="nosotros.php">Sobre Nosotros</a></li>
              <li><i class="fas fa-angle-right"></i> <a href="contactar.php">Contáctanos</a></li>
            </ul>
          </li>

          <li><i class="fas fa-angle-right"></i> <a href="registro.php">Regístrate</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6">
        <h4 class="text-white border-bottom border-primary pb-2">¿Hablamos?</h4>
        <p>
          Córdoba<br>
          Andalucía<br>
          España<br>
          <strong>Teléfono:</strong> +34 689 488 855<br>
          <strong>Email:</strong> info@fanbase.com<br>
        </p>
      </div>
      <div class="col-lg-3 col-md-6 social-links">
        <h4 class="text-white border-bottom border-primary pb-2">Redes Sociales</h4>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </div>
</footer>
<div class="text-center text-white credits p-3">
  Created by <a href="./nosotros.php">Grupo FanBase</a>
  <div class="credits">
    <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form.
        -->
    Some assets taken from <a href="https://bootstrapmade.com/">BootstrapMade</a>.
  </div>
</div>

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Iniciar Sesión</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="sesionUsuario.php" method="POST">
        <div class="modal-body mx-3">
          <div class="md-form mb-5 row">
            <div class="col-1">
              <i class="fas fa-envelope fa-2x prefix grey-text"></i>

            </div>
            <div class="col-11">
              <input name="mail" type="email" id="defaultForm-email" class="form-control validate" placeholder="Introduce tu correo">
              <label class="d-none" data-error="wrong" data-success="right" for="defaultForm-email"></label>
            </div>
          </div>
          <div class="md-form  row">
            <div class="col-1">
              <i class="fas fa-lock fa-2x prefix grey-text"></i>
            </div>
            <div class="col-11">
              <input name="password" type="password" id="defaultForm-pass" class="form-control validate" placeholder="Introduce tu contraseña">
              <label data-error="wrong" data-success="right" for="defaultForm-pass"></label>
            </div>
          </div>

        </div>
        <div class="modal-footer d-block">
          <div class="options mt-1 row" style="margin-bottom:-20px;">
            <div class="col-8">
              <p>¿Aún no te has registrado? <a href="registro.php" class="text-primary blue-text d-block">¡Regístrate!</a></p>
            </div>
            <div class="col-xs-12 col-lg-4">

              <?php

              //requerimientos para funcionar google
              require_once 'assets/Composer/vendor/autoload.php';

              // Configuracion del cliente de google
              $clientID = '839427167234-tcs6jo32qrvoal8vhcbiqnf6iati1eh5.apps.googleusercontent.com';
              $clientSecret = 'FDO7u7RpvTG_hVDPUN5J0Lxa';
              $redirectUri = 'http://' . $_SERVER['HTTP_HOST'] . '/fanbase/sesionUsuario.php';

              // creando el cliente con los datos necesarios
              $client = new Google_Client();
              $client->setClientId($clientID);
              $client->setClientSecret($clientSecret);
              $client->setRedirectUri($redirectUri);
              $client->addScope("email");
              $client->addScope("profile");

              ?>
              <p>
                <button class="btn btn-success btn-block" name="inicioSesion"><img style="width:25px; margin-left:-5px;" src="favicon.ico"> Iniciar sesión</button>
                <a class="btn btn-success btn-block" href="<?php echo $client->createAuthUrl(); ?>"><i class="text-danger fab fa-google"></i> Usar Google</a>
              </p>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


 <script>
    $(document).ready(function() {
      $('#popRecomendaciones').modal('show');
    });
  </script>
<?php include("includes/scripts.php"); ?>