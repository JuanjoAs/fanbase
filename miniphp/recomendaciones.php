<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>


<main style="margin-top: 50px;">

<!--==========================
      Juegos
    ============================-->
    <section id="faq" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Juegos </h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-12">
              <ul id="faq-list">
                <li>
                  <a data-toggle="collapse" href="#juegos1" class="collapsed">League of Legends <i class="fa fa-minus-circle"></i></a>
                  <div id="juegos1" class="collapse" data-parent="#faq-list">
                    <div class="row">
                      <div class="col-lg-3">
                        <img src="img/kaynicon.jpg" style="width:170px;">
                      </div>
                      <div class="col-lg-6">
                        <p>
                          Juego multiplayer más popular de los últimos años. Pionero de los e-Sport. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore ea sit commodi. At nisi maiores quo doloribus aperiam quam nam fuga eaque a tempore excepturi nemo hic, quod voluptate. 
                        </p>
                      </div>
                      <div class="col-lg-3">
                        Botones
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#juegos2" class="collapsed">Cyberpunk 2077<i class="fa fa-minus-circle"></i></a>
                  <div id="juegos2" class="collapse" data-parent="#faq-list">
                    <p>
                      El juego AAA más esperado de la última década.
                    </p>
                  </div>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </section>

<!--==========================
      Series
    ============================-->
    <section id="faq" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Series y Películas </h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">
                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Pokemon La venganza de Mewtwo <i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                      Ash y su Pikachu nivel 200 contra un legendario.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Ataque a los Titanes<i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                      No puedes ver anime sin ver esta serie.
                    </p>
                  </div>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </section>
</main>

<?php include("includes/footer.php");?>

</body>
</html>