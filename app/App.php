<?php

namespace App;

use Core\Config;
use Core\Database\Database;

class App{

    public $dbInstance;
    private static $_instance;

    public static function load(){
        require 'core/Autoloader.php';
        \Core\Autoloader::register();

        require 'app/Autoloader.php';
        Autoloader::register();
    }

    public static function getInstance() {
 
        if(is_null(self::$_instance)) {
          self::$_instance = new App();  
        }
        return self::$_instance;
    }

    public function getTable($name){
        $className = '\\App\\Model\\' . ucfirst($name).'Model';
        return new $className($this->getDb());
    }

    public function getDb(){
        $config = Config::getInstance(ROOT . "/settings/settings.php");

        if(is_null($this->dbInstance)){
            $this->dbInstance = new Database($config->get('dbName'), $config->get('dbHost'), $config->get('dbUser'), $config->get('dbPass'));
        }
        return $this->dbInstance;
    }
}