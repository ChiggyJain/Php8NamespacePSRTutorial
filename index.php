<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Controllers\UserController;
use App\Controllers\ProductController;
use App\AliasExample\AliasDemo;
use App\Utils\Logger;

echo "=== Controller Outputs ===" . PHP_EOL;

$uController = new UserController();
echo $uController->show() . PHP_EOL;

$pController = new ProductController();
echo $pController->show() . PHP_EOL;

echo PHP_EOL . "=== Namespace Aliasing Example ===" . PHP_EOL;

$aliasDemo = new AliasDemo();
$aliasDemo->run();

echo PHP_EOL . "=== Logger Example ===" . PHP_EOL;

Logger::log("PSR-4 autoloading works!");
