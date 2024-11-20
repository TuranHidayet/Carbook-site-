<?php

namespace App\Model;

class User
{
    public static function getUserById($id){
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    public static function create($fullname, $username, $email, $phone, $password, $profile_picture){
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("INSERT INTO users (fullname, username, email, phone, password, profile_picture) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$fullname, $username, $email, $phone, password_hash($password, PASSWORD_DEFAULT), $profile_picture]);
    }

    public static function update($id, $username, $email, $password, $profile_picture){
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("UPDATE users SET username = ?, email = ?, password = ?, profile_picture = ? WHERE id = ?");
        return $stmt->execute([$username, $email, password_hash($password, PASSWORD_DEFAULT), $profile_picture, $id]);
    }

    public static function delete($id){
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public static function getAllUsers(){
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function getUserByUsername($username)
    {
        $dbConfig = [
            'host' => 'localhost',
            'database' => 'car_lab',
            'username' => 'root',
            'password' => ''
        ];

        $connection = Database::getConnection($dbConfig);
        if ($connection) {
            $stmt = $connection->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->execute(['username' => $username]);
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }

        return null;
    }
}