<?php

namespace App\Controllers\Front;
use Core\Helper;
class AboutController
{
    public static function index():void {
        require_once Helper::getViewFile("about");
    }
}

