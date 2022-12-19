<?php
namespace  biblioteca\Core;
use Exception;

class Router
{
    private $routes;

    public function define($routes): void
    {
        $this->routes = $routes;
    }

    public static function load($ruta): Router
    {

        $router = new Router($ruta);
        require $ruta;
        return $router;
    }

    /**
     * @throws Exception
     */
    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        } else {
            throw new Exception('URI no definida');
        }
    }
}
