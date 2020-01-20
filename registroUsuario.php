<?php if(isset($_POST['submit'])){
    include_once 'Controller/UsuarioController.php';
    $u=new Usuario( $_POST['usuario'], $_POST['name'], $_POST['mail'], $_POST['password'], "user");

}