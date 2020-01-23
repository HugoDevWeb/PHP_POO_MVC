<?php

namespace Core\Model;

use Core\Database\Database;

class Model{

    public $db;
    public $table;

    public function __construct(Database $db){
        $this->db = $db;

        if (is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $className = end($parts);
            $this->table = strtolower(str_replace('Table', '', $className)); 
        }

    }

}