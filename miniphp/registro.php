<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <?php include("includes/head-tag-contents.php"); ?>
  <style>
    hr {
      border: 0;
      height: 1px;
      background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    }
  </style>
</head>

<body>

  <?php include("includes/design-top.php"); ?>
  <?php include("includes/navigation.php"); ?>

  <main style="border:4px" class="container">
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp mt-5 ml-5">
      <div class="row">
        <div class="form col-md-12">
          <p> ¡BIENBENIDOS A FANBASE!
        </div>
      </div>
      <div class="row justify-content-left align-content-center">
        <div class="form col-md-6">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" class="" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Introduce al menos 4 letras" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="password" class="form-control" name="email" id="email" placeholder="Contraseña" data-rule="email" data-msg="Introduce un correo valido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Introduce al menos 4 letras" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Introduce un correo valido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
          </form>
        </div>

        <div class="col-md-6">

          <div class="row">
            <div class="col-md-2"><img src="img/register/arcoiris.png" class="img-fluid" ></div>
            <div class="col-md-10 ">
              <h3 class="mt-3">¡Valora tus juegos favoritos!</h3>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-2"><img src="img/register/arcoiris.png" class="img-fluid" ></div>
            <div class="col-md-10 ">
              <h3 class="mt-3">¡Comenta tus videos favoritos de tus juegos FAVORITOS!</h3>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-2"><img src="img/register/arcoiris.png" class="img-fluid" ></div>
            <div class="col-md-10 ">
              <h3 class="mt-3">¡COMPARTE EL AMOR POR TODO CON LAS DEMAS PERSONAS!</h3>
            </div>
          </div>
          

        </div>
      </div>
    </section>

  </main>
  </div>

  <?php include("includes/footer.php"); ?>

</body>

</html>