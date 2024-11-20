<?php

declare (strict_types=1);
session_start();
include '../vendor/autoload.php';

use App\Controllers\Admin\AdminController;
use App\Controllers\AuthController;
use App\Controllers\Front\AboutController;
use App\Controllers\Front\BlogController;
use App\Controllers\Front\CarController;

use App\Controllers\Front\ContactController;
use App\Controllers\Front\HomeController;


use App\Controllers\Admin\CarController as AdminCarController;

$config = require_once '../config/config.php';

$db = new \App\Model\Database($config['db']);


define('BASE_PATH', realpath(dirname(__DIR__)));
define('PUBLIC_PATH', BASE_PATH.'/public');

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

    case '/register':
        $controller = new AuthController();
        $controller->register();
        break;

    case '/login':
        $controller = new AuthController();
        $controller->login();
        break;

    case '/logout':
        $controller = new AuthController();
        $controller->logout();
        break;

    case '/admin':
        $controller = new AdminController();
        $controller->index();
        break;

    case '/admin/cars':
        $controller = new AdminCarController();
        $controller->index();
        break;

    case '/admin/cars/create':
        $controller = new AdminCarController();
        $controller->create();
        break;

    case '/admin/cars/delete':
        $controller = new AdminCarController();
        $controller->delete();
        break;

    default:
        echo "404 not found";
}

//\Core\Route::get('/about', 'HomeController@index' );




