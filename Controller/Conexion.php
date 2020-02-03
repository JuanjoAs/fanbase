<?php

class Conexion extends PDO {
    private $dbtype = 'mysql';
    private $host = 'localhost';//sql313.nuxhosting.com	
    private $user = 'root';//nsite_24858324	
    private $passwd = '';//fanbase123
    private $dbname = 'fanbase';//nsite_24858324_fanbase	
    private $charset = 'utf8';

    public function __construct() {
        parent::__construct($this->dbtype.':host='.$this->host.';dbname='.$this->dbname.';charset='.$this->charset, $this->user, $this->passwd);
    }
}