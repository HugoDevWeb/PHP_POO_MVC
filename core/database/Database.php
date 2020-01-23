<?php

namespace Core\Database;

class Database{

        public $dbName;
        public $dbHost;
        public $dbUser;
        public $dbPass;
        public $pdo;

    public function __construct($dbName, $dbHost, $dbUser, $dbPass){

        $this->dbName = $dbName;
        $this->dbHost = $dbHost;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
        
        if ($this->pdo == null) {
            $pdo = new \PDO( 'mysql:dbname=' . $this->dbName . ';host='. $this->dbHost, $this->dbUser, $this->dbPass);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        $this->pdo = $pdo;
        return $this->pdo;
    }

    public function save ($statement, $values){

        $datas =  $this->pdo->prepare($statement);
        $datas->execute($values);
     }

    public function query($statement, $one = false){
        $datas = $this->pdo->query($statement);
        if ($one) {
            return $datas->fetch();
        } else {
            return $datas->fetchAll();
        }
    }
    
    
}
