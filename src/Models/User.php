<?php

use PDO;
use PDOException;

class User
{

    public static function createUser(string $pseudo, string $email, string $firstname, string $lastname, string $password)
    {
        try {
            $pdo = database::createinstancePDO();

            if (!$pdo) {
                return false;
            }

            $sql = 'INSERT INTO users (users_mail, users_username, users_firstname, users_lastname, users_password) VALUES (:pseudo, :email, :firstname, :lastname, :password)';

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':pseudo', $pseudo);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
            
            return $stmt->execute();
        } catch (PDOException $e) {

            return false;
        }
    }
}
