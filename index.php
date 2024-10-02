<?php
require_once './controllers/PageController.php';

$request = $_SERVER['REQUEST_URI'];

$baseFolder = '/Portfolio-website';
$request = str_replace($baseFolder, '', $request);

$controller = new PageController();

// Routing logic
switch ($request) {
    case '/':
        $controller->home();
        break;
    case '/portfolio':
        $controller->portfolio();
        break;
    default:
        echo '404 Not Found';
}
