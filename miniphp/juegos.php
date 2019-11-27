<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
  <?php include("includes/head-tag-contents.php");?>
</head>

<body>

  <?php include("includes/design-top.php");?>
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
            <img src="assets/img/hotels/logo_pokemon.png" class="figure-img img-fluid"
              alt="A generic square placeholder image with rounded corners in a figure.">
          </div>
          <figcaption class="figure-caption px-3 py-1">
            <h3><a href="info_juego.php?juego=Pokemon">Pokemon</a></h3>
            <p class="text-primary">Lorem ipsum dolor sit amet consectetur.</p>
          </figcaption>
        </figure>
        <figure class="figure col-lg-4 col-md-6 border">
          <div class="figure-content-img">
            <img src="assets/img/hotels/logo_league_legends.png" class="figure-img img-fluid"
              alt="A generic square placeholder image with rounded corners in a figure.">
          </div>
          <figcaption class="figure-caption px-3 py-1">
            <h3><a href="info_juego.php?juego=League of Legends">League of Legends</a></h3>
            <p class="text-primary">Lorem ipsum dolor sit amet consectetur.</p>
          </figcaption>
        </figure>
        <figure class="figure col-lg-4 col-md-6 border">
          <div class="figure-content-img">
            <img src="assets/img/hotels/logo_witcher.png" class="figure-img img-fluid"
              alt="A generic square placeholder image with rounded corners in a figure.">
          </div>
          <figcaption class="figure-caption px-3 py-1">
            <h3><a href="info_juego.php?juego=The Witcher">The Witcher</a></h3>
            <p class="text-primary">Lorem ipsum dolor sit amet consectetur.</p>
          </figcaption>
        </figure>
        <figure class="figure col-lg-4 col-md-6 border">
          <div class="figure-content-img">
            <img src="assets/img/hotels/logo_zelda.png" class="figure-img img-fluid"
              alt="A generic square placeholder image with rounded corners in a figure.">
          </div>
          <figcaption class="figure-caption px-3 py-1">
            <h3><a href="info_juego.php?juego=The Legend of Zelda">The Legend of Zelda</a></h3>
            <p class="text-primary">Lorem ipsum dolor sit amet consectetur.</p>
          </figcaption>
        </figure>
        <figure class="figure col-lg-4 col-md-6 border">
          <div class="figure-content-img">
            <img src="assets/img/hotels/logo_final_fantasy_vii.png" class="figure-img img-fluid"
              alt="A generic square placeholder image with rounded corners in a figure.">
          </div>
          <figcaption class="figure-caption px-3 py-1">
            <h3><a href="info_juego.php?juego=Final Fantasy">Final Fantasy</a></h3>
            <p class="text-primary">Lorem ipsum dolor sit amet consectetur.</p>
          </figcaption>
        </figure>
        <figure class="figure col-lg-4 col-md-6 border">
          <div class="figure-content-img">
            <img src="assets/img/hotels/logo_grand_theft_auto.png" class="figure-img img-fluid"
              alt="A generic square placeholder image with rounded corners in a figure.">
          </div>
          <figcaption class="figure-caption px-3 py-1">
            <h3><a href="info_juego.php?juego=Grand Theft Auto">Grand Theft Auto</a></h3>
            <p class="text-primary">Lorem ipsum dolor sit amet consectetur.</p>
          </figcaption>
        </figure>
      </div>
    </section>
  </main>

  <?php include("includes/footer.php");?>

</body>
</html>