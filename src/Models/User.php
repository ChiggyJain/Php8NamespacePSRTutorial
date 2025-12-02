<?php

namespace App\Models;

class User {

    public function info() {
        return "User model loaded via PSR-4 autoload";
    }

    public function getUser() {
        return [
            "id" => 101,
            "name" => "Chirag Jain",
            "role" => "Senior Backend Engineer"
        ];
    }
    
}
