<?php
require "../database.php";
require "../helpers.php";

$routes = [
    '/' => 'controllers/home.php',
    '/books' => 'controllers/home.php',
    '/books/create' => 'controllers/books/create.php',
    '404' => 'controllers/errors/404.php',
];

$uri = $_SERVER['REQUEST_URI'];

if (array_key_exists($uri, $routes)) {
    require basePath($routes[$uri]);
} else {
    require basePath($routes['404']);

}
