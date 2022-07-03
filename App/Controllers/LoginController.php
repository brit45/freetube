<?php declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\Controller\Controller;
use APP\Core\Router\Router;
use APP\Core\View\Responce;

class LoginController extends Controller {

    function __construct(Router $router) {}

    static public function Home(): Responce {
        return new Responce('Login@connect', [
            'redirect' => self::$router->request->Url
        ]);
    }
}