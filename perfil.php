<?php include("includes/a_config.php"); 
require_once 'Model/Valoracion.php';
require_once 'Controller/ValoracionController.php';

if(isset($_REQUEST['delete'])) {
    valoracionController::delete($_REQUEST['delete']);
}
?>

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
                                    <?php
                                    echo $_SESSION['usuario']->texto;
                                    ?>
                                </h5>
                            </div>
                            <div class="col-12 mt-5">
                                <h2>Datos Personales</h2>
                                <h4>Usuario: <span> <?php echo $_SESSION['usuario']->usuario; ?></span></h4>
                                <h4>Nombre: <span> <?php echo $_SESSION['usuario']->nombre; ?></span></h4>
                                <h4>Mail: <span> <?php echo $_SESSION['usuario']->email; ?></span></h4>
                                
                            </div>
                        </div>

                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12"> <img src="assets/img/favicon.png" height="250px" class="d-none d-lg-block"></div>
                        </div>

                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="contacto col-12">
                        <div class="form text-center mb-3">
                            <a href="modificarDatosUsuario.php">
                                <button type="submit">Modificar Datos</button>
                            </a>
                        </div>
                    </div>
                </div>

                <section class="recomendaciones wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                    <ul class="recomendaciones-list">
                        <?php
                        $valoraciones = valoracionController::findByUser($_SESSION['usuario']->id);
                        ?>
                        <li class="border">
                            <a data-toggle="collapse" href="#juegos" class="collapsed m-3">Mis valoraciones<i class="fa fa-minus-circle"></i></a>
                            
                                    <div id="juegos" class="collapse">
                                    
                            <?php 
                            if(empty($valoraciones)) {
                                echo '<h5>No hay valoraciones aún</h5>';
                            } else { 
                            ?>
                                    <div class="row">
                                    <div class="col-lg-2">
                                        <h5>Video</h5>
                                    </div>
                                    <div class="col-lg-5">
                                        <h5>Comentario</h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <h5>Valoración</h5>
                                    </div> 
                                    <div class="col-lg-2">
                                    </div> 
                                </div>
                                    <?php
                                    foreach ($valoraciones as $valoracion) {
                                    ?>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p><?php echo $valoracion->idvideo; ?></p>
                                            </div>
                                            <div class="col-lg-5">
                                                <p><?php echo $valoracion->comentario; ?></p>
                                            </div>
                                            <div class="col-lg-3">
                                                <p>
                                                    <?php echo $valoracion->valoracion; ?>
                                                </p>
                                            </div> 
                                            <div class="col-lg-2">
                                                <form action="" method="POST">
                                                    <button type="submit" name="delete" 
                                                    class="btn btn-danger"
                                                    value="<?php echo $valoracion->id; ?>">Borrar</button>
                                                <form>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    </div>
                                </li>
                        
                        <?php } ?>
                    </ul>
                    </div>
                </div>
                </section>

            </section>
        </main>
    <?php
    } ?>

    <?php include("includes/footer.php"); ?>

</body>

</html>