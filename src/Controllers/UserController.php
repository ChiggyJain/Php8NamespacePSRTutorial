<?php

namespace App\Controllers;

use App\Models\User;

class UserController {

    public function show() {
        $u = new User();
        return $u->info();
    }
}
