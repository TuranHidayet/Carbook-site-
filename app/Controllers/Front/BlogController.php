<?php

namespace App\Controllers\Front;
use Core\Helper;
class BlogController
{
    public static function index():void {
        require_once Helper::getViewFile("blog");
    }
}
