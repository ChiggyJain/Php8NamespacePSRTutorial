<?php

namespace App\Helpers;

trait LoggerTrait {
    public function log($msg) {
        echo "[Trait-Log] " . $msg . PHP_EOL;
    }
}
