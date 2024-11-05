<?php

declare (strict_types=1);
session_start();
include '../vendor/autoload.php';

use App\Controllers\Front\HomeController;
use App\Controllers\Front\AboutController;
use App\Controllers\Front\BlogController;
use App\Controllers\Front\CarController;
use App\Controllers\Front\ContactController;
use Core\Route;


//define('GLOBAL_DIR', __DIR__);
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;

    case '/about':
        $controller = new AboutController();
        $controller->index();
        break;

    case '/blog':
        $controller = new BlogController();
        $controller->index();
        break;

    case '/cars':
        $controller = new CarController();
        $controller->index();
        break;

    case '/contact':
        $controller = new ContactController();
        $controller->index();
        break;

    default:
        echo "404 not found";
}

//\Core\Route::get('/about', 'HomeController@index' );




