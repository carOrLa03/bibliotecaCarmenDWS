<?php
namespace  bibliotecaCarmenDWS\core;
class Router
{
    private $routes;

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public static function load($ruta)
    {
        $router = new Router($ruta);
        require $ruta;
        return $router;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        } else {
            throw new Exception('URI no definida');
        }
    }
}
