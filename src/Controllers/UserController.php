<?php

namespace App\Controllers;

use App\Models\User;
use App\Services\UserService;
use App\Views\View;

class UserController {

    public function show() {
        $u = new User();
        return $u->info();
    }

    public function show2() {
        $service = new UserService();
        $user = $service->getUserData();
        return View::json($user);
    }

}
