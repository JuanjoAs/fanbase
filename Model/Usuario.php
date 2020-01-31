<?php


class Usuario {
    private $id;
    public $usuario;
    private $nombre;
    private $email;
    private $password;
    private $rango;
    private $texto;
    private $activo;
    private $imagen;
    private $idg;

    public function __construct($usuario, $nombre, $email, $password, $rango, $texto, $activo,$imagen,$idg) {
        $this->usuario = $usuario;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->rango = $rango;
        $this->texto = $texto;
        $this->activo = $activo;
        $this->imagen = $imagen;
        $this->idg=$idg;
    }

    public function setidg($idg){
        $this->idg = $idg;
    }
    
    public function getidg(){
        return $this->idg;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
}