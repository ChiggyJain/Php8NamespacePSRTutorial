<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Controllers\UserController;
use App\Controllers\ProductController;
use App\AliasExample\AliasDemo;
use App\Utils\Logger;
use function App\Helpers\uppercase;
use function App\Helpers\lowercase;
use const App\Helpers\VERSION;
use const App\Helpers\AUTHOR;

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

echo PHP_EOL . "=== Helper Functions Example ===" . PHP_EOL;
echo "uppercase(chirag):".uppercase("chirag").PHP_EOL;
echo "lowercase(CHIRAG):".lowercase("CHIRAG").PHP_EOL;

echo PHP_EOL . "=== Helper Constants Example ===" . PHP_EOL;
echo "VERSION:".VERSION.PHP_EOL;
echo "AUTHOR:".AUTHOR.PHP_EOL;