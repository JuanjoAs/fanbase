<?php

    require_once 'Conexion.php';

class ValoracionController {

    public static function insertValoracion($valoracion){

        $success = true;

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }

        $sql = "INSERT INTO fanbase.valoracion (id_video, id_usuario, comentario, valoracion) VALUES ('".$valoracion->idvideo."', ".$valoracion->idusuario.", '".$valoracion->comentario."', ".$valoracion->valoracion.");";
        echo $sql;
        try {
            $query = $c->query($sql);
        } catch(PDOException $ex) {
            $success = false;
        }

        return $success;
    }

    public static function findAllfromVideoId($idvideo){

        $comentarios = array();

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }

        $sql = " Select * from fanbase.valoracion where id_video = '$idvideo'";

        try {
            $query = $c->query($sql);
        } catch(PDOException $ex) {}

        while($obj = $query->fetch(PDO::FETCH_OBJ)) {
            $comentarios[] = new Valoracion($obj->id, $obj->id_video, $obj->id_usuario, $obj->comentario, $obj->valoracion);
        }

        return $comentarios;
    }

    public static function findByUser($idUser)
    {
        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }

        $sql = "SELECT * FROM valoracion WHERE id_usuario=$idUser ";
        $valoraciones = $c->query($sql);

        $coleccion = array();

        while ($obj = $valoraciones->fetch(PDO::FETCH_OBJ)) {
            $v = new Valoracion(
                $obj->id,
                $obj->id_video,
                $obj->id_usuario,
                $obj->comentario,
                $obj->valoracion
            );
            $coleccion[] = $v;
        }

        unset($c);

        return $coleccion;
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
        
        $sql = "DELETE FROM valoracion WHERE id=$id";

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
    public static function update($valoracion)
    {
        $success = true;

        try {
            $c = new Conexion();
            $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('Error fatal, imposible conectar con la base de datos.');
        }
        
        $sql = "UPDATE valoracion SET comentario='$valoracion->comentario', valoracion=$valoracion->valoracion 
            WHERE id_usuario=$valoracion->idusuario && id_video='$valoracion->idvideo'";
        try {
            $query = $c->query($sql);
        } catch (PDOException $ex) {
            $success = false;
        }

        return $success;
    }

}

