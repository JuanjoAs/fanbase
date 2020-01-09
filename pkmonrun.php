<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php");?>
</head>

<body>

    <?php include("includes/design-top.php");?>
    <?php include("includes/navbar.php");?>
    <main class="">
        <section class="section-bg wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Pokemon Run</h2>
                </div>
                <div class="row justify-content-center pb-5">
                    <div class="col text-center">
                        <canvas class="border" id="canvas" width="480" height="270" opacity=0>
                        <img id="imagenFondo" src="assets/img/pkmonrun/fondoPrincipal.png"></canvas><br>
                        <button class="btn button-primary" type="button" id="boton">Iniciar Juego</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>
    <script src="assets/js/pkmonrun/game.js"></script>
</body>
</html>