<?php

namespace App\Controllers\Admin;

use App\Model\Car;
use Core\Helper;

class CarController
{
    public static function index(): void
    {
        $cars = Car::getAllCars();
        require_once Helper::getAdminViewFile('cars');
    }

    public static function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $year = $_POST['year'];
            $color = $_POST['color'];
            $daily_price = $_POST['daily_price'];
            $monthly_price = $_POST['monthly_price'];
            $image = $_FILES['image']['name'];

            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
                echo "Yalnız JPG, JPEG, PNG & GIF fayllarına icazə verilir.";
                exit();
            }

            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);


            Car::create($brand, $model, $year, $color, $daily_price, $monthly_price, $image);

            echo "Maşın uğurla əlavə edildi!";
        }

        require_once Helper::getAdminViewFile('/cars');
    }

    public function delete():void
    {

        $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : null;


        if (!$id) {
            Helper::redirect('/admin/cars?error=Id is required');
            return;
        }

        $result = Car::delete($id);

        if ($result) {
            Helper::redirect('/admin/cars?success=Car deleted successfully');
        } else {
            Helper::redirect('/admin/cars?error=Failed to delete car');
        }
    }


}