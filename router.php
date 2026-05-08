<?php

require 'src/Controllers/HomeController.php';
require 'src/Controllers/UserController.php';

$url = $_GET['url'] ?? 'home';

$parts = explode('/', $url);

switch ($parts[0]) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'login':
        $controller = new UserController();
        $controller->login();
        break;

    // case 'register':
    //     $controller = new UserController();
    //     $controller->register();
    //     break;

    default:

        http_response_code(404);
        echo "Page not found";
        break;
}
