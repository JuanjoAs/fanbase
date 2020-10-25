<!--==========================
    HEADER
============================-->

<header class="navbar navbar-expand-lg bg-secondary fixed-top">
  <a class="navbar-brand" href="/fanbase/index">
    <img src="/fanbase/assets/img/logo.png" alt="Logo Fanbase">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"> <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
    </span>
  </button>

  <nav class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-3 mr-auto">
      <li class="nav-item <?php if ($CURRENT_PAGE == "Inicio") {
                            echo "active";
                          } ?>">
        <a class="nav-link" href="/fanbase/index">Inicio <span class="sr-only"></span></a>
      </li>
      <li class="nav-item <?php if ($CURRENT_PAGE == "Juegos" || $CURRENT_PAGE == "Informacion Juego") {
                            echo "active";
                          } ?>">
        <a class="nav-link" href="/fanbase/juegos">Juegos</a>
      </li>
      <li class="nav-item <?php if ($CURRENT_PAGE == "Trailer" || $CURRENT_PAGE == "Video") {
                            echo "active";
                          } ?>">
        <a class="nav-link" href="/fanbase/trailers">Tráilers</a>
      </li>
      <li class="nav-item dropdown <?php if ($CURRENT_PAGE == "Zona interactiva") {
                                      echo "active";
                                    } ?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Zona Interactiva
        </a>
        <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/fanbase/pkmclicker">Pokemon Clicker</a>
          <a class="dropdown-item" href="/fanbase/findTreasure">Busca el tesoro</a>
          <a class="dropdown-item" href="/fanbase/flappybird">Flappy Bird</a>
          <a class="dropdown-item" href="/fanbase/pkmonrun">Pokemon Run</a>
        </div>
      </li>
      <li class="nav-item <?php if ($CURRENT_PAGE == "Recomendaciones") {
                            echo "active";
                          } ?>">
        <a class="nav-link" href="/fanbase/recomendaciones">Recomendaciones</a>
      </li>
      <li class="nav-item dropdown <?php if ($CURRENT_PAGE == "Nosotros" || $CURRENT_PAGE == "Contactar" || $CURRENT_PAGE == "Terminos Legales") {
                                      echo "active";
                                    } ?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contacto
        </a>
        <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/fanbase/nosotros">Sobre nosotros</a>
          <a class="dropdown-item" href="/fanbase/contactar">Contactanos</a>
          <a class="dropdown-item" href="/fanbase/terminoslegales">Terminos Legales</a>
        </div>
      </li>
      <?php

      ?>
    </ul>
    <?php
    if (isset($_SESSION['usuario'])) {
      include_once $_SERVER['DOCUMENT_ROOT'] . '/fanbase/Controller/UsuarioController.php';
    ?>

      <ul class="navbar-nav mr-5">
        <li class="nav-item dropdown <?php if ($CURRENT_PAGE == "Nosotros" || $CURRENT_PAGE == "Contactar" || $CURRENT_PAGE == "Terminos Legales") {
                                        echo "active";
                                      } ?>">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo ucfirst($_SESSION['usuario']->usuario); ?> <img alt="Imagen Usuario" src="<?php ($_SESSION['usuario']->imagen == "") ? print "/fanbase/assets/img/logoPerfil.png" : print $_SESSION['usuario']->imagen; ?>" height="32px">
          </a>
          <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/fanbase/perfil">Mi perfil</a>
            <?php if ($_SESSION['usuario']->rango == 'admin') {
              echo "<a class='dropdown-item' href='/fanbase/adminUsuarios'>ADM Usuarios</a>";
            }
            ?>
            <?php if ($_SESSION['usuario']->rango == 'admin' || $_SESSION['usuario']->rango == 'editor') {
              echo "<a class='dropdown-item' href='/fanbase/fb-admin/panelrecomendaciones'>ADM Recomendaciones</a>";
            }
            ?>
            <a class="dropdown-item" href="/fanbase/logoff">Cerrar sesión</a>
          </div>
        </li>
      </ul>
    <?php
    } else {
    ?>
      <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginForm">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Iniciar sesión</button></a>
    <?php
    }
    ?>
  </nav>
  <!-- Errores Login -->
  <!-- Error contraseña incorrecta -->
  <?php if (isset($_SESSION['errorContraseña'])) {
  ?>
    <script>
      Swal.fire({
        title: 'Error!',
        text: '<?php echo $_SESSION['errorContraseña'] ?>',
        icon: 'error',
        confirmButtonText: 'Continuar'
      })
    </script>
  <?php
    unset($_SESSION['errorContraseña']);
  } ?>
  <!-- Error Usuario existe -->
  <?php if (isset($_SESSION['errorUsuarioExiste'])) {
  ?>
    <script>
      Swal.fire({
        title: 'Error!',
        text: '<?php echo $_SESSION['errorUsuarioExiste'] ?>',
        icon: 'error',
        confirmButtonText: 'Continuar'
      })
    </script>
  <?php
    unset($_SESSION['errorUsuarioExiste']);
  } ?>
  <!-- Error usuario no activo -->
  <?php if (isset($_SESSION['errorActivo'])) {
  ?>
    <script>
      Swal.fire({
        title: 'Error!',
        text: '<?php echo $_SESSION['errorActivo'] ?>',
        icon: 'error',
        confirmButtonText: 'Continuar',
        footer: '<a href="">¿Qué ha pasado?</a>'
      })
    </script>
  <?php
    unset($_SESSION['errorActivo']);
  } ?>

</header>