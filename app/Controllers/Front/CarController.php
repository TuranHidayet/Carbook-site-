<?php

namespace App\Controllers\Front;
use Core\Helper;
class CarController
{
    public static function index():void {
        require_once Helper::getViewFile("cars");
    }
}