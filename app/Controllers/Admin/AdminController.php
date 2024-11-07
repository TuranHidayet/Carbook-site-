<?php

namespace App\Controllers\Admin;
use App\Model\User;
use Core\Helper;

class AdminController
{
    public static function index() {
        $users = User::getAllUsers() ?? [];
        require_once Helper::getAdminViewFile('admin');
    }
}