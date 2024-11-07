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

$config = require_once '../config/config.php';

$db = new \Core\Database($config['db']);
//$pdo = $db->getPdo();
//
//$user = new User($db->getPdo());
//
//$result = $user->create('Turan Hidayətov', 'turan0123', 'turanhidayatov1@gmail.com', '+9946157618716', '123456');
//if ($result) {
//    echo "İstifadəçi uğurla əlavə edildi.";
//} else {
//    echo "Xəta baş verdi.";
//}

//$user = new User::create('Turan', 'turan123', 'turanhidayatov@gmail.com', '+9946157618716', 1235445);
//var_dump($user);


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

    case '/admin':
        $controller = new AdminController();
        $controller->index();
        break;

    default:
        echo "404 not found";
}

//\Core\Route::get('/about', 'HomeController@index' );




