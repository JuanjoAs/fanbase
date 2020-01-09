<!--==========================
    HEADER
============================-->
<header class="navbar navbar-expand-lg bg-secondary fixed-top">
  <a class="navbar-brand" href="index.php">
    <img src="assets/img/logo.png" alt="Logo Fanbase">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">    <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
</span>
  </button>

  <nav class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-3 mr-auto">
      <li class="nav-item <?php if ($CURRENT_PAGE == "Inicio"){echo "active";} ?>">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only"></span></a>
      </li>
      <li class="nav-item <?php if ($CURRENT_PAGE == "Juegos" || $CURRENT_PAGE == "Informacion Juego"){echo "active";} ?>">
       <a class="nav-link" href="juegos.php">Juegos</a>
      </li>
      <li class="nav-item <?php if ($CURRENT_PAGE == "Trailer" || $CURRENT_PAGE == "Video"){echo "active";} ?>">
        <a class="nav-link" href="trailers.php">Tráilers</a>
      </li>
      <li class="nav-item dropdown <?php if ($CURRENT_PAGE == "Zona interactiva"){echo "active";} ?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Zona Interactiva
        </a>
        <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="pkmclicker.php">Pokemon Clicker</a>
          <a class="dropdown-item" href="findTreasure.php">Busca el tesoro</a>
        </div>
      </li>
      <li class="nav-item <?php if ($CURRENT_PAGE == "Recomendaciones"){echo "active";} ?>">
        <a class="nav-link" href="recomendaciones.php">Recomendaciones</a>
      </li>
      <li class="nav-item dropdown <?php if ($CURRENT_PAGE == "Nosotros" || $CURRENT_PAGE == "Contactar" || $CURRENT_PAGE == "Terminos Legales"){echo "active";} ?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contacto
        </a>
        <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="nosotros.php">Sobre nosotros</a>
          <a class="dropdown-item" href="contactar.php">Contactanos</a>
          <a class="dropdown-item" href="terminoslegales.php">Terminos Legales</a>
        </div>
      </li>
    </ul>
    <form action="registro.php" class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Iniciar sesión</button>
    </form>
  </nav>
</header>