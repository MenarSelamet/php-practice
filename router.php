<?php

$currentURI = parse_url($_SERVER["REQUEST_URI"])['path'];
$baseURI = "/php-practice";
// dumpAndDie(parse_url($currentURI));

// $query = parse_url($currentURI);
// echo $query["query"];

echo "Current URI: " . $currentURI . "<br>";


$routes = [
    $baseURI . "/"=>  "controllers/index.php",
    $baseURI . "/about"=>  "controllers/about.php",
    $baseURI . "/contact"=>  "controllers/contact.php",
   
];

function abort($code = 404) {   
    http_response_code($code);
     require "views/{$code}.php";
     die(); 
}

function routeToController ($currentURI, $routes) { 
    if (array_key_exists($currentURI, $routes)) {
    require $routes[$currentURI]; 
} else {
    abort();
 };
  }

routeToController($currentURI, $routes);



// if ($currentURI === $baseURI . "/" || $currentURI === $baseURI) {
//     require "controllers/index.php";
// } else if ($currentURI === $baseURI . "/about") {
//     require "controllers/about.php";
// } else if ($currentURI === $baseURI . "/contact") {
//     require "controllers/contact.php";
// } else {
//     echo "Page not found";
// };