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
                $obj->rango,
                $obj->texto,
                $obj->activo,
                $obj->imagen,
                $obj->google_id
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
                $obj->rango,
                $obj->texto,
                $obj->activo,
                $obj->imagen,
                $obj->google_id
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

        $sql = "SELECT * FROM usuario WHERE email='$usuario' && password='".md5($password)."' && google_id = ''";

        try {
            $usuario = $c->query($sql);
        } catch (Exception $ex) {
            $error = true;
        }

        unset($c);

        if (!$error && $usuario->rowCount() != 0) {
            $obj = $usuario->fetch(PDO::FETCH_OBJ);
            $usuario = new Usuario($obj->usuario, $obj->nombre, $obj->email, $obj->password, $obj->rango,$obj->texto, $obj->activo,$obj->imagen,$obj->google_id);
            $usuario->id = $obj->id;
            return $usuario;
        }

        return false;
    }
    public static function usuarioExiste($usuario)
    {
        $error = false;

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }

        $sql = "SELECT * FROM usuario WHERE email='$usuario'";

        try {
            $usuario = $c->query($sql);
        } catch (Exception $ex) {
            $error = true;
        }

        unset($c);

        if (!$error && $usuario->rowCount() != 0) {
            return true;
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

        $sql = "INSERT INTO usuario (usuario, nombre, email, password, rango,texto,activo, imagen, google_id) VALUES('$usuario->usuario', '$usuario->nombre', '$usuario->email','" . md5($usuario->password) . "', '$usuario->rango','$usuario->texto', 1, '', '')";

        try {
            $query = $c->query($sql);
        } catch (PDOException $ex) {
            $success = false;
        }

        return $success;
    }

    public static function disable($id)
    {
        $success = true;

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }
        
        $sql = "UPDATE usuario SET activo=0 WHERE id=$id";

        try {
            $query = $c->query($sql);
        } catch (PDOException $ex) {
            $success = false;
        }

        return $success;
    }

    public static function enable($id)
    {
        $success = true;

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }
        
        $sql = "UPDATE usuario SET activo=1 WHERE id=$id";

        try {
            $query = $c->query($sql);
        } catch (PDOException $ex) {
            $success = false;
        }
        return $success;
    }

    /**
     * @param $usuario
     * @return bool
     */
    public static function update($usuario)
    {
        $success = true;

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }
        
        $sql = "UPDATE usuario SET usuario='$usuario->usuario', nombre='$usuario->nombre', email='$usuario->email', 
        rango='$usuario->rango', texto='$usuario->texto' WHERE id=$usuario->id";
        try {
            $query = $c->query($sql);
        } catch (PDOException $ex) {
            $success = false;
        }

        return $success;
    }

    public static function insertGoogle($usuario)
    {
        $success = true;

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }

        $sql = "INSERT INTO usuario (usuario, nombre, email, password, rango,texto,activo, imagen, google_id) VALUES('$usuario->usuario', '$usuario->nombre', '$usuario->email','', '$usuario->rango','$usuario->texto', 1, '$usuario->imagen', '".$usuario->idg."')";

        try {
            $query = $c->query($sql);
        } catch (PDOException $ex) {
            $success = false;
        }

        return $success;
    }

    public static function loginGoogle($usuario, $id)
    {
        $error = false;

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }

        $sql = "SELECT * FROM usuario WHERE email='$usuario' && google_id='$id' && password = ''";

        try {
            $usuario = $c->query($sql);
        } catch (Exception $ex) {
            $error = true;
        }

        unset($c);

        if (!$error && $usuario->rowCount() != 0) {
            $obj = $usuario->fetch(PDO::FETCH_OBJ);
            $usuario = new Usuario($obj->usuario, $obj->nombre, $obj->email, $obj->password, $obj->rango,$obj->texto, $obj->activo,$obj->imagen,$obj->google_id);
            $usuario->id = $obj->id;
            return $usuario;
        }

        return false;
    }

}
