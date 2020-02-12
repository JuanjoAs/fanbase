<?php


class Valoracion {

    public $id; //id de la valoracion
    public $idvideo;   //id del video
    public $idusuario;     //id del usuario
    public $comentario;    //comentario del usuario
    public $valoracion;

    /**
     * Valoracion constructor.
     * @param $id
     * @param $idvideo
     * @param $idusuario
     * @param $comentario
     * @param $valoracion
     */
    public function __construct($id, $idvideo, $idusuario, $comentario, $valoracion)
    {
        $this->id = $id;
        $this->idvideo = $idvideo;
        $this->idusuario = $idusuario;
        $this->comentario = $comentario;
        $this->valoracion = $valoracion;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }


}