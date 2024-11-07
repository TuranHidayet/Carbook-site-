<?php

namespace App\Controllers;

use Core\Helper;

class AuthController
{
    public function login() {

    }

    public function register(): void {
        require_once Helper::getViewFile('register');
    }
}
