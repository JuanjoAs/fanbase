<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("includes/head-tag-contents.php");?>
    <title>Busca el tesoro</title>
</head>
<body>
    <?php include("includes/design-top.php");?>
    <?php include("includes/navbar.php");?>
    <main class="container mt-5 pt-5">
        <section class="section-bg wow fadeInUp pb-5">
            <div class="row justify-content-center">
                <div class="col-4">
                    <h1 class="text-center">Busca el tesoro</h1>
                    <p id="intentos">Intentos: 1</p>
                    <p id="info"></p>
                </div>
                <div class="col-5">
                    <p id="coordenadas"></p>
                    <canvas id="map" width="400px" height="400px"></canvas>
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>
    <script src="assets/js/findTreasure/helpers.js"></script>
    <script src="assets/js/findTreasure/game.js"></script>
</body>
</html>