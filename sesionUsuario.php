<?php
session_set_cookie_params("7200", "/");
require_once 'assets/Composer/vendor/autoload.php';
include_once 'Controller/UsuarioController.php';
session_start();

//requerimientos para funcionar google
//require_once 'assets/Composer/vendor/autoload.php';

// Configuracion del cliente de google
$clientID = '839427167234-tcs6jo32qrvoal8vhcbiqnf6iati1eh5.apps.googleusercontent.com'; //id del cliente
$clientSecret = 'FDO7u7RpvTG_hVDPUN5J0Lxa'; //clave secreta del cliente
$redirectUri = 'http://'.$_SERVER['HTTP_HOST'].'/fanbase/sesionUsuario.php'; //lugar donde redirige al logearse

// creando el cliente con los datos necesarios
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");





if (isset($_POST['registro'])) {
    
    if (UsuarioController::usuarioExiste($_POST['mail']) == false) {
        $u = new Usuario($_POST['usuario'], $_POST['name'], $_POST['mail'], $_POST['password'], "user", "Texto no disponible", 1, "","");
        if (UsuarioController::insert($u)) {
            $_SESSION['usuario'] = UsuarioController::login($u->email, $u->password);
            setcookie("PHPSESSID", $_COOKIE["PHPSESSID"], time() + time(), "/");
        }
    } else {
        $_SESSION['errorUsuarioExiste'] = "Error al iniciar sesion el mail ya esta siendo utilizado";
    }
    header("Location:index.php");
}




if (isset($_POST['inicioSesion'])) {
    
    $u = UsuarioController::login($_POST['mail'], $_POST['password']);
    if ($u != false) {
        if ($u->activo == 0) {
            $_SESSION['errorActivo'] = "Error al iniciar sesion. Usuario no valido";
        } else {
            $_SESSION['usuario'] = $u;
            setcookie("PHPSESSID", $_COOKIE["PHPSESSID"], time() + time(), "/");
        }
    } else {
        $_SESSION['errorContraseña'] = "Error al iniciar sesion. Contraseña incorrecta";
    }

    header("Location:index.php");
}

if (isset($_POST['cambioDatos'])) {
    $u = new Usuario($_POST['cambioUsuario'], $_POST['cambioNombre'], $_POST['cambioEmail'], $_SESSION['usuario']->password, $_SESSION['usuario']->rango, $_POST['cambioDescripcion'], $_SESSION['usuario']->activo, $_SESSION['usuario']->imagen,$_SESSION['usuario']->idg);
    $u->id=$_SESSION['usuario']->id;
    UsuarioController::update($u);
    $_SESSION['usuario']=$u;
    header("Location:perfil.php");
}

if (isset($_REQUEST['code'])) {

    
    //acceso al toquen
    $token = $client->fetchAccessTokenWithAuthCode($_REQUEST['code']);
    $client->setAccessToken($token['access_token']);

    //acceso al json, a traves del token y carga de datos del usuario
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    //informacion del usuario necesaria
    $idgoogle = $google_account_info->id;
    $email = $google_account_info->email;



    if (UsuarioController::usuarioExiste($email) == false) {

        $nombreyapellidos =  $google_account_info->name;
        $apellidos = $google_account_info->familyName;
        $imagen = $google_account_info->getPicture();
        $solonombre = str_replace($apellidos, "", $nombreyapellidos);

        $usuario = new Usuario(trim($solonombre), $nombreyapellidos, $email, "", "user", "Texto no disponible", 1, $imagen,$idgoogle);

        UsuarioController::insertGoogle($usuario);
    }


    if (UsuarioController::usuarioExiste($email)) {

        $u = UsuarioController::loginGoogle($email, $idgoogle);

        if ($u != false) {
            if ($u->activo == 0) {
                $_SESSION['errorActivo'] = "Error al iniciar sesion. Usuario no valido";
            } else {
                $_SESSION['usuario'] = $u;
                setcookie("PHPSESSID", $_COOKIE["PHPSESSID"], time() + time(), "/");
            }
        }
    }
    header("Location:index.php");
}
