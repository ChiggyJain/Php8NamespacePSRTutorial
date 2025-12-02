<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\UserController;

// Instantiate Router
$router = new Router();

$router->get("/", function() {
    return (new HomeController())->index();
});

$router->get("/user", function() {
    return (new UserController())->show2();
});

// Simulate URL input (you can modify this for testing)
$method = "GET";
$uri = $_GET['r'] ?? "/";

echo $router->dispatch($method, $uri);
