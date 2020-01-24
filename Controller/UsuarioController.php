<?php

require_once 'Conexion.php';
require_once 'Model/Usuario.php';

class UsuarioController
{

    public static function findAll()
    {
        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }

        $sql = "SELECT * FROM usuario";
        $usuarios = $c->query($sql);

        while ($obj = $usuarios->fetch(PDO::FETCH_OBJ)) {
            $u = new Usuario(
                $obj->usuario,
                $obj->nombre,
                $obj->email,
                $obj->password,
                $obj->rango
            );
            $u->id = $obj->id;
            $coleccion[] = $u;
        }

        unset($c);

        return $coleccion;
    }

    public static function find($cod)
    {
        $error = false;

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }

        $sql = "SELECT * FROM usuario WHERE id='$cod'";

        try {
            $usuario = $c->query($sql);
        } catch (Exception $ex) {
            $error = true;
        }

        unset($c);

        if (!$error && $usuario->rowCount()) {
            $obj = $usuario->fetch(PDO::FETCH_OBJ);
            return new Usuario(
                $obj->usuario,
                $obj->nombre,
                $obj->email,
                $obj->password,
                $obj->rango
            );
        }

        return false;
    }
    public static function login($usuario, $password)
    {
        $error = false;

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }

        $sql = "SELECT * FROM usuario WHERE email='$usuario' && password='".md5($password)."'";

        try {
            $usuario = $c->query($sql);
        } catch (Exception $ex) {
            $error = true;
        }

        unset($c);

        if (!$error && $usuario->rowCount() != 0) {
            $obj = $usuario->fetch(PDO::FETCH_OBJ);
            $usuario = new Usuario($obj->usuario, $obj->nombre, $obj->email, $obj->password, $obj->rango);
            $usuario->id = $obj->id;
            return $usuario;
        }

        return false;
    }

    public static function insert($usuario)
    {
        $success = true;

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }

        $sql = "INSERT INTO usuario (usuario, nombre, email, password, rango) VALUES('$usuario->usuario', '$usuario->nombre', '$usuario->email','" . md5($usuario->password) . "', '$usuario->rango')";

        try {
            $query = $c->query($sql);
        } catch (PDOException $ex) {
            $success = false;
        }

        return $success;
    }

    public static function delete($id)
    {
        $success = true;

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }
        
        $sql = "DELETE FROM usuario WHERE id=$id";

        try {
            $query = $c->query($sql);
        } catch (PDOException $ex) {
            $success = false;
        }

        return $success;
    }
}
