<?php
require_once("./routes/Route.php");

$route = new Route();

$route->addRoute("/", fn() => "<h1>Home Page</h1>");

$route->addRoute("/home", fn() => "<h1>Home Page</h1>");

$route->addRoute("/contact", fn() => "<h1>Contact Page</h1>");

$route->addRoute("/services", fn() => "<h1>Services Page</h1>");

$route->addRoute("/login", fn() => "<h1>Login Page</h1>");

$route->routing();

?>