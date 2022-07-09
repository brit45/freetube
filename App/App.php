<?php declare(strict_types=1);

namespace APP;

use APP\Core\Router\Router;

class App {

    public Router $router;

    function __construct() {

        $this->router = new Router();
    }

    public function Handle() {
        $this->router->Parse();
    }
}