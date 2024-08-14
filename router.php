<?php



$currentURI = parse_url($_SERVER["REQUEST_URI"])['path'];
$baseURI = "/php-practice";
echo "Current URI: " . $currentURI . "<br>";
$routes = require ('routes.php');

function abort($code = 404) {   
    http_response_code($code);
     require "views/{$code}.php";
     die(); 
}
function routeToController ($currentURI, $routes) { 
     $clicked = "rounded-md bg-gray-900 text-white";
    $notClicked = "tex-gray-300";
    if (array_key_exists($currentURI, $routes)) {
    require $routes[$currentURI]; 
} else {
    abort();
 };
  }

routeToController($currentURI, $routes);