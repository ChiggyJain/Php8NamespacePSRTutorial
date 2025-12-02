<?php

namespace App\Views;

class View {

    public static function json($data) {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
