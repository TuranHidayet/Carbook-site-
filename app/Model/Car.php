<?php

namespace App\Model;

class Car
{
    public static function getAllCars()
    {
        global $db;
        $stmt = $db->getConnectionInstance()->query("SELECT * FROM cars");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function getCarById($id)
    {
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("SELECT * FROM cars WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public static function create($brand, $model, $year, $color, $daily_price, $monthly_price, $image){
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("INSERT INTO cars (brand, model, year, color, daily_price, monthly_price, image) VALUES (?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$brand, $model, $year, $color, $daily_price, $monthly_price, $image]);

    }

    public static function delete($id)
    {
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("DELETE FROM cars WHERE id = ?");
        return $stmt->execute([$id]);
    }


}