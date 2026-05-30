<?php

use PDO;

use PDOException;

class Database
{
    public static function createinstancePDO(): ?PDO

    {
        $db_host = $_ENV['DB_HOST'] ?? '127.0.0.1';
        $db_name = $_ENV['DB_NAME'] ?? 'kitchen';
        $db_user = $_ENV['DB_USER'] ?? 'kitchen_user';
        $db_password = $_ENV['DB_PASSWORD'] ?? 'kitchen_pass';

        try {


            $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}
