<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

  <?php include("includes/navbar.php"); ?>

  <main class="container">

    <section class="contacto section-bg wow fadeInUp">

      <div class="section-header mt-5">
        <h2>contacto</h2>
        <p>Contacta con nuestro equipo de soporte</p>
      </div>

          <div class="row justify-content-center">
            <div class="form col-md-8">
              <form action="" method="post" role="form" class="contactoForm">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Introduce tu nombre:</label>
                    <input type="text" name="name" class="form-control" required pattern="[a-zA-Z ]{3,254}" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Introduce al menos 4 letras" value="<?php (isset($_SESSION['usuario']))?print $_SESSION['usuario']->nombre.'" disabled="':print '';?>">

                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Introduce tu email:</label>
                    <input type="email" class="form-control" name="email" required id="email" placeholder="Correo" data-rule="email" data-msg="Introduce un correo valido" value="<?php (isset($_SESSION['usuario']))?print $_SESSION['usuario']->email.'" disabled="':print '';?>">

                  </div>
                </div>
                <div class="form-group">
                  <label for="asunto">Introduce el asunto de tu mensaje:</label>
                  <input type="text" class="form-control" name="asunto" required id="asunto" placeholder="Asunto" data-rule="minlen:4" data-msg="Introduce al menos 4 letras" />
                </div>
                <div class="form-group">
                  <label for="mensaje">Introduce tu mensaje:</label>
                  <textarea class="form-control" name="mensaje" id="mensaje" required rows="5" data-rule="required" data-msg="Introduce su mensaje" placeholder="Mensaje"></textarea>
                </div>
                <div class="text-center mb-3"><button type="submit">Enviar Mensaje</button></div>
              </form>
            </div>
            <div class="col-xs-12"> 
              <div class="info card">
                <img src="assets/img/contacto/fotoGrupal.jpg" alt="Foto grupal" class="card-img-top h-100">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h5>Email</h5>
                    <a href="mailto:info@example.com">fanbase@support.com</a>
                  </li>
                  <li class="list-group-item">
                    <h5>Address</h5>
                    <address>Calle Juego de Pelota, 54, 14900 Lucena, Córdoba</address>
                  </li>
                </ul>

              </div>
            </div>
          </div>

    </section>

  </main>


  <?php include("includes/footer.php"); ?>
</body>

</html>