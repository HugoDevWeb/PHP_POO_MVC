<?php

namespace App\Controller;

use App\App;
use Core\Controller\Controller;

class AppController extends Controller{
    
    public $modelName;
    protected $default = 'default';


    function loadModel($modelName){
       $this->modelName =  App::getInstance()->getTable($modelName);
    }

    // public function test() {
    //     return $this->render('global.test', []);
    // }
}