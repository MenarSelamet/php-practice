<?php

$router->get('/php-practice/', 'controllers/index.php');
$router->get('/php-practice/about', 'controllers/about.php');
$router->get('/php-practice/contact', 'controllers/contact.php');

$router->get('/php-practice/notes', 'controllers/notes/index.php');
$router->get('/php-practice/note', 'controllers/notes/show.php');
$router->get('/php-practice/notes/create', 'controllers/notes/create.php');

// return [
//     $baseURI . "/"=>  "controllers/index.php",
//     $baseURI . "/about"=>  "controllers/about.php",
//     $baseURI . "/contact"=>  "controllers/contact.php",
//     $baseURI . "/notes"=>  "controllers/notes/index.php",
//     $baseURI . "/note"=>  "controllers/notes/show.php",
//     $baseURI . "/notes/form"=>  "controllers/notes/create.php",
//  ];