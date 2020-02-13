<?php
require_once 'Model/Usuario.php';
require_once 'Controller/UsuarioController.php';

$u = UsuarioController::find($_REQUEST['idusuario']);
echo json_encode($u);