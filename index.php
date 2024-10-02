<?php
// Autoload controllers and models
spl_autoload_register(function($className) {
    if (file_exists("./controllers/" . $className . ".php")) {
        require_once "./controllers/" . $className . ".php";
    } elseif (file_exists("./models/" . $className . ".php")) {
        require_once "./models/" . $className . ".php";
    }
});

// Remove query strings if any
$request = strtok($_SERVER['REQUEST_URI'], '?');

// Set the default controller to PagesController
$controller = new PageController();

// Simple routing based on URL
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
    default:
        echo '404 Page Not Found';
}
