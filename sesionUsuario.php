<?php
session_set_cookie_params("7200", "/");
session_start();
if (isset($_POST['registro'])) {
    include_once 'Controller/UsuarioController.php';
    if( UsuarioController::usuarioExiste($_POST['mail'])==false){
        $u = new Usuario($_POST['usuario'], $_POST['name'], $_POST['mail'], $_POST['password'], "user", "Texto no disponible",1,"");
        if (UsuarioController::insert($u)) {
            $_SESSION['usuario'] = UsuarioController::login($u->email, $u->password);
            setcookie("PHPSESSID", $_COOKIE["PHPSESSID"], time() + time(), "/");
        }
        
    }else{
        $_SESSION['errorUsuarioExiste'] = "Error al iniciar sesion el mail ya esta siendo utilizado";
    }
    header("Location:index.php");
}




if (isset($_POST['inicioSesion'])) {
    include_once 'Controller/UsuarioController.php';
    $u = UsuarioController::login($_POST['mail'], $_POST['password']);
    if ($u != false ) {
        if($u->activo==0){
            $_SESSION['errorActivo'] = "Error al iniciar sesion. Usuario no valido";
        }else{
            $_SESSION['usuario'] = $u;
            setcookie("PHPSESSID", $_COOKIE["PHPSESSID"], time() + time(), "/");
        }
        
    }
    else{
        $_SESSION['errorContraseña'] = "Error al iniciar sesion. Contraseña incorrecta";
    }
    
    header("Location:index.php");
}
if (isset($_POST['cambioDatos'])) {
    include_once 'Controller/UsuarioController.php';
    $u = new Usuario($_POST['cambioUsuario'],$_POST['cambioNombre'], $_POST['cambioEmail'], $_SESSION['usuario']->password, $_SESSION['usuario']->rango, $_POST['cambioDescripcion'],$_SESSION['usuario']->activo,$_SESSION['usuario']->imagen);
    UsuarioController::update($u);
    header("Location:perfil.php");
}

if (isset($_POST['inicioGoogle'])){





}