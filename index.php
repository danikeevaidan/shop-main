<?php
require_once 'Controllers/HomeController.php';
require_once 'Controllers/ProductController.php';
require_once 'Controllers/UserController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;

    case '/products':
        $controller = new ProductController();
        $controller->index();
        break;

    case '/user':
        $controller = new UserController();
        $controller->profile();
        break;

    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}