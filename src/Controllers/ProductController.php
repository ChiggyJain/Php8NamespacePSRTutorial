<?php

namespace App\Controllers;

use App\Models\Product;
use App\Helpers\LoggerTrait;

class ProductController {
    use LoggerTrait;
    public function show() {
        $p = new Product();
        $this->log("ProductController invoked");
        return $p->details();
    }
}
