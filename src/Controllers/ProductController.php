<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function show() {
        $p = new Product();
        return $p->details();
    }
}
