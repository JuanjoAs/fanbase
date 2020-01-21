<?php
session_set_cookie_params("7200", "/");
session_start();
if (isset($_POST['registro'])) {
    include_once 'Controller/UsuarioController.php';
    $u = new Usuario($_POST['usuario'], $_POST['name'], $_POST['mail'], $_POST['password'], "user");
    if(UsuarioController::insert($u)){
        $_SESSION['usuario'] = $u;
        setcookie("PHPSESSID", $_COOKIE["PHPSESSID"], time() + time(),"/");
    }
    
    header("Location:index.php");
}
if (isset($_POST['inicioSesion'])) {
    include_once 'Controller/UsuarioController.php';
    $u = UsuarioController::login($_POST['mail'], $_POST['password']);
    if($u!=false){
        $_SESSION['usuario'] = $u;
        setcookie("PHPSESSID", $_COOKIE["PHPSESSID"], time() + time(),"/");
    }
    header("Location:index.php");
}
