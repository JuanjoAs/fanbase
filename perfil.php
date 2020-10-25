<?php include("includes/a_config.php");
require_once $_SERVER['DOCUMENT_ROOT'] . '/fanbase/Model/Valoracion.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/fanbase/Controller/ValoracionController.php';
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
                            <div class="col-12"> <img src="<?php ($_SESSION['usuario']->imagen == "") ? print "assets/img/logoPerfil.png" : print $_SESSION['usuario']->imagen; ?>" height="250px" class="d-none d-lg-block" alt="Imagen perfil" /></div>
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

                <?php
                if (isset($_REQUEST['save'])) {
                    $v1 = new Valoracion(
                        $_REQUEST['idvaloracion'],
                        $_REQUEST['idusuario'],
                        $_REQUEST['idvideo'],
                        $_REQUEST['comentario'],
                        $_REQUEST['valoracion']
                    );
                    if (!ValoracionController::update($v1)) {
                        $error = "<h1 class='mt-5'>Algo ha fallado al actualizar la valoración</h1>";
                    } else {
                ?>
                        <script>
                            Swal.fire(
                                'Correcto!',
                                'Valoración actualizada correctamente.',
                                'success'
                            );
                        </script>
                <?php
                    }
                }

                if (isset($_REQUEST['fireborrar'])) {
                    valoracionController::delete($_REQUEST['fireborrar']);
                    header('refresh:1');
                }
                ?>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edición de valoración</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    <label for="idvaloracion" class="d-none">idvaloracion</label>
                                    <input type="text" id="idvaloracion" name="idvaloracion">
                                    <label for="idusuario" class="d-none">idusuario</label>
                                    <input type="text" id="idusuario" name="idusuario">
                                    <label for="idvideo" class="d-none">idvideo</label>
                                    <input type="text" id="idvideo" name="idvideo">
                                    <div class="form-group">
                                        <label for="comentario">Comentario</label>
                                        <textarea name="comentario" id="comentario" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="valoracion">Valoración</label>
                                        <input type="number" min="0" max="5" class="form-control" name="valoracion" id="valoracion" required>
                                    </div>
                                    <button type="submit" name="save" class="btn btn-primary btn-block">Guardar</button>
                                </form>
                            </div>
                        </div>
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
                                        if (empty($valoraciones)) {
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
                                                    <div class="col-lg-2 pt-2">
                                                        <p><?php echo $valoracion->idvideo; ?></p>
                                                    </div>
                                                    <div class="col-lg-5 pt-2">
                                                        <p><?php echo $valoracion->comentario; ?></p>
                                                    </div>
                                                    <div class="col-lg-3 pt-2">
                                                        <p>
                                                            <?php echo $valoracion->valoracion; ?>
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <form action="" method="POST">
                                                            <button type="button" name="edit" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" value="<?php echo $valoracion->id; ?>">Editar</button>
                                                            <button type="button" name="delete" class="btn btn-danger" value="<?php echo $valoracion->id; ?>">Borrar</button>
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

    <script>
        $(function() {
            $("button[name='delete']").click(function() {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podrás revertir los cambios.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Si, bórralo'
                }).then((result) => {
                    if (result.value) {
                        console.log('ok');
                        let idborrar = $(this).val();
                        $.ajax({
                            method: "POST",
                            url: "perfil.php",
                            data: {
                                fireborrar: idborrar
                            }
                        })
                    }
                })
            });
        });
    </script>

    <script>
        $("button[name='edit']").click(function() {
            $("#idvaloracion").val($("button[name='edit']").val());
            let id = $(this).val();

            $.ajax({
                type: 'POST',
                url: 'data_val.php',
                data: {
                    idvaloracion: id
                },
                success: function(res) {
                    //console.log(res);
                    let valoracion = JSON.parse(res);
                    $("#idvaloracion").val(valoracion.id);
                    $("#idusuario").val(valoracion.idusuario);
                    $("#idvideo").val(valoracion.idvideo);
                    $("#comentario").val(valoracion.comentario);
                    $("#valoracion").val(valoracion.valoracion);
                },
                error: function() {
                    console.log("No se ha podido obtener la información");
                }
            });
        })
    </script>

    <?php include("includes/footer.php"); ?>

</body>

</html>