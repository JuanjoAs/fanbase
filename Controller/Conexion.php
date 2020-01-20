<?php


class Conexion extends PDO {
    private $dbtype = 'mysql';
    private $host = 'localhost';
    private $user = 'dwes';
    private $passwd = 'abc123.';
    private $dbname = 'alquiler_juegos';
    private $charset = 'utf8';

    public function __construct() {
        parent::__construct($this->dbtype.':host='.$this->host.';dbname='.$this->dbname.';charset='.$this->charset, $this->user, $this->passwd);
    }
}