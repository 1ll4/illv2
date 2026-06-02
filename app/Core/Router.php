<?php

namespace App\Core;
class Router
{
    private array $routes = [];

    public function get(string $uri, string $action): void
    {
        $this->routes[$uri] = $action;
    }

    public function dispatch(): void
    {
        $request = parse_url($_SERVER['REQUEST_URI']);

        if (!isset($this->routes[$request['path']])) {
            http_response_code(404);
            return;
        }
        [$controller, $method] = explode('@', $this->routes[$request['path']]);
        require_once "../app/Controllers/$controller.php";
        $controller = "App\\Controllers\\{$controller}";

        $controller = new $controller();
        if (isset($request['query']))
        {
            $param = explode('=', $request['query']);
            $controller->$method($param[1]);
            return;
        }
        $controller->$method();
    }
}