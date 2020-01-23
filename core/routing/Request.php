<?php

namespace Core\Routing;

use Core\Routing\IRequest;

class Request implements IRequest {

    public $arg;


    function __construct() {
        $this->boot();
    }

    private function boot() {
        foreach($_SERVER as $key => $value) {
            $this->{$this->toCamelCase($key)} = $value;
        }
    }

    private function toCamelCase($string) {
        $res = strtolower($string);

        preg_match_all('/_[a-z]/', $res, $matches);

        foreach($matches[0] as $match)
        {
            $c = str_replace('_', '', strtoupper($match));
            $result = str_replace($match, $c, $res);
        }
    
        return $result;
    }

    public function getBody() {
      if($this->requestMethod === "GET")
      {
        return;
      }
  
  
      if ($this->requestMethod == "POST")
      {
  
        $body = array();
        foreach($_POST as $key => $value)
        {
          $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }
  
        return $body;
      }
    }

}


?>