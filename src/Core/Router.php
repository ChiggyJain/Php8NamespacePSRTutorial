<?php

namespace App\Core;

class Router {

    private array $routes = [];

    // Register a route
    public function get(string $uri, callable $action) {
        $this->routes['GET'][$uri] = $action;
    }

    // Dispatch request
    public function dispatch(string $method, string $uri) {

        if (!isset($this->routes[$method][$uri])) {
            return "404 - Route Not Found";
        }

        $action = $this->routes[$method][$uri];

        return call_user_func($action);
    }
}
