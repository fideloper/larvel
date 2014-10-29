<?php namespace Larvel™\Routing;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class 🏃{

    protected $routes;

    public function __construct(RouteCollection $routes)
    {
        $this->routes = $routes;
    }

    public function routes()
    {
        return $this->routes;
    }

    public function get($pattern, $callback)
    {
        $route = new Route($pattern, ['_controller' => $callback]);
        $route->setMethods(['GET', 'HEAD']);

        $this->routes->add(
            md5($pattern),
            $route
        );
    }

    public function post($pattern, $callback)
    {
        $route = new Route($pattern, ['_controller' => $callback]);
        $route->setMethods(['POST']);

        $this->routes->add(
            md5($pattern),
            $route
        );
    }

    public function put($pattern, $callback)
    {
        $route = new Route($pattern, ['_controller' => $callback]);
        $route->setMethods(['PUT']);

        $this->routes->add(
            md5($pattern),
            $route
        );
    }

    public function patch($pattern, $callback)
    {
        $route = new Route($pattern, ['_controller' => $callback]);
        $route->setMethods(['PATCH']);

        $this->routes->add(
            md5($pattern),
            $route
        );
    }
}