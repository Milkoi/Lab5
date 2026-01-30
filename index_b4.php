<?php
require_once __DIR__ . '/vendor/autoload.php';

$controllerName = $_GET['controller'] ?? 'product';
$action = $_GET['action'] ?? 'index';

$controllerClass = "App\\Controllers\\" . ucfirst($controllerName) . "Controller";

if (!class_exists($controllerClass)) {
    die("Controller không tồn tại");
}

$controller = new $controllerClass();

if (!method_exists($controller, $action)) {
    die("Action không tồn tại");
}

$controller->$action();
