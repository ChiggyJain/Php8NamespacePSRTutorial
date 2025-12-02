<?php

namespace App\Core;

class Request {

    public string $method;
    public string $uri;
    public array $query = [];
    public array $body = [];

    public function __construct() {

        $this->method = $_SERVER['REQUEST_METHOD'];

        // Clean URI like: /user/10?name=abc
        $this->uri = strtok($_SERVER['REQUEST_URI'], '?');

        $this->query = $_GET;

        $this->body = $_POST;
    }
}
