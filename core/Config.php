<?php

namespace Core;

class Config{
    private static $_instance;
    public $settings = array ();
    

    public function __construct($file){
        $this->settings = require $file;
    }

    public static function getInstance($file) {
 
        if(is_null(self::$_instance)) {
          self::$_instance = new Config($file);  
        }

        return self::$_instance;
    }

    public function get($key){
        return $this->settings[$key];
    }

    
}