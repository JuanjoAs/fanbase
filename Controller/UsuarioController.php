<?php

require_once 'Conexion.php';
require_once 'Model/Usuario.php';

class UsuarioController {

    public static function findAll() {
        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }

        $sql = "SELECT * FROM usuario";
        $usuarios = $c->query($sql);

        while($obj = $usuarios->fetch(PDO::FETCH_OBJ)) {
            $u = new Usuario($obj->id, $obj->usuario, $obj->nombre,
                $obj->email, $obj->password, $obj->rango);
            $coleccion[] = $u;
        }

        unset($c);

        return $coleccion;
    }



}