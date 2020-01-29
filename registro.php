<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
  <?php include("includes/navbar.php"); ?>
  <main class="container">
    <section class="registro section-bg wow fadeInUp pt-5 mt-5 align-items-center">
      <div class="row justify-content-left align-content-center">
        <div class="form col-md-6">
          <h2> ¡BIENVENIDOS A FANBASE!</h2>
          <form action="sesionUsuario.php" method="post" class="" role="form" class="registro form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input required type="text" name="name" class="form-control" id="name" placeholder="Nombre" minlength="5"  pattern="[a-zA-Z ]{5,254}" data-msg="Introduce al menos 4 letras" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input required type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario" minlength="5" data-msg="Introduce al menos 4 letras" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <input required type="mail" name="mail" class="form-control" id="mail" placeholder="Correo electrónico" minlength="5" title="3 characters minimum" data-msg="Introduce un mail valido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <input required type="mail" name="mail" class="form-control" id="mail" placeholder="Vuelva a introducir tu correo electrónico" minlength="5" data-msg="Introduce un mail valido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input required type="password" name="password" class="form-control" id="password" placeholder="Contraseña" minlength="5" data-msg="Introduce al menos 4 letras" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input required type="password" name="password" class="form-control" id="password" placeholder="Vuelva a introducir tu contraseña" minlength="5" data-msg="Introduce al menos 4 letras" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="text-center"><button type="submit" name="registro">Registrarse</button></div>
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

  <?php include("includes/footer.php"); ?>
</body>

</html>