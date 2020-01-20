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

    /**
     * @return id del mensaje
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return id del video
     */
    public function getIdvideo()
    {
        return $this->idvideo;
    }

    /**
     * @return id del usuario
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * @return comentario
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * @return valoracion
     */
    public function getValoracion()
    {
        return $this->valoracion;
    }    //estrellas del usuario






}