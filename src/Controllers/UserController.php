<?php


class UserController
{
    public function register()
    {
        $regPseudo = "/^[a-zA-Z0-9]([a-zA-Z0-9-_]{1,18})[a-zA-Z0-9]$/";
        $regEmail = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];

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
        }

        require_once __DIR__ . '/../Views/pages/register.php';
    }


    public function login()
    {
        require_once __DIR__ . '/../Views/pages/login.php';
    }
}
