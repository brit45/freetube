<?php declare(strict_types=1);

namespace APP\Core\Controller;
use APP\Core\Router\Router;

class Controller {

    public Router $router;

    function __construct(?Router $router) {
        $this->router = $router;
    }
    
}