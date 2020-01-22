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




}

