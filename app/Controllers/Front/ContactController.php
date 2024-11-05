<?php

namespace App\Controllers\Front;
use Core\Helper;
class ContactController
{
    public static function index():void {
        require_once Helper::getViewFile("contact");
    }
}