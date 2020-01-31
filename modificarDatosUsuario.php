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
                        <div class="row">
                            <div class="col-12">
                                <h1>
                                    <?php
                                    echo $_SESSION['usuario']->nombre;
                                    ?>
                                </h1>
                                <h5>
                                    <form method="post" action="sesionUsuario.php">
                                        <textarea rows="4" cols="50" name="cambioDescripcion"><?php
                                                                                                echo $_SESSION['usuario']->texto;
                                                                                                ?></textarea>
                                </h5>
                            </div>
                            <div class="col-12 mt-5">
                                <h2>Datos Personales</h2>
                                <h4>Usuario: <span><input type="text" name="cambioUsuario" value=" <?php echo $_SESSION['usuario']->usuario; ?>" /></span></h4>
                                <h4>Nombre: <span> <input type="text" name="cambioNombre" value="<?php echo $_SESSION['usuario']->nombre; ?>" /></span></h4>
                                <?php if ($_SESSION['usuario']->idg == "") {
                                ?><h4>Mail: <span> <input type="text" name="cambioEmail" value="<?php echo $_SESSION['usuario']->email; ?>" /></span></h4>
                                <?php
                                } else {
                                ?> <input type="hidden" name="cambioEmail" value="<?php echo $_SESSION['usuario']->email; ?>" /></span></h4><?php
                                                                                                                                            }
                                                                                                                                                ?>

                            </div>
                        </div>

                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12"> <img src="assets/img/logoPerfil.png" height="250px" class="d-none d-lg-block"></div>
                        </div>
                        <!--<div class="row justify-content-center">
                            <div class="contacto col-12">
                                <div class="form text-center mb-3">
                                    <button type="submit">Modificar Imagen</button>
                                </div>
                            </div>
                        </div>-->
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="contacto col-12">
                        <div class="form text-center mb-3">
                            <button type="submit" name="cambioDatos">Realizar Cambios</button>
                        </div>
                    </div>
                </div>
                </form>
            </section>
        </main>
    <?php
    } ?>

    <?php include("includes/footer.php"); ?>

</body>

</html>