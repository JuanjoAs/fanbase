<?php
require_once 'Model/Valoracion.php';
require_once 'Controller/ValoracionController.php';

$v = ValoracionController::find($_REQUEST['idvaloracion']);

echo json_encode($v);