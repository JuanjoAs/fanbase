<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/head-tag-contents.php");?>
</head>

<body>
    <?php include("includes/navbar.php");?>

    <main>

        <section class="section-bg wow fadeInUp">

            <div class="container">

                <div class="section-header">
                    <h2>Flappy Bird</h2>
                </div>

                <div class="row justify-content-center pb-5">
                    <div class="col text-center">
                        <canvas class="border" id="canvas" width="400" height="500"></canvas>
                        <script src="javascript.js"></script><br>
                        <button class="btn button-primary" type="button" id="boton">Iniciar Juego</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>
    <script src="assets/js/flappybird/game.js"></script>
</body>
</html>