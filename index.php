<?php

header("Content-Type: text/html");
require "AltoRouter.php";
require "helper.php";

$base = build_paths();

$router = new AltoRouter();

$router->setBasePath('maxtechnoindia/', "/");

$router->map('GET', '/', 'home.php', 'Max Techno India');

/* Match the current request */
$match = $router->match();

if ($match) {
    require "views/" . $match['target'];
} else {
    header("HTTP/1.0 404 Not Found");
    require 'views/404.php';
}
