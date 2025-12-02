<?php

namespace App\AliasExample;

use App\HR\User as HRUser;
use App\Admin\User as AdminUser;

class AliasDemo {

    public function run() {
        $hr = new HRUser();
        $admin = new AdminUser();

        echo $hr->role() . PHP_EOL;
        echo $admin->role() . PHP_EOL;
    }
}
