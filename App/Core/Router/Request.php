<?php declare(strict_types=1);

namespace APP\Core\Router;

use stdClass;

class Request {

    public string $Method;
    public string $Url;
    public array $Server = [];

    public function __construct() {

        $this->Method   = $_SERVER['REQUEST_METHOD'];
        $this->Url      = trim($_SERVER['REQUEST_URI'], '/');

        unset($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
        
        $this->Server     =  $_SERVER;
    }
}