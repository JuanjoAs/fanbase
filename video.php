<?php require_once 'Model/Valoracion.php' ?>
<?php require_once 'Controller/ValoracionController.php' ?>
<?php require_once 'Controller/UsuarioController.php' ?>
<?php include("includes/a_config.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php include("includes/head-tag-contents.php");?>

</head>
<body>

<?php

if (!isset($_REQUEST["video"]) || $_REQUEST["video"] == "" ||
    !isset($_REQUEST["titulo"]) || $_REQUEST["titulo"] == ""){
    header("Location:trailers.php");
}


if (isset($_REQUEST["video"]) && $_REQUEST["video"] != "" &&
    isset($_REQUEST["estrellas"]) && $_REQUEST["estrellas"] != "" &&
    isset($_REQUEST["comentario"]) && $_REQUEST["comentario"] != ""){

    $valorar = new Valoracion(0, $_REQUEST["video"], $_SESSION["usuario"]->id, $_REQUEST["comentario"], $_REQUEST["estrellas"]);

    ValoracionController::insertValoracion($valorar);

    header("Location:video.php?titulo=".$_REQUEST["titulo"]."&video=".$_REQUEST["video"]);
}
?>


<?php include("includes/navbar.php");?>




<main>

    <section class="section-bg">

        <div class="container">

            <div class="row">
                <div class="col-12 text-center section-header">
                    <h2><?php  echo $_REQUEST["titulo"]; ?></h2>
                    
                </div>
            </div><!-- /row -->

            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $_REQUEST["video"]; ?>"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form method="post">
                                <input type="text" name="titulo" value="<?php if (isset($_REQUEST["titulo"])) echo $_REQUEST["titulo"];  ?>" hidden>
                                <input type="text" name="video" value="<?php if (isset($_REQUEST["video"])) echo $_REQUEST["video"]; ?>" hidden>

                                <div class="row p-3 ml-0 mr-0 mt-4 border">
                                    <!--Interior comentar-->
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="clasificacion">
                                                    <input id="radio1" type="radio" name="estrellas" value="5">
                                                    <label for="radio1" class="fas fa-star warning"></label>
                                                    <input id="radio2" type="radio" name="estrellas" value="4">
                                                    <label for="radio2" class="fas fa-star"></label>
                                                    <input id="radio3" type="radio" name="estrellas" value="3">
                                                    <label for="radio3" class="fas fa-star"></label>
                                                    <input id="radio4" type="radio" name="estrellas" value="2">
                                                    <label for="radio4" class="fas fa-star"></label>
                                                    <input id="radio5" type="radio" name="estrellas" checked value="1">
                                                    <label for="radio5" class="fas fa-star"></label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <form class="col-12">
                                                        <textarea class="form-control" name="comentario"></textarea>
                                                        <button type="submit" class="btn btn-success mt-2" >Comentar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <?php

                            $comentarios = ValoracionController::findAllfromVideoId($_REQUEST["video"]);

                            if ($comentarios != null){
                                foreach ($comentarios as $comentario){
                                    ?>
                                    <!--Incio comentario-->
                                    <div class="row p-3 ml-0 mr-0 mt-4 border">

                                        <!--Interior comentario-->
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-3 col-sm-2 col-md-2">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <img src="http://blog.aulaformativa.com/wp-content/uploads/2016/08/consideraciones-mejorar-primera-experiencia-de-usuario-aplicaciones-web-perfil-usuario.jpg" class="img-fluid" alt="Responsive image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 col-sm-10 col-md-10">
                                                    <div class="row">
                                                        <?php
                                                        echo UsuarioController::find($comentario->idusuario)->usuario;
                                                        ?>
                                                    </div>
                                                    <div class="row">
                                                        <?php
                                                        echo $comentario->comentario;
                                                        ?>
                                                    </div>
                                                    <div class="row justify-content-end">
                                                        <div class="col-5">
                                                            <ul>
                                                                <?php

                                                                $val = $comentario->valoracion;

                                                                    for ($i = 0; $i < 5; $i++){
                                                                        if ($i < $val){
                                                                            echo "<li class='fas text-warning fa-star'></li>";
                                                                        } else {
                                                                            echo "<li class='fas fa-star'></li>";
                                                                        }
                                                                    }
                                                                ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                ?>
                                <!--Incio comentario-->
                                <div class="row p-3 ml-0 mr-0 mt-4 border">

                                    <!--Interior comentario-->
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                </div>
                                                <div class="row">
                                                    No hay comentarios...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12">

                    <a href="video.php?titulo=Planet%20Zoo&video=TAvzq-HrSoQ">                
                        <div class="row mb-3 tarjeta-video border p-2 border p-2">
                            <div class="col-5">
                                <div class="row">
                                    <img src="assets/img/trailer/PlanetZoo.png" 
                                    class="img-fluid w-100" title="Tráiler Planet Zoo">
                                </div>
                            </div>
                            <div class="col-7">
                                <h5>Tráiler Planet Zoo</h5>
                            </div>
                        </div>
                    </a>    

                    <a href="video.php?titulo=Overwatch%202&video=uIfghi773WI">
                        <div class="row mb-3 tarjeta-video border p-2">
                            <div class="col-5">
                                <div class="row">
                                    <img src="assets/img/trailer/Primer tráiler gameplay de Overwatch 2 (PC, Mac, PS4, XOne).png"
                                        class="img-fluid w-100" title="Primer Tráiler Overwatch 2">
                                </div>
                            </div>
                            <div class="col-7">
                                <h5>Primer Tráiler Overwatch 2</h5>
                            </div>
                        </div>
                    </a>

                    <a href="video.php?titulo=Riverbond%20tráiler&video=iTf1K-8pL7E">    
                        <div class="row mb-3 tarjeta-video border p-2">
                            <div class="col-5">
                                <div class="row">
                                    <img src="assets/img/trailer/Riverbond fecha con un tráiler su lanzamiento en Nintendo Switch y presenta nuevo mundo (PC, PS.png"
                                        class="img-fluid w-100" title="Tráiler Riverbond">
                                </div>
                            </div>
                            <div class="col-7">
                                <h5>Tráiler Riverbond</h5>
                            </div>
                        </div>
                        </a>

                    <a href="video.php?titulo=Trailer%20Pokémon%20Espada%20y%20Escudo&video=_9HtaIi8Mhw">
                        <div class="row mb-3 tarjeta-video border p-2">
                            <div class="col-5">
                                <div class="row">
                                    <img src="assets/img/trailer/Todo lo que has de saber de Pokémon Espada y Pokémon.png"
                                    class="img-fluid w-100" title="Todo lo que has de saber de Pokemon">
                                </div>
                            </div>
                            <div class="col-7">
                                <h5>Todo lo que has de saber de Pokemon</h5>
                            </div>
                        </div>
                    </a>

                    <a href="video.php?titulo=Trailer%20Kickstarter%20de%20The%20Hive&video=LM2w1Tu0esk">
                        <div class="row mb-3 tarjeta-video border p-2">
                            <div class="col-5">
                                <div class="row">
                                    <img src="assets/img/trailer/TrailerKickstarterdeTheHive.png" 
                                    class="img-fluid w-100" title="Tráiler Kickstarted The Hive">
                                </div>
                            </div>
                            <div class="col-7">
                                <h5>Tráiler Kickstarted The Hive</h5>
                            </div>
                        </div>
                    </a>

                    <a href="video.php?titulo=Trailer%20Persona%205%20Scramble&video=Ik-Xl6V6AVM">
                        <div class="row mb-3 tarjeta-video border p-2">
                            <div class="col-5">
                                <div class="row">
                                    <img src="assets/img/trailer/TrailerPersona5Scramble.png" 
                                    class="img-fluid w-100" title="Tráiler Persona 5 Scramble">
                                </div>
                            </div>
                            <div class="col-7">
                                <h5>Tráiler Persona 5 Scramble</h5>
                            </div>
                        </div>
                    </a>

                    <a href="video.php?titulo=Tráiler%20cinemático%20de%20anuncio%20de%20Diablo&video=7RdDpqCmjb4">
                        <div class="row mb-3 tarjeta-video border p-2">
                            <div class="col-5">
                                <div class="row">
                                    <img src="assets/img/trailer/Tráiler cinemático de anuncio de Diablo.png" 
                                    class="img-fluid w-100" title="Tráiler Cinematográfico Diablo 4">
                                </div>
                            </div>
                            <div class="col-7">
                                <h5>Tráiler Cinematográfico Diablo 4</h5>
                            </div>
                        </div>
                    </a>

                    <a href="video.php?titulo=Tráiler%20cinemático%20de%20anuncio%20World%20of%20Warcraft%20Shadowlands&video=pU0uaUkYus8">
                        <div class="row mb-3 tarjeta-video border p-2">
                            <div class="col-5">
                                <div class="row">
                                    <img src="assets/img/trailer/Tráiler cinemático de anuncio World of Warcraft Shadowlands.png" 
                                    class="img-fluid w-100" title="Tráiler cinemático World of Warcraft Shadowlands">
                                </div>
                            </div>
                            <div class="col-7">
                                <h5>Tráiler cinemático World of Warcraft Shadowlands</h5>
                            </div>
                        </div>
                    </a>
                    <a href="video.php?titulo=Tráiler%20de%20anuncio%20de%20IGI%20Origins&video=UOh0VvNKXX0">
                        <div class="row mb-3 tarjeta-video border p-2">
                            <div class="col-5">
                                <div class="row">
                                    <img src="assets/img/trailer/Tráiler de anuncio de IGI Origins.png"
                                    class="img-fluid w-100" title="Trailer IGI Origins">
                                </div>
                            </div>
                            <div class="col-7">
                                <h5>Trailer IGI Origins</h5>
                            </div>
                        </div>
                    </a>
                    <a href="video.php?titulo=Tráiler%20de%20anuncio%20de%20Vaporum%20Lockdown&video=hQzQtslotnQ">                
                        <div class="row mb-3 tarjeta-video border p-2">
                            <div class="col-5">
                                <div class="row">
                                    <img src="assets/img/trailer/Tráiler de anuncio de Vaporum Lockdown, un dungeon crawler con estética steampunk.png" 
                                    class="img-fluid w-100" title="Tráiler de Vaporum Lockdown">
                                </div>
                            </div>
                            <div class="col-7">
                                <h5>Tráiler de Vaporum Lockdown</h5>
                            </div>
                        </div>
                    </a>
                    <a href="video.php?titulo=Tráiler%20de%20Soul%20Calibur%20VI%20que%20presenta%20a%20Hilde&video=XznU3L3uWD8">
                        <div class="row mb-3 tarjeta-video border p-2">
                            <div class="col-5">
                                <div class="row">
                                    <img src="assets/img/trailer/Tráiler de Soul Calibur VI que presenta a Hilde, su nueva luchadora.png" 
                                    class="img-fluid w-100" title="Tráiler de Soul Calibur VI que presenta a Hilde">
                                </div>
                            </div>
                            <div class="col-7">
                                <h5>Tráiler de Soul Calibur VI que presenta a Hilde</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
   
<?php include("includes/footer.php");?>

</body>
</html>