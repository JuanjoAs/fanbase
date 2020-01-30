<?php


class Valoracion {

    private $id; //id de la valoracion
    private $idvideo;   //id del video
    private $idusuario;     //id del usuario
    private $comentario;    //comentario del usuario
    private $valoracion;

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