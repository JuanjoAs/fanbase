<?php
require_once 'Model/Usuario.php';
require_once 'Controller/UsuarioController.php';

//if(isset($_POST['idusuario'])) {
    //$u = UsuarioController::find($_POST['idusuario']);
    //echo json_encode($u);
    
//}

//echo $_POST['idusuario'];

$u = UsuarioController::find($_REQUEST['idusuario']);
echo json_encode($u);
//print_r($u);