<?php

include '../vendor/autoload.php';

$routes = include '../config/routes.php';


$url = $_SERVER['REQUEST_URI'];

if (false === isset($routes[$url])) {
    // Controller / metodo / view
    echo "<h1>Pagina nao encontrada</h1>";
    exit;
}

$controller = $routes[$url][0];
$method = $routes[$url][1];

(new $controller())->$method();