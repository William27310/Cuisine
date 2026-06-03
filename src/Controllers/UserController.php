<?php


class UserController
{
    public function register()
    {
        $regPseudo = "/^[a-zA-Z0-9]([a-zA-Z0-9-_]{1,18})[a-zA-Z0-9]$/";
        $regEmail = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];


            if (empty($_POST['username'])) {
                $errors['username'] = '<i class="bi bi-exclamation-circle-fill"></i>';
            }


            if (isset($_POST['email'])) {
                if (empty($_POST['email'])) {
                    $errors['email'] = '<i class="bi bi-exclamation-circle-fill"></i>';
                } else if (!preg_match($regEmail, $_POST['email'])) {
                    $errors['email'] = '<i class="bi bi-exclamation-circle-fill fw-bold"> Caractère non conforme !</i>';
                }
            }

            if (empty($_POST['firstname'])) {
                $errors['firstname'] = '<i class="bi bi-exclamation-circle-fill"></i>';
            }

            if (empty($_POST['lastname'])) {
                $errors['lastname'] = '<i class="bi bi-exclamation-circle-fill"></i>';
            }

            if (empty($_POST['password'])) {
                $errors['password'] = '<i class="bi bi-exclamation-circle-fill"></i>';
            }

            if (isset($_POST['cpassword'])) {
                if (empty($_POST['cpassword'])) {
                    $errors['cpassword'] = '<i class="bi bi-exclamation-circle-fill"></i>';
                } else if ($_POST['password'] !== $_POST['cpassword']) {
                    $errors['cpassword'] = '<i class="bi bi-exclamation-circle-fill fw-bold"> Ne correspond pas</i>';
                }
            }

            if (empty($errors)) {

                $userCreated = User::createUser($_POST['username'], $_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['password']);

                header('Location: index.php?url=login');
                exit;
            }
        }

        require_once __DIR__ . '/../Views/pages/register.php';
    }


    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];

            if (isset($_POST['email'])) {
                if (empty($_POST['email'])) {
                    $errors['email'] = '<i class="bi bi-exclamation-circle-fill"></i>';
                }
            }

            if (empty($_POST['password'])) {
                $errors['password'] = '<i class="bi bi-exclamation-circle-fill"></i>';
            }

            if (empty($errors)) {

                $userLogged = User::getLog($_POST['email']);

                if ($userLogged && password_verify($_POST['password'], $userLogged['users_password'])) {

                    $_SESSION['users_id'] = $userLogged['users_id'];
                    $_SESSION['users_username'] = $userLogged['users_username'];
                    $_SESSION['users_email'] = $userLogged['users_email'];
                    $_SESSION['users_firstname'] = $userLogged['users_firstname'];
                    $_SESSION['users_lastname'] = $userLogged['users_lastname'];

                    header('Location: home.php');
                    exit;
                } else {
                    $errors['login'] = '<i class="bi bi-exclamation-circle-fill fw-bold"> Identifiants incorrects</i>';
                }
            }
        }

        require_once __DIR__ . '/../Views/pages/login.php';
    }

    public function logout()
    {
        session_destroy();
        header('Location: index.php');
    }

    public function test()
    {
        require_once __DIR__ . '/../Views/pages/test.php';
    }
}
