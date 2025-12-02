<?php

namespace App\Core;

class Middleware {

    private array $middlewares = [];

    public function add(callable $middleware) {
        $this->middlewares[] = $middleware;
    }

    public function run(Request $request) {

        foreach ($this->middlewares as $mw) {
            $result = $mw($request);

            if ($result === false) {
                return false;    // Stop pipeline
            }
        }

        return true;
    }
}
