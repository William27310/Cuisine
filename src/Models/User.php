<?php

use PDO;
use PDOException;

class User
{

    public static function createUser(string $username, string $email, string $firstname, string $lastname, string $password): bool
    {
        try {
            $pdo = database::createinstancePDO();

            if (!$pdo) {
                return false;
            }

            $sql = 'INSERT INTO users (users_mail, users_username, users_firstname, users_lastname, users_password) VALUES (:username, :email, :firstname, :lastname, :password)';

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);

            return $stmt->execute();
        } catch (PDOException $e) {

            return false;
        }
    }

    public static function getLog(string $email)
    {
        try {
            $pdo = database::createinstancePDO();

            if (!$pdo) {
                return false;
            }

            $sql = 'SELECT * FROM users WHERE users_mail = :email';

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':email', $email);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {

            return false;
        }
    }
}
