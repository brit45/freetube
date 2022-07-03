<?php declare(strict_types=1);

namespace APP\Core\Router;

use APP\Config\Global_conf;
use APP\Core\Controller\Controller;
use APP\Core\View\Responce;
use APP\Routes\routes;

class Router {

    private Request $request;
    public array    $params = [];
    public Responce $Responce;

    /**
     * @var string[]
     */
    private $Routes;
    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct() {
        
        $this->request = new Request();
        $t = new routes($this);
        $t->Handle();
    }
    
    /**
     * Parse
     *
     * @return void
     */
    public function Parse() {

        if(preg_match_all(Global_conf::REGEX_PUBLIC_RESSOURCE,$this->request->Url)) {
            require_once $this->request->Url;
            return;
        }

        switch(strtolower(Global_conf::TYPE_ROUTING_PARSE)) {

            case 'slug' : {
                $p = explode('/',$this->request->Url);
                $p = implode('',array_slice($p, 2));

                $v = explode(Global_conf::SLUG_SEPARATOR,$p);

                $this->params = $v;
                break;
            }

            case 'normalize' : {

                $p = explode('/',$this->request->Url);
                $this->params = array_slice($p, 1);
                break;
            }
        }

        foreach($this->Routes as $k=>$v) {
            
            if(preg_match($v['path'], $this->request->Url, $match)) {
                $controller = $v['controller'];
                $action     = $v['action'];
                return $this->Responce = call_user_func([$controller, $action]);
            }
        }
    }
    
    /**
     * setRoute
     *
     * @param  mixed $regex_routes
     * @param  mixed $controller
     * @param  mixed $action
     * @param  mixed $Middleware
     * @return void
     */
    public function setRoute(string $regex_routes, Controller $controller, string $action, ?array $Middleware) {
        $this->Routes[] = ['path' => "($regex_routes)", 'controller' => $controller, 'action' => $action, 'middleware' => $Middleware];
    }
}