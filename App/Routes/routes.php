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
    
    /**
     * Handle
     * 
     * Listening routage on site.
     *
     * @return void
     */
    public function Handle() {
        
        $this->router->Root(IndexController::class,'Home',null);

        $this->router->setRoute('index',IndexController::class,'Index',null);

        $this->router->setRoute("home",IndexController::class,'Home',['AllPermission', 'AdminAccess']);
        
        $this->router->setRoute("connect",LoginController::class,'Home',['AllPermission', 'SecurrityConnected']);
    }
}
