<?php 

require_once __DIR__ . '/src/Controllers/HomeController.php';

$url = $_GET['url'] ?? 'home';

$parts = explode('/', $url);

switch ($parts[0]) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
    case 'about':
        require 'controllers/about.php';
        break;
    case 'contact':
        require 'controllers/contact.php';
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}