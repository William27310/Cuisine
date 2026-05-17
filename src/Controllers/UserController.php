<?php


class UserController
{
    public function register()
    {
        require_once __DIR__ . '/../Views/pages/register.php';

        $regPseudo = "/^[a-zA-Z0-9]([a-zA-Z0-9-_]{1,18})[a-zA-Z0-9]$/";
        $regEmail = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $errors = [];

            if (isset($_POST['email'])) {
                if (empty($_POST['email'])) {
                    $errors['email'] = "Veuillez entrer un E-mail";
                } else if (!preg_match($regEmail, $_POST['email'])) {
                    $errors['email'] = 'Caractère non autorisé';
                }
            }

            if (empty($_POST['password'])) {
                $errors['password'] = "Veuillez entrer un mot de passe";
            }
        }
    }


    public function login()
    {
        require_once __DIR__ . '/../Views/pages/login.php';
    }
}
