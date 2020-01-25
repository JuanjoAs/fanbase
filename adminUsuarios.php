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

      if(isset($_REQUEST['save'])) {
        $u1 = new Usuario(
          $_REQUEST['usuario'],
          $_REQUEST['nombre'],
          $_REQUEST['email'],
          "",
          $_REQUEST['rango'],
          $_REQUEST['texto'],
          1
        );
        $u1->id = $_REQUEST['id'];
        if(!UsuarioController::update($u1)) {
            $error = "<h1 class='mt-5'>Algo ha fallado al actualizar el usuario</h1>";
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
      <?php if(isset($_REQUEST['edit'])) { 
        $u = UsuarioController::find($_REQUEST['edit']);
      ?>
        <div class="row justify-content-center mb-1">
        <div class="col-5">
        <form action="" method="POST">
            <div class="form-group">
              <label for="usuario">Nombre de usuario</label>
              <input type="text" class="form-control" name="usuario" id="usuario" 
              value="<?php echo $u->usuario; ?>"
              required>
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" 
              value="<?php echo $u->nombre; ?>"
              required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" 
              value="<?php echo $u->email; ?>"
              required>
            </div>
            <div class="form-group">
              <label for="rango">Rango</label>
              <select class="form-control" name="rango" id="rango">
                <option value="user" <?php if($u->rango == "user") echo "selected"; ?>>Soldado raso</option>
                <option value="editor" <?php if($u->rango == "editor") echo "selected"; ?>>Teniente</option>
                <option value="admin" <?php if($u->rango == "admin") echo "selected"; ?>>General</option>
              </select>
            </div>
            <div class="form-group">
              <label for="texto">Descripción</label>
              <textarea name="texto" id="texto" cols="30" rows="5" class="form-control"
              ><?php echo $u->texto; ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $_REQUEST['edit']; ?>">
            <button type="submit" name="save" class="btn btn-primary btn-block">Guardar</button>
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