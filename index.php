<?php
require 'functions.php';

$currentURI = $_SERVER["REQUEST_URI"];
$baseURI = "/php-practice";

echo "Current URI: " . $currentURI . "<br>";

if ($currentURI === $baseURI . "/" || $currentURI === $baseURI) {
    echo "Loading index.php<br>";
    require "controllers/index.php";
} else if ($currentURI === $baseURI . "/about") {
    echo "Loading about.php<br>";
    require "controllers/about.php";
} else if ($currentURI === $baseURI . "/contact") {
    echo "Loading contact.php<br>";
    require "controllers/contact.php";
} else {
    // Handle 404 not found
    header("HTTP/1.0 404 Not Found");
    echo "Page not found";
}
?>