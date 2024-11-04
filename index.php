<?php
require_once './controllers/PageController.php';

$request = $_SERVER['REQUEST_URI'];

// Remove query string if it exists
if (strpos($request, '?') !== false) {
    $request = substr($request, 0, strpos($request, '?'));
}

// Create an instance of the controller
$controller = new PageController();

// Routing logic
switch ($request) {
    case '/':
        $controller->home();
        break;
    case '/portfolio':
        $controller->portfolio();
        break;
    case '/about':
        $controller->about();
        break;
    case '/contact':
        $controller->contact();
        break;
    case '/project':
        $controller->project();
        break;
    default:
        echo '404 Not Found';
        break;
}