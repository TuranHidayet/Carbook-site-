<?php

namespace App\Controllers;

use Core\Helper;

class AuthController
{
    public static function login():void {
        require_once Helper::getViewFile('login');
    }

    public function register(): void {
        require_once Helper::getViewFile('register');
    }

    public function logout(): void {
        require_once Helper::getViewFile('logout');
    }
}
