<?php

namespace App\Utils;

class Logger {

    public static function log($msg) {
        echo "[LOG] " . $msg . PHP_EOL;
    }
}
