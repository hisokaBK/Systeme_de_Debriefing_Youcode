<?php

namespace app\core;

class Router
{
    private array $routes = [];

    public function get(string $uri, string $action){
        $this->routes['GET'][$uri] = $action;
    }

    public function post(string $uri, string $action){
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        if(isset($this->routes[$requestMethod][$uri])) {
            [$controllerName, $methodName] = explode('@', $this->routes[$requestMethod][$uri]);

            $controllerClass = "app\\Http\\controllers\\$controllerName";
            $controller = new $controllerClass();
            $controller->$methodName();
            return;
        }else{
            header("Location: /404");
            exit();
        }

    }
}
