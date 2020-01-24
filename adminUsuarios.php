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

      if(isset($_REQUEST['delete'])) {
          if(!UsuarioController::delete($_REQUEST['delete'])) {
              $error = "Algo ha fallado al borrar el usuario";
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
      <div class="justify-content-center">
        <ul class="recomendaciones-list">
          <?php
          $usuarios = UsuarioController::findAll();
          ?>
          <?php
          foreach ($usuarios as $usuario) {
          ?>
            <li class="border">
              <div id="juegos">
                <div class="row">
                  <div class="col-lg-9">
                    <span class="mt-3"><?php echo $usuario->nombre; ?></span>
                  </div>
                  <div class="col-lg-3">
                    <form class="d-inline" method="POST" action="editUsuario.php"><button name="edit" class="btn btn-success m-2" value="<?php echo $usuario->id;?>">Editar</button></form>
                    <form class="d-inline" method="POST" action=""><button name="delete" class="btn btn-danger m-2" value="<?php echo $usuario->id;?>">Borrar</button></form>
                  </div>
                </div>
              </div>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>


    </section>

  </main>

  <?php include("includes/footer.php"); ?>
</body>

</html>