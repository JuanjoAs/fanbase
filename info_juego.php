<?php 
    $title_game = (isset($_REQUEST['juego'])) ? $_REQUEST['juego'] : "error";
    $description_game = "";
    $slider_game = array();

    switch($title_game) {
        case "Pokemon":
            $description_game = "Pokémon es una franquicia de videojuegos que comenzó 
            siendo de tipo RPG para las consolas de Nintendo creada por Satoshi Tajiri 
            en 1995. Su éxito fue tal que abarcó otros géneros de videojuegos y campos 
            del entretenimiento tales como una serie de anime, manga y una gran variedad 
            de artículos de colección, como cartas del TCG, muñecos, etc.";
            $slider_game = array(
                0 => "assets/img/juegos/pokemon/slider1.png",
                1 => "assets/img/juegos/pokemon/slider2.png",
                2 => "assets/img/juegos/pokemon/slider3.png",
            );
            break;
        case "League of Legends":
            $description_game = "League of Legends (también conocido por sus siglas LoL) es 
            un videojuego del género multijugador de arena de batalla en línea (MOBA) y deporte 
            electrónico el cual fue desarrollado por Riot Games";
            $slider_game = array(
                0 => "assets/img/juegos/lol/slider1.png",
                1 => "assets/img/juegos/lol/slider2.png",
                2 => "assets/img/juegos/lol/slider3.png",
            );
            break;
        case "The Witcher":
            $description_game = "Videojuego basado en la saga de libros del mismo nombre escritos 
            por el autor polaco Andrzej Sapkowski. The Witcher tiene lugar en un mundo fantástico 
            medieval y relata la historia de Geralt de Rivia, uno de los pocos brujos restantes 
            (cazadores de monstruos a sueldo, quienes cuentan con poderes sobrenaturales).";
            $slider_game = array(
                0 => "assets/img/juegos/witcher/slider1.png",
                1 => "assets/img/juegos/witcher/slider2.png",
                2 => "assets/img/juegos/witcher/slider3.png",
            );
            break;
        case "The Legend of Zelda":
            echo $description_game = "The Legend of Zelda es una serie de videojuegos de acción-aventura desarrollada 
            por Nintendo. Su trama por lo general describe las heroicas aventuras del joven guerrero 
            Link, que debe enfrentarse a peligros y resolver acertijos para ayudar a la Princesa Zelda 
            a derrotar a Ganon y salvar su hogar, el reino de Hyrule.";
            $slider_game = array(
                0 => "assets/img/juegos/zelda/slider1.png",
                1 => "assets/img/juegos/zelda/slider2.png",
                2 => "assets/img/juegos/zelda/slider3.png",
            );
            break;
        case "Final Fantasy":
            $description_game = "Final Fantasy es una franquicia de medios creada por Hironobu Sakaguchi y 
            desarrollada por Square Enix (antes conocida como Squaresoft). La franquicia se centra en una 
            serie fantástica y ciencia fantástica de videojuegos RPG.";
            $slider_game = array(
                0 => "assets/img/juegos/ff/slider1.png",
                1 => "assets/img/juegos/ff/slider2.png",
                2 => "assets/img/juegos/ff/slider3.png",
            );
            break;
        case "Grand Theft Auto":
            $description_game = "Grand Theft Auto (GTA) es una serie de videojuegos creada por David 
            Jones y luego por Sam Houser y Dan Houser. Originalmente fue desarrollada por DMA Design, 
            que posteriormente pasó a llamarse Rockstar North, de la empresa Rockstar Games. Grand Theft 
            Auto cuenta la historia de distintos criminales y aunque sean varios, por una razón se van 
            relacionando y envolviendo en problemas a más personajes conforme va pasando el tiempo.";
            $slider_game = array(
                0 => "assets/img/juegos/gta/slider1.png",
                1 => "assets/img/juegos/gta/slider2.png",
                2 => "assets/img/juegos/gta/slider3.png",
            );
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
                        <img src="<?php echo $slider_game[0]; ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $slider_game[1]; ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $slider_game[2]; ?>" class="d-block w-100" alt="...">
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