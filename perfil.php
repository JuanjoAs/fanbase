<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
    <?php include("includes/navbar.php"); ?>
    <?php if (!isset($_SESSION['usuario'])) {
        header("Location:index.php");
    } else { ?>
        <main class="container">
            <section class="datos-usuario section-bg wow fadeInUp pt-5 mt-5 align-items-center">
                <div class="row">
                    <div class="col-9">
                        <h1>
                        <?php
                        echo $_SESSION['usuario']->nombre;
                        ?>
                        </h1>
                        <h5>
                        <?php
                        echo $_SESSION['usuario']->texto;
                        ?>
                        </h5>
                    </div> 
                    <div class="col-3">
                    <img src="assets/img/favicon.png" height="200px">
                    </div>
                </div>
            </section>
        </main>
    <?php
    } ?>

    <?php include("includes/footer.php"); ?>

</body>

</html>