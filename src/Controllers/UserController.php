<?php 


class UserController
{
    public function login()
    {
        require_once __DIR__ . '/../Views/pages/login.php';
    }

    public function register()
    {
        require_once __DIR__ . '/../Views/pages/register.php';
    }
}