<?php
include("includes/a_config.php");
require_once 'Model/Usuario.php';
require_once 'Controller/UsuarioController.php';
$PAGE_TITLE = "FanBase - Administrar Usuarios";
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

      if(isset($_REQUEST['disable'])) {
          if(!UsuarioController::disable($_REQUEST['disable'])) {
              $error = "Algo ha fallado al desactivar el usuario";
          }
      }

      if(isset($_REQUEST['enable'])) {
        if(!UsuarioController::enable($_REQUEST['enable'])) {
            $error = "Algo ha fallado al activar el usuario";
        }
      }
  ?>
</head>

<body>

  <?php include("includes/navbar.php"); 
  ?>

  <main class="container">

    <!--==========================
      Backend usuarios
    ============================-->
    <section class="wow fadeInUp recomendaciones">
      <div class="section-header">
        <h2>Administrar Usuarios</h2>
      </div>
      <?php if(isset($_REQUEST['edit'])) { ?>
        <div class="row justify-content-center">
        <div class="col-5">
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        </div>
      <?php } ?>
      <div class="justify-content-center">
        <ul class="recomendaciones-list">
          <?php
          $usuarios = UsuarioController::findAll();
          ?>
          <?php
          foreach ($usuarios as $usuario) {
            if($usuario->usuario != $_SESSION['usuario']->usuario) {
          ?>
            <li class="border <?php if($usuario->activo == 0) echo 'bg-dark'; ?>">
              <div id="juegos">
                <div class="row">
                  <div class="col-lg-9">
                    <span class="mt-3"><?php echo $usuario->nombre; ?></span>
                  </div>
                  <div class="col-lg-3">
                    <form class="d-inline" method="POST" action=""><button name="edit" class="btn btn-success m-2" value="<?php echo $usuario->id;?>">Editar</button></form>
                    <?php if($usuario->activo == 1) { ?>
                      <form class="d-inline" method="POST" action=""><button name="disable" class="btn btn-danger m-2" value="<?php echo $usuario->id;?>">Desactivar</button></form>
                    <?php } else { ?>
                      <form class="d-inline" method="POST" action=""><button name="enable" class="btn btn-primary m-2" value="<?php echo $usuario->id;?>">Activar</button></form>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </li>
          <?php
            }
          }
          ?>
        </ul>
      </div>

      


    </section>

  </main>

  <?php include("includes/footer.php"); ?>
</body>

</html>