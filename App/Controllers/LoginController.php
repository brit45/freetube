<?php declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\Controller\Controller;
use APP\Core\View\Responce;

class LoginController extends Controller {

    static public function Home(): Responce {
        return new Responce('Login@connect');
    }
}