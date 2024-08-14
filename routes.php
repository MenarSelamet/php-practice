<?php

$router->get('/php-practice/', 'controllers/index.php');
$router->get('/php-practice/about', 'controllers/about.php');
$router->get('/php-practice/contact', 'controllers/contact.php');

$router->get('/php-practice/notes', 'controllers/notes/index.php');
$router->get('/php-practice/note', 'controllers/notes/show.php');
$router->delete('/php-practice/note', 'controllers/notes/destroy.php');

$router->get('/php-practice/notes/create', 'controllers/notes/create.php');
$router->post('/php-practice/notes', 'controllers/notes/store.php');