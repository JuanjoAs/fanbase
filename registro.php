<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
  <?php include("includes/navbar.php"); ?>
  <main class="container">
    <section class="registro section-bg wow fadeInUp pt-5 mt-5 mb-5 align-items-center">
      <div class="row justify-content-left align-content-center">
        <div class="form col-md-6">
          <h2> ¡BIENVENIDOS A FANBASE!</h2>
          <form action="sesionUsuario.php" method="post" class="" role="form" class="registro form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input required type="text" name="name" class="form-control" id="name" placeholder="Nombre" minlength="3" pattern="[a-zA-Z ]{3,254}" data-msg="Introduce al menos 4 letras" />

              </div>
              <div class="form-group col-md-6">
                <input required type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario" minlength="3" data-msg="Introduce al menos 4 letras" />

              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <input required type="mail" name="mail" class="form-control" id="mail" placeholder="Correo electrónico" minlength="5" title="3 characters minimum" data-msg="Introduce un mail valido" />

              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <input required type="mail" name="mail" class="form-control" id="mail" placeholder="Vuelva a introducir tu correo electrónico" minlength="5" data-msg="Introduce un mail valido" />
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-md-6 input-group">
                <input required type="password" name="password" class="form-control" id="password" placeholder="Contraseña" minlength="5" data-msg="Introduce al menos 4 letras" />
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <div id="ojoPocho" class="input-group-addon"><a><i id="iOjoPocho" class="fas fa-eye-slash"></i></a></div>
                    
                  </span>
                </div>
              </div>


              <div class="form-group col-md-6 input-group">

                <input required type="password" name="password-copy" class="form-control" id="password-copy" placeholder="Vuelva a introducir tu contraseña" minlength="5" data-msg="Introduce al menos 4 letras" />
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2">
                    <div id="ojoPochoCopia" class="input-group-addon"><a><i class="fas fa-eye-slash"></i></a></div>
                    
                  </span>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div id="errorPs" class="form-group col-md-12 text-center d-none text-danger">
                <div class="validation">
                  <p>Las contraseñas no coinciden entre si</p>
                </div>
              </div>
            </div>
              <div class="mb-3">
                <div class="row">

                    <div class="col-3">

                        <?php

                        include("assets/Composer/captcha.php");
                        $_SESSION['captcha'] = simple_php_captcha();
                        echo '<img class="card-img-top" src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';

                        ?>
                    </div>
                    <div class="col-9">

                        <input class="mt-1" class="form-control w-100" type="text" name="captcha">

                    </div>
                </div>
              </div>
            <div class="text-center"><button type="submit" id="btnRegistro" name="registro">Registrarse</button></div>
          </form>
        </div>
        <div class="col-md-6 ">
          <div class="row">
            <div class="form col-md-12">
              <h4> ¿Que tiene fanbase que no tienen los demas?
            </div>
            <div class="col-md-2 text-center d-inline-block"><i class="fas fa-star-half-alt fa-4x text-secondary"></i></div>
            <div class="col-md-10 ">
              <h5 class="mt-3">¡Valora tus juegos favoritos!</h5>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-2 text-center d-inline-block"><i class="fas fa-comments fa-4x text-primary"></i></div>
            <div class="col-md-10 ">
              <h5 class="mt-3">¡Comenta tus videos favoritos de tus juegos FAVORITOS!</h5>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-2 text-center d-inline-block"><i class="fas fa-users fa-4x text-secondary"></i></i></div>
            <div class="col-md-10 ">
              <h5 class="mt-3">¡COMPARTE EL AMOR POR TODO CON LAS DEMAS PERSONAS!</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script>
    $("#ojoPocho").mousedown(function (e) { 
      $("#iOjoPocho").removeClass("fa-eye-slash");
      $("#iOjoPocho").addClass("fa-eye");
      $("#password").attr("type", "text");
    });
    $("#ojoPocho").mouseup(function () { 
      
      $("#iOjoPocho").removeClass("fa-eye");
      $("#iOjoPocho").addClass("fa-eye-slash");
      $("#password").attr("type", "password");
    });
    $("#ojoPochoCopia").mousedown(function (e) { 
      $("#iOjoPocho").removeClass("fa-eye-slash");
      $("#iOjoPocho").addClass("fa-eye");
      $("#password").attr("type", "text");
    });
    $("#ojoPochoCopia").mouseup(function () { 
      
      $("#iOjoPochoCopia").removeClass("fa-eye");
      $("#iOjoPochoCopia").addClass("fa-eye-slash");
      $("#password-copy").attr("type", "password");
    });
    $("#password-copy").keyup(function(e) {
      e.preventDefault();
      let clave1 = $("#password-copy").val();
      let clave2 = $("#password").val();
      if (clave1 == clave2) {
        $("#errorPs").addClass("d-none");
        $("#errorPs").removeClass("d-block");
        $("#btnRegistro").attr("enabled", "enabled");
        $("#btnRegistro").removeAttr("disabled");
      } else {
        $("#errorPs").removeClass("d-none");
        $("#errorPs").addClass("d-block");
        $("#btnRegistro").attr("disabled", "disabled");
        $("#btnRegistro").removeAttr("enabled");

      }

    });
    $("#password-copy").keyup(function(e) {
      e.preventDefault();
      let clave1 = $("#password-copy").val();
      let clave2 = $("#password").val();
      if (clave1 == clave2) {
        $("#errorPs").addClass("d-none");
        $("#errorPs").removeClass("d-block");
        $("#btnRegistro").attr("enabled", "enabled");
        $("#btnRegistro").removeAttr("disabled");
      } else {
        $("#errorPs").removeClass("d-none");
        $("#errorPs").addClass("d-block");
        $("#btnRegistro").attr("disabled", "disabled");
        $("#btnRegistro").removeAttr("enabled");

      }

    });
  </script>
  <?php include("includes/footer.php"); ?>
</body>

</html>