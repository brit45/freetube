<?php declare(strict_types=1);

namespace APP\Routes;

use APP\Controllers\IndexController;
use APP\Controllers\LoginController;
use APP\Core\Router\Router;

class routes {

    private Router $router;

    function __construct(Router $router) {

        $this->router = $router;
    }

    public function Handle() {
        
        $this->router->setRoute('index',new IndexController($this->router),'Index',null);
        $this->router->setRoute('*',new IndexController($this->router),'Home',null);

        $this->router->setRoute("home",new IndexController($this->router),'Home',['AllPermission', 'AdminAccess']);
        
        $this->router->setRoute("login",new LoginController($this->router),'Home',['AllPermission', 'SecurrityConnected']);
    }
}