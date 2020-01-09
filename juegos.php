<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("includes/head-tag-contents.php");?>
</head>

<body>
  <?php include("includes/navbar.php");?>

  <div class="decorator-section"></div>

  <main class="container">
    <section class="wow fadeInUp mt-5">
      <div class="section-header mb-5 text-center mt-5 pt-5">
        <h2>Juegos</h2>
        <p class="text-secondary">Titulos que tienen cabida en el corazón de cualquier fan</p>
      </div>
      <div class="row">
        <figure class="figure col-lg-4 col-md-6 border">
          <div class="figure-content-img">
            <img src="assets/img/juegos/logo_pokemon.png" class="figure-img img-fluid"
              alt="Pokemon">
          </div>
          <figcaption class="figure-caption px-3 py-1">
            <h3><a href="info_juego.php?juego=Pokemon">Pokemon</a></h3>
            <p class="text-primary">Conviertete en un experto pokemon.</p>
          </figcaption>
        </figure>
        <figure class="figure col-lg-4 col-md-6 border">
          <div class="figure-content-img">
            <img src="assets/img/juegos/logo_league_legends.png" class="figure-img img-fluid"
              alt="League of Legends">
          </div>
          <figcaption class="figure-caption px-3 py-1">
            <h3><a href="info_juego.php?juego=League of Legends">League of Legends</a></h3>
            <p class="text-primary">El MOBA más popular.</p>
          </figcaption>
        </figure>
        <figure class="figure col-lg-4 col-md-6 border">
          <div class="figure-content-img">
            <img src="assets/img/juegos/logo_witcher.png" class="figure-img img-fluid"
              alt="The Witcher">
          </div>
          <figcaption class="figure-caption px-3 py-1">
            <h3><a href="info_juego.php?juego=The Witcher">The Witcher</a></h3>
            <p class="text-primary">Ponte en la piel del brujo.</p>
          </figcaption>
        </figure>
      </div>
    </section>
  </main>

  <?php include("includes/footer.php");?>

</body>
</html>