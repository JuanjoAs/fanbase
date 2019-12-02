<?php 
    $title_game = (isset($_REQUEST['juego'])) ? $_REQUEST['juego'] : "error";
    $description_game = "";

    switch($title_game) {
        case "Pokemon":
            $description_game = "Descripción pokemon";
            break;
        case "League of Legends":
            $description_game = "Descripción League of Legends";
            break;
        case "The Witcher":
            $description_game = "Descripción The Whitcher";
            break;
        case "The Legend of Zelda":
            echo "Descripción Legend of Zelda";
            break;
        case "Final Fantasy":
            $description_game = "Descripción Final Fantasy";
            break;
        case "Grand Theft Auto":
            $description_game = "Descripción GTA";
            break;
        default: 
            $description_game = "Juego no reconocido";
    }


?>

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
            <h2><?php echo $title_game; ?></h2>
            <p class="text-secondary"><?php echo $description_game; ?>
            </p>
        </div>
        <?php if(isset($_REQUEST['juego'])) { ?>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/007.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption bg-secondary d-none d-md-block">
                            <h5 class="text-primary">First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/008.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption bg-secondary d-none d-md-block">
                            <h5 class="text-primary">First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/009.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption bg-secondary d-none d-md-block">
                            <h5 class="text-primary">First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-secondary" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row mb-3 justify-content-around">
                <div class="col-lg-3 col-md-6">
                    <div class="card ">
                        <img class="card-img-top" src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/007.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card ">
                        <img class="card-img-top" src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/008.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card ">
                        <img class="card-img-top" src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/009.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </section>
  </main>

  <?php include("includes/footer.php");?>

</body>

</html>