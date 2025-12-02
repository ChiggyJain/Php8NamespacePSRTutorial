<?php

namespace App\Core;

class Response {

    public static function json($data, int $status = 200) {
        http_response_code($status);
        header("Content-Type: application/json");
        return json_encode($data, JSON_PRETTY_PRINT);
    }

    public static function text(string $message, int $status = 200) {
        http_response_code($status);
        header("Content-Type: text/plain");
        return $message;
    }
}
