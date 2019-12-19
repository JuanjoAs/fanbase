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
        <?php if(isset($_REQUEST['juego'])) {  ?>
            <div id="carouselExampleControls" class="carousel slide d-none d-lg-block" data-ride="carousel">
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

            <?php 
                if($_REQUEST['juego'] == 'Pokemon') {
                    include_once 'includes/pokemon.php';
                } else if($_REQUEST['juego'] == 'League of Legends') {
                    include_once 'includes/lol.php';
                } else if($_REQUEST['juego'] == 'The Witcher') {
                    include_once 'includes/witcher.php';
                }
            ?>

        <?php } ?>
    </section>
  </main>

  <?php include("includes/footer.php");?>

</body>

</html>