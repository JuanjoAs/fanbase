<?php

class Conexion extends PDO {
    private $dbtype = 'mysql';
    private $host = 'localhost';
    private $user = 'root';
    private $passwd = '';
    private $dbname = 'fanbase';
    private $charset = 'utf8';

    public function __construct() {
        parent::__construct($this->dbtype.':host='.$this->host.';dbname='.$this->dbname.';charset='.$this->charset, $this->user, $this->passwd);
    }
}