<?php
namespace Core;
class Router {
    protected $routes = [];

     public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }
     public function post ($uri, $controller){
        $this -> add('POST', $uri, $controller);
    }
     public function delete ($uri, $controller){
        $this -> add ('DELETE', $uri, $controller);
    }
     public function patch ($uri, $controller){
        $this -> add('PATCH', $uri, $controller);
    }
    public function put ($uri, $controller){
        $this -> add('PUT', $uri, $controller);
    }
}



// $currentURI = parse_url($_SERVER["REQUEST_URI"])['path'];
// $baseURI = "/php-practice";
// echo "Current URI: " . $currentURI . "<br>";
// $routes = require base_path('routes.php');

// function abort($code = 404) {   
//     http_response_code($code);
//      require base_path("views/{$code}.php");
//      die(); 
// }
// function routeToController ($currentURI, $routes) { 
//      $clicked = "rounded-md bg-gray-900 text-white";
//     $notClicked = "tex-gray-300";
//     if (array_key_exists($currentURI, $routes)) {
//     require base_path($routes[$currentURI]); 
// } else {
//     abort();
//  };
//   }

// routeToController($currentURI, $routes);